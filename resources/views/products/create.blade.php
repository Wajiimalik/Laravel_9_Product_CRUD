@extends('shared.LayoutPage')
@section('title', 'Add Product')

@section('content')

<!-- add product form -->
<div class="container">
    <h1 class="text-center my-5">Add Product</h1>

    <form class="px-5" action="{{ route( 'products.store' ) }}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="productName" placeholder="Product name">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="price" placeholder="Price">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="stock" placeholder="Stock">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="longDescription" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Expiry date</label>
            <div class="col-sm-10">
                <input type="datetime" name="expiry_date" class="form-control" placeholder="Expiry Date">
            </div>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-secondary">Add Product</button>
        </div>
    </form>
</div>


@endsection