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
         <form class="form" action="/dashboard/app-contents/{{ $app_contents->id }}" method="POST"
             enctype="multipart/form-data">
             @csrf
             @method('put')
             <div class="card-body">
                 <div class="form-group">
                     <label>Title:</label>
                     <input type="text" name="title" value="{{ $app_contents->title }}"
                         class="form-control form-control-solid" placeholder="Enter title" />
                     <span class="form-text text-muted">Please enter your title</span>
                 </div>
                 <div class="form-group">
                     <label>Email:</label>
                     <input type="text" name="email" value="{{ $app_contents->email }}"
                         class="form-control form-control-solid" placeholder="Enter email" />
                     <span class="form-text text-muted">Please enter your email</span>
                 </div>
                 <div class="form-group">
                     <label>Products Numbers:</label>
                     <input type="text" name="products_numbers" value="{{ $app_contents->products_numbers }}"
                         class="form-control form-control-solid" placeholder="Enter products numbers" />
                     <span class="form-text text-muted">Please enter your products numbers</span>
                 </div>
                 <div class="form-group">
                     <label>Projects Numbers:</label>
                     <input type="text" name="projects_numbers" value="{{ $app_contents->projects_numbers }}"
                         class="form-control form-control-solid" placeholder="Enter Projects numbers" />
                     <span class="form-text text-muted">Please enter your Projects numbers</span>
                 </div>
                 <div class="form-group">
                     <label>Employees Numbers:</label>
                     <input type="text" name="employees_numbers" value="{{ $app_contents->employees_numbers }}"
                         class="form-control form-control-solid" placeholder="Enter Employees numbers" />
                     <span class="form-text text-muted">Please enter your Employees numbers</span>
                 </div>
                 <div class="form-group">
                     <label>Branches Numbers:</label>
                     <input type="text" name="branches_numbers" value="{{ $app_contents->branches_numbers }}"
                         class="form-control form-control-solid" placeholder="Enter Branches numbers" />
                     <span class="form-text text-muted">Please enter your Branches numbers</span>
                 </div>
                 <div class="form-group">
                     <label>Working Hours:</label>
                     <input type="text" name="working_hours" value="{{ $app_contents->working_hours }}"
                         class="form-control form-control-solid" placeholder="Enter working hours" />
                     <span class="form-text text-muted">Please enter your working hours</span>
                 </div>
                 <div class="form-group">
                     <label>Mobile 1:</label>
                     <input type="text" name="mobile_1" value="{{ $app_contents->mobile_1 }}"
                         class="form-control form-control-solid" placeholder="Enter mobile 1" />
                     <span class="form-text text-muted">Please enter your mobile 1</span>
                 </div>
                 <div class="form-group">
                     <label>Mobile 2:</label>
                     <input type="text" name="mobile_2" value="{{ $app_contents->mobile_2 }}"
                         class="form-control form-control-solid" placeholder="Enter mobile 2" />
                     <span class="form-text text-muted">Please enter your mobile 2</span>
                 </div>
                 <div class="form-group">
                     <label>Address 1:</label>
                     <input type="text" name="address_1" value="{{ $app_contents->address_1 }}"
                         class="form-control form-control-solid" placeholder="Enter address 1" />
                     <span class="form-text text-muted">Please enter your address 1</span>
                 </div>
                 <div class="form-group">
                     <label>Address 2:</label>
                     <input type="text" name="address_2" value="{{ $app_contents->address_2 }}"
                         class="form-control form-control-solid" placeholder="Enter address 2" />
                     <span class="form-text text-muted">Please enter your address 2</span>
                 </div>
                 <div class="form-group">
                     <label>Address 3:</label>
                     <input type="text" name="address_3" value="{{ $app_contents->address_3 }}"
                         class="form-control form-control-solid" placeholder="Enter address 3" />
                     <span class="form-text text-muted">Please enter your address 3</span>
                 </div>
                 <div class="card-footer">
                     <button type="submit" class="btn btn-primary mr-2">Save</button>
                 </div>
         </form>
     </div>
@endsection
