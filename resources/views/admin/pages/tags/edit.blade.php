@php
 $configData = Helper::appClasses();
@endphp

@extends('admin/layouts/layoutMaster')

@section('title', 'Tags')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('admin/assets/js/tags/data-form-validation.js')}}"></script>
@endsection

@section('content')

<div class="row">
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit {{ $tag->name }} Tag</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('tags.update', $tag->id) }}" method="post" id="createTagForm">
          @csrf
          @method('PATCH')
            <div class="row mb-3">
              <div class="col">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $tag->name) }}" id="name" name="name" placeholder="Add your tag name" />
                @error('name')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            </div>
              <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection