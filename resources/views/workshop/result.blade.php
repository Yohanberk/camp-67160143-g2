<!DOCTYPE html>
<html>
<head>
    <title>ผลลัพธ์จากการส่งข้อมูล</title>
</head>
<body>
    <h2>ข้อมูลที่ได้รับ</h2>

    <p>ชื่อ: {{ $data['first_name'] }}</p>
    <p>สกุล: {{ $data['last_name'] }}</p>
    <p>วันเดือนปีเกิด: {{ $data['dob'] }}</p>
    <p>อายุ: {{ $data['age'] }}</p>
    <p>เพศ: {{ $data['gender'] }}</p>
    <p>ที่อยู่: {{ $data['address'] }}</p>
    <p>สีที่ชอบ: {{ $data['favorite_color'] ?? 'ไม่มี' }}</p>
    <p>แนวเพลงที่ชอบ: {{ $data['favorite_music'] ?? 'ไม่มี' }}</p>
    <p>ยินยอม: {{ isset($data['agree']) ? 'ตกลง' : 'ไม่ตกลง' }}</p>
    <p>รูป (ชื่อไฟล์): {{ $data['photo'] ?? 'ไม่มี' }}</p>

    <a href="/workshop-form">กลับไปหน้าฟอร์ม</a>
</body>
</html>
