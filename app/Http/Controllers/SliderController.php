<?php

namespace App\Http\Controllers;

use App\Models\ProductImages;
use App\Models\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Slider::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . Route('dashboard.slider.edit', $row->id) . '" class="edit btn btn-success btn-sm"><i
                class="fa fa-edit"></i></a>
                <a class="btn btn-danger btn-sm deleteImage" data-id="' .
                        $row->id .
                        '" >
                    <i class="fa fa-trash"></i>
                </a>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->editColumn('created_at', function ($row) {
                    return date('d-m-Y || h:i:s', strtotime($row->created_at));
                })
                ->make(true);
        }
        return view('dashboard.slider.index');
    }
    public function create()
    {
        return view('dashboard.slider.create');
    }

    public function store(Request $request)
    {
        //return $request->all();
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        // $sliders = Slider::create($request->all());
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('storage/sliders'), $filename);

            $data['image'] = $filename;
        }

        Slider::create($data);
        return redirect('/dashboard/slider')->with('success', 'Slider Created Successfully!');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('dashboard.slider.edit', [
            'slider' => $slider,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $slider = Slider::findOrFail($id);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('storage/sliders'), $filename);
            $data['image'] = $filename;
        }
        $slider->update($data);
        return redirect('/dashboard/slider')->with('success', 'Slider Updated Successfully!'); //toast_success
    }

    public function destroy($id)
    {
        Slider::destroy($id);
        return redirect('/dashboard/slider')->with('success', 'Slider Deleted Successfully!');
    }

    public function deleteImage($id)
    {
        dd('rgrwg');
        Slider::where('id', $id)->delete();
        $data = [
            'status' => 'Deleted Successfully',
            'status_text' => 'Your image has been deleted successfully',
            'status_icon' => 'success',
        ];
        return response()->json(['status' => true, 'data' => $data]);
    }
}
