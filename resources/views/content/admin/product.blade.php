@php
 $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Products')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}">
<!-- Form Validation -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<!-- Flat Picker -->
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<!-- Form Validation -->
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/tables-datatables-basic.js')}}"></script>
@endsection

@section('content')
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Category </th>
        <th>Price</th>
        <th>Quantity</th>
        <th>SKU</th>
        <th>Primary Color</th>
        <th>Secodary Color</th>
        <th>Home Style</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      @foreach ($products as $product)
        <tr>
          <td>{{ $product->title }}</td>
          <td>{{ $product->category->name }}</td>
          <td>{{ $product->price }}</td>
          <td>{{ $product->quantity }}</td>
          <td>{{ $product->SKU }}</td>
          <td>{{ $product->primaryColor->name }}</td>
          <td>{{ $product->secondaryColor->name }}</td>
          <td>{{ $product->home_style_id }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-pencil me-1"></i>Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="ti ti-trash me-1"></i>Delete</a>
              </div>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
