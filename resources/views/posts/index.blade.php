<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>

<h1>Posts</h1>

<a href="{{ route('posts.create') }}">+ Add Post</a>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
    </tr>

    @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>
                <a href="{{ route('posts.edit', $post) }}">Edit</a>

                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
