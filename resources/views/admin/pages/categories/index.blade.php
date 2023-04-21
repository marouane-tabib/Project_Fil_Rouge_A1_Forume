@php
 $configData = Helper::appClasses();
@endphp

@extends('admin/layouts/layoutMaster')

@section('title', 'Categories')

@section('content')
<div class="d-flex justify-content-end">
  {{-- <a href="#">
    <button type="button" class="btn btn-primary">
      Add Category
    </button>
  </a> --}}
    @include('admin.components.categoriesEditModal')
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
      @foreach ($categories as $category)
        <tr>
          <td>{{ $category->name }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('categories.edit', $category->id) }}"><i class="ti ti-pencil me-1"></i>Edit</a>
                <a class="dropdown-item" href="javascript:void(0);" onclick="if(confirm('Are You sure to delete this record?')){document.getElementById('delete-category-{{ $category->id }}').submit();} else {return false}"><i class="ti ti-trash me-1"></i>Delete</a>
                <form action="{{ route('categories.destroy' , $category->id) }}" method="post" class="d-none" id="delete-category-{{ $category->id }}" >
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
