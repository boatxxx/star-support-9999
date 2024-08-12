@include('layouts.app1')



<div class="container">
    <h1>บันทึกร้านค้า</h1>
    <form action="{{ route('shops.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">ชื่อร้านค้า</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="address">ที่อยู่ร้านค้า</label>
            <textarea name="address" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="Link_google">ลิ้งค์ Google Maps</label>
            <input type="text" name="Link_google" class="form-control">
        </div>
        <div class="form-group">
            <label for="Latitude">ละติจูด</label>
            <input type="text"id="Latitude" name="Latitude" class="form-control">
        </div>
        <div class="form-group">
            <label for="Longitude">ลองจิจูด</label>
            <input type="text" id="Longitude"name="Longitude" class="form-control">
        </div>
        <button type="button" id="getLocation" class="btn btn-primary">ดึงตำแหน่งที่ยืนอยู่</button>

        <div class="form-group">
            <label for="sta">สถานะ</label>
            <select name="sta" class="form-control">
                <option value="1">ใช้ลิ้งค์ Google Maps</option>
                <option value="0">ใช้ตำแหน่งที่อยู่</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">บันทึกร้านค้า</button>
    </form>
</div>
<script>
    document.getElementById('getLocation').addEventListener('click', function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                document.getElementById('Latitude').value = position.coords.latitude;
                document.getElementById('Longitude').value = position.coords.longitude;
            }, function(error) {
                alert('Error occurred. Error code: ' + error.code);
            });
        } else {
            alert('Geolocation is not supported by this browser.');
        }
    });
    </script>

