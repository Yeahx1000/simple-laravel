<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
</head>
<body>
    <h1>Notes</h1>

    <form method="POST" action="/notes">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <br />
        <textarea name="body" placeholder="Body"></textarea>
        <br />
        <button>Add Note</button>
    </form>

    <hr />

    @foreach ($notes as $note)
        <h2>{{ $note->title }}</h2>
        <p>{{ $note->body }}</p>
        <hr />
    @endforeach
</body>
</html>