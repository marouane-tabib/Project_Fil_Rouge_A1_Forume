@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Test Page')

@section('content')
<h4>Test Page</h4>
<p>For more layout options refer <a href="{{ config('variables.documentation') ? config('variables.documentation') : '#' }}" target="_blank" rel="noopener noreferrer">documentation</a>.</p>
@endsection
