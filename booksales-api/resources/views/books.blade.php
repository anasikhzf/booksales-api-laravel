<!DOCTYPE html>
<html>
<head>
    <title>List Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        @foreach ($books as $book)
            <li>
                {{ $book->title }} - <strong>{{ $book->author->name }}</strong>
            </li>
        @endforeach
    </ul>
</body>
</html>
