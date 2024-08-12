<!-- resources/views/work_records/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>เพิ่มออเดอร์</h1>
    <form action="{{ route('work_records.store') }}" method="POST">
        @csrf

        <!-- Product -->
        <div class="form-group">
            <label for="product_id">สินค้า</label>
            <select name="product_id" id="product_id" class="form-control" required>
                <option value="">เลือกสินค้า</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Quantity -->
        <div class="form-group">
            <label for="quantity">จำนวนสินค้า</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>

        <!-- Order Date -->
        <div class="form-group">
            <label for="order_date">วันที่ทำการออเดอร์</label>
            <input type="date" name="order_date" id="order_date" class="form-control" required>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="description">คำอธิบายเพิ่มเติม</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <!-- Shop -->
        <div class="form-group">
            <label for="shop_id">ร้านค้า</label>
            <select name="shop_id" id="shop_id" class="form-control" required>
                <option value="">เลือกร้านค้า</option>
                @foreach ($shops as $shop)
                    <option value="{{ $shop->id }}">{{ $shop->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- User -->
        <div class="form-group">
            <label for="user_id">ยูเซอร์</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">เลือกยูเซอร์</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Status -->
        <div class="form-group">
            <label for="status">สถานะออเดอร์</label>
            <select name="status" id="status" class="form-control" required>
                <option value="pending">รอดำเนินการ</option>
                <option value="completed">เสร็จสิ้น</option>
                <option value="cancelled">ยกเลิก</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">บันทึก</button>
    </form>
</div>
@endsection
