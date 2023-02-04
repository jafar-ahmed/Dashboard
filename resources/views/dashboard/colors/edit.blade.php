@extends('dashboard.main-dashboard')
@section('content')
    @section('content1')
        <a href="/dashboard/colors/" class="text-muted text-hover-primary">Colors <span style="color: black"> /  </span> </a>
        <a href="/dashboard/colors/{{ $color->id }}/edit/" class="text-muted text-hover-primary">  Edit <span style="color: black"> / </span></a>
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
         <form class="form" action="/dashboard/colors/{{ $color->id }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('put')
             <div class="card-body">
                 <div class="form-group">
                     <label>Title:</label>
                     <input type="text" name="title" value="{{ $color->title }}"
                         class="form-control form-control-solid" placeholder="Enter title" />
                     <span class="form-text text-muted">Please enter your title</span>
                 </div>
{{--                 <div class="form-group">--}}
{{--                     <label>Image:</label>--}}
{{--                     <input type="file" name="image" class="form-control" placeholder="Enter image" />--}}
{{--                     <span class="form-text text-muted">Please enter your image</span>--}}
{{--                     <img src="{{ url('/storage/colors/' . $color->image) }}" width="200" />--}}
{{--                 </div>--}}
                 <div class="card-footer">
                     <button type="submit" class="btn btn-primary mr-2">Save</button>
                 </div>
         </form>






     </div>
@endsection
