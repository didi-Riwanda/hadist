<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Hadist</title>
</head>
<body>
    <form action="{{ route('hadist.store') }}" method="POST">
        @csrf

        <input type="text" name="title" id="title"> <label for="title">Title</label>
        <input type="text" name="source" id="source"> <label for="source">Source</label>
        <textarea name="text" id="text" cols="30" rows="10"></textarea> <label for="text">Text Hadist</label>
        <textarea name="translation" id="translation" cols="30" rows="10"></textarea> <label for="translation">Translation</label>
        <input type="text" name="category" id="category"> <label for="category">Category</label>
        <textarea name="noted" id="noted" cols="30" rows="10"></textarea> <label for="noted">Noted</label>

        <button>Save</button>
    </form>
</body>
</html>