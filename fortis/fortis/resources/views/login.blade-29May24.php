<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="../../../assests/tablogo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <style>
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
    </style>
</head>

<body>
    <div id="header1">
        <div class="logo">
            <!-- Your company logo goes here -->
            <img src="../assests/BSE_EQ_INE842B01015.png" alt="Company Logo">
        </div>
        <div class="navigation">
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>

                <li class="dropdown">
                    About Us <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <!-- Dropdown content for About Us -->
                    </div>
                </li>
                <li class="dropdown">
                    Specialties <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <!-- Dropdown content for Specialties -->
                    </div>
                </li>
                <li class="dropdown">
                    Our Doctors <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <!-- Dropdown content for Our Doctors -->
                    </div>
                </li>
                <li class="dropdown">
                    Resources <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <!-- Dropdown content for Resources -->
                    </div>
                </li>
                <li class="dropdown">
                    Contact Us <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <!-- Dropdown content for Contact Us -->
                    </div>
                </li>
                <li><i class="fas fa-phone phone-icon"></i>+919962599933</li>
            </ul>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form id="loginForm" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                                <div id="Uerror" class="text-danger"></div><!-- Error message for username -->
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                                <div id="Perror" class="text-danger"></div><!-- Error message for password -->
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <div class="text-center mt-3">
                        <a href="{{ route('showforget') }}">Forgot Your Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
<script>
    window.onload = function() {
        let form = document.getElementById('loginForm');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            let username = document.getElementById('email').value;
            let password = document.getElementById('password').value;
            let Uerror = document.getElementById('Uerror');
            let Perror = document.getElementById('Perror');
            Uerror.innerHTML = ""; // Clear previous error messages
            Perror.innerHTML = "";

            // Validate username and password
            if (username === "") {
                Uerror.innerHTML = "email field is required";
                return;
            }
            if (password === "") {
                Perror.innerHTML = "Password field is required";
                return;
            }

            let allData = {
                email: username,
                password: password
            };

            $.ajax({
                url: "/admin", // Replace with your actual backend URL
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: allData,
                success: function(result) {
                    alert("Login Successfully");
                    console.log(result);
                    let token = result.token;
                    localStorage.setItem('token', token);
                    // Redirect to the upload document page
                    window.location.href = '/admin-utility';
                },
                error: function(xhr, status, error) {
                    console.log(xhr);
                    // Handle error if login fails
                    if (xhr.status === 401) {
                        alert("Invalid credentials. Please try again.");
                    } else {
                        alert("An error occurred. Please try again later.");
                    }
                }
            });
        });
    };
</script>