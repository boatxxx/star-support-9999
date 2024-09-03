<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .header {
            position: sticky;
            top: 0;
            background-color: #053a72;
            color: white;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-height: 20vh; /* Header should not exceed 20% of viewport height */
            overflow: hidden; /* Hide overflow content */
        }

        .header .user-info {
            display: flex;
            align-items: center;
            flex: 1;
        }

        .header .user-info img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 10px;
        }

        .header .user-info .user-details {
            display: flex;
            flex-direction: column;
        }

        .header .user-info .user-details span {
            font-size: 14px;
        }

        .header .menu {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .menu a {
            text-decoration: none;
            color: #063669;
            background-color: #fff;
            padding: 12px;
            margin-bottom: 8px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            transition: background-color 0.3s;
            font-size: 16px; /* Default font size for desktop */
        }

        .menu a:hover {
            background-color: #e9ecef;
        }

        .menu a i {
            margin-right: 8px;
            font-size: 18px; /* Default icon size for desktop */
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                padding: 10px;
            }

            .header .user-info {
                width: 100%;
                margin-bottom: 10px;
                justify-content: space-between;
            }

            .header .menu {
                width: 100%;
                align-items: flex-start;
            }

            .menu a {
                padding: 10px;
                font-size: 14px; /* Smaller font size for mobile */
            }

            .menu a i {
                font-size: 16px; /* Smaller icon size for mobile */
            }
        }
    </style>
    @yield('head') <!-- For additional head content if needed -->
</head>
<body>
    <div class="header">
        <div class="user-info">
            <img src="{{ asset('storage/' . $user->img_user) }}" alt="User Image">
            <div class="user-details">
                <span>ชื่อผู้ใช้: {{ $user->name }}</span>
                <span>อีเมลผู้ใช้งาน: {{ $user->email }}</span>
            </div>
        </div>
        <div class="menu">
            <a href="{{ url('/') }}"><i class="fas fa-home"></i> ย้อนกลับหน้าแรก</a>
            <a href=""><i class="fas fa-user-edit"></i> แก้ไขข้อมูลส่วนตัว</a>
            <a href=""><i class="fas fa-history"></i> ดูประวัติการขายสินค้า</a>
        </div>
    </div>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
