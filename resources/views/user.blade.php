<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>



        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header .user-info {
            display: flex;
            align-items: center;
        }
        .header .user-info img {
            border-radius: 50%;
            margin-right: 10px;
        }
        .header .user-info .user-details {
            display: flex;
            flex-direction: column;
        }
        .header .user-info .user-details span {
            font-size: 14px;
        }
        .header .settings {
            font-size: 20px;
            cursor: pointer;
        }
        .menu {
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        .menu a {
            text-decoration: none;
            color: #007bff;
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            transition: background-color 0.3s;
        }
        .menu a:hover {
            background-color: #e9ecef;
        }
        .menu a i {
            margin-right: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>


    <div class="header">
        <div class="user-info">
            <img src="https://via.placeholder.com/50" alt="User Image">
            <div class="user-details">
                <span>ชื่อผู้ใช้: John Doe</span>
                <span>รถทะเบียน: กข 1234</span>
            </div>
        </div>
        <div class="settings">
            <i class="fas fa-cog"></i>
        </div>
    </div>

    <div class="menu">
        <a href="#"><i class="fas fa-box"></i> ตรวจสอบออเดอร์</a>
        <a href="#"><i class="fas fa-user-check"></i> ตรวจเยี่ยมลูกค้า</a>
        <a href="#"><i class="fas fa-store"></i> สำรวจร้านค้า และแผนที่</a>
        <a href="#"><i class="fas fa-undo"></i> รับคืนสินค้า</a>
    </div>

</body>
</html>
