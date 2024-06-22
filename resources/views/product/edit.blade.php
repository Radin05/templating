@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Product</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('product.update', $product->id)}}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="text-success form-label">Nama Product</label>
                            <input type="text" class="form-control" name="nama_product"
                                value="{{ $product->nama_product }}">
                            <label class="form-label">stock</label>
                            <input type="text" class="form-control" name="stock" value="{{ $product->stock }}">
                            <label class="text-success form-label"><b> Price </b></label>
                            <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                            <label class="text-success form-label"><b> Description </b></label>
                            <input type="text" class="form-control" name="description"
                                value="{{ $product->description }}">
                            <label class="text-success form-label"><b> Nama Brand </b></label>
                            <select class="form-control" name="id_brand">
                                @foreach($brand as $data)
                                <option value="{{$data->id}}" {{ $data->id == $product->id_brand ? 'selected' : ''
                                    }}>{{$data->name_brand}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button href="{{url('product')}}" class="btn btn-primary">Edit</button>
                        <a href="{{url('product')}}" class="btn btn-secondary">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection