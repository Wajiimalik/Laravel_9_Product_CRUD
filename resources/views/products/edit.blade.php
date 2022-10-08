@extends('shared.LayoutPage')
@section('title', 'Edit Product')

@section('content')

<!-- add product form -->
<div class="container">
    <h1 class="text-center my-5">Edit Product</h1>

    <form class="px-5" action="{{ route( 'products.update', $product->id ) }}" method="post">
        @method('PATCH')
        @csrf
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="productName" placeholder="Product name" value="{{ $product->productName }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="price" placeholder="Price" value="{{ $product->price }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="stock" placeholder="Stock" value="{{ $product->stock }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="longDescription" placeholder="Description">{{ $product->longDescription }}</textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Expiry date</label>
            <div class="col-sm-10">
                <input type="datetime" name="expiry_date" class="form-control" placeholder="Expiry Date" value="{{ $product->expiry_date }}">
            </div>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-secondary">Update Product</button>
        </div>
    </form>
</div>


@endsection