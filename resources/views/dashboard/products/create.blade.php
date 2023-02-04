@extends('dashboard.main-dashboard')
@section('content')
    @section('content1')
        <a href="/dashboard/products/" class="text-muted text-hover-primary">Products <span style="color: black"> /  </span> </a>
        <a href="/dashboard/products/create/" class="text-muted text-hover-primary">  Create <span style="color: black"> / </span></a>
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
        <form class="form" action="/dashboard/products" method="POST" enctype="multipart/form-data">
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
                    <textarea name="description" class="form-control form-control-solid" placeholder="Enter your description">{{ old('description') }}</textarea>
                    <span class="form-text text-muted">Please enter your description</span>
                </div>
                <div class="form-group">
                    <label>Price:</label>
                    <input type="text" name="price" value="{{ old('price') }}"
                        class="form-control form-control-solid" placeholder="Enter price" />
                    <span class="form-text text-muted">Please enter your price</span>
                </div>
                <div class="form-group">
                    <label>Code:</label>
                    <input type="text" name="code" value="{{ old('code') }}"
                        class="form-control form-control-solid" placeholder="Enter code" />
                    <span class="form-text text-muted">Please enter your code</span>
                </div>
                <div>

                </div>
                <div class="form-group">
                    <label>Product Details:</label>
                    <textarea name="product_details" id="task-textarea" rows="5" class="form-control form-control-solid"
                        placeholder="Enter product details">{{ old('product_details') }}</textarea>
                    <span class="form-text text-muted">Please enter your product details</span>
                </div>
                <div class="form-group">
                    <label>Product Specifications:</label>
                    <textarea name="product_specifications" id="task1-textarea" rows="5" class="form-control form-control-solid"
                        placeholder="Enter product specifications">{{ old('product_specifications') }}</textarea>
                    <span class="form-text text-muted">Please enter your product specifications</span>
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select id="category" name="category_id" value="{{ old('category_id') }}">
                        <option>Select...</option>
                        @foreach ($categories as $category)
                            <option {{ old('category_id') == $category ? 'selected' : '' }} value="{{ $category->id }}">
                                {{ $category->title }} </option>
                        @endforeach
                    </select>
                    <span class="form-text text-muted">Please enter your category</span>
                </div>
                <div class="form-group">
                    <label for="supplier">Supplier:</label>
                    <select id="supplier" name="supplier_id" value="{{ old('supplier_id') }}">
                        <option value="">Select...</option>
                        @foreach ($suppliers as $supplier)
                            <option {{ old('supplier_id') == $supplier ? 'selected' : '' }}
                                value="{{ $supplier->id }}"> {{ $supplier->title }} </option>
                        @endforeach
                    </select>
                    <span class="form-text text-muted">Please enter your supplier</span>
                </div>

                <div class="form-group">
                    <label>Colors:</label>
                    <select class="form-control colors-multiple" name="colors[]" multiple="multiple">
                        @foreach ($colors as $color)
                            <option {{ old('color') == $color ? 'selected' : '' }} value="{{ $color->id }}">
                                {{ $color->title }} </option>
                        @endforeach
                    </select>
                    <span class="form-text text-muted">Please enter your colors</span>
                    </label>
                </div>

{{--                <label class="col-3 col-form-label">High Sale</label>--}}
{{--                <div class="col-3">--}}
{{--                    <span class="switch">--}}
{{--                        <label>--}}
{{--                            <input type="checkbox" checked="checked" name="on_sale" />--}}
{{--                            <span></span>--}}
{{--                        </label>--}}
{{--                    </span>--}}
{{--                </div>--}}

{{--                <label class="col-3 col-form-label">Active</label>--}}
{{--                <div class="col-3">--}}
{{--                    <span class="switch">--}}
{{--                        <label>--}}
{{--                            <input type="checkbox" checked="checked" name="is_active" />--}}
{{--                            <span></span>--}}
{{--                        </label>--}}
{{--                    </span>--}}
{{--                </div>--}}


                {{-- <?php if($products->is_active == '1'){ ?>

                        <a href="#" class="btn btn-success">Active</a>

                        <?php }else{ ?>

                        <a href="#" class="btn btn-danger">Inactive</a>

                        <?php } ?> --}}

                <div class="form-group">
                    <label>Main Image:</label>
                    <input type="file" name="image" value="{{ old('image') }}"
                        class="form-control form-control-solid" placeholder="Enter image" />
                    <span class="form-text text-muted">Please enter your image</span>
                </div>
                <div class="form-group">
                    <label>Images:</label>
                    <input type="file" name="images[]" multiple value="{{ old('images') }}"
                        class="form-control form-control-solid" placeholder="Enter image" />
                    <span class="form-text text-muted">Please enter your image</span>
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
        </script>
    @endpush
@endsection
