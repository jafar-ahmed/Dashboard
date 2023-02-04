@extends('dashboard.main-dashboard')
@section('content')
    @section('content1')
        <a href="/dashboard/slider/" class="text-muted text-hover-primary">Sliders <span style="color: black"> /  </span> </a>
        <a href="/dashboard/slider/create/" class="text-muted text-hover-primary">  Create <span style="color: black"> / </span></a>
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
        <form method="post" action="{{ route('sliders.create') }}">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>
        </form>
        <form class="form"  enctype="multipart/form-data">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label>Title:</label>--}}
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control form-control-solid" placeholder="Enter title" />
                                    <span class="form-text text-muted">Please enter your title</span>

{{--                                    <label for="recipient-name" class="col-form-label">Recipient:</label>--}}
{{--                                    <input type="text" class="form-control" id="recipient-name">--}}
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="card-body">--}}
{{--                <div class="form-group">--}}
{{--                    <label>Title:</label>--}}
{{--                    <input type="text" name="title" value="{{ old('title') }}"--}}
{{--                        class="form-control form-control-solid" placeholder="Enter title" />--}}
{{--                    <span class="form-text text-muted">Please enter your title</span>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label>Description:</label>--}}
{{--                    <input type="text" name="description" value="{{ old('description') }}"--}}
{{--                        class="form-control form-control-solid" placeholder="Enter description" />--}}
{{--                    <span class="form-text text-muted">Please enter your description</span>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label>Image:</label>--}}
{{--                    <input type="file" name="image" value="{{ old('image') }}"--}}
{{--                        class="form-control form-control-solid" placeholder="Enter image" />--}}
{{--                    <span class="form-text text-muted">Please enter your image</span>--}}
{{--                </div>--}}
{{--                <div class="card-footer">--}}
{{--                    <button id="save" class="btn btn-primary mr-2">Save</button>--}}
{{--                </div>--}}
{{--            </div>--}}
        </form>
    </div>
@endsection

@section('scripts')
<script>
    $(document).on('click', '#save', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: "{{ route('sliders.store') }}",
            data:{
                '_token': "{{csrf_token()}}",
                'title':$("input[name='title']").val(),
                'description':$("input[name='description']").val(),
                // 'image':$("input[name='image']").val(),
            },success: function (data){
            },error: function(reject){
            }
        });
    });
</script>
    @stop
