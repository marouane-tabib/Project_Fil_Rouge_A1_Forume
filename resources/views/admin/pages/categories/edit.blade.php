@php
 $configData = Helper::appClasses();
@endphp

@extends('admin/layouts/layoutMaster')

@section('title', 'Categories')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('admin/assets/js/categories/data-form-validation.js')}}"></script>
@endsection

@section('content')
{{--  --}}
@endsection
