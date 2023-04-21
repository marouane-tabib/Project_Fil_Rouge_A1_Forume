@php
 $configData = Helper::appClasses();
@endphp

@extends('admin/layouts/layoutMaster')

@section('title', 'Products')

@section('content')
<div class="d-flex justify-content-end">
  <a href="{{ route('products.create') }}">
    <button type="button" class="btn btn-primary">
      Add Product
    </button>
  </a>
</div><br>
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
          <td>{{ $product->sku }}</td>
          <td>{{ $product->primaryColor->name }}</td>
          <td>{{ $product->secondaryColor->name }}</td>
          <td>{{ $product->homeStyle->name }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('products.edit', $product->id) }}"><i class="ti ti-pencil me-1"></i>Edit</a>
                <a class="dropdown-item" href="javascript:void(0);" onclick="if(confirm('Are You sure to delete this record?')){document.getElementById('delete-product-{{ $product->id }}').submit();} else {return false}"><i class="ti ti-trash me-1"></i>Delete</a>
                <form action="{{ route('products.destroy' , $product->id) }}" method="post" class="d-none" id="delete-product-{{ $product->id }}" >
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
