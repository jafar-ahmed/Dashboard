@extends('dashboard.main-dashboard')
@section('content')
    @section('content1')
        <a href="/dashboard/colors/" class="text-muted text-hover-primary">Colors <span style="color: black"> /  </span> </a>
        <a href="/dashboard/colors/create/" class="text-muted text-hover-primary">  Create <span style="color: black"> / </span></a>
    @endsection
    <div class="container">
        {{-- validation --}}
        @if ($errors->any())
            <div class="w-4/8 m-auto text-center">
                @foreach ($errors->all() as $error)
                    <li  style="color: red" class="text-red-500 list-none">
                        {{ $error }}
                    </li>
                @endforeach
            </div>
        @endif
        <form class="form" action="/dashboard/colors" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" name="title" value="{{ old('title') }}"
                        class="form-control form-control-solid" placeholder="Enter title" />
                    <span class="form-text text-muted">Please enter your title</span>
                </div>
                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" name="image" value="{{ old('image') }}"
                        class="form-control form-control-solid" placeholder="Enter image" />
                    <span class="form-text text-muted">Please enter your image</span>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                </div>
        </form>



    </div>
@endsection
