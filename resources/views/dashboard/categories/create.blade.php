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
        <form class="form" id="category_form" action="/dashboard/categories" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="form-control form-control-solid" placeholder="Enter title" />
                    <span class="form-text text-muted">Please enter your title</span>
                </div>
                <div class="form-group">
                    <label>Image:</label>
                    <input type="file" name="image" value="{{ old('image') }}" class="form-control form-control-solid" placeholder="Enter image" />
                    <span class="form-text text-muted">Please enter your image</span>
                </div>
                <div class="card-footer">
                    <button type="submit" id="save_category" class="btn btn-primary mr-2">Save</button>
                </div>
        </form>

        @push('javascripts')
        {{-- <script>
            $(document).on('click', '#save_category', function(e) {
                e.preventDefault();
                var formData = new FormData($('#category_form')[0]);
                $.ajax({
                    type: 'post',
                    url: "{{ route('dashboard.categories') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(data) {
                        if(data.status == true)
                        alert(data.msg);
                    },
                    error: function(reject) {

                    }
                });
            });
        </script> --}}
        @endpush

    </div>
@endsection
