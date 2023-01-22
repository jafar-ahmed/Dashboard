@extends('dashboard.main-dashboard')
@section('content')
    @section('content1')
        <a href="/dashboard/admins/" class="text-muted text-hover-primary">Admins /</a>
    @endsection
     <h2>Admins</h2>
     <link rel="icon" type="image/x-icon" href="/logo.png">
     <a href="/dashboard/admins/create" style="margin-bottom:20px;" class="btn btn-primary"> <i
             class="fa fa-floppy-o"></i>{{ __('Add') }}</a>

     <div class="container">
         <table id="data-table" class="table table-bordered data-table">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>{{ __('Name') }}</th>
                     <th>{{ __('Email') }}</th>
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
                     ajax: "{{ route('dashboard.admins') }}",
                     columns: [{
                             data: 'id',
                             name: 'id'
                         },
                         {
                             data: 'name',
                             name: 'name'
                         },
                         {
                             data: 'email',
                             name: 'email'
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
             $(document).on('click', '.deleteicon', function() {
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
                             // url: "/dashboard/admins/deleteItem/" + id,
                             url: "{{ route('dashboard.admins.deleteItem') }}",
                             data: {
                                 id: id,
                             },
                             success: function(response) {
                                 if (response.status) {
                                     Swal.fire({
                                         title: response.data.status,
                                         text: response.data.status_text,
                                         icon: response.data.status_icon,
                                         button: "OK",
                                     })
                                     //     /.then((confirmed) => {
                                     //     window.location.reload();
                                     // });
                                 }

                             }
                         });
                     }

                 });

             });
         </script>
     @endpush
@endsection
