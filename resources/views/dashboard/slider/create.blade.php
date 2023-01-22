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
        <form class="form" action="/dashboard/slider" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" name="title" value="{{ old('title') }}"
                        class="form-control form-control-solid" placeholder="Enter title" />
                    <span class="form-text text-muted">Please enter your title</span>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" name="description" value="{{ old('description') }}"
                        class="form-control form-control-solid" placeholder="Enter description" />
                    <span class="form-text text-muted">Please enter your description</span>
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
