@php
 $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Products')

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
          <td>{{ $product->homeStyle->name }}</td>
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

      <!-- Slide from Top Modal -->
      <div class="col-lg-4 col-md-6">
        <small class="text-light fw-semibold">Slide from Top</small>
        <div class="mt-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDelete">
            Launch modal
          </button>

          <!-- Modal -->
          <div class="modal modal-top fade" id="modalDelete" tabindex="-1">
            <div class="modal-dialog">
              <form class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalDeleteTitle">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    ...
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Delete</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script>
        var urlRealy = {{ route('name') }}
      </script>
@endsection
