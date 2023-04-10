@php
 $configData = Helper::appClasses();
@endphp

@extends('admin/layouts/layoutMaster')

@section('title', 'Products Edit'. $product->name)

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
@endsection

@section('content')

  <!-- Basic Layout -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit {{ $product->title }}</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="title">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="title" placeholder="Add product title..." />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="price">Price</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="price" placeholder="Add product price..." />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="quantity">Quantity</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="quantity" placeholder="Add product quantity..." />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="sku">SKU</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="sku" placeholder="Add product sku..." />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="categories">Categories</label>
            <div class="col-sm-10">
              <select id="categories" class="select2 form-select" data-allow-clear="true">
                <option value="">Select</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="primary-color">Primary Color</label>
            <div class="col-sm-10">
              <select id="primary-color" class="select2 form-select" data-allow-clear="true">
                <option value="">Select</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="secondary-color">Secondary Color</label>
            <div class="col-sm-10">
              <select id="secondary-color" class="select2 form-select" data-allow-clear="true">
                <option value="">Select</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="home-style">Home Style</label>
            <div class="col-sm-10">
              <select id="home-style" class="select2 form-select" data-allow-clear="true">
                <option value="">Select</option>
                <option value="Australia">Australia</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belarus">Belarus</option>
                <option value="Brazil">Brazil</option>
              </select>
            </div>
          </div>
          {{-- <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-company">Company</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
            </div>
          </div> --}}
          {{-- <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-default-email2" />
                <span class="input-group-text" id="basic-default-email2">@example.com</span>
              </div>
              <div class="form-text"> You can use letters, numbers & periods </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
            <div class="col-sm-10">
              <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-default-phone" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
            <div class="col-sm-10">
              <textarea id="basic-default-message" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
            </div>
          </div> --}}
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
