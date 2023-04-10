@php
 $configData = Helper::appClasses();
@endphp

@extends('admin/layouts/layoutMaster')

@section('title', 'Product Create')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
<script src="{{asset('assets/js/forms-file-upload.js')}}"></script>
@endsection

@section('content')

<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Create Product</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('product.store') }}">
          @csrf
          <!-- Image  -->
              <h5 class="card-header">Image</h5>
              <div class="card-body">
                <div action="/upload" class="dropzone needsclick" id="dropzone-basic">
                  <div class="dz-message needsclick">
                    Drop files here or click to upload
                    {{-- <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span> --}}
                  </div>
                  <div class="fallback">
                    <input name="file" type="file" />
                  </div>
                </div>
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
            <label class="form-label" for="categories">Categories</label>
            <select id="categories" class="select2 form-select" name="category_id" data-allow-clear="true">
              <option value="">Select</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="primary-color">Primary Color</label>
            <select id="primary-color" class="select2 form-select" name="primary_color_id" data-allow-clear="true">
              <option value="">Select</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="secondary-color">Secondary Color</label>
            <select id="secondary-color" class="select2 form-select" name="secondary_color_id" data-allow-clear="true">
              <option value="">Select</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="home-style">Home Style</label>
            <select id="home-style" class="select2 form-select" name="home_style_id" data-allow-clear="true">
              <option value="">Select</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
