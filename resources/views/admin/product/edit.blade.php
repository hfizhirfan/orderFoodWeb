@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid px-4">
        <div class="card shadow mb-4 mt-5">
            <div class="card-header d-flex">
                <h6 class="font-weight-bold fs-4 mt-2 text-black col-lg-10 col-sm-6">{{$pageTitle}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable"  cellspacing="0">
                        <form action="{{ route('product.update',['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row m-3">
                                <label for="name_product" class="form-label">Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('name_product') is-invalid @enderror" type="text" name="name_product" id="name_product" value="{{ old('name_product',$product->name_product) }}" placeholder="Masukkan nama menu">
                                    @error('name_product')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-3">
                                <label for="price" class="form-label">Price</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price" value="{{ old('price',$product->price) }}" placeholder="Masukkan harga">
                                    @error('price')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-3">
                                <label for="age" class="form-label">Image Menu</label>
                                @if ($product->image)
                                    <img src="{{ asset('storage/menu/' . $product->encrypted_image) }}" alt="Product Image" style="width: 25%;" ></td>
                                @else
                                    <h5>Tidak ada</h5>
                                @endif
                            </div>
                            <div class="row m-3">
                                <label for="image" class="form-label">Upload New Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" name="image" id="image" value="{{ old('image',$product->image) }}">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-3">
                                <label for="type" class="form-label">Tipe</label>
                                <div class="col-sm-10">
                                    <select name="type" id="type" class="form-select">
                                        @php
                                            $selected = "";
                                            if ($errors->any())
                                                $selected = old('type');
                                            else
                                                $selected = $product->type_id;
                                        @endphp
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}" {{ $selected == $type->id ? 'selected' : '' }}>{{ $type->kode_tipe.' - '.$type->nama_tipe }}</option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                        <div class="text-danger"><small>{{ $message }}</small></div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row m-3 pt-4 col-md-4">
                                <div class="col-md-6 d-grid">
                                    <a href="{{ route('product.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                                <div class="col-md-6 d-grid">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
