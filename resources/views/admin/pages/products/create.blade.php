@php
 $configData = Helper::appClasses();
@endphp

@extends('admin/layouts/layoutMaster')

@section('title', 'Product Create')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />

<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
{{-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" /> --}}
{{-- <link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" /> --}}
<link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>

{{-- <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script> --}}
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
{{-- <script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script> --}}
{{-- <script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script> --}}
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
<script src="{{asset('assets/js/forms-file-upload.js')}}"></script>
<script src="{{asset('assets/js/form-validation.js')}}"></script>
@endsection

@section('content')

<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Create Product</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label" for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Add your product image" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Add your product title" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Add your product price" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Add your product quantity" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="sku">SKU</label>
            <input type="number" class="form-control" id="sku" name="sku" placeholder="Add your product sku" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="width">Width</label>
            <input type="number" class="form-control" id="width" name="width" placeholder="Add your product width" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="length">Length</label>
            <input type="number" class="form-control" id="length" name="length" placeholder="Add your product length" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="categories">Categories</label>
            <select id="categories" class="select2 form-select" name="category_id" data-allow-clear="true">
              <option value="">Select</option>
              <option value="1">Alabama</option>
              <option value="2">Alaska</option>
              <option value="3">Wyoming</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="primary-color">Primary Color</label>
            <select id="primary-color" class="select2 form-select" name="primary_color_id" data-allow-clear="true">
              <option value="">Select</option>
              <option value="1">Alabama</option>
              <option value="2">Wisconsin</option>
              <option value="3">Wyoming</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="secondary-color">Secondary Color</label>
            <select id="secondary-color" class="select2 form-select" name="secondary_color_id" data-allow-clear="true">
              <option value="">Select</option>
              <option value="1">Alabama</option>
              <option value="2">Alaska</option>
              <option value="3">Arizona</option>
              <option value="4">Wyoming</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="home-style">Home Style</label>
            <select id="home-style" class="select2 form-select" name="home_style_id" data-allow-clear="true">
              <option value="">Select</option>
              <option value="1">Alabama</option>
              <option value="2">Alaska</option>
              <option value="3">Wisconsin</option>
              <option value="4">Wyoming</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="description">Description</label>
            {{-- <input type="number" class="form-control" id="description" name="description" placeholder="Add your product description" /> --}}
            <textarea name="description" id="description" class="form-control" cols="30" rows="6" placeholder="Add your product description..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>
</div>

<form id="formValidationExamples" class="row g-3">

  <!-- Account Details -->

  <div class="col-12">
    <h5 class="fw-semibold">1. Account Details</h5>
    <hr class="mt-0" />
  </div>


  <div class="col-md-6">
    <label class="form-label" for="formValidationName">Full Name</label>
    <input type="text" id="formValidationName" class="form-control" placeholder="John Doe" name="formValidationName" />
  </div>
  <div class="col-md-6">
    <label class="form-label" for="formValidationEmail">Email</label>
    <input class="form-control" type="email" id="formValidationEmail" name="formValidationEmail" placeholder="john.doe" />
  </div>

  <div class="col-md-6">
    <div class="form-password-toggle">
      <label class="form-label" for="formValidationPass">Password</label>
      <div class="input-group input-group-merge">
        <input class="form-control" type="password" id="formValidationPass" name="formValidationPass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-password2" />
        <span class="input-group-text cursor-pointer" id="multicol-password2"><i class="ti ti-eye-off"></i></span>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-password-toggle">
      <label class="form-label" for="formValidationConfirmPass">Confirm Password</label>
      <div class="input-group input-group-merge">
        <input class="form-control" type="password" id="formValidationConfirmPass" name="formValidationConfirmPass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-confirm-password2" />
        <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i class="ti ti-eye-off"></i></span>
      </div>
    </div>
  </div>


  <!-- Personal Info -->

  <div class="col-12">
    <h5 class="mt-2 fw-semibold">2. Personal Info</h5>
    <hr class="mt-0" />
  </div>

  <div class="col-md-6">
    <label for="formValidationFile" class="form-label">Profile Pic</label>
    <input class="form-control" type="file" id="formValidationFile" name="formValidationFile" placeholder="Choose profile pic">
  </div>
  <div class="col-md-6">
    <label class="form-label" for="formValidationDob">DOB</label>
    <input type="text" class="form-control flatpickr-validation" name="formValidationDob" id="formValidationDob" required />
  </div>

  <div class="col-md-6">
    <label class="form-label" for="formValidationSelect2">Country</label>
    <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
      <option value="">Select</option>
      <option value="Australia">Australia</option>
      <option value="Bangladesh">Bangladesh</option>
      <option value="Belarus">Belarus</option>
      <option value="Brazil">Brazil</option>
      <option value="Canada">Canada</option>
      <option value="China">China</option>
      <option value="France">France</option>
      <option value="Germany">Germany</option>
      <option value="India">India</option>
      <option value="Indonesia">Indonesia</option>
      <option value="Israel">Israel</option>
      <option value="Italy">Italy</option>
      <option value="Japan">Japan</option>
      <option value="Korea">Korea, Republic of</option>
      <option value="Mexico">Mexico</option>
      <option value="Philippines">Philippines</option>
      <option value="Russia">Russian Federation</option>
      <option value="South Africa">South Africa</option>
      <option value="Thailand">Thailand</option>
      <option value="Turkey">Turkey</option>
      <option value="Ukraine">Ukraine</option>
      <option value="United Arab Emirates">United Arab Emirates</option>
      <option value="United Kingdom">United Kingdom</option>
      <option value="United States">United States</option>
    </select>
  </div>
  <div class="col-md-6">
    <label class="form-label" for="formValidationLang">Languages</label>
    <input type="text" value="" class="form-control" name="formValidationLang" id="formValidationLang" />
  </div>

  <div class="col-md-6">
    <label class="form-label" for="formValidationTech">Tech</label>
    <input class="form-control typeahead" type="text" id="formValidationTech" name="formValidationTech" autocomplete="off" />
  </div>
  <div class="col-md-6">
    <label class="form-label" for="formValidationHobbies">Hobbies</label>
    <select class="selectpicker hobbies-select w-100" id="formValidationHobbies" data-style="btn-default" data-icon-base="ti" data-tick-icon="ti-check text-white" name="formValidationHobbies" multiple>
      <option>Sports</option>
      <option>Movies</option>
      <option>Books</option>
    </select>
  </div>

  <div class="col-md-6">
    <label class="form-label" for="formValidationBio">Bio</label>
    <textarea class="form-control" id="formValidationBio" name="formValidationBio" rows="3"></textarea>
  </div>
  <div class="col-md-6">
    <label class="form-label">Gender</label>
    <div class="form-check custom mb-2">
      <input type="radio" id="formValidationGender" name="formValidationGender" class="form-check-input" />
      <label class="form-check-label" for="formValidationGender">Male</label>
    </div>

    <div class="form-check custom">
      <input type="radio" id="formValidationGender2" name="formValidationGender" class="form-check-input" />
      <label class="form-check-label" for="formValidationGender2">Female</label>
    </div>
  </div>


  <!-- Choose Your Plan -->

  <div class="col-12">
    <h5 class="mt-2 fw-semibold">3. Choose Your Plan</h5>
    <hr class="mt-0" />
  </div>
  <div class="row">
    <div class="col-xl-3 col-md-5 col-sm-6 col-12">
      <div class="form-check custom-option custom-option-icon">
        <label class="form-check-label custom-option-content" for="basicPlanMain1">
          <span class="custom-option-body">
            <i class="ti ti-brand-telegram"></i>
            <span class="custom-option-title"> Starter </span>
            <small> Get 5gb of space and 1 team member. </small>
          </span>
          <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain1" />
        </label>
      </div>
    </div>
    <div class="col-xl-3 col-md-5 col-sm-6 col-12">
      <div class="form-check custom-option custom-option-icon">
        <label class="form-check-label custom-option-content" for="basicPlanMain2">
          <span class="custom-option-body">
            <i class="ti ti-users"></i>
            <span class="custom-option-title"> Personal </span>
            <small> Get 15gb of space and 5 team member. </small>
          </span>
          <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain2" />
        </label>
      </div>
    </div>
    <div class="col-xl-3 col-md-5 col-sm-6 col-12">
      <div class="form-check custom-option custom-option-icon">
        <label class="form-check-label custom-option-content" for="basicPlanMain3">
          <span class="custom-option-body">
            <i class="ti ti-crown"></i>
            <span class="custom-option-title"> Premium </span>
            <small> Get 25gb of space and 15 members. </small>
          </span>
          <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain3" />
        </label>
      </div>
    </div>
  </div>

  <div class="col-12">
    <label class="switch switch-primary">
      <input type="checkbox" class="switch-input" name="formValidationSwitch" />
      <span class="switch-toggle-slider">
        <span class="switch-on"></span>
        <span class="switch-off"></span>
      </span>
      <span class="switch-label">Send me related emails</span>
    </label>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="formValidationCheckbox" name="formValidationCheckbox" />
      <label class="form-check-label" for="formValidationCheckbox">Agree to our terms and conditions</label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection
