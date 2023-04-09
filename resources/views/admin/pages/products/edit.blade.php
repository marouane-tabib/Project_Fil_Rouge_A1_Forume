@php
 $configData = Helper::appClasses();
@endphp

@extends('admin/layouts/layoutMaster')

@section('title', 'Products Edit'. $product->name)

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/jquery-sticky/jquery-sticky.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
@endsection

@section('content')

<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Forms/</span>
  Edit {{ $product->title }}
</h4>
<!-- Sticky Actions -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header sticky-element bg-label-secondary d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
        <h5 class="card-title mb-sm-0 me-2">{{ $product->title }}</h5>
        <form action="{{ route('product.update', $product->id)}}" method="post">
          @csrf
          @method('PUT')
          <div class="action-btns">
            <button class="btn btn-label-primary me-3">
              <a href="{{ URL::previous() }}">
              <span class="align-middle"> Back</span></a>
            </button>
              <button class="btn btn-primary" type="submit">
                Update
              </button>
          </div>
        </form>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- 1. Delivery Address | title, category, price, quantity, sku, primary color, secodary color, home style-->
            <h5 class="mb-4">1. Delivery Address</h5>
            <div class="row g-3">
              <div class="col-md-12">
                <label class="form-label" for="title">Title</label>
                <input type="text" id="title" class="form-control" placeholder="Add Your Title..." />
              </div>
              <div class="col-md-12">
                <label class="form-label" for="categories">Categoryies</label>
                <select id="categories" class=" form-select" data-allow-clear="true">
                  <option value="">Select</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                </select>
              </div>
              <div class="col-md-12">
                <label class="form-label" for="price">Price</label>
                <input type="number" id="price" class="form-control phone-mask" placeholder="Add Your Product Price" />
              </div>
              <div class="col-md-12">
                <label class="form-label" for="sku">SKU</label>
                <input type="number" id="sku" class="form-control phone-mask" placeholder="Add Your Product SKU" />
              </div>
              <div class="col-md-12">
                <label class="form-label" for="quantity">Quantity</label>
                <input type="number" id="quantity" class="form-control phone-mask" placeholder="Add Your Product Quantity" />
              </div>
              <div class="col-md-12">
                <label class="form-label" for="primary_color">Pripary Color</label>
                <select id="primary_color" class=" form-select" data-allow-clear="true">
                  <option value="">Select</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                </select>
              </div>
              <div class="col-md-12">
                <label class="form-label" for="secondary_color">Secondary Color</label>
                <select id="secondary_color" class=" form-select" data-allow-clear="true">
                  <option value="">Select</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                </select>
              </div>
              <div class="col-md-12">
                <label class="form-label" for="home_style">Home Style</label>
                <select id="home_style" class=" form-select" data-allow-clear="true">
                  <option value="">Select</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                </select>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Sticky Actions -->
@endsection
