<!-- resources/views/shops/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>แก้ไขร้านค้า</h1>
    <form action="{{ route('shops.update', $shop->shop_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">ชื่อร้านค้า</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $shop->name) }}" required>
        </div>
        <div class="form-group">
            <label for="address">ที่อยู่</label>
            <textarea name="address" class="form-control" required>{{ old('address', $shop->address) }}</textarea>
        </div>
        <div class="form-group">
            <label for="link_google">ลิ้งแผนที่ Google</label>
            <input type="" name="link_google" class="form-control" value="{{ old('Link_google', $shop->link_google) }}">
        </div>
        <div class="form-group">
            <label for="latitude">ละติจูด</label>
            <input type="text" name="latitude" class="form-control" value="{{ old('Latitude', $shop->latitude) }}">
        </div>
        <div class="form-group">
            <label for="longitude">ลองจิจูด</label>
            <input type="text" name="longitude" class="form-control" value="{{ old('Longitude', $shop->longitude) }}">
        </div>
        <div class="form-group">
            <label for="sta">สถานะ</label>
            <select name="sta" class="form-control">
                <option value="1">ใช้ลิ้งค์ Google Maps</option>
                <option value="0">ใช้ตำแหน่งที่อยู่</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">บันทึกการเปลี่ยนแปลง</button>
    </form>
</div>

@endsection
