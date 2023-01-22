<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SuppliersController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Supplier::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . Route('dashboard.suppliers.edit', $row->id) . '" class="edit btn btn-success btn-sm"><i
                class="fa fa-edit"></i></a>
                <a href="' . Route('dashboard.suppliers', $row->id) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->editColumn('created_at', function ($row) {
                    return date('d-m-Y || h:i:s', strtotime($row->created_at));
                })
                ->make(true);
        }
        return view('dashboard.suppliers.index');
    }
    public function create()
    {
        return view('dashboard.suppliers.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('storage/supplier'), $filename);
            $data['image'] = $filename;
        }
        Supplier::create($data);
        return redirect('/dashboard/suppliers')->with('success', 'Supplier Created Successfully!');;
    }
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('dashboard.suppliers.edit', [
            'supplier' => $supplier,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $supplier = Supplier::findOrFail($id);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('storage/supplier'), $filename);
            $data['image'] = $filename;
        }
        $supplier->update($data);
        return redirect('/dashboard/suppliers')->with('success', 'Supplier Updated Successfully!');;
    }
    public function destroy($id)
    {
        Supplier::destroy($id);
        return redirect('/dashboard/suppliers')->with('success', 'Supplier Deleted Successfully!');;
    }
}
