<?php

namespace App\Http\Controllers;

use App\Jobs\SendMails;
use App\Mail\NotifyEmail;
use App\Models\ProductImages;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\DataTables;

class SliderAjaxController extends Controller
{
    public function index(Request $request)
    {
        $slider = Slider::find($request->id);
        if ($request->ajax()) {
            $data = Slider::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a id="edit" data-bs-toggle="modal" data-bs-target="#editModal" data-bs-whatever="@mdo" data-id="'.$row->id.'"  class="btn btn-sm btn-light-success"><i
                class="fa fa-edit"></i></a>

                <a class="btn btn-sm btn-light-danger delete" slider-id="' .
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


        return view('dashboard.sliders.index', compact('slider'));
    }
    public function create()
    {
        return view('dashboard.sliders.create');
    }

    public function store(Request $request)
    {
//        return $request->all();
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
        ]);
//         $sliders = Slider::create($request->all());
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('storage/sliders'), $filename);
            $data['image'] = $filename;
        }
        Slider::create($data);
        try {
            $emails = User::chunk(50, function ($data){
                dispatch(new SendMails($data, 'slider'));
            });
        } catch (\Exception $e) {
            return $this->unexpectedMessage();
        }
        return redirect('/dashboard/sliders');
    }

    public function edit(Request $request , $id)
    {
        $slider = Slider::findOrFail($id);
        return response()->json([
            'data' => $slider
        ]);
    }

    public function update(Request $request)
    {
        $slider = Slider::find($request->id);
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $filename = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('storage/sliders'), $filename);
            $data['image'] = $filename;
        }
        $slider->update($data);
        return redirect('/dashboard/sliders'); //toast_success
    }

    public function delete(Request $request)
    {
//        return $request;
       Slider::destroy($request->id);
        return response()->json([
            'id' => $request->id
        ]);
        return redirect('/dashboard/sliders');
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
