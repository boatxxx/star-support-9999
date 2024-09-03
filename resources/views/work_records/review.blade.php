@extends('layouts.app1')

@section('content')
<div class="container">
    <h1 class="my-4">ตรวจสอบออเดอร์</h1>

    <!-- Display Work Record Details -->
    @foreach ($workRecords as $workRecord)
    <div class="card mb-3">
        <div class="card-header">
            รายละเอียดออเดอร์
        </div>
        <div class="card-body">
            <p><strong>วันที่ทำการออเดอร์:</strong> {{ $workRecord->order_date }}</p>
            <p><strong>ร้านค้า:</strong> {{ $workRecord->shop->name }}</p>
            <p><strong>ยูเซอร์:</strong> {{ $workRecord->user->name }}</p>
            <p><strong>สถานะ:</strong> {{ $workRecord->status }}</p>

            <h5 class="mt-4">สินค้าที่สั่งซื้อ</h5>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>สินค้า</th>
                        <th>จำนวน</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($workRecord->items as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Links to Related Menus for this Work Record -->
            <div class="card mt-4">
                <div class="card-header">
                    เมนูที่เกี่ยวข้องสำหรับออเดอร์นี้
                </div>
                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                        <a href="" class="btn btn-primary mb-2">ใบเสนอสินค้า</a>
                        <a href="" class="btn btn-success mb-2">ขายสินค้า</a>
                        <a href="" class="btn btn-info mb-2">สินค้าขึ้นรถ</a>
                        <a href="" class="btn btn-warning mb-2">จองสินค้า</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
