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
            <!-- 2. Delivery Type -->
            {{-- <h5 class="my-4">2. Delivery Type</h5>
            <div class="row gy-3">
              <div class="col-md">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioIcon1">
                    <span class="custom-option-body">
                      <i class='ti ti-briefcase'></i>
                      <span class="custom-option-title"> Standard </span>
                      <small> Delivery in 3-5 days. </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon1" checked />
                  </label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioIcon2">
                    <span class="custom-option-body">
                      <i class='ti ti-send'></i>
                      <span class="custom-option-title"> Express </span>
                      <small>Delivery within 2 days.</small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon2" />
                  </label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioIcon3">
                    <span class="custom-option-body">
                      <i class='ti ti-crown'></i>
                      <span class="custom-option-title"> Overnight </span>
                      <small> Delivery within a days. </small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon3" />
                  </label>
                </div>
              </div>
            </div> --}}
            <hr>
            {{-- <!-- 3. Apply Promo code -->
            <h5 class="my-4">3. Apply Promo code</h5>
            <div class="row g-3">

              <div class="col-lg-11 col-sm-10 col-8">
                <input type="text" class="form-control" placeholder="TAKEITALL">
              </div>
              <div class="col-lg-1 col-sm-2 col-4">
                <button class="btn btn-primary">Apply</button>
              </div>

              <div class="divider divider-dashed">
                <div class="divider-text">OR</div>
              </div>

              <div class="col-12">
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between flex-column flex-sm-row">
                    <div class="offer">
                      <p class="mb-0"><strong>TAKEITALL</strong></p>
                      <span>Apply this code to get 15% discount on orders above 20$.</span>
                    </div>
                    <div class="apply mt-3 mt-sm-0"><button class="btn btn-outline-primary">Apply</button></div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between flex-column flex-sm-row">
                    <div class="offer">
                      <p class="mb-0"><strong>FESTIVE10</strong></p>
                      <span>Apply this code to get 10% discount on all orders.</span>
                    </div>
                    <div class="apply mt-3 mt-sm-0"><button class="btn btn-outline-primary">Apply</button></div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between flex-column flex-sm-row">
                    <div class="offer">
                      <p class="mb-0"><strong>MYSTERYDEAL</strong></p>
                      <span>Apply this code to get discount between 10% - 50%.</span>
                    </div>
                    <div class="apply mt-3 mt-sm-0"><button class="btn btn-outline-primary">Apply</button></div>
                  </li>
                </ul>
              </div>
            </div> --}}
            <hr>
            {{-- <!-- 4. Payment Method -->
            <h5 class="my-4">4. Payment Method</h5>
            <div class="row g-3">
              <div class="mb-3">
                <div class="form-check form-check-inline">
                  <input name="collapsible-payment" class="form-check-input" type="radio" value="" id="collapsible-payment-cc" checked="" />
                  <label class="form-check-label d-flex gap-1" for="collapsible-payment-cc">
                    Credit/Debit/ATM Card <i class="ti ti-credit-card ti-xs"></i>
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input name="collapsible-payment" class="form-check-input" type="radio" value="" id="collapsible-payment-cash" />
                  <label class="form-check-label d-flex gap-1" for="collapsible-payment-cash">
                    Cash On Delivery
                    <i class="ti ti-help text-muted ti-xs" data-bs-toggle="tooltip" data-bs-placement="top" title="You can pay once you receive the product."></i>
                  </label>
                </div>
              </div>

              <div class="col-12 col-md-10 col-xxl-8">
                <div class="mb-3">
                  <label class="form-label w-100" for="collapsible-payment-card">Card Number</label>
                  <div class="input-group input-group-merge">
                    <input type="text" id="collapsible-payment-card" name="creditCardMask" class="form-control credit-card-mask" placeholder="1356 3215 6548 7898" aria-describedby="creditCardMask2" />
                    <span class="input-group-text cursor-pointer p-1" id="creditCardMask2"><span class="card-type"></span></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="mb-3">
                      <label class="form-label" for="collapsible-payment-name">Name</label>
                      <input type="text" id="collapsible-payment-name" class="form-control" placeholder="John Doe" />
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="mb-3">
                      <label class="form-label" for="collapsible-payment-expiry-date">Exp. Date</label>
                      <input type="text" id="collapsible-payment-expiry-date" class="form-control expiry-date-mask" placeholder="MM/YY" />
                    </div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="mb-3">
                      <label class="form-label" for="collapsible-payment-cvv">CVV Code</label>
                      <div class="input-group input-group-merge">
                        <input type="text" id="collapsible-payment-cvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
                        <span class="input-group-text cursor-pointer" id="collapsible-payment-cvv2"><i class="ti ti-help ti-xs text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Sticky Actions -->
@endsection
