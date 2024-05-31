<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fortis Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../../../assests/tablogo.jpg">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        body {
            /* font-family: "Montserrat", sans-serif; */
            font-family: 'Open Sans';
        }

        *,
        *::after,
        *::before {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: #000;
            font-size: 15px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container-grid {
            max-width: 1300px;
            margin: 0 auto;
            padding-inline: 20px;

        }

        .add-logo {
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .logo {
            width: 120px;
            height: auto;
            padding: 10px;
            margin-right: 3rem;
        }

        .logo img {
            width: 100%;
            height: 100%;
        }

        .fortis-head {
            display: flex;
            align-items: center;
            justify-content: space-between;

        }

        .fortis-add p {
            font-size: 15px;
            font-weight: 600;
            margin-top: 3%;
        }

        .inter-btn a {
            background-color: #34B366;
            padding: 10px;
            /* border-radius: 5px; */
            color: black;
        }

        .section {
            padding-block: 5rem 1rem;
        }

        .heading-cont h1 {
            font-size: 23px;
            font-weight: 500;
        }

        .footer {
            background-color: #1c2d36;
            padding: 20px;
        }

        .footer h3 {
            color: #fff;
            text-align: center;
            font-size: 15px;
            letter-spacing: 1px;
            word-spacing: 2px;
            margin: 0px;
            padding: 0.5% 0%;
            font-weight: 200;
        }

        .fortis-malar {
            box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.75);
            width: 100%;
            margin: 0px 0px 0px;
            padding-block: 4rem;
        }

        .malar-for p {
            color: #7c7c7c;
            font-size: 15px;
            letter-spacing: 1px;
            text-align: left;
            word-spacing: 2px;
        }

        .body-content {
            width: 100%;
        }

        .document-block {
            background-color: #fff;
            /* border-radius: 8px; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            margin-bottom: 20px;
            /* margin-left: 45px; */
            width: 60%;
            display: flex;
            align-items: center;
            font-size: small;
            justify-content: space-between;
            /* border: 2px solid; */
        }

        .document-block img {
            width: 30px;
            margin-right: 20px;

        }

        .document-block span {
            margin-bottom: 10px;
            /* display: block; */
            flex-grow: 1;
            color: #5cb3fd;
        }

        .document-block a {
            background-color: #1c7432;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            /* display: inline-block; */
        }

        .document-block a:hover {
            background-color: #1a9e3e;
        }

        .document-block .view-document {
            margin-left: auto;
        }

        .document-block .delete-document {
            margin-left: 10px;
        }

        .document-left {
            background-color: #e8e9ea;
            padding: 10px 20px;
            width: 25%;
        }

        .body-container {
            width: 70%;
        }

        .document-left ul {
            list-style-type: none;
            padding: 0;
            cursor: pointer;
        }

        .document-left ul ul {
            margin-top: 10px;
            list-style-type: none;
            padding-left: 20px;

        }

        .document-left ul ul li::before {
            content: '';
            display: inline-block;
            width: 4px;
            height: 4px;
            border: 1px solid #000;
            border-radius: 50%;
            margin-right: 5px;
        }

        .document-left ul li {
            margin-bottom: 15px;
            cursor: pointer;
        }

        .document-left ul .module span {
            font-weight: bold
        }

        #overview-document {
            display: flex;
            flex-direction: column;

        }

        #overview-document p {
            font-size: 14px;
            color: #676363;
            font-weight: normal;
            word-spacing: 4px;
            line-height: 19px;

        }

        .header {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            background-color: #fff;
            z-index: 999;
        }

        .document-block {
            border: 1px solid #ada2a2;
            padding: 15px;
            margin-bottom: 25px;
            position: relative;
            box-shadow: 0 0 7px rgba(0, 0, 0, 0.2);
            /* margin-left: 5%; */
            width: 75%;
            height: 15vh;
        }

        .document-title {
            /* font-weight: bold; */
            display: flex;
            align-items: center;
            font-family: 'Open Sans';
            font-size: 14px;
            color: rgb(68 189 134);
        }

        .document-title img {
            margin-right: 10px;
        }

        .download-button {
            position: absolute;
            /* top: 15px; */
            right: 15px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .download-button:hover {
            background-color: #0056b3;
        }

        .address-bnt {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .both-doc {
            display: flex;
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .toggle-btn {
            display: none;
        }

        .body-container {
            padding: 20px;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .block {
            background: linear-gradient(135deg, #ff6b6b, #f06595);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            color: #fff;
            cursor: pointer;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .block:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .block h3 {
            margin: 10px 0;
            font-size: 20px;
            color: #fff;
        }

        .block i {
            font-size: 50px;
            margin-bottom: 10px;
        }

        .edit-module {
            background-color: #ababab;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* cursor: pointer; */
            font-size: small;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        .toolbar {
            display: flex;
            justify-content: center;
            background-color: #c4d3d5;
            padding: 7px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        .toolbar button {
            background-color: #666;
            border: none;
            color: #eee;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.1) 75%, transparent 75%, transparent);
            background-size: 40px 40px;
        }

        .toolbar button:hover {
            background-color: #888;
            transform: scale(1.05);
        }

        .back-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-bottom: 2%;
        }

        .back-link:hover {
            background-color: #0056b3;
        }

        .edit-module {
            position: relative;
        }

        .edit-module::after {
            content: "ℹ️";
            /* Info icon */
            /* position: absolute; */
            top: 0;
            right: -20px;
            /* Adjust as needed */
            font-size: 16px;
            color: #f5f2f2;
            cursor: pointer;
            border-radius: 50%;
            /* Makes the border round */
            background-color: #808080;
            /* Grey fill color */
            width: 30px;
            /* Adjust as needed */
            height: 30px;
            /* Adjust as needed */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .edit-module:hover .tooltip {
            display: block;
        }

        .tooltip {
            display: none;
            position: absolute;
            top: 20px;
            right: -10%;
            /* Adjust as needed */
            background-color: #333;
            color: #fff;
            padding: 5px;
            border-radius: 5px;
            z-index: 1;
        }

        .close-tooltip {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .close-tooltip:hover {
            color: #ddd;
        }

        @media screen and (max-width: 768px) {
            .both-doc {
                flex-direction: column;
            }

            .document-left,
            .body-container {
                width: 100%;
            }

            .header {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                width: 100%;
                position: relative;
            }

            .address-bnt {
                position: absolute;
                top: -300px;
                left: 0;
                right: 0;
                width: 100%;
                height: 300px;
                background-color: #1a9e3e;
                flex-direction: column;
                padding: 2rem .9rem;
                align-items: flex-start;
                justify-content: flex-start;
                color: #fff;
            }

            .fortis-add {
                order: 2;
                margin-top: 2rem;
            }

            .inter-btn a {
                background-color: transparent;
            }

            .fortis-add p {
                font-weight: 500;
            }

            .show-menu {
                top: 70px !important;
            }

            .toggle-btn {
                display: inline-block;
                font-size: 25px;
                font-weight: 500;
            }

            .section {
                padding-block: 2rem 1rem;
            }

            .download-button {
                position: absolute;
                /* top: 15px; */
                right: 15px;
                padding: 10px 15px;
                background-color: #007bff;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;

            }

        }

        @media screen and (max-width: 425px) {

            .document-block {
                height: 45vh;
                display: flex;
                flex-direction: column;

            }

            .downloadpdf {
                margin-left: -20%;
            }

            .document-block a {

                margin-top: 100px;
                margin-right: 30%;
            }

            .document-title {
                width: 100%;
                text-align: center;
                flex-direction: column;
                gap: 2rem;
                margin-top: -80px;
                font-size: 10px;
            }

            .download-button {
                margin-top: 10px;
                /* position: absolute; */
            }

            .toggle-button {
                width: 10%;
                margin-bottom: -30%;
                margin-left: 10%;
            }

        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container-grid">
            <div class="fortis-head">
                <div class="add-logo">
                    <div class="logo">
                        <a href="{{ route('modify') }}" class="home-link">
                            <img src="../assests/BSE_EQ_INE842B01015.png" alt="Company Logo">
                        </a>
                    </div>
                </div>

                <div class="address-bnt" id="address-menu">
                    <div class="fortis-add">
                        <p>
                            FORTIS MALAR HOSPITALS LIMITED <br>
                            Regd. Office: Fortis Hospital, Sector 62, Phase – VIII, Mohali – 160062
                            <br>
                            CIN: L85110PB1989PLC045948 ISIN: INE842B01015
                        </p>
                    </div>
                    <div class="inter-btn">
                        <a href="{{ route('modify') }}">Investor Relations</a>
                        <a href="{{ route('registered') }}"><i class="fas fa-user-plus"></i> Register</a>
                        <a href="#" onclick="logout(event)">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>

                <div class="toggle-btn" id="toggle-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </div>
    </header>

    <section class="section investor">
        <div class="container-grid heading-cont">
            <h1>Investor Relations</h1>
        </div>
    </section>
    <div class="body-content">
        <div class="container-grid both-doc">
            <div class="document-left">
                <ul>
                    <li>
                        <div class="edit-module">Click on any module to edit.
                            <div class="tooltip">This section is for personalizing the module section. Here, you can add modules and their sub-categories.<br>
                                <i class="fas fa-arrow-circle-right"></i> for reactivating module.<br>
                                <i class="fas fa-trash"></i> for deleting the module or subcategory.<br>
                                <i class="fas fa-plus-circle"></i> for adding subcategory.<br>
                                <span class="close-tooltip">&times;</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('modify') }}">Overview</a>
                    </li>
                    @foreach($modules as $module)
                    @if ($module->slug == 'investor-services-nomination')
                    <li>
                        <a href="{{ route('investor_admin', ['slug' => 'investor-services-nomination']) }}">Investor Services & Nomination</a>
                    </li>
                    @elseif ($module->slug == 'board-of-directors')
                    <li>
                        <a href="{{ route('Board.admin', ['slug' => 'board-of-directors']) }}">Board Of Directors</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('fetch.admin', ['slug' => $module->slug]) }}">{{ $module->modname }}</a>
                        @if (!empty($module['subcategories']))
                        <ul>
                            @foreach ($module->subcategories as $subcategory)
                            <li>
                                <a href="{{ route('fetch.admin', ['slug' => $module->slug, 'subcategory' => $subcategory['DocName']]) }}">{{ $subcategory['sub_name'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <div class="body-container">
                <div><a href="{{ route('modify') }}" class="back-link"><i class="fas fa-arrow-left"></i>Back</a></div>
                <div class="toolbar">
                    <button onclick="document.execCommand('bold')" style="font-weight: bold;">Bold</button>
                    <button onclick="document.execCommand('italic')" style="font-style: italic;">Italic</button>
                    <button onclick="document.execCommand('underline')" style="text-decoration: underline;">Underline</button>
                </div>
                <div class="overview-document" style="font-size: 14px;color: #676363;font-weight: normal;word-spacing: 4px;line-height: 19px" contenteditable="true" id="editableContent" id="overview-document-html">
                    <p>As of February 1, 2024, the business operations of Fortis Malar Hospital, Chennai, have been transferred to MGM Healthcare Pvt. Ltd. Malar Hospital is now owned and managed by MGM Healthcare. Fortis Malar Hospitals Limited, nor any entity of its group/ affiliated companies no longer have any ownership or control over the management or operations of Malar Hospital.</p><br>
                    <p>For further information about Malar Hospital, please visit the MGM Healthcare website at https://mgmhealthcare.in/</p><br>
                    <p style="font-style: italic;">* If you click the link, you will be redirected to the website of MGM Healthcare, which is solely owned, operated and managed by MGM Healthcare over which Fortis Malar Hospitals Limited or any of its group companies / affiliate entities (collectively, Fortis Group) does not have any control.</p><br>
                    <p style="font-style: italic;">Fortis Group does not make any representation, warranty, recommendation or guarantee in respect of the products/services being advertised or offered by MGM Healthcare (whether through its website or otherwise) nor does Fortis Group implicitly or explicitly support or endorse the sale or purchase of any of MGM Healthcare’s products/services. Fortis Group does not assume any responsibility for any correspondence or business dealings between any person and MGM Healthcare. </p><br>
                    <p style="font-style: italic;">By accessing MGM Healthcare’s website through the aforesaid link, you agree and confirm to abide by the terms and conditions of FMHL’s website (including the aforementioned terms).</p><br>
                </div>
                <button onclick="saveContent()" style="margin-top: 10px; padding: 8px 16px; font-size: 16px; font-weight: bold; border: none; border-radius: 4px; background-color: #4CAF50; color: white; cursor: pointer; transition: background-color 0.3s;">Save</button>
            </div>
        </div>
    </div>
    </div>

    <section class="section fortis-malar">
        <div class="container-grid">
            <div class="malar-for">
                <p>Fortis Malar Hospital (formerly known as Malar Hospital) was acquired by Fortis Healthcare (India)
                    Limited in early 2008. The hospital founded in 1992, is established as one of the largest corporate
                    hospitals in Chennai providing quality super specialty and multi-specialty healthcare services. ̑
                </p>
            </div>

        </div>
    </section>

    <footer class="footer">
        <h3>2024 Fortis Malar Hospital. All Rights Reserved</h3>
    </footer>
</body>
<script>
    const toggle = document.getElementById('toggle-btn');
    const address = document.getElementById('address-menu')

    if (toggle) {
        toggle.addEventListener('click', () => {
            address.classList.toggle('show-menu')
        })
    }
</script>
<script>
    // Load saved content from local storage if it exists
    window.onload = function() {
        const savedContent = localStorage.getItem('editableContent');
        if (savedContent) {
            document.getElementById('editableContent').innerHTML = savedContent;
        }
    }

    // Function to save content to local storage
    function saveContent() {
        const content = document.getElementById('editableContent').innerHTML;
        localStorage.setItem('editableContent', content);
        alert('Content saved!');
    }
</script>
<script>
    // Load saved content from local storage if it exists
    window.onload = function() {
        const savedContent = localStorage.getItem('editableContent');
        if (savedContent) {
            document.getElementById('editableContent').innerHTML = savedContent;
            // document.getElementById('overview-document-html').innerHTML = savedContent;
        }
    }

    // Function to save content to local storage and update HTML
    function saveContent() {
        const content = document.getElementById('editableContent').innerHTML;
        localStorage.setItem('editableContent', content);
        // document.getElementById('overview-document-html').innerHTML = content;
        alert('Content saved!');
        location.reload();
    }
</script>
tooltip closed

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tooltips = document.querySelectorAll('.tooltip');
        tooltips.forEach(function(tooltip) {
            const closeButton = tooltip.querySelector('.close-tooltip');
            closeButton.addEventListener('click', function() {
                tooltip.style.display = 'none';
            });
        });
    });
</script>
<!-- logout -->
<script>
    function logout(event)
    {
        event.preventDefault();

        fetch('{{ route('logout') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
        }).then(response => {
            if (response.ok) {
                alert("Logout successfully");
                window.location.href = '{{ route('login') }}';
            } else {
                alert('Logout failed');
            }
        }).catch(error => {
            console.error('Error:', error);
            alert('Logout failed');
        });
    }
</script>

</html>