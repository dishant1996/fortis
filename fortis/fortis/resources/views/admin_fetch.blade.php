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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://fortismalarhospital.com/assests/tablogo.jpg">
    <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->
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
            width: 100%;
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
            width: 100%;
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
            /* position: absolute; */
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

        /* Style for the icon above the container */
        /* Style for the upload button */
        

        /* Style for the icon inside the body container */
        .document-upload-icon {
            display: inline-block;
            padding: 5px 10px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 3px;
            cursor: pointer;
        }

        .document-upload-icon i {
            margin-right: 5px;
            /* Spacing between icon and text */
        }

        .toggle-text {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 10px;
            font-weight: bold;
            color: white;
            width: 50%;
            text-align: center;
            pointer-events: none;
            transition: opacity 0.4s;
        }
        
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 45px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #66bb6a;
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }

        .download-button.disabled {
            pointer-events: none;
            opacity: 0.6;
        }

        .document-title {
            width: 70%;
        }

        .downloadpdf {
            width: 15%;
        }

        .toggle-button {
            width: 10%;
        }

        .stylish-button {
            background-color: #4CAF50;
            color: white;
            padding: 3px 15px;
            /* Some padding */
            text-align: center;
            /* Centered text */
            text-decoration: none;
            /* Remove underline */
            display: inline-block;
            /* Get it to display as an inline-block */
            font-size: 12px;
            /* Increase font size */
            cursor: pointer;
            /* Pointer/hand icon */
            border-radius: 12px;
            /* Rounded corners */
            transition-duration: 0.4s;
            /* Transition effect */
            width: 16%;
        }

        .stylish-button:hover {
            background-color: white;
            /* White background on hover */
            color: #4CAF50;
            /* Green text on hover */
            border: 2px solid #4CAF50;
            /* Green border on hover */
        }

        .stylish-button i {
            margin-right: 8px;
            /* Space between icon and text */
        }

        .deactivated-module {
            color: red;
        }

        .fa-trash-alt:before {
            margin-right: 10px;
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

        }

        @media screen and (max-width: 425px) {

            .document-block {
                height: 45vh;
                display: flex;
                flex-direction: column;
            }

            .document-block a {

                margin-top: 100px;
                margin-right: 30%;
            }

            .document-title {
                width: 100%;
                text-align: center;
                flex-direction: column;
                /* gap: 2rem; */
                /* margin-top: -0px; */
                font-size: 10px;
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
                        <img src="https://fortismalarhospital.com/assests/BSE_EQ_INE842B01015.png" alt="Company Logo">
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
                    <form action="{{ route('add.module') }}" method="POST" id="addModuleForm">
                        @csrf
                        <input type="text" name="modname" placeholder="  Add Module" required style="    border-radius: 5px;margin-bottom: 10px;height: 5vh;width: 75%;">
                        <button type="submit" class="stylish-button">
                            <i class="fas fa-plus"></i>
                        </button>
                    </form>
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
                    <li id="module_{{ $module->slug }}" class="{{ $module->isActive == 0 ? 'deactivated-module' : '' }}">
                        <a href="{{ route('fetch.admin', ['slug' => $module->slug]) }}"><i class="fas fa-trash-alt" onclick="deleteModule('{{ $module->slug }}')"></i>{{ $module->modname }}</a>
                        <span class="add-subcategory-icon">
                            <i class="fas fa-plus-circle" onclick="openAddSubcategoryForm('{{ $module->slug }}')"></i>
                        </span>
                        @if($module->isActive == 0)
                        <i class="fas fa-arrow-circle-right reactivate-module" onclick="reactivateModule('{{ $module->slug }}')"></i>
                        @endif

                        <!-- add subcatgeory form -->

                        <div id="addSubcategoryForm_{{ $module->slug }}" class="add-subcategory-form" style="display: none;">
                            <form id="form_{{ $module->slug }}">
                                @csrf
                                <input type="hidden" name="modname" value="{{ $module->slug }}">
                                <label for="subcategoryName_{{ $module->slug }}"></label>
                                <input type="text" id="subcategoryName_{{ $module->slug }}" name="subcategory" required>
                                <button type="button" onclick="submitSubcategoryForm('{{ $module->slug }}')">Add Subcategory</button>
                                <button type="button" onclick="closeSubcategoryForm('{{ $module->slug }}')"><i class="fas fa-times"></i></button>
                            </form>
                        </div>

                        @if (!empty($module['subcategories']))
                        <ul>
                            @foreach ($module->subcategories as $subcategory)
                            <li id="subcategory_{{ $subcategory['DocName'] }}" class="{{ $subcategory['isActive'] == '0' ? 'deactivated-module' : '' }}">
                                <a href="{{ route('fetch.admin', ['slug' => $module->slug, 'subcategory' => $subcategory['DocName']]) }}">
                                    <i class="fas fa-trash-alt" onclick="deleteSubcategory('{{ $subcategory['DocName'] }}')"></i>{{ $subcategory['sub_name'] }}
                                </a>
                                @if($subcategory['isActive'] == 0)
                                <i class="fas fa-arrow-circle-right reactivate-module" onclick="reactivateSubcategory('{{ $subcategory['DocName'] }}')"></i>
                                @endif
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
                <form id="uploadForm" action="{{ route('upload.document', ['slug' => request()->route('slug'), 'subcategory' => request()->route('subcategory')]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="file-upload" class="upload-btn" style="height: 8vh;">Choose File</label>
                    <input id="file-upload" type="file" name="file[]" multiple>
                    <!-- Submit button -->
                    <button type="submit" class="upload-btn"><i class="fas solid fa-upload"></i></button>
                </form>

                <div class="container">
                    @if(!empty($DocArray))
                    @foreach($DocArray as $docName => $docData)
                    <div class="document-block">
                        <div class="document-title">
                            <img src="../../../assests/pdf.jpg" alt="PDF Logo" width="20" height="20">
                            {{ $docName }}
                        </div>
                        <div class="downloadpdf"> <a href="{{ $docData['link'] }}" class="download-button" download="{{ $docName }}">Download</a>
            </div>
                        <div class="toggle-button">
                            <input type="hidden" id="docName" value="{{ $docName }}">
                            <input type="hidden" id="modName" value="{{ $module->slug }}">
                            <label class="toggle-switch">
                                <!-- <input type="checkbox" class="toggle-checkbox" onclick="toggleDocumentState('<?php echo $docName; ?>')" checked> -->
                                <input type="checkbox" class="toggle-checkbox" onclick="toggleDocumentState('{{ $docName }}')" {{ $docData['isActive'] ? 'checked' : '' }}>
                                <span class="slider round"></span>
                                <!-- <span class="toggle-text on">On</span>
                                <span class="toggle-text off">Off</span> -->
                            </label>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if(!empty($subDocArray))
                    @foreach($subDocArray as $docName => $link)
                    <div class="document-block">
                        <div class="document-title">
                            <img src="../../../assests/pdf.jpg" alt="PDF Logo" width="20" height="20">
                            {{ $docName }}
                        </div>
                        <div class="downloadpdf"><a href="{{ $link }}" class="download-button" download="{{ $docName }}">Download</a> </div>
                        <div class="toggle-button">
                            <input type="hidden" id="docName" value="{{ $docName }}">
                            <input type="hidden" id="modName" value="{{ $module->slug }}">
                            <label class="toggle-switch">
                                <input type="checkbox" class="toggle-checkbox" onclick="toggleDocumentState('<?php echo $docName; ?>')" checked>
                                <span class="slider round"></span>
                                <span class="toggle-text active">Active</span>
                                <span class="toggle-text inactive">Inactive</span>
                            </label>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if(empty($DocArray) && empty($subDocArray))
                    <p>No active documents available.</p>
                    @endif
                </div>

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
<!-- for file upload -->
<script>
    document.getElementById("uploadForm").addEventListener("submit", function(event) {
        event.preventDefault();

        var formData = new FormData(this);

        fetch(this.action, {
                method: this.method,
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    alert("Successfully uploaded!");
                    location.reload();
                } else {
                    alert("Failed to upload.");
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert("An error occurred.");
            });
    });
</script>
<!-- document activate de-activate -->
<script>
    function toggleDocumentState(docName) {
        console.log(isActive);
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        var checkbox = document.querySelector(`input[onclick="toggleDocumentState('${docName}')"]`);
        var isActive = checkbox.checked ? '1' : '0';
        
        $.ajax({
            url: '/toggle-document',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: {
                docName: docName,
                isActive: isActive
            },
            success: function(response) {
                // Handle success response
                console.log(response);
                // checkbox.checked = response.isActive === '1'; 
            },
            
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
            }
        });
    }
    
</script>
<script>
    $(document).ready(function() {
        $(".toggle-btn").click(function(e) {
            e.preventDefault();
            $(this).find('i').toggleClass('fa-bin fa-reactivate');
            $(this).next('.subcategories').slideToggle();
        });
    });
</script>
<!-- delete module -->
<script>
    function deleteModule(modname) {
        if (confirm("Are you sure you want to delete this module?")) {
            $.ajax({
                url: '{{ route("delete.module") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    modname: modname
                },
                success: function(response) {
                    if (response.status_code == 200) {
                        alert(response.message);
                        $('#module_' + modname).addClass('deactivated-module');
                        $('#module_' + modname + ' .reactivate-module').show();
                        if (response.module.isActive == '0') {
                            // Module deactivated, add class
                            $('#module_' + modname).addClass('deactivated-module');
                        } else {
                            // Module activated, remove class
                            $('#module_' + modname).removeClass('deactivated-module');
                        }
                    } else {
                        alert(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while deleting the module.');
                }
            });
        }
    }
</script>

<script>
    function reactivateModule(modname) {
        if (confirm("Are you sure you want to reactivate this module?")) {
            $.ajax({
                url: '{{ route("reactivate.module") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    modname: modname
                },
                success: function(response) {
                    if (response.status_code == 200) {
                        alert(response.message);
                        $('#module_' + modname).removeClass('deactivated-module');
                        $('#module_' + modname + ' .reactivate-module').hide();
                        location.reload();
                    } else {
                        alert(response.message);
                        location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while reactivating the module.');
                }
            });
        }
    }
</script>

<!-- subcategories -->
<script>
    function deleteSubcategory(DocName) {
        if (confirm("Are you sure you want to delete this subcategory?")) {
            $.ajax({
                url: '{{ route("deactivate.subcategory") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    DocName: DocName
                },
                success: function(response) {
                    if (response.status_code == 200) {
                        alert(response.message);
                        $('#subcategory_' + DocName).addClass('deactivated-module');
                        $('#subcategory_' + DocName + ' .reactivate-subcategory').show();
                        location.reload();
                    } else {
                        alert(response.message);
                        location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while deleting the subcategory.');
                }
            });
        }
    }

    function reactivateSubcategory(DocName) {
        if (confirm("Are you sure you want to reactivate this subcategory?")) {
            $.ajax({
                url: '{{ route("reactivate.subcategory") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    DocName: DocName
                },
                success: function(response) {
                    if (response.status_code == 200) {
                        alert(response.message);
                        $('#subcategory_' + DocName).removeClass('deactivated-module');
                        $('#subcategory_' + DocName + ' .reactivate-subcategory').hide();
                        location.reload();
                    } else {
                        alert(response.message);
                        location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    alert('An error occurred while reactivating the subcategory.');
                }
            });
        }
    }
</script>
<!-- addsubcategories -->
<script>
    function openAddSubcategoryForm(modname) {
        // Hide all other subcategory forms
        const forms = document.querySelectorAll('.add-subcategory-form');
        forms.forEach(form => form.style.display = 'none');

        // Display the form for the clicked module
        const form = document.getElementById('addSubcategoryForm_' + modname);
        form.style.display = 'block';
    }

    function submitSubcategoryForm(modname) {
        // Get the form data
        const form = document.getElementById('form_' + modname);
        const formData = new FormData(form);

        // Perform AJAX request to submit the form data
        fetch('{{ route("add.subcategory") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.statusCode === 200) {
                    // Handle successful subcategory addition
                    alert('Subcategory added successfully');
                    form.style.display = 'none';
                    // Optionally, update the DOM to reflect the new subcategory
                    // Here you can add code to dynamically add the new subcategory to the list
                    const subcategoryList = document.createElement('li');
                    subcategoryList.innerHTML = '<a href="{{ route("fetch.admin", ["slug" => "' + modname + '", "subcategory" => "' + formData.get('subcategory') + '"]) }}">' + formData.get('subcategory') + '</a>';
                    document.getElementById('module_' + modname).appendChild(subcategoryList);
                    location.reload();
                } else {
                    // Handle error
                    alert(data.message);
                    location.reload();
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    function closeSubcategoryForm(modname) {
        // Get the form for the clicked module and hide it
        const form = document.getElementById('addSubcategoryForm_' + modname);
        form.style.display = 'none';
    }
</script>
<script>
    // Function to display an alert message
    function showAlert(message) {
        alert(message);
    }

    // Add event listener for form submission
    document.getElementById("addModuleForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        // Perform form submission via AJAX
        fetch(this.action, {
                method: this.method,
                body: new FormData(this),
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => {
                if (response.ok) {
                    showAlert("Module added successfully!");
                    location.reload(); // Reload the page
                } else {
                    showAlert("Failed to add module. Please try again.");
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showAlert("An error occurred. Please try again.");
            });
    });
</script>

</html>