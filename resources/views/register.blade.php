<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Optional for styling -->
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form action="{{ route('register.submit') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <div>
                <label for="referral_code">Referral Code (Optional):</label>
                <input type="text" id="referral_code" name="referral_code">
            </div>
            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
