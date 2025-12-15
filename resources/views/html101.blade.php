<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ฟอร์มสมัคร</title>
</head>
<body>

<h2>ฟอร์มสมัครสมาชิก</h2>

<form id="html-form" onsubmit="return checkForm()">

  ชื่อ<br>
  <input type="text" id="fname"><br><br>

  สกุล<br>
  <input type="text" id="lname"><br><br>

  วันเดือนปีเกิด<br>
  <input type="date" id="birth"><br><br>

  อายุ<br>
  <input type="number" id="age"><br><br>

  เพศ<br>
  <input type="radio" name="gender" value="male"> ชาย
  <input type="radio" name="gender" value="female"> หญิง
  <br><br>

  รูป<br>
  <input type="file" id="photo"><br><br>

  ที่อยู่<br>
  <textarea id="address"></textarea><br><br>

  สีที่ชอบ<br>
  <input type="color" id="color"><br><br>

  แนวเพลงที่ชอบ<br>
  <select id="music">
    <option value="">-- เลือกแนวเพลง --</option>
    <option value="pop">Pop</option>
    <option value="rock">Rock</option>
    <option value="jazz">Jazz</option>
  </select>
  <br><br>

  <input type="checkbox" id="agree">
  ยินยอมเงื่อนไข<br><br>

  <button type="submit">Submit</button>

</form>
<script>
function checkForm() {

  if (document.getElementById("fname").value == "") {
    alert("กรุณากรอกชื่อ");
    return false;
  }

  if (document.getElementById("lname").value == "") {
    alert("กรุณากรอกสกุล");
    return false;
  }

  if (document.getElementById("birth").value == "") {
    alert("กรุณาเลือกวันเกิด");
    return false;
  }

  if (document.getElementById("age").value == "") {
    alert("กรุณากรอกอายุ");
    return false;
  }

  let gender = document.getElementsByName("gender");
  if (!gender[0].checked && !gender[1].checked) {
    alert("กรุณาเลือกเพศ");
    return false;
  }

  if (document.getElementById("photo").value == "") {
    alert("กรุณาเลือกรูป");
    return false;
  }

  if (document.getElementById("address").value == "") {
    alert("กรุณากรอกที่อยู่");
    return false;
  }

  if (document.getElementById("music").value == "") {
    alert("กรุณาเลือกแนวเพลงที่ชอบ");
    return false;
  }

  if (!document.getElementById("agree").checked) {
    alert("กรุณายินยอมเงื่อนไข");
    return false;
  }

  alert("ส่งข้อมูลเรียบร้อย");
  return true;
}
</script>


</body>
</html>
