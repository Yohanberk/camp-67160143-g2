<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>

<h1>Edit Post</h1>

<form method="POST" action="{{ route('posts.update', $post) }}">
    @csrf
    @method('PUT')

    <div>
        <label>Title</label><br>
        <input type="text" name="title" value="{{ $post->title }}">
    </div>

    <div>
        <label>Content</label><br>
        <textarea name="content">{{ $post->content }}</textarea>
    </div>

    <button type="submit">Update</button>
</form>

<a href="{{ route('posts.index') }}">Back</a>

</body>
</html>
