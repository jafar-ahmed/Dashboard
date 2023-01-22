@extends('dashboard.main-dashboard')
@section('content')

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
         <form class="form" action="/dashboard/slider/{{ $slider->id }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('put')
             <div class="card-body">
                 <div class="form-group">
                     <label>Title:</label>
                     <input type="text" name="title" value="{{ $slider->title }}"
                         class="form-control form-control-solid" placeholder="Enter title" />
                     <span class="form-text text-muted">Please enter your title</span>
                 </div>
                 <div class="form-group">
                     <label>Description:</label>
                     <input type="text" name="description" value="{{ $slider->description }}"
                         class="form-control form-control-solid" placeholder="Enter description" />
                     <span class="form-text text-muted">Please enter your description</span>
                 </div>
                 <div class="form-group">
                     <label>Image:</label>
                     <input type="file" name="image" class="form-control" placeholder="Enter image" />
                     <span class="form-text text-muted">Please enter your image</span>

                     <img src="{{ url('/storage/sliders' . $slider->image) }}" width="200" />
                 </div>
                 <div class="card-footer">
                     <button type="submit" class="btn btn-primary mr-2">Save</button>
                 </div>
         </form>






     </div>

@endsection
