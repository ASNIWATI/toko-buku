<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .register-container h2 {
            margin-bottom: 1rem;
            color: #333;
        }
        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            margin-top: 1rem;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .register-container button {
            background-color: #000080;
            color: #fff;
            padding: 0.5rem 1rem;
            margin-top: 1rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .register-container button:hover {
            background-color: #00005a;
        }
        .register-container a {
            color: #000080;
            display: block;
            margin-top: 1rem;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">REGISTER</button>
        </form>
        <a href="{{ route('login') }}">Already have an account? Log in</a>
    </div>
</body>
</html>
