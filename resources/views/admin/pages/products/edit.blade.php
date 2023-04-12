@php
 $configData = Helper::appClasses();
@endphp

@extends('admin/layouts/layoutMaster')

@section('title', 'Products Edit')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />

{{-- Validation --}}
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
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

{{-- Validation --}}
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
<script src="{{asset('assets/js/forms-file-upload.js')}}"></script>
<script src="{{asset('admin/assets/js/product/create-validation.js')}}"></script>
@endsection

@section('content')

<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit {{ $product->title }}</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('product.update', $product->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label class="form-label" for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Add your product image" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}" placeholder="Add your product title" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" placeholder="Add your product price" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" placeholder="Add your product quantity" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="sku">SKU</label>
            <input type="number" class="form-control" id="sku" name="sku" value="{{ $product->sku }}" placeholder="Add your product sku" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="width">Width</label>
            <input type="number" class="form-control" id="width" name="width" value="{{ $product->width }}" placeholder="Add your product width" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="length">Length</label>
            <input type="number" class="form-control" id="length" name="length" value="{{ $product->length }}" placeholder="Add your product length" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="categories">Categories</label>
            <select id="categories" class="select2 form-select" name="category_id" data-allow-clear="true">
              <option value="1">Select</option>
              <option value="1">Alabama</option>
              <option value="2">Alaska</option>
              <option value="3">Wyoming</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="primary-color">Primary Color</label>
            <select id="primary-color" class="select2 form-select" name="primary_color_id" data-allow-clear="true">
              <option value="1">Select</option>
              <option value="1">Alabama</option>
              <option value="2">Wisconsin</option>
              <option value="3">Wyoming</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="secondary-color">Secondary Color</label>
            <select id="secondary-color" class="select2 form-select" name="secondary_color_id" data-allow-clear="true">
              <option value="1">Select</option>
              <option value="1">Alabama</option>
              <option value="2">Alaska</option>
              <option value="3">Arizona</option>
              <option value="4">Wyoming</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="home-style">Home Style</label>
            <select id="home-style" class="select2 form-select" name="home_style_id" data-allow-clear="true">
              <option value="1">Select</option>
              <option value="1">Alabama</option>
              <option value="2">Alaska</option>
              <option value="3">Wisconsin</option>
              <option value="4">Wyoming</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="description">Description</label>
            {{-- <input type="number" class="form-control" id="description" name="description" placeholder="Add your product description" /> --}}
            <textarea name="description" id="description" class="form-control" cols="30" rows="6" placeholder="Add your product description...">{{ $product->description }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
