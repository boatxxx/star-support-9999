<!-- resources/views/header.blade.php -->
<style>



    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
    }
    .header {
        background-color: #053a72;
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
        color: #063669;
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
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}" />

<!-- CSS Just for demo purpose, don't include it in your project -->
<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />
<div class="header">
    <div class="user-info">
        <img src="https://via.placeholder.com/50" alt="User Image">
        <div class="user-details">
            <span>ชื่อผู้ใช้: {{ $user->name }}</span>
            <span>รถทะเบียน: กข 1234</span>
        </div>
    </div>
    <div class="settings">
        <i class="fas fa-cog"></i>
    </div>
</div>
