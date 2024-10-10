@extends('layouts.app1')

@section('content')
<div class="container">
    <h2>บันทึกสินค้าขึ้นรถ</h2>

    <form action="{{ route('product_loading.store') }}" method="POST">
        @csrf
        <input type="hidden" name="work_record_id" value="{{ $workRecord->id }}">

        <div class="form-group">
            <label for="product_id">สินค้า</label>
            <select name="product_id" class="form-control" required>
                @foreach($workRecord->products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="vehicle_id">รถ</label>
            <select name="vehicle_id" class="form-control" required>
                @foreach($vehicles as $vehicle)
                    <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="quantity">จำนวนสินค้า</label>
            <input type="number" name="quantity" class="form-control" required min="1">
        </div>

        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
    </form>
</div>
@endsection
