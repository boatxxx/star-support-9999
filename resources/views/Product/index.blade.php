<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลสินค้า</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
.btn {
    display: inline-block;
    background-color: #007bff; /* สีพื้นหลังของปุ่ม */
    color: white; /* สีข้อความ */
    padding: 12px 20px; /* ขนาดของปุ่ม (สูง x กว้าง) */
    border-radius: 5px; /* มุมปุ่มโค้ง */
    text-decoration: none; /* ไม่มีเส้นใต้ */
    font-size: 16px; /* ขนาดของข้อความ */
    font-weight: bold; /* ความหนาของข้อความ */
    text-align: center; /* จัดข้อความให้อยู่กลาง */
    transition: background-color 0.3s ease, transform 0.3s ease; /* เอฟเฟกต์การเปลี่ยนสีพื้นหลังและการเคลื่อนไหว */
}

.btn:hover {
    background-color: #0056b3; /* สีพื้นหลังเมื่อวางเมาส์บนปุ่ม */
    transform: scale(1.05); /* ขยายปุ่มเล็กน้อย */
}

.btn:active {
    background-color: #003d7a; /* สีพื้นหลังเมื่อคลิกปุ่ม */
    transform: scale(0.98); /* หดปุ่มเล็กน้อย */
}

        .container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

            max-width: 100%;
            margin: 0 auto;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            word-wrap: break-word;
        }
        th {
            background-color: #007bff;
            color: white;
        }

        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }
            th, td {
                padding: 8px;
            }
        }
        @media (max-width: 480px) {
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
            th, td {
                display: block;
                text-align: right;
            }
            th::before, td::before {
                content: attr(data-label);
                display: inline-block;
                width: 100px;
                font-weight: bold;
                text-align: left;
            }
            th, td {
                border: none;
                padding: 8px;
            }
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                top: 0;
                width: 150px;
                white-space: nowrap;
            }
        }
        .btn1 {
    display: inline-block;
    background-color: #007bff; /* สีพื้นหลังของปุ่ม */
    color: white; /* สีข้อความ */
    padding: 12px 20px; /* ขนาดของปุ่ม (สูง x กว้าง) */
    border-radius: 5px; /* มุมปุ่มโค้ง */
    text-decoration: none; /* ไม่มีเส้นใต้ */
    font-size: 16px; /* ขนาดของข้อความ */
    font-weight: bold; /* ความหนาของข้อความ */
    text-align: center; /* จัดข้อความให้อยู่กลาง */
    transition: background-color 0.3s ease, transform 0.3s ease; /* เอฟเฟกต์การเปลี่ยนสีพื้นหลังและการเคลื่อนไหว */
}

.btn1:hover {
    background-color: #0056b3; /* สีพื้นหลังเมื่อวางเมาส์บนปุ่ม */
    transform: scale(1.05); /* ขยายปุ่มเล็กน้อย */
}

.btn1:active {
    background-color: #003d7a; /* สีพื้นหลังเมื่อคลิกปุ่ม */
    transform: scale(0.98); /* หดปุ่มเล็กน้อย */
}

    </style>
</head>
@extends('layouts.app')
<body>
    @section('content')
    <div class="container">
        <h1>ข้อมูลสินค้า</h1>
        <a href="{{ route('products.create') }}" class="btn1">เพิ่มสินค้า</a>
        <table>
            <thead>
                <tr>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>คำอธิบายสินค้า</th>
                    <th>ราคา</th>
                    <th>จำนวนสินค้าคงเหลือ</th>
                    <th>วันหมดอายุของสินค้า</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->product_id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->expiration_date }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->product_id) }}" class="btn">ดูรายละเอียด</a>
                            <a href="{{ route('products.edit', $product->product_id) }}" class="btn btn-primary">แก้ไข</a>
                            <form action="{{ route('products.destroy', $product->product_id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบสินค้านี้?')">ลบ</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    @endsection
</body>
</html>
