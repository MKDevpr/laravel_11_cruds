@extends('layouts.app')
@section('content')
<div class="row justify-content-center mt-3">
 <div class="col-md-8">
 @session('success')
 <div class="alert alert-success" role="alert">
 {{ $value }}
 </div>
 @endsession
 <div class="card">
 <div class="card-header">
 <div class="float-start">
 Edit Product
 </div>
 <div class="float-end">
 <a href="{{ route('products.index') }}" class="btn
btn-primary btn-sm">&larr; Back</a>
 </div>
 </div>
 <div class="card-body">
  <div class="row align-items-center g-0">
    <div class="col-md-3 text-center align-self-center">
      <label class="form-label mb-2"><strong>Your Image</strong></label>
      @if($product->image)
        <img src="{{ Storage::url($product->image) }}" alt="Current Image" class="img-fluid rounded" style="max-height: 140px;">
      @else
        <img src="https://via.placeholder.com/140x140?text=No+Image" alt="No Image" class="img-fluid rounded" style="max-height: 140px;">
      @endif
    </div>
    <div class="col-md-9">
      <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="mb-3 row">
          <label for="code" class="col-md-4 col-form-label text-md-end text-start">Code</label>
          <div class="col-md-8">
            <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ $product->code }}">
            @error('code')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="mb-3 row">
          <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
          <div class="col-md-8">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $product->name }}">
            @error('name')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="mb-3 row">
          <label for="quantity" class="col-md-4 col-form-label text-md-end text-start">Quantity</label>
          <div class="col-md-8">
            <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ $product->quantity }}">
            @error('quantity')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="mb-3 row">
          <label for="price" class="col-md-4 col-form-label text-md-end text-start">Price</label>
          <div class="col-md-8">
            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $product->price }}">
            @error('price')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="mb-3 row">
          <label for="description" class="col-md-4 col-form-label text-md-end text-start">Description</label>
          <div class="col-md-8">
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ $product->description }}</textarea>
            @error('description')
              <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="mb-3 row">
          <label for="image" class="col-md-4 col-form-label text-md-end text-start">Product Image</label>
          <div class="col-md-8">
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
            @error('image')
              <span class="text-danger">{{ $message }}</span>
            @enderror
            <small class="text-muted">Leave blank to keep the current image.</small>
          </div>
        </div>
        <div class="mb-3 row">
          <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
        </div>
      </form>
    </div>
  </div>
 </div>
 </div>
</div>
</div>

@endsection
