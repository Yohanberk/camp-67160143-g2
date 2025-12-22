<!DOCTYPE html>
<html>
<head>
    <title>Workshop HTML Form</title>
</head>
<body>
    <h2>Workshop #HTML-FORM</h2>

    <form action="/workshop-form" method="POST" enctype="multipart/form-data">
        @csrf

        <label>ชื่อ:</label><br>
        <input type="text" name="first_name" required><br><br>

        <label>สกุล:</label><br>
        <input type="text" name="last_name" required><br><br>

        <label>วันเดือนปีเกิด:</label><br>
        <input type="date" name="dob" required><br><br>

        <label>อายุ:</label><br>
        <input type="number" name="age" required><br><br>

        <label>เพศ:</label><br>
        <select name="gender" required>
            <option value="">--เลือก--</option>
            <option value="ชาย">ชาย</option>
            <option value="หญิง">หญิง</option>
            <option value="อื่นๆ">อื่นๆ</option>
        </select><br><br>

        <label>รูป:</label><br>
        <input type="file" name="photo"><br><br>

        <label>ที่อยู่:</label><br>
        <textarea name="address" required></textarea><br><br>

        <label>สีที่ชอบ:</label><br>
        <input type="text" name="favorite_color"><br><br>

        <label>แนวเพลงที่ชอบ:</label><br>
        <input type="text" name="favorite_music"><br><br>

        <label>
            <input type="checkbox" name="agree" value="1" required>
            ยินยอม
        </label><br><br>

        <button type="submit">ส่งข้อมูล</button>
    </form>
</body>
</html>
