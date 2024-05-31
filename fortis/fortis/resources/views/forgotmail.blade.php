
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../../assests/tablogo.jpg">
    <title>Password Reset</title>
    <style>
        .reset-password-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #acb1b7;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .reset-password-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Fortis Malar Password Reset</h1>
    <p>If you requested a password reset, click the link below:</p>
    <a href="{{route('password.reset', $token)}}" class="reset-password-link" title="Reset your Fortis Malar password">
        Reset Password
    </a>
</body>
</html>
