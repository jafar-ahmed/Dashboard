<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class AdminsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . Route('dashboard.admins.edit', $row->id) . '" class="edit btn btn-success btn-sm"><i
                class="fa fa-edit"></i></a>
                <a href="" class="btn btn-danger btn-sm deleteicon"><i class="fa fa-trash"></i></a>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->editColumn('created_at', function ($row) {
                    return date('d-m-Y || h:i:s', strtotime($row->created_at));
                })
                ->make(true);
        }
        return view('dashboard.admins.index');
    }

    public function create()
    {
        return view('dashboard.admins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|
                            min:6|',
        ]);

        $data = $request->except('password');
        if ($request->password != '') {
            $data['password'] = Hash::make($request->password);
        }

        $users = User::create($data);
        return redirect('/dashboard/admins')->with('success', 'Admin Created Successfully!');;
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.admins.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);
        $data = $request->except('password');
        if ($request->password != '') {
            $data['password'] = Hash::make($request->password);
        }

        //$users = User::update($data);
        $user->update($data);

        return redirect('/dashboard/admins')->with('success', 'Admin Updated Successfully!');;
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/dashboard/admins')->with('success', 'Admin Deleted Successfully!');;
    }

    public function deleteImage($id)
    {
        //dd('gvssvs');
        User::where('id', $id)->delete();
        $data = [
            'status' => 'Deleted Successfully',
            'status_text' => 'Your image has been deleted successfully',
            'status_icon' => 'success',
        ];
        return response()->json(['status' => true, 'data' => $data]);
    }
    public function deleteicon()
    {
         dd('fdsg');
        User::where('id', request()->id)->delete();
        $data = [
            'status' => 'Deleted Successfully',
            'status_text' => 'Your image has been deleted successfully',
            'status_icon' => 'success',
        ];
        return response()->json(['status' => true, 'data' => $data]);
    }
}
