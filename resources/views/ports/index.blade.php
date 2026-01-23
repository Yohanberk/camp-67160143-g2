<!DOCTYPE html>
<html>
<head>
    <title>Ports</title>
</head>
<body>

<h1>Ports</h1>

<a href="{{ route('ports.create') }}">➕ เพิ่ม Port</a>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>

    @foreach ($ports as $port)
        <tr>
            <td>{{ $port->id }}</td>
            <td>{{ $port->name }}</td>
            <td>
                <!-- ✏️ แก้ -->
                <a href="{{ route('ports.edit', $port->id) }}">✏️</a>

                <!-- 🗑 ลบ -->
                <form action="{{ route('ports.destroy', $port->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('ลบจริงมั้ย?')">🗑</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
