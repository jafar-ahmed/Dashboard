<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DataTables;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . Route('dashboard.categories.edit', $row->id) . '" class="edit btn btn-success btn-sm"><i
                class="fa fa-edit"></i></a>
                <a href="' . Route('dashboard.categories', $row->id) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->editColumn('created_at', function ($row) {
                    return date('d-m-Y || h:i:s', strtotime($row->created_at));
                })
                ->make(true);
        }
        return view('dashboard.categories.index');
    }
    public function create()
    {
        return view('dashboard.categories.create');
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
            request()->image->move(public_path('storage/categories'), $filename);
            $data['image'] = $filename;
        }
        Category::create($data);
        //return response() -> json();
        return redirect('/dashboard/categories')->with('success', 'Category Created Successfully!');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.categories.edit', [
            'category' => $category,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $category = Category::findOrFail($id);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('storage/categories'), $filename);
            $data['image'] = $filename;
        }
        $category->update($data);
        return redirect('/dashboard/categories')->with('success', 'Category Updated Successfully!');;
    }
    public function confirmddelete($id = null)
    {
        $category = new Category();
        $category->delete($id);
        $data = [
            'status' => 'Deleted Successfully',
            'status_text' => 'Your Product data has been deleted successfully',
            'status_icon' => 'success'
        ];
        return $this->response->setJSON($data);
    }

    public function destroy($id)
    {
        // if (isset($_POST['confirm_del_btn'])) {
        //     $id = $_POST['id'];
        //     $confirm_del_btn = Category::destroy($id);
        // }
        Category::destroy($id);
        return redirect('/dashboard/categories')->with('success', 'Category Deleted Successfully!');
    }
}
