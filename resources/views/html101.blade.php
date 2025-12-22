<!DOCTYPE html>
<html lang="th">
<head>
<<<<<<< HEAD
<<<<<<< Updated upstream
    <title>Workshop HTML Form</title>
=======
    <meta charset="UTF-8">
    <title>Workshop #html-form</title>
>>>>>>> a9c2f9ac3cf0deebf9764641c32f89450ed1b6d8
</head>
<body>

<h2>Workshop #html-form</h2>

<form onsubmit="return validateForm()">

    ชื่อ: <input type="text" id="fname"><br><br>

    สกุล: <input type="text" id="lname"><br><br>

    วันเดือนปีเกิด: <input type="date" id="birthday"><br><br>

    อายุ: <input type="number" id="age"><br><br>

    เพศ:
    <input type="radio" name="gender" value="ชาย"> ชาย
    <input type="radio" name="gender" value="หญิง"> หญิง
    <br><br>

    รูป: <input type="file" id="photo"><br><br>

    ที่อยู่:<br>
    <textarea id="address"></textarea><br><br>

    สีที่ชอบ: <input type="color" id="color"><br><br>

    แนวเพลงที่ชอบ:
    <select id="music">
        <option value="">-- เลือก --</option>
        <option value="Pop">Pop</option>
        <option value="Rock">Rock</option>
        <option value="Jazz">Jazz</option>
    </select>
    <br><br>

    <input type="checkbox" id="agree"> ยินยอม<br><br>

    <button type="submit">Submit</button>
</form>

<hr>

<h3>ข้อมูลที่กรอก</h3>
<div id="result"></div>

<script>
function validateForm() {

    let fname = document.getElementById("fname").value;
    let lname = document.getElementById("lname").value;
    let birthday = document.getElementById("birthday").value;
    let age = document.getElementById("age").value;
    let photo = document.getElementById("photo").value;
    let address = document.getElementById("address").value;
    let color = document.getElementById("color").value;
    let music = document.getElementById("music").value;
    let agree = document.getElementById("agree").checked;
    let gender = document.querySelector('input[name="gender"]:checked');

    if (
        fname === "" || lname === "" || birthday === "" || age === "" ||
        !gender || photo === "" || address === "" || music === "" || !agree
    ) {
        alert("กรุณากรอกข้อมูลให้ครบทุกช่อง");
        return false;
    }

    document.getElementById("result").innerHTML =
        "ชื่อ: " + fname + "<br>" +
        "สกุล: " + lname + "<br>" +
        "วันเดือนปีเกิด: " + birthday + "<br>" +
        "อายุ: " + age + "<br>" +
        "เพศ: " + gender.value + "<br>" +
        "รูป: " + photo + "<br>" +
        "ที่อยู่: " + address + "<br>" +
        "สีที่ชอบ: " + color + "<br>" +
        "แนวเพลงที่ชอบ: " + music + "<br>" +
        "ยินยอม: ยินยอมแล้ว";

    return false; 
}
</script>

<<<<<<< HEAD
        <button type="submit">ส่งข้อมูล</button>
    </form>
=======
    <title>My First Laravel Page</title>
</head>
<body>
    <h1>หน้านี้คือของที่ฉันเขียนเอง 🎉</h1>
>>>>>>> Stashed changes
=======
>>>>>>> a9c2f9ac3cf0deebf9764641c32f89450ed1b6d8
</body>
</html>
