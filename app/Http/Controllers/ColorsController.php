<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ColorsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Color::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . Route('dashboard.colors.edit', $row->id) . '" class="edit btn btn-success btn-sm"><i
                class="fa fa-edit"></i></a>
                <a href="' . Route('dashboard.colors', $row->id) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->editColumn('created_at', function ($row) {
                    return date('d-m-Y || h:i:s', strtotime($row->created_at));
                })
                ->make(true);
        }
        return view('dashboard.colors.index');
    }
    public function create()
    {
        return view('dashboard.colors.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);
        //$data = $request->all();
         $data = $request->except('image');
         if ($request->hasFile('image')) {
             $filename = time() . '.' . request()->image->getClientOriginalExtension();
             request()->image->move(public_path('storage/colors'), $filename);
             $data['image'] = $filename;
         }
        Color::create($data);
        return redirect('/dashboard/colors')->with('success', 'Color Created Successfully!');
    }
    public function edit($id)
    {
        $color = Color::findOrFail($id);
        return view('dashboard.colors.edit', [
            'color' => $color,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $color = Color::findOrFail($id);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('storage/colors'), $filename);
            $data['image'] = $filename;
        }
        $color->update($data);
        return redirect('/dashboard/colors')->with('success', 'Color Updated Successfully!');
    }
    public function destroy($id)
    {
        Color::destroy($id);
        return redirect('/dashboard/colors')->with('success', 'Color Deleted Successfully!');
    }
}
