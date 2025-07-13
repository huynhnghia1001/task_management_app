@extends('layouts.master')
@section('title', 'App - Top Page')

@section('breadcrumb')
    @include('partial.breadcrumb')
@endsection

@section('content')
    <div class="main-content">
        <div class="top-page">
            @yield('breadcrumb')

        </div>
    </div>
@endsection
