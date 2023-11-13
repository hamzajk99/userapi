
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        .card {
            background-color: #f0f0f0;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>

        <div class="card">
            <h2>Total Number of Unique Visitors</h2>
            <p>{{ $totalVisitors }}</p>
        </div>

        <div class="card">
            <h2>Total Number of Visitors for Each Stage</h2>
            <ul>
                @foreach($stageCounts as $stage => $count)
                    <li>{{ ucfirst($stage) }}: {{ $count }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
