@extends('dashboard.main-dashboard')
@section('content')
    @section('content1')
        <a href="/dashboard/admins/" class="text-muted text-hover-primary">Admins <span style="color: black"> /  </span> </a>
        <a href="/dashboard/admins/{{ $user->id }}/edit/" class="text-muted text-hover-primary">  Edit <span style="color: black"> / </span></a>
    @endsection
     <div class="container">
         {{-- validation --}}
         @if ($errors->any())
             <div class="w-4/8 m-auto text-center">
                 @foreach ($errors->all() as $error)
                     <li style="color: red" class="text-red-500 list-none">
                         {{ $error }}
                     </li>
                 @endforeach
             </div>
         @endif
         <form class="form" action="/dashboard/admins/{{ $user->id }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('put')
             <div class="card-body">
                 <div class="form-group">
                     <label>Name:</label>
                     <input type="text" name="name" value="{{ $user->name }}"
                         class="form-control form-control-solid" placeholder="Enter name" />
                     <span class="form-text text-muted">Please enter your name</span>
                 </div>
                 <div class="form-group">
                     <label>Email:</label>
                     <input type="text" name="email" value="{{ $user->email }}"
                         class="form-control form-control-solid" placeholder="Enter email" />
                     <span class="form-text text-muted">Please enter your email</span>
                 </div>
                 <div class="form-group">
                     <label>Password:</label>
                     <input type="password" name="password" class="form-control" placeholder="Enter password" />
                     <span class="form-text text-muted">Please enter your password</span>
                 </div>
                 <div class="card-footer">
                     <button type="submit" class="btn btn-primary mr-2">Save</button>
                 </div>
             </div>
         </form>

@endsection
