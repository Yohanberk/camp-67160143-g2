<!DOCTYPE html>
<html>
<head>
<<<<<<< Updated upstream
    <title>Workshop HTML Form</title>
</head>
<body>
    <h2>Workshop #HTML-FORM</h2>

    <form action="/workshop-form" method="POST">
        @csrf

        ชื่อ: <input type="text" name="fname"><br><br>
        สกุล: <input type="text" name="lname"><br><br>

        เพศ:
        <input type="radio" name="gender" value="ชาย"> ชาย
        <input type="radio" name="gender" value="หญิง"> หญิง
        <br><br>

        สีที่ชอบ:
        <input type="color" name="color"><br><br>

        แนวเพลงที่ชอบ:
        <select name="music">
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Jazz">Jazz</option>
        </select>
        <br><br>

        <button type="submit">ส่งข้อมูล</button>
    </form>
=======
    <title>My First Laravel Page</title>
</head>
<body>
    <h1>หน้านี้คือของที่ฉันเขียนเอง 🎉</h1>
>>>>>>> Stashed changes
</body>
</html>
