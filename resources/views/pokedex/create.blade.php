<h2>เพิ่มโปเกมอน</h2>

<form action="/pokedex" method="POST">
    @csrf

    <p>ชื่อ: <input type="text" name="name"></p>
    <p>ประเภท: <input type="text" name="type"></p>
    <p>สายพันธุ์: <input type="text" name="species"></p>
    <p>ส่วนสูง: <input type="number" name="height"></p>
    <p>น้ำหนัก: <input type="number" name="weight"></p>
    <p>HP: <input type="number" step="0.1" name="hp"></p>
    <p>Attack: <input type="number" step="0.1" name="attack"></p>
    <p>Defense: <input type="number" step="0.1" name="defense"></p>
    <p>Image URL: <input type="text" name="image_url"></p>

    <button type="submit">บันทึก</button>
</form>

<a href="/pokedex">กลับ</a>
