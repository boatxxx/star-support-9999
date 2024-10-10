@extends('layouts.app1')

@section('content')
<div class="container">
    <h1>สรุปใบเสนอราคา</h1>

    <h3>รายละเอียดสินค้า</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>สินค้า</th>
                <th>จำนวน</th>
                <th>ราคาต่อหน่วย</th>
                <th>รวม</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $products[$item['product_id']]->name ?? 'ไม่พบชื่อสินค้า' }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>{{ number_format($item['price'], 2) }} บาท</td>
                <td>{{ number_format($item['quantity'] * $item['price'], 2) }} บาท</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h4>ยอดรวมทั้งหมด: {{ number_format($total, 2) }} บาท</h4>

    <form action="{{ route('sales.store') }}" method="POST">
        @csrf
        <input type="hidden" name="items" value="{{ json_encode($items) }}">
        <div class="mt-4">
            <button type="submit" class="btn btn-success">บันทึกข้อมูลขายสินค้า</button>
        </div>
    </form>

    <div class="mt-4">
        <a href="#" class="btn btn-primary">พิมพ์ใบเสนอราคา</a>
    </div>
</div>
@endsection
