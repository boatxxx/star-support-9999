<!-- resources/views/shops/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ร้านค้าทั้งหมด</h1>
    <a href="{{ route('shops.create') }}" class="btn btn-success mb-3">เพิ่มร้านค้าใหม่</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>รหัสร้านค้า</th>
                <th>ชื่อร้านค้า</th>
                <th>ที่อยู่</th>
                <th>แผนที่ Google</th>
                <th>สถานะ</th>
                <th>ละติจูด</th>
                <th>ลองจิจูด</th>
                <th>การกระทำ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shops as $shop)
                <tr>
                    <td>{{ $shop->shop_id }}</td>
                    <td>{{ $shop->name }}</td>
                    <td>{{ $shop->address }}</td>
                    <td>
                        @if($shop->link_google)
                            <a href="{{ $shop->link_google }}" target="_blank">ดูแผนที่</a>
                        @else
                            ไม่มีแผนที่
                        @endif
                    </td>
                    <td>{{ $shop->sta == 1 ? 'แผนที่ลิ้ง' : 'ละติจูด/ลองจิจูด' }}</td>
                    <td>{{ $shop->latitude }}</td>
                    <td>{{ $shop->longitude }}</td>
                    <td>
                        <a href="{{ route('shops.edit', $shop->shop_id) }}" class="btn btn-warning">แก้ไข</a>
                        <form action="{{ route('shops.destroy', $shop->shop_id ) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">ลบ</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
