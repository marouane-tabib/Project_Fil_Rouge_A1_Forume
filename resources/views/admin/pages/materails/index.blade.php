@php
 $configData = Helper::appClasses();
@endphp

@extends('admin/layouts/layoutMaster')

@section('title', 'Materails')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('admin/assets/js/materails/data-form-validation.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-end">
    @include('admin.components.materailsEditModal')
</div><br>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="table-border-bottom-0">
      @foreach ($materails as $materail)
        <tr>
          <td>{{ $materail->name }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('materails.edit', $materail->id) }}"><i class="ti ti-pencil me-1"></i>Edit</a>
                <a class="dropdown-item" href="javascript:void(0);" onclick="if(confirm('Are You sure to delete this record?')){document.getElementById('delete-materail-{{ $materail->id }}').submit();} else {return false}"><i class="ti ti-trash me-1"></i>Delete</a>
                <form action="{{ route('materails.destroy' , $materail->id) }}" method="post" class="d-none" id="delete-materail-{{ $materail->id }}" >
                  @csrf
                  @method('DELETE')
                </form>
              </div>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
