@extends('layouts.app')

@section('title', 'Solo POS')
@section('subtitle', 'Dashboard')

@section('content')
<!-- Data Card -->
@include('content.data-display')
<!-- Chart and Table -->
<div class="max-w-8xl px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4">
        <div class="lg:col-span-3">
            @include('content.sales-chart')
        </div>

        <div class="lg:col-span-1">
            @include('content.sales-table')
        </div>
    </div>
</div>
@endsection