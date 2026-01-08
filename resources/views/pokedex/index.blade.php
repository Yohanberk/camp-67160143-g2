<h2>Pokedex</h2>
<a href="/pokedex/create">เพิ่มโปเกมอน</a>

<table border="1">
    <tr>
        <th>ชื่อ</th>
        <th>ประเภท</th>
        <th>จัดการ</th>
    </tr>

    @foreach($pokedexs as $pokemon)
    <tr>
        <td>
            <a href="/pokedex/{{ $pokemon->id }}">
                {{ $pokemon->name }}
            </a>
        </td>
        <td>{{ $pokemon->type }}</td>
        <td>
            <a href="/pokedex/{{ $pokemon->id }}/edit">แก้ไข</a>
            <form action="/pokedex/{{ $pokemon->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">ลบ</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
