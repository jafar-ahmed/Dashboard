@extends('dashboard.main-dashboard')
@section('content')
    @section('content1')
        <a href="/dashboard/app-contents/" class="text-muted text-hover-primary">App Contents /</a>
    @endsection
     <h2>App Contents</h2>
     <br>

{{--     <link rel="icon" type="image/x-icon" href="/logo.png">--}}
     {{-- <a href="/dashboard/suppliers/create" style="margin-bottom:20px;" class="btn btn-primary"> <i
             class="fa fa-floppy-o"></i>{{ __('Add') }}</a> --}}
     <div class="container">
         <table id="data-table" class="table table-bordered data-table">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>{{ __('Title') }}</th>
                     <th>{{ __('Email') }}</th>
                     <th>{{ __('Products num.') }}</th>
                     <th>{{ __('Projects num.') }}</th>
                     <th>{{ __('Employees num.') }}</th>
                     <th>{{ __('Branches num.') }}</th>
                     <th>{{ __('Working Hours') }}</th>
                     {{-- <th>{{ __('Mobiles') }}</th>
                     <th>{{ __('Addresses') }}</th> --}}
                     <th>{{ __('Updated At') }}</th>
                     <th width="120px">{{ __('Action') }}</th>
                 </tr>
             </thead>
         </table>
     </div>
     @include('sweetalert::alert')
     @push('javascripts')
         <script type="text/javascript">
             $(function() {
                 var table = $('#data-table').DataTable({
                     processing: true,
                     serverSide: true,
                     ajax: "{{ route('dashboard.app-contents') }}",
                     columns: [{
                             data: 'id',
                             name: 'id'
                         },
                         {
                             data: 'title',
                             name: 'title'
                         },
                         {
                             data: 'email',
                             name: 'email'
                         },
                         {
                             data: 'products_numbers',
                             name: 'products_numbers'
                         },
                         {
                             data: 'projects_numbers',
                             name: 'projects_numbers'
                         },
                         {
                             data: 'employees_numbers',
                             name: 'employees_numbers'
                         },
                         {
                             data: 'branches_numbers',
                             name: 'branches_numbers'
                         },
                         {
                             data: 'working_hours',
                             name: 'working_hours'
                         },
                        //  {
                        //      data: 'mobile_1',
                        //      name: 'mobile_1'
                        //  },
                        //  {
                        //      data: 'address_1',
                        //      name: 'address_1'
                        //  },
                         {
                             data: 'updated_at',
                             name: 'updated_at'
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
         </script>
         {{-- *********Sweet Alert On Delete******* --}}
         <script type="text/javascript">
            $(document).ready(function() {
                $('.deleteImage').click(function(e) {
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
                                url: "/dashboard/products/deleteImage/" + id,
                                success: function(response) {
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
