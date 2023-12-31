@extends('layouts.app')
@section('content')
<br><br>


<div class="container">
    <div class="row mt-3">
        @foreach ($products as $product)
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card">
                <img src="{{ asset('storage/menu/' . $product->encrypted_image) }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{ $product->name_product }}</h5>
                    <label class="card-text harga">Rp. {{ $product->price }}</label><br><br>
                    <a href="{{ route('order.create',['id'=>$product->id]) }}" class="btn btn-primary btn-sm">Tambah</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
