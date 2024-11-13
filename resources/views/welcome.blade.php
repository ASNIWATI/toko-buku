<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        /* CSS Styles */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: navy;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .button {
            background-color: white;
            color: navy;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Application</h1>
        <div class="auth-buttons">
            <a href="{{ route('login') }}" class="button">Login</a>
            <a href="{{ route('register') }}" class="button">Register</a>
        </div>
    </div>
</body>
</html>
