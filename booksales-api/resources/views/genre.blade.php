<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genres</title>
</head>
<body>
    <h1>Genres</h1>
    
    <ul>
        @foreach ($genres as $genre)
            <li>
                <strong>{{ $genre['name'] }}</strong>
                <ul>
                    @foreach ($genre['descriptions'] as $description)
                        <li>{{ $description }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

    <p><a href="/">Back to Home</a></p>
</body>
</html>
