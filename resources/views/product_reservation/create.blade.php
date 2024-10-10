@extends('layouts.app')

@section('content')
<div class="container">
    <h2>จองสินค้า</h2>

    <form action="{{ route('product_reservation.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="product_id">เลือกสินค้า</label>
            <select name="product_id" class="form-control" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">จำนวนที่จอง</label>
            <input type="number" name="quantity" class="form-control" required min="1">
        </div>

        <button type="submit" class="btn btn-warning">จองสินค้า</button>
    </form>
</div>
@endsection
