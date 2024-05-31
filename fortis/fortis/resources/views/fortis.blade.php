<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fortis</title>
    <link rel="icon" type="image/x-icon" href="https://www.fortismalar.com/assets/dist/images/favicon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                <li class="dropdown">
                    Home <span class="fa fa-caret-down"></span>
                    <div class="dropdown-content">
                        <ul class="dropdown-content">
                            <li><a href="#">Welcome</a></li>
                            <li><a href="#">Introduction</a></li>
                            <li><a href="#">Mission</a></li>
                        </ul>
                    </div>
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


    <div id="header2">
        <div class="Greenbelt" style="font-family: Arial, sans-serif; font-size: larger;">
            I Am Looking For
        </div>
        <div class="hollow-boxes">
            <div class="hollow-box">
                <i class="fas fa-heart"></i>
                Health Packages
            </div>
            <div class="hollow-box">
                <i class="fas fa-user-md"></i>
                International Patients
            </div>
        </div>
    </div>
    <div id="header3">

    </div>
    <div class="investor-relations" style="font-family: Arial, sans-serif; font-size: larger;margin-inline-start: 15px;padding: 6px;">
        Investor Relations
    </div>
    <div id="container">
        <div id="modules">
            <div class="module" onclick="toggleSubmodule(1)">
                <p>Overview</p>
            </div>
            <div class="module" onclick="toggleSubmodule(2)">
                <p>AGM Documents</p>
            </div>
            <div class="module" onclick="toggleSubmodule(4)">
                <p>Corporate Announcements</p>
            </div>
            <div class="module" onclick="toggleSubmodule(5)">
                <p>Composite scheme of Arrangements and Amalgamation</p>
            </div>
            <div class="module" onclick="toggleSubmodule(3)">
                <p>Financial Results</p>
                <ul class="financial-statements">
                    <li onclick="toggleFinancialSubmodule(1)">Financial Statements and Advertisements</li>
                    <li onclick="toggleFinancialSubmodule(2)">Outcome of the Board Meetings</li>
                </ul>
            </div>
        </div>
        <div id="content">
            <div class="submodule" id="submodule1">
                <div class="document-block">
                    <img src="../assests/pdf.jpg" alt="PDF Logo">
                    <p>Description of PDF Document 1</p>
                    <a href="#">Download PDF 1</a>
                </div>
                <div class="document-block">
                    <img src="../assests/pdf.jpg" alt="PDF Logo">
                    <p>Description of PDF Document 2</p>
                    <a href="#">Download PDF 2</a>
                </div>
            </div>
            <div class="submodule" id="submodule2">
                <div class="document-block">
                    <img src="../assests/pdf.jpg" alt="PDF Logo">
                    <p>Description of PDF Document 3</p>
                    <a href="#">Download PDF 3</a>
                </div>
                <div class="document-block">
                    <img src="../assests/pdf.jpg" alt="PDF Logo">
                    <p>Description of PDF Document 4</p>
                    <a href="#">Download PDF 4</a>
                </div>
            </div>
            <div class="submodule" id="submodule4">
                <div class="document-block">
                    <img src="../assests/pdf.jpg" alt="PDF Logo">
                    <p>Description of PDF Document 9</p>
                    <a href="#">Download PDF 9</a>
                </div>
                <div class="document-block">
                    <img src="../assests/pdf.jpg" alt="PDF Logo">
                    <p>Description of PDF Document 10</p>
                    <a href="#">Download PDF 10</a>
                </div>
            </div>
            <div class="submodule" id="submodule5">
                <div class="document-block">
                    <img src="../assests/pdf.jpg" alt="PDF Logo">
                    <p>Description of PDF Document 11</p>
                    <a href="#">Download PDF 11</a>
                </div>
                <div class="document-block">
                    <img src="../assests/pdf.jpg" alt="PDF Logo">
                    <p>Description of PDF Document 12</p>
                    <a href="#">Download PDF 12</a>
                </div>
            </div>

            <div class="submodule" id="submodule3">
                <div class="document-block">
                    <img src="../assests/pdf.jpg" alt="PDF Logo">
                    <p>Description of PDF Document 5</p>
                    <a href="#">Download PDF 5</a>
                </div>
                <div class="document-block">
                    <img src="../assests/pdf.jpg" alt="PDF Logo">
                    <p>Description of PDF Document 6</p>
                    <a href="#">Download PDF 6</a>
                </div>
                <div class="submodule" id="submodule32">
                    <div class="document-block">
                        <img src="../assests/pdf.jpg" alt="PDF Logo">
                        <p>Description of PDF Document 7 - Level 2</p>
                        <a href="#">Download PDF 7 - Level 2</a>
                    </div>
                    <div class="document-block">
                        <img src="../assests/pdf.jpg" alt="PDF Logo">
                        <p>Description of PDF Document 8 - Level 2</p>
                        <a href="#">Download PDF 8 - Level 2</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <script>
        function toggleSubmodule(moduleId) {
            // Hide all submodules
            var submodules = document.querySelectorAll('.submodule');
            submodules.forEach(function(submodule) {
                submodule.style.display = 'none';
            });

            // Show the selected submodule
            var submoduleToShow = document.getElementById('submodule' + moduleId);
            if (submoduleToShow) {
                submoduleToShow.style.display = 'block';
            }

            // Hide level 2 submodule if Module 3 is not clicked
            if (moduleId !== 3) {
                var submodule2 = document.getElementById('submodule32');
                if (submodule2) {
                    submodule2.style.display = 'none';
                }
            }
        }

        function toggleFinancialSubmodule(submoduleId) {
            // Hide all submodules except the financial submodules
            var submodules = document.querySelectorAll('.submodule');
            submodules.forEach(function(submodule) {
                submodule.style.display = 'none';
            });

            // Show the selected submodule
            var submoduleToShow = document.getElementById('submodule3' + submoduleId);
            if (submoduleToShow) {
                submoduleToShow.style.display = 'block';
            }

            // Hide level 2 submodule if Module 3 is not clicked
            if (submoduleId !== 3) {
                var submodule2 = document.getElementById('submodule32');
                if (submodule2) {
                    submodule2.style.display = 'none';
                }
            }
        }
    </script>
</body>

</html>