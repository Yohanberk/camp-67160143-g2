<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ฟอร์มสมัคร</title>
</head>
<body>

<h2>ฟอร์มสมัครสมาชิก</h2>

<form action="#" method="post" enctype="multipart/form-data">

    <!-- ชื่อ -->
    ชื่อ:<br>
    <input type="text" name="fname"><br><br>

    <!-- สกุล -->
    สกุล:<br>
    <input type="text" name="lname"><br><br>

    <!-- วันเดือนปีเกิด -->
    วันเดือนปีเกิด:<br>
    <input type="date" name="birthday"><br><br>

    <!-- เพศ -->
    เพศ:<br>
    <input type="radio" name="gender" value="male"> ชาย<br>
    <input type="radio" name="gender" value="female"> หญิง<br>
    <input type="radio" name="gender" value="other"> อื่น ๆ<br><br>

    <!-- รูป -->
    รูป:<br>
    <input type="file" name="photo"><br><br>

    <!-- ที่อยู่ -->
    ที่อยู่:<br>
    <textarea name="address" rows="4" cols="30"></textarea><br><br>

    <!-- สีที่ชอบ -->
    สีที่ชอบ:<br>
    <input type="color" name="favorite_color"><br><br>

    <!-- แนวเพลงที่ชอบ -->
    แนวเพลงที่ชอบ:<br>
    <select name="music">
        <option value="">-- เลือกแนวเพลง --</option>
        <option value="pop">Pop</option>
        <option value="rock">Rock</option>
        <option value="jazz">Jazz</option>
        <option value="hiphop">Hip-hop</option>
    </select><br><br>

    <!-- checkbox ยินยอม -->
    <input type="checkbox" name="agree">
    ยินยอมให้เก็บข้อมูลส่วนบุคคล<br><br>

    <!-- ปุ่ม -->
    <input type="reset" value="ล้างข้อมูล">
    <input type="submit" value="บันทึก">

</form>

</body>
</html>
