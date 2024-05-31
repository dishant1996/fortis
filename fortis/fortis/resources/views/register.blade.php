<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="icon" type="image/x-icon" href="https://www.fortismalar.com/assets/dist/images/favicon.png">
    <style>
        .card {
            margin-top: 80px;
            padding: 35px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            max-width: 500px;
            /* Adjust the maximum width as needed */
            background-color: #f9f9f9;
            /* Background color for the form */
        }

        .card-title {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 40px;
        }

        label {
            font-weight: bold;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        select.form-control {
            height: 40px;
            /* Match the height of text inputs */
        }

        .btn-primary {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 13px;
        }

        .phone-icon {
            transform: scaleX(-1);
        }

        #header1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
        }


        .logo img {
            width: 100px;

        }

        .navigation ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navigation li {
            display: inline;
            margin-right: 30px;
            list-style-type: none;
        }

        .navigation li.dropdown .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .navigation .dropdown-content li {
            display: block;
        }

        .navigation .dropdown-content li a {
            padding: 12px 16px;
            text-decoration: none;
            color: black;
            display: block;
        }

        .navigation .dropdown-content li a:hover {
            background-color: #f1f1f1;
        }


        .navigation .dropdown:hover .dropdown-content {
            display: block;
        }

        .navigation .dropdown .fa-caret-down {
            position: absolute;
            top: 50%;
            right: -10px;
            transform: translateY(-50%);
            font-size: 12px;
            color: #000;

        }

        #header2 {
            background-color: #57bb83;
            color: #fff;
            padding: 28px;
            text-align: start;
        }

        #header3 {
            background-color: #ffffff;
            color: #fff;
            padding: 5px;
            text-align: center;
        }

        #container {
            display: flex;
            min-height: 100vh;
        }

        #modules {
            flex: 0.3;
            background-color: #ddd;
            padding: 20px;
            margin-left: 16px;
        }

        #content {
            flex-grow: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .module {
            margin-bottom: 20px;
            cursor: pointer;

        }

        .module h2 {
            margin-top: 0;
        }

        .submodule {
            display: none;
            margin-left: 20px;
        }

        .document-block {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            position: relative;
            width: 60%;

        }

        .document-block p {
            margin-bottom: 10px;
        }

        .document-block a {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: #1c7432;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }


        .document-block p,
        .document-block a {
            display: inline-block;
            vertical-align: middle;
            margin: 0;

        }

        .document-block a:hover {
            background-color: #1a9e3e;
        }

        .document-block img {
            max-width: 50px;
            margin-right: 10px;
            vertical-align: middle;
            display: inline-block;
        }

        ul {
            list-style-type: none;

        }

        ul li {
            position: relative;
            margin-top: 10px;
        }

        .financial-statements li:before {
            content: "";
            position: absolute;
            left: -20px;
            top: 50%;
            transform: translateY(-50%);
            width: 5px;
            height: 5px;
            border: 1px solid #000;
            border-radius: 50%;
        }

        .financial-statements li {
            margin-top: 10px;

        }

        .navigation .dropdown .fa-caret-down {
            margin-left: 5px;
        }

        .navigation ul li:not(:last-child) {
            cursor: pointer;
        }

        #header2 {
            position: relative;
            /* Required for absolute positioning */
            background-color: #57bb83;
            color: #fff;
            padding: 28px;
            text-align: start;
        }

        .hollow-boxes {
            position: absolute;
            top: 50%;
            right: 245px;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
        }

        .hollow-box {
            border: 2px solid #fff;
            border-radius: 1px;
            padding: 15px;
            margin-left: 10px;
            cursor: pointer;
            width: 145px;

        }

        .hollow-box i {
            color: #fff;
        }

        /* new */
    </style>
</head>

<body style="margin: 0; padding: 0;">

    <!-- Header Section -->
    <div id="header" style="background-color: #f8f9fa; padding: 10px 20px; position: fixed; width: 100%; top: 0; z-index: 1000;">
        <div class="logo" style="display: inline-block;">
            <!-- Your company logo goes here -->
            <img src="{{ URL::to('/') }}assests/BSE_EQ_INE842B01015.png" alt="Company Logo" style="max-width: 100px;">
        </div>
        <div class="navigation" style="display: inline-block;">
            <ul style="list-style-type: none;">
                <li class="dropdown"> <!-- New user option dropdown -->
                    User <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <a href="login">Login</a>
                        <a href="register">Register</a>
                    </div>
                </li>

                <li style="display: inline-block; margin-right: 20px;"><a href="/" style="text-decoration: none; color: #333; font-weight: bold;">Home</a></li>
                <li class="dropdown" style="display: inline-block; margin-right: 20px;">
                    About Us <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <!-- Dropdown content for About Us -->
                    </div>
                </li>
                <li class="dropdown" style="display: inline-block; margin-right: 20px;">
                    Specialties <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <!-- Dropdown content for Specialties -->
                    </div>
                </li>
                <li class="dropdown" style="display: inline-block; margin-right: 20px;">
                    Our Doctors <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <!-- Dropdown content for Our Doctors -->
                    </div>
                </li>
                <li class="dropdown" style="display: inline-block; margin-right: 20px;">
                    Resources <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <!-- Dropdown content for Resources -->
                    </div>
                </li>
                <li class="dropdown" style="display: inline-block; margin-right: 20px;">
                    Contact Us <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <!-- Dropdown content for Contact Us -->
                    </div>
                </li>
                <li style="display: inline-block;"><i class="fas fa-phone phone-icon"></i>+919962599933</li>

            </ul>
        </div>
    </div>

    <!-- Registration Form Section -->
    <div class="card" style="margin-top: 80px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; width: 80%; margin-left: auto; margin-right: auto;">
        <h2 class="card-title" style="margin-bottom: 20px;">User Registration</h2>
        <form id="registrationForm" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="usertype">User Type:</label>
                <select id="usertype" name="usertype" class="form-control" required>
                    <option value="admin">admin</option>
                    <option value="guest">guest</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <!-- If you're using Bootstrap, make sure to include its JS file here -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <!-- If you're using FontAwesome icons, make sure to include its JS file here -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script> -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get a reference to the form
        const form = document.getElementById('registrationForm');

        // Add event listener for form submission
        form.addEventListener('submit', function(event) {
            // Prevent default form submission
            event.preventDefault();

            // Get form data
            const formData = new FormData(form);

            // Send AJAX request to handle registration
            fetch('/register', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    // If registration is successful, redirect to the desired page
                    alert('User registered successfully');  
                    window.location.href = '/admin-utility';
                } else {
                    // Handle registration failure
                    console.error('Registration failed');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
</script>
</body>

</html>

</html>