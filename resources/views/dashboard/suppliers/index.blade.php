@extends('dashboard.main-dashboard')
@section('content')
    @section('content1')
        <a href="/dashboard/suppliers/" class="text-muted text-hover-primary">Suppliers /</a>
    @endsection
     <h2>Suppliers</h2>
     <link rel="icon" type="image/x-icon" href="/logo.png">
     <a href="/dashboard/suppliers/create" style="margin-bottom:20px;" class="btn btn-primary"> <i
             class="fa fa-floppy-o"></i>{{ __('Add') }}</a>
     <div class="container">
         <table id="data-table" class="table table-bordered data-table">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>{{ __('Title') }}</th>
                     <th>{{ __('Date Created') }}</th>
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
                     ajax: "{{ route('dashboard.suppliers') }}",
                     columns: [{
                             data: 'id',
                             name: 'id'
                         },
                         {
                             data: 'title',
                             name: 'title'
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
