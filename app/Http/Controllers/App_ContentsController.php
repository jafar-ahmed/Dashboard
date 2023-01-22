<?php

namespace App\Http\Controllers;

use App\Models\App_Contents;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class App_ContentsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = App_Contents::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . Route('dashboard.app-contents.edit', $row->id) . '" class="edit btn btn-success btn-sm"><i
                class="fa fa-edit"></i></a>';
                    return $btn;
                })
                // <a href="' . Route('dashboard.suppliers', $row->id) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                ->rawColumns(['action'])
                ->editColumn('updated_at', function ($row) {
                    return date('d-m-Y || h:i:s', strtotime($row->updated_at));
                })
                ->make(true);
        }

        return view('dashboard.app_contents.index');
    }
    // public function create()
    // {
    //     return view('dashboard.suppliers.create');
    // }
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|max:255',
    //         'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
    //     ]);
    //     $data = $request->except('image');
    //     if ($request->hasFile('image')) {
    //         $filename = time() . '.' . request()->image->getClientOriginalExtension();
    //         request()->image->move(public_path('storage'), $filename);
    //         $data['image'] = $filename;
    //     }
    //     App_Contents::create($data);
    //     return redirect('/dashboard/suppliers')->with('success', 'Supplier Created Successfully!');;
    // }
    public function edit($id)
    {
        $app_contents = App_Contents::findOrFail($id);
        return view('dashboard.app_contents.edit', [
            'app_contents' => $app_contents,
        ]);
    }
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'title' => 'required|max:255',
        //     'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
        // ]);
        $app_contents = App_Contents::findOrFail($id);
        $data = $request->all();
        $app_contents->update($data);
        return redirect('/dashboard/app-contents')->with('success', 'App Contents Updated Successfully!');;
    }
    public function destroy($id)
    {
        App_Contents::destroy($id);
        return redirect('/dashboard/app-contents')->with('success', 'App Contents Deleted Successfully!');;
    }
}
