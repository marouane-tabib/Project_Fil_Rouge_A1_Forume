@php
 $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Products')

@section('content')
  @foreach ($data as $item)
    <li>$item->title</li>
  @endforeach
@endsection
