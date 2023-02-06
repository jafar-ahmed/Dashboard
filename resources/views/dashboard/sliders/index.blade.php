@extends('dashboard.main-dashboard')
@section('content')
    @section('content1')
        <a href="/dashboard/sliders/" class="text-muted text-hover-primary">{{__('app.Sliders')}} /</a>
    @endsection
    <h2>Sliders</h2>
    <link rel="icon" type="image/x-icon" href="/logo.png">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal"
            data-bs-whatever="@mdo">{{ __('app.Add Slider') }}</button>
{{--    <form method="get" action="{{ 'payment' }}}">--}}
{{--        @csrf--}}
{{--        <button type="submit">--}}
{{--            pay--}}
{{--        </button>--}}
{{--        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#payModal"--}}
{{--                data-bs-whatever="@mdo"><i class="fa fa-dollar-sign"></i></button>--}}
{{--    </form>--}}

    <div class="container">
        <table id="data-table" class="table table-bordered data-table">
            <thead>
            <tr>
                <th>#</th>
                <th>{{ __('app.Title') }}</th>
                <th>{{ __('app.Description') }}</th>
                <th>{{ __('app.Date Created') }}</th>
                <th width="120px">{{ __('app.Action') }}</th>
            </tr>
            </thead>
        </table>
    </div>
    {{--        ////////////////////////// Model Create sliders (popup)/////////////////////////////--}}
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="ModalSlider" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('app.Add Slider') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="sliderDataCreate">
                        <div class="mb-3">
                            <label>{{ __('app.Title:') }}</label>
                            <input type="text" name="title" value="{{ old('title') }}"
                                   class="form-control form-control-solid" placeholder="{{ __('app.Enter title') }}"/>
                            <small id="title_error" class="form-text text-danger"></small>
                            <span class="form-text text-muted">{{ __('app.Please enter your title') }}</span>
                        </div>
                        <div class="mb-3">
                            <label>{{ __('app.Description:') }}</label>
                            <input type="text" name="description" value="{{ old('description') }}"
                                   class="form-control form-control-solid"
                                   placeholder="{{ __('app.Enter description') }}"/>
                            <small id="description_error" class="form-text text-danger"></small>
                            <span class="form-text text-muted">{{__('app.Please enter your description')}}</span>
                        </div>
                        <div class="mb-3">
                            <label>{{ __('app.Image:') }}</label>
                            <input type="file" name="image" value="{{ old('image') }}"
                                   class="form-control form-control-solid" placeholder="{{ __('app.Enter image') }}"/>
                            <small id="image_error" class="form-text text-danger"></small>
                            <span class="form-text text-muted">{{__('app.Please enter your image')}}</span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('app.Close')}}</button>
                    <button id="save" class="btn btn-primary mr-2">{{__('app.Save')}}</button>
                </div>
            </div>
        </div>
    </div>
    {{--        //////////////////////////Model Edit sliders (popup)/////////////////////////////--}}
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('app.Edit Slider')}}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="sliderDataEdit">
                        <input type="hidden" name="id" id="id_data">
                        <div class="mb-3">
                            <label>{{__('app.Title:')}}:</label>
                            <input type="text" name="title" class="form-control form-control-solid" id="title_update"
                                   placeholder="{{ __('app.Enter title') }}"/>
                            <small id="title_error" class="form-text text-danger"></small>
                            <span class="form-text text-muted">{{__('app.Please enter your title')}}</span>
                        </div>
                        <div class="mb-3">
                            <label>{{__('app.Description:')}}:</label>
                            <input type="text" name="description"
                                   class="form-control form-control-solid" id="description_update"
                                   placeholder="{{ __('app.Enter description') }}"/>
                            <small id="description_error" class="form-text text-danger"></small>
                            <span class="form-text text-muted">{{__('app.Please enter your description')}}</span>
                        </div>
                        <div class="mb-3">
                            <label>{{__('app.Image:')}}:</label>
                            <input type="file" name="image" class="form-control" id="image_update"
                                   placeholder="{{ __('app.Enter image') }}"/>
                            <small id="image_error" class="form-text text-danger"></small>
                            <span class="form-text text-muted">{{__('app.Please enter your image')}}</span>
                        </div>
{{--                        <div class="mb-3">--}}
{{--                            <label>{{__('app.Image:')}}:</label>--}}
{{--                            <br>--}}
{{--                            <img width="150px" height="150px" id="image_update" imageshow() src="{{ asset('/storage/sliders/${data.image}') }}" alt="not found">--}}
{{--                        </div>--}}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('app.Close')}}</button>
                    <button id="edit_modal" class="btn btn-primary mr-2">{{__('app.Save Changes')}}</button>
                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
    {{-- <script>
        $(document).ready(function() {
            $('.btn btn-danger deletePage').click(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        });
    </script> --}}

    @push('javascripts')
        <script type="text/javascript">
            var table;
            $(document).ready(function() {
                table = $('#data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('dashboard.sliders') }}",
                    columns: [{
                        data: 'id',
                        name: 'id'
                    },
                        {
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'description',
                            name: 'description'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });
            });

            // model create
            $(document).on('click', '#save', function (e) {
                e.preventDefault();
                $('#title_error').text('');
                $('#description_error').text('');
                $('#image_error').text('');
                var formData = new FormData($('#sliderDataCreate')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'post',
                    enctype: "multipart/form-data",
                    url: "{{ route('sliders.store') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function (data) {
                        $('#sliderDataCreate')[0].reset();
                        $('#createModal').modal('hide');
                        table.ajax.reload();
                    }, error: function (reject) {
                        var response = $.parseJSON(reject.responseText);
                        $.each(response.errors, function (key, val) {
                            $("#" + key + "_error").text(val[0]);
                        });
                    }
                });
            });
            //    model Edit
            $(document).on('click', '#edit', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    type: 'get',
                    url: "{{ url('dashboard/sliders/edit') }}/" + id,
                    data: '',
                    success: function (data) {
                        $('#title_update').val(data.data.title);
                        $('#description_update').val(data.data.description);
                         // $('#image_update').val(data.data.image);

                        $('#id_data').val(data.data.id);
                        $(document).on('click', '#edit_modal', function (e) {
                            var formData = new FormData($('#sliderDataEdit')[0]);
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: 'post',
                                enctype: "multipart/form-data",
                                url: "{{ route('sliders.update') }}",
                                data: formData,
                                processData: false,
                                contentType: false,
                                cache: false,
                                success: function (data) {
                                    $('#sliderDataEdit')[0].reset();
                                    $('#editModal').modal('hide');
                                    table.ajax.reload();
                                },
                                error: function (reject) {
                                    var response = $.parseJSON(reject.responseText);
                                    $.each(response.errors, function (key, val) {
                                        $("#" + key + "_error").text(val[0]);
                                    });
                                }
                            });
                        });
                    }
            });

            });
            // model Delete
            $(document).on('click', '.delete', function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var slider_id = $(this).attr('slider-id');

                $.ajax({
                    type: 'post',
                    url: "{{ route('sliders.delete') }}",
                    data: {
                        'id': slider_id,
                    },
                    success: function (data) {
                        $('.sliderRow' + data.id).remove();
                        table.ajax.reload();
                    }, error: function (reject) {

                    }
                });
            });
        </script>
        {{-- *********Sweet Alert On Delete******* --}}
        <script type="text/javascript">
            $(document).ready(function () {
                $('.deleteImage').click(function (e) {
                    {{--                    @dd('sgd')--}}
                    e.preventDefault();
                    var id = $(this).data('id');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result) {
                            $.ajax({
                                url: "/dashboard/sliders/deleteImage/" + id,
                                {{--url: "{{ route('dashboard.sliders.deleteImage') }}",--}}
                                    {{--data: {--}}
                                    {{--    id: id,--}}
                                    {{--},--}}
                                success: function (response) {
                                    if (response.status) {
                                        Swal.fire({
                                            title: response.data.status,
                                            text: response.data.status_text,
                                            icon: response.data.status_icon,
                                            button: "OK",
                                        }).then((confirmed) => {
                                            window.location.reload();
                                        });
                                    }

                                }
                            });
                        }
                    });
                });

            });
        </script>
    @endpush
@endsection
