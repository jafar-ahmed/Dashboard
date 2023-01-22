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
         <form class="form" action="/dashboard/products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('put')
             <div class="card-body">
                 <div class="form-group">
                     <label>Title:</label>
                     <input type="text" name="title" value="{{ $product->title }}"
                         class="form-control form-control-solid" placeholder="Enter title" />
                     <span class="form-text text-muted">Please enter your title</span>
                 </div>
                 <div class="form-group">
                     <label>Description:</label>
                     <textarea type="text" name="description" class="form-control form-control-solid" placeholder="Enter description">{{ $product->description }}</textarea>
                     <span class="form-text text-muted">Please enter your description</span>
                 </div>
                 <div class="form-group">
                     <label>Price:</label>
                     <input type="text" name="price" value="{{ $product->price }}"
                         class="form-control form-control-solid" placeholder="Enter price" />
                     <span class="form-text text-muted">Please enter your price</span>
                 </div>
                 <div class="form-group">
                     <label>Code:</label>
                     <input type="text" name="code" value="{{ $product->code }}"
                         class="form-control form-control-solid" placeholder="Enter code" />
                     <span class="form-text text-muted">Please enter your code</span>
                 </div>
                 <div class="form-group">
                     <label>Product Details:</label>
                     <textarea name="product_details" id="task-textarea" class="form-control form-control-solid"
                         placeholder="Enter product details">{{ $product->product_details }}</textarea>
                     <span class="form-text text-muted">Please enter your product details</span>
                 </div>
                 <div class="form-group">
                     <label>Product Specifications:</label>
                     <textarea name="product_specifications" id="task1-textarea" class="form-control form-control-solid"
                         placeholder="Enter product specifications">{{ $product->product_specifications }}</textarea>
                     <span class="form-text text-muted">Please enter your product specifications</span>
                 </div>
                 <div class="form-group">
                     <label for="category">Category:</label>
                     <select id="category" name="category_id" value="{{ $product->category_id }}">
                         <option value="">Select...</option>
                         @foreach ($categories as $category)
                             <option value="{{ $category->id }}" @if ($product->category_id == $category->id) selected @endif>
                                 {{ $category->title }} </option>
                         @endforeach
                     </select>
                 </div>
                 <div class="form-group">
                     <label for="supplier">Supplier:</label>
                     <select id="supplier" name="supplier_id" value="{{ $product->supplier_id }}">
                         <option value="">Select...</option>
                         @foreach ($suppliers as $supplier)
                             <option value="{{ $supplier->id }}" @if ($product->supplier_id == $supplier->id) selected @endif>
                                 {{ $supplier->title }} </option>
                         @endforeach
                     </select>
                 </div>

                 <div class="form-group">
                     <label>Color:</label>
                     <select class="colors-multiple" name="colors[]" multiple="multiple">
                         @foreach ($colors as $color)
                             <option {{ old('color') == $color->id ? 'selected' : '' }} value="{{ $color->id }}">
                                 {{ $color->title }} </option>
                         @endforeach
                     </select>
                     </label>
                 </div>
                 <div class="form-group">
                     <label class="col-3 col-form-label">High Sale</label>
                     <div class="col-3">
                         <span class="switch">
                             <label>
                                 <input type="checkbox" checked="checked" name="on_sale"
                                     value="{{ $product->on_sale }}" />
                                 <span></span>
                             </label>
                         </span>
                     </div>
                 </div>

                 <div class="form-group">
                     <label class="col-3 col-form-label">Active</label>
                     <div class="col-3">
                         <span class="switch">
                             <label>
                                 <input type="checkbox" name="is_active"
                                     {{ $product->is_active == 1 ? 'checked' : '' }} />
                                 <span></span>
                             </label>
                         </span>
                     </div>
                 </div>

                 <div class="form-group">
                     <label>Main Image:</label>
                     <input type="file" name="image" class="form-control" placeholder="Enter image" />
                     <span class="form-text text-muted">Please enter your image</span>

                     <img src="{{ url('/storage/products' . $product->image) }}" width="150" />
                     <br>
                 </div>
                 <div class="form-group">
                     <label>Product Images:</label>
                     <input type="file" name="images[]" multiple class="form-control form-control-solid"
                         placeholder="Enter image" />
                     <span class="form-text text-muted">Please enter your image</span>
                     @foreach ($product->ProductImages as $img)
                         <a class="btn btn-danger btn-sm deleteImage" data-id="{{ $img->id }}">
                             <i class="fa fa-trash"></i>
                         </a>
                         <img src="{{ url('/storage/products' . $img->image) }}" width="150" />
                     @endforeach
                 </div>
                 <div class="card-footer">
                     <button type="submit" class="btn btn-primary mr-2">Save</button>
                 </div>
         </form>

     </div>
     @push('javascripts')
         <script>
             $(document).ready(function() {
                 $('.colors-multiple').select2();
             });
         </script>

         <script>
             ClassicEditor
                 .create(document.querySelector('#task-textarea'))
                 .catch(error => {
                     console.error(error);
                 });

             ClassicEditor
                 .create(document.querySelector('#task1-textarea'))
                 .catch(error => {
                     console.error(error);
                 });
             //****************
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
                         // console.log(result);
                         if (result.isConfirmed) {
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
