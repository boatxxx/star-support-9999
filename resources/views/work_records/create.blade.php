<form action="{{ route('reservations.store', ['shop_id' => $shop_id]) }}" method="POST">
    @csrf
    <div id="reservation-items">
        <div class="reservation-item">
            <label for="product_id">เลือกสินค้า:</label>
            <select name="product_id[]" required>
                <option value="" disabled selected>เลือกสินค้า</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>

            <label for="quantity">จำนวน:</label>
            <input type="number" name="quantity[]" min="1" required>

            <label for="reservation_date">วันที่จอง:</label>
            <input type="date" name="reservation_date[]" required>
        </div>
    </div>

    <button type="button" id="add-item" class="btn btn-secondary">เพิ่มรายการ</button>
    <button type="submit" class="btn btn-warning">จองสินค้า</button>
</form>
