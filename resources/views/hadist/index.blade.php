<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hadist All</title>
</head>
<body>


    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <a href="{{ route('hadist.create') }}">Create</a>

    @foreach ($all_hadist as $hadists)
        <h1>{{ $hadists->title }}</h1>
        <h3>{{ $hadists->category }}</h3>
        <h3>{{ $hadists->source }}</h3>
        <p>{{ $hadists->text }}</p>
        <p>{{ $hadists->translation }}</p>
        <p>{{ $hadists->noted }}</p>

        {{-- <p>{!! $hadists->noted !!}</p> --}}


        <form action="{{ route('hadist.destroy', $hadists->id) }}" method="POST">
            @csrf
            @method('DELETE')

            {{-- <a href="{{ route('hadist.edit', $hadists->id) }}">Edit</a> --}}
            {{-- <button onclick="return confirm('Hapus?')">Hapus</button> --}}
        </form>
    @endforeach

    <p>{{ $all_hadist->links() }}</p>

</body>
</html>
