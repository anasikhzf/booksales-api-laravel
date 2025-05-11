<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors</title>
</head>
<body>
    <h1>Authors</h1>
    
    <ul>
        @foreach ($authors as $author)
            <li>
                <strong>{{ $author['name'] }}</strong>
                <ul>
                    @foreach ($author['descriptions'] as $description)
                        <li>{{ $description }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

    <p><a href="/">Back to Home</a></p>
</body>
</html>
