@extends('layouts.app1')

@section('content')
<div class="container">
    <h1 class="text-center">บันทึกการเยี่ยมลูกค้า</h1>

    <form action="{{ route('shop_visits.store1') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="customer_name">ชื่อลูกค้า</label>
            <input type="text" name="customer_name" id="customer_name" class="form-control" required>
        </div>

        <input type="hidden" name="shop_id" value="{{ $shopId }}">

        <div class="form-group">
            <label for="visit_date">วันที่ทำการเยี่ยม</label>
            <input type="date" name="visit_date" id="visit_date" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="employee_id">รหัสพนักงาน</label>
            <input type="text" name="employee_id" id="employee_id" class="form-control" value="{{ Auth::user()->user_id }}" readonly>
        </div>

        <div class="form-group">
            <label for="notes">หมายเหตุ</label>
            <textarea name="notes" id="notes" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">บันทึกการเยี่ยมลูกค้า</button>
    </form>
</div>
@endsection
