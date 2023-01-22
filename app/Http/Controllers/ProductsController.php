<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImages;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn =
                        ' <a href="' .
                        Route('dashboard.products.edit', $row->id) .
                        '" class="edit btn btn-success btn-sm "><i
                class="fa fa-edit"></i></a>
                <a class="btn btn-danger btn-sm deleteIcon" data-id="' .
                        $row->id .
                        '" >
                    <i class="fa fa-trash"></i>
                </a>
                ';
                if($row->is_active == 1){
                    $btn.='<a class="btn btn-success btn-sm deleteIcon" >
                Active
            </a>';
                }else {
                    $btn .= '<a class="btn btn-danger btn-sm deleteIcon" >
                Inactive
            </a>';
                }
                    return $btn;
                })
                // <a href="' . Route('dashboard.suppliers', $row->id) . '" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                ->rawColumns(['action'])
                ->editColumn('created_at', function ($row) {
                    return date('d-m-Y || h:i:s', strtotime($row->created_at));
                })
                ->editColumn('category_id', function ($row) {
                    return $row->category->title;
                })
                ->make(true);
        }

        return view('dashboard.products.index');
    }

    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        $colors = Color::all();
        $products = Product::all();
        return view('dashboard.products.create', compact('categories', 'suppliers', 'colors', 'products'));
    }
    public function store(Request $request)
    {
        // return $request;
        // die;
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|int|max:50000|min:0',
            'code' => 'required|max:255',
            'product_details' => 'required',
            'product_specifications' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
            'color_id' => '',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path('storage/products'), $imageName);
            $product = new Product([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'code' => $request->code,
                'product_details' => $request->product_details,
                'product_specifications' => $request->product_specifications,
                'category_id' => $request->category_id,
                'supplier_id' => $request->supplier_id,
                //'color_id' => $request->color_id,
//                'is_active' => $request->has('is_active') ? 1 : 0,
//                'on_sale' => $request->has('on_sale') ? 1 : 0,
                'image' => $imageName,
            ]);
            $product->save();

            if ($request->hasFile('images')) {
                $files = $request->file('images');
                foreach ($files as $file) {
                    $imageName2 = time() . '_' . $file->getClientOriginalName();
                    $file->move(\public_path('storage/products'), $imageName2);
                    $new_attachment = new ProductImages();
                    $new_attachment->product_id = $product->id;
                    $new_attachment->image = $imageName2;
                    $new_attachment->save();
                    // $request['product_id'] = $product->id;
                    // $request['image'] = $imageName2;
                }
            }
        }
        if ($request->colors) {
            foreach ($request->colors as $color) {
                $product_color = new ProductColor();
                $product_color->color_id = $color;
                $product_color->product_id = $product->id;
                $product_color->save();
            }
        }
        return redirect('/dashboard/products')->with('success', 'Product Created Successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $suppliers = Supplier::all();
        $colors = Color::all();
        return view('dashboard.products.edit', [
            'product' => $product,
            'categories' => $categories,
            'suppliers' => $suppliers,
            'colors' => $colors,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|int|max:500|min:0',
            'code' => 'required|max:255',
            'product_details' => 'required',
            'product_specifications' => 'required',
            'category_id' => 'required',
            'supplier_id' => 'required',
            'colors' => '',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $product = Product::findOrFail($id);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('storage/products'), $filename);
            $data['image'] = $filename;
        }
//        $data['is_active'] = $request->has('is_active') ? 1 : 0 ;
//        $data['on_sale'] = $request->has('on_sale') ? 1 : 0 ;
        $product->update($data);
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            foreach ($files as $file) {
                $imageName2 = time() . '_' . $file->getClientOriginalName();
                $file->move(\public_path('storage/products'), $imageName2);
                $new_attachment = new ProductImages();
                $new_attachment->product_id = $product->id;
                $new_attachment->image = $imageName2;
                $new_attachment->save();
            }
        }

        if ($request->colors) {
            $old_colors = ProductColor::where('product_id', $product->id)->delete();
            foreach ($request->colors as $color) {
                $product_color = new ProductColor();
                $product_color->color_id = $color;
                $product_color->product_id = $product->id;
                $product_color->save();
            }
        }
        return redirect('/dashboard/products')->with('success', 'Product Updated Successfully!');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/dashboard/products')->with('success', 'Product Deleted Successfully!');
    }

    public function deleteImage($id)
    {
        ProductImages::where('id', $id)->delete();
        $data = [
            'status' => 'Deleted Successfully',
            'status_text' => 'Your image has been deleted successfully',
            'status_icon' => 'success',
        ];
        return response()->json(['status' => true, 'data' => $data]);
    }

    public function deleteicon()
    {
        // return "5555555";
        Product::where('id', request()->id)->delete();

        $data = [
            'status' => 'Deleted Successfully',
            'status_text' => 'Your image has been deleted successfully',
            'status_icon' => 'success',
        ];
        return response()->json(['status' => true, 'data' => $data]);
    }

    function status_update($id)
    {
        $product = DB::table('product')
            ->select('is_active')
            ->where('id', '=', $id)
            ->first();
        //Check user is_active
        if ($product->is_active == '1') {
            $is_active = '0';
        } else {
            $is_active = '1';
        }
        //update product is_active
        $values = array('is_active' => $is_active);
        DB::table('product')->where('id', $id)->update($values);
        session()->flash('msg', 'Product is_active has been updated successfully.');
        return redirect('main/successlogin');
    }
}
