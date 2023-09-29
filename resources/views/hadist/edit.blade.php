<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Hadist</title>
</head>
<body>
    <form action="{{ route('hadist.update', $old_data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" value="{{ $old_data->title }}" name="title" id="title"> <label for="title">Title</label>
        <input type="text" value="{{ $old_data->source }}" name="source" id="source"> <label for="source">Source</label>
        <textarea name="text" id="text" cols="30" rows="10">{{ $old_data->text }}"</textarea> <label for="text">Text Hadist</label>
        <textarea name="translation" id="translation" cols="30" rows="10">{{ $old_data->translation }}"</textarea> <label for="translation">Translation</label>
        <input type="text" value="{{ $old_data->category }}" name="category" id="category"> <label for="category">Category</label>
        <textarea name="noted" id="noted" cols="30" rows="10">{{ $old_data->noted }}"</textarea> <label for="noted">Noted</label>

        <button>Ubah</button>
    </form>
</body>
</html>