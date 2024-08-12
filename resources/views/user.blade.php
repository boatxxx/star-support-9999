<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>

    @include('layouts.app1')
    <div class="menu">
        <a href=""><i class="fas fa-box"></i> ตรวจสอบออเดอร์</a>
        <a href="#"><i class="fas fa-user-check"></i> ตรวจเยี่ยมลูกค้า</a>
        <a href="{{ route('shops.create') }}"><i class="fas fa-store"></i> สำรวจร้านค้า และแผนที่</a>
        <a href="#"><i class="fas fa-undo"></i> รับคืนสินค้า</a>
        <a href="#"><i class="fas fa-calendar-alt"></i> ตารางเยี่ยมลูกค้า</a>
        <a href="#"><i class="fas fa-tags"></i> ตรวจสอบโปรโมชั่น</a>
    </div>


</body>
</html>
