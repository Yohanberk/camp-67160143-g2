<!DOCTYPE html>
<html>
<head>
    <title>Edit Port</title>
</head>
<body>

<h1>แก้ไข Port</h1>

<form method="POST" action="{{ route('ports.update', $port->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $port->name }}">
    <br><br>

    <button type="submit">💾 บันทึก</button>
</form>

<a href="{{ route('ports.index') }}">⬅ กลับ</a>

</body>
</html>
