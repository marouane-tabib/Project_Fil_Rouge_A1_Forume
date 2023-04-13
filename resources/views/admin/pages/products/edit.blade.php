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
<script src="{{asset('admin/assets/js/product/edit-validation.js')}}"></script>
@endsection

@section('content')

<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit {{ $product->title }}</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('product.update', $product->id)}}" enctype="multipart/form-data"  id="createProductForm">
          @csrf
          @method('PUT')
          <div class="col-12 mb-3">
            <img src="{{ asset('storage/images/products/'.$product->image) }}" alt="" width="300" class="img-fluid" srcset="">
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="image">Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" placeholder="Add your product image" />
            @error('image')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $product->title) }}" id="title" name="title" placeholder="Add your product title" />
            @error('title')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="price">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}" id="price" name="price" placeholder="Add your product price" />
            @error('price')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="quantity">Quantity</label>
            <input type="number" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', $product->quantity) }}" id="quantity" name="quantity" placeholder="Add your product quantity" />
            @error('quantity')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="sku">SKU</label>
            <input type="number" class="form-control @error('sku') is-invalid @enderror" value="{{ old('sku', $product->sku) }}" id="sku" name="sku" placeholder="Add your product sku" />
            @error('sku')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="width">Width</label>
            <input type="number" class="form-control @error('width') is-invalid @enderror" value="{{ old('width', $product->width) }}" id="width" name="width" placeholder="Add your product width" />
            @error('width')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="length_value">Length</label>
            <input type="number" class="form-control @error('length_value') is-invalid @enderror" value="{{ old('length_value', $product->length_value) }}" id="length_value" name="length_value" placeholder="Add your product length" />
            @error('length_value')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="categories">Categories</label>
            <select id="categories" class="select2 form-select @error('category_id') is-invalid @enderror" name="category_id" data-allow-clear="true">
              <option value="" {{ old('category_id', $product->category_id) == "" ? 'selected' : '' }}>Select</option>
              <option value="1" {{ old('category_id', $product->category_id) == 1 ? 'selected' : '' }}>Alabama</option>
              <option value="2" {{ old('category_id', $product->category_id) == 2 ? 'selected' : '' }}>Alaska</option>
              <option value="3" {{ old('category_id', $product->category_id) == 3 ? 'selected' : '' }}>Wyoming</option>
            </select>
            @error('category_id')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="primary-color">Primary Color</label>
            <select id="primary-color" class="select2 form-select @error('primary_color_id') is-invalid @enderror" name="primary_color_id" data-allow-clear="true">
              <option value="" {{ old('primary_color_id', $product->primary_color_id) == "" ? 'selected' : '' }}>Select</option>
              <option value="1" {{ old('primary_color_id', $product->primary_color_id) == 1 ? 'selected' : '' }}>Alabama</option>
              <option value="2" {{ old('primary_color_id', $product->primary_color_id) == 2 ? 'selected' : '' }}>Wisconsin</option>
              <option value="3" {{ old('primary_color_id', $product->primary_color_id) == 3 ? 'selected' : '' }}>Wyoming</option>
            </select>
            @error('primary_color_id')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="secondary-color">Secondary Color</label>
            <select id="secondary-color" class="select2 form-select @error('secondary_color_id') is-invalid @enderror" name="secondary_color_id" data-allow-clear="true">
              <option value="" {{ old('secondary_color_id', $product->secondary_color_id) == "" ? 'selected' : '' }}>Select</option>
              <option value="1" {{ old('secondary_color_id', $product->secondary_color_id) == 1 ? 'selected' : '' }}>Alabama</option>
              <option value="2" {{ old('secondary_color_id', $product->secondary_color_id) == 2 ? 'selected' : '' }}>Alaska</option>
              <option value="3" {{ old('secondary_color_id', $product->secondary_color_id) == 3 ? 'selected' : '' }}>Arizona</option>
              <option value="4" {{ old('secondary_color_id', $product->secondary_color_id) == 4 ? 'selected' : '' }}>Wyoming</option>
            </select>
            @error('secondary_color_id')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="home-style">Home Style</label>
            <select id="home-style" class="select2 form-select @error('home_style_id') is-invalid @enderror" name="home_style_id" data-allow-clear="true">
              <option value="" {{ old('home_style_id', $product->home_style_id) == "" ? 'selected' : '' }}>Select</option>
              <option value="1" {{ old('home_style_id', $product->home_style_id) == 1 ? 'selected' : '' }}>Alabama</option>
              <option value="2" {{ old('home_style_id', $product->home_style_id) == 2 ? 'selected' : '' }}>Alaska</option>
              <option value="3" {{ old('home_style_id', $product->home_style_id) == 3 ? 'selected' : '' }}>Wisconsin</option>
              <option value="4" {{ old('home_style_id', $product->home_style_id) == 4 ? 'selected' : '' }}>Wyoming</option>
            </select>
            @error('home_style_id')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="col-12 mb-3">
            <label class="form-label" for="description">Description</label>
            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="6" placeholder="Add your product description...">{{ old('description', $product->description) }}</textarea>
            @error('description')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
