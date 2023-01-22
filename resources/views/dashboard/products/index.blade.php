@extends('dashboard.main-dashboard')
@section('content')
    @section('content1')
        <a href="/dashboard/products/" class="text-muted text-hover-primary">Products /</a>
    @endsection
     <h2>Products</h2>
     <link rel="icon" type="image/x-icon" href="/logo.png">
     <a href="/dashboard/products/create" style="margin-bottom:20px;" class="btn btn-primary"> <i
             class="fa fa-floppy-o"></i>{{ __('Add') }}</a>
     <div class="container">
         <table id="data-table" class="table table-bordered data-table">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>{{ __('Title') }}</th>
                     <th>{{ __('Price ($)') }}</th>
                     <th>{{ __('Category') }}</th>
                     <th>{{ __('Date Created') }}</th>
                     <th width="200px">{{ __('Action') }}</th>
                 </tr>
             </thead>
         </table>
     </div>
     @include('sweetalert::alert')
     @push('javascripts')
         {{-- *********yajra datatables******* --}}
         <script type="text/javascript">
             $(function() {
                 var table = $('#data-table').DataTable({
                     processing: true,
                     serverSide: true,
                     ajax: "{{ route('dashboard.products') }}",
                     columns: [{
                             data: 'id',
                             name: 'id'
                         },
                         {
                             data: 'title',
                             name: 'title'
                         },
                         {
                             data: 'price',
                             name: 'price'
                         },
                         {
                             data: 'category_id',
                             name: 'category_id'
                         },
                         {
                             data: 'created_at',
                             name: 'created_at'
                         },
                         {
                             data: 'action',
                             name: 'action',
                             //  render: function() {
                             //      if ($row->price == '1')
                             //          return '<a href="#" class="btn btn-success">Active</a>'
                             //       else
                             //          return '<a href="#" class="btn btn-danger">Inactive</a>'

                             //     },
                             orderable: false,
                             searchable: false
                         },
                     ]
                 });

             });
         </script>
         {{-- *********Sweet Alert On Delete******* --}}
         <script type="text/javascript">
             $(document).on('click', '.deleteIcon', function() {
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
                            // url: "/dashboard/products/deleteItem/" + id,
                             url: "{{ route('dashboard.products.delete') }}",
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
                                     }).then((confirmed) => {
                                         window.location.reload();
                                     });
                                 }

                             }
                         });
                     }

                 });

             });
         </script>
     @endpush
@endsection
