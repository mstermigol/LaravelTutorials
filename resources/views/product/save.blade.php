@extends('layouts.app')
@section('title', "Saved Product - Online Store")
@section('subtitle', "Product Successfully Created")
@section('content')
<div class="col-md-8">
    <h5 class="card-title" style="color: black">
        {{ $viewData["name"] }}
    </h5>
    <h5 class="card-title" style="color: black">
        ${{ $viewData["price"] }}
    </h5>
</div>
@endsection