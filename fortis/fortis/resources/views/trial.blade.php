<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fortis Admin</title>
    <link rel="icon" type="image/x-icon" href="https://www.fortismalar.com/assets/dist/images/favicon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <style>
        /* CSS for styling */
        body {
            font-family: Arial, sans-serif;
            font-size: small;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 100%;
            border: 2px solid;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .headers {
            display: flex;
            justify-content: space-between;
            background-color: #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        .headers2 {
            display: flex;
            justify-content: space-between;
            background-color: #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        #header1 {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding: 6px;
            width: 100%;
        }

        #header2 {
            background-color: #57bb83;
            padding:2%;
            color: #fff;
            height: 15%;
            text-align: start;
            /* width: 100%; */
            position: relative;
        }

        #header3 {
            background-color: #ffffff;
            color: #101010;
            padding: 5px;
            text-align: start;
            font-size: medium;
            /* font-weight: bold; */
            height: 5vh;
        }

        nav {
            background-color: #e8e9ea;
            /* padding: 20px; */
            width: 20%;
            position: relative;
            left: -3px;
            top: -3px;
            height: 100%; 
            transition: 0.5s;
            overflow-y: auto;
        }

        nav ul {
            list-style-type: none;
            padding: 20px;
            cursor: pointer;
        }

        nav ul ul {
            margin-top: 10px;
            list-style-type: none;
            padding-left: 20px;

        }

        nav ul ul li::before {
            content: '';
            display: inline-block;
            width: 4px;
            height: 4px;
            border: 1px solid #000;
            border-radius: 50%;
            margin-right: 5px;
        }

        nav ul li {
            margin-bottom: 15px;
            cursor: pointer;
        }

        nav ul li span {
            font-weight: bold;
        }

        nav ul .module span {
            font-weight: bold
        }

        main {
            margin-left: 200px;
            padding: 20px;
        }

        .home-dropdown {
            font-size: smaller;
            padding: 6px 10px;

        }

        .hollow-blocks {
            position: absolute;
            top: 50%;
            right: 7%;
            transform: translateY(-50%);
            display: flex;
            align-items: center;
            cursor: pointer;
            height: 100%;
        }

        .hollow-block {
            border: 2px solid #fff;
            color: #fff;
            background-color: transparent;
            padding: 10px 20px;
            border-radius: 5px;
            margin-left: 17px;
        }


        .user-options {
            display: flex;
            height: 80%;
            align-items: center;
            margin-right: 5%;
        }

        .dropdown {
            margin-left: 10px;
            margin-right: 20px;
            position: relative;
            display: inline-block;
        }

        .dropbtn {
            background-color: #658375;
            color: #fff;
            height: 50px;
            width: 200%;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            /* width: 80px;
            height: 48px; */

        }

        .upload {
            margin-right: 10px;
        }

        .upload .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 100px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .upload:hover .dropdown-content {
            display: block;
        }

        .upload:hover .dropbtn {
            background-color: #555;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 100px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .logo img {
            /* display: flex; */
            width: 20%;
            /* justify-content: flex-start; */

        }

        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #555;
        }

        .body-content {
            /* flex: 1; */
            display: flex;
            flex-direction: row;
            /* width: 100%; */
            padding-left: 12px;
            padding-top: 20px;
        }
    
        .document-block {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-bottom: 20px;
            margin-left: 45px;
            width: 710px;
            display: flex;
            align-items: center;
            /* border: 2px solid; */
        }

        .document-block img {
            width: 30px;
            margin-right: 10px;

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

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 8% auto;
            /* 5% from the top and centered */
            padding: 30px;
            border: 1px solid #888;
            width: 40%;
            height: 50%;
            border-radius: 12px;
            display: flex;
            flex-direction: column;

            /* Center items vertically */
            position: relative;
        }

        .modal-content input[type="text"],
        .modal-content select,
        .modal-content textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }


        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .big-button {
            background-color: #658375;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-left: auto;
            width: 25%;
            /* height: 100%; */
            height: 50px;
        }

        /* Hover effect */
        .big-button:hover {
            background-color: #1a9e3e;
            /* Darker color on hover */
        }

        #addDocumentBtn,
        #addModuleBtn {
            background-color: #658375;
            /* Background color */
            color: #fff;
            /* Text color */
            border: none;
            /* No border */
            cursor: pointer;
            /* Cursor style */
            border-radius: 5px;
            margin-left: auto;
            /* Rounded corners */
            width: 25%;
            height: 50px;
            transition: background-color 0.3s ease;
            /* Smooth transition for background color */
        }
    </style>
</head>

<body>
    <div id="header1">
        <div class="logo">
            <img src="../assests/BSE_EQ_INE842B01015.png" alt="Company Logo">
        </div>
        <div class="user-options">
            <button id="addDocumentBtn" class="big-button">Add Document</button>

            <!-- Modal for adding documents -->
            <div id="addDocumentModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Add Document</h2>
                    <form id="uploadDocumentForm" action="{{ route('upload.document') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="mod_name">Select Module:</label>
                        <select name="mod_name" id="mod_name">
                            @foreach($modules as $module)
                            <option value="{{ $module['modname'] }}">{{ $module['modname'] }}</option>
                            @if (!empty($module['subcategories']) && is_array($module['subcategories']))
                            @foreach ($module['subcategories'] as $subcategory)
                            <option value="{{ $module['modname'] }}/{{ $subcategory }}">{{ $subcategory }}</option>
                            @endforeach
                            @endif
                            @endforeach
                        </select>
                        <label for="cat_name">Select Subcategory :</label>
                        <select name="cat_name" id="cat_name"></select>
                        <label for="file">Choose File:</label>
                        <!-- <input type="file" id="file" name="file"><br><br> -->
                        <input type="file" id="file" name="file[]" multiple><br><br>
                        <input type="submit" value="Upload">
                    </form>
                </div>
            </div>
            <button id="addModuleBtn" class="big-button">Add Module</button>

            <div id="addModuleModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Add Module</h2>
                    <form id="addModuleForm" action="{{ route('add.module') }}" method="POST">
                        @csrf
                        <label for="modname">Module Name:</label>
                        <input type="text" id="modname" name="modname" required>
                        <input type="submit" value="Add">
                    </form>
                </div>
            </div>

            <!-- addsub -->
            <button id="addSubcategoryBtn" class="big-button">Add Subcategory</button>
            <div id="addSubcategoryModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Add Subcategory</h2>
                    <form id="addSubcategoryForm" action="{{ route('add.subcategory') }}" method="POST">
                        @csrf
                        <label for="modname">Select Module:</label>
                        <select name="modname" id="modname">
                            @foreach($modules as $module)
                            <option value="{{ $module['modname'] }}">{{ $module['modname'] }}</option>
                            @endforeach
                        </select>
                        <label for="subcategory">Subcategory Name:</label>
                        <input type="text" id="subcategory" name="subcategory" required>
                        <input type="submit" value="Add">
                    </form>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">User</button>
                <div class="dropdown-content">
                    <a href="login">Login</a>
                    <a href="register">Register</a>
                </div>
            </div>
        </div>


    </div>
    </div>


    <div id="header2">
        <div class="Greenbelt" style="font-family: Arial, sans-serif; font-size: larger;">
            I Am Looking For
        </div>
        <div class="hollow-blocks">
            <div class="hollow-block"><i class="fas fa-heart"></i> Health Packages</div>
            <div class="hollow-block"><i class="fas fa-user-md"></i> International Patients</div>
        </div>
    </div>
    <div id="header3">
        Investor Relations
    </div>
    
    <div class="body-content">
        <nav>
            <div>
                <ul>
                   
                    @foreach($modules as $module)
                    <li>
                        <span>{{ $module['modname'] }}</span>
                        <!-- Parse subcategories string as JSON array -->
                        @php
                        $subcategories = json_decode($module['subcategories']);
                        @endphp
                        <!-- Check if module has subcategories -->
                        @if (!empty($subcategories) && is_array($subcategories))
                        <ul>
                            <!-- Loop through subcategories -->
                            @foreach ($subcategories as $subcategory)
                            <li>{{ $subcategory }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </nav>
        <div class="body-container">

        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        // Function to fetch documents when a module is clicked
        $('nav ul li').on('click', function() {
            var modname = $(this).text().trim();
            fetchDocuments(modname);
        });

        $(document).ready(function() {
            // Function to toggle subcategories when a module is clicked
            $('nav ul li').on('click', function() {
                var $subcategories = $(this).find('ul');
                // Toggle visibility of subcategories
                $subcategories.slideToggle();
            });

            // Initially hide all subcategories
            $('nav ul ul').hide();
        });
        // Function to handle fetching documents via AJAX
        function fetchDocuments(modname) {
            $.ajax({
                url: '/admin/fetchModule',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    modname: modname
                },
                success: function(response) {
                    $('.body-container').empty();
                    if (response.statusCode === 200) {
                        // Iterate through documents and display them
                        response.documents.forEach(function(document) {
                            var documentBlock = '<div class="document-block">' +
                                '<img src="../assests/pdf.jpg" alt="PDF icon">' +
                                '<span>' + document.document + '</span>' +
                                '<a href="' + document.link + '" download="' + document.document + '">Download</a>' +
                                '<i class="fas fa-trash-alt delete-document" data-docname="' + document.document + '" data-modname="' + document.modname + '"></i>' +
                                '</div>';
                            $('.body-container').append(documentBlock);
                        });
                        // Add event listener for delete button on each document
                        $('.delete-document').on('click', function() {
                            var docName = $(this).data('docname');
                            var modName = $(this).data('modname');
                            deleteDocument(docName, modname);
                        });
                    } else {
                        // Handle error case
                        var errorMessage = '<div class="document-block">' +
                            '<span>Error: ' + response.message + '</span>' +
                            '</div>';
                        $('.body-container').append(errorMessage);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
        ////sub doccccccccccccccc
        $(document).ready(function() {
            // Event listener for module select change
            $('#mod_name').change(function() {
                var selectedModule = $(this).val();
                // Make AJAX request to fetch subcategories
                $.ajax({
                    url: '/getSubcategories', // Endpoint to fetch subcategories
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        module: selectedModule // for request
                    },
                    success: function(response) {
                        // Clear previous options
                        $('#cat_name').empty();
                        // Populate subcategory select element with retrieved subcategories
                        response.subcategories.forEach(function(subcategory) {
                            $('#cat_name').append('<option value="' + subcategory + '">' + subcategory + '</option>');
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });

        // Function to delete a document
        function deleteDocument(docName, modName) {
            console.log(modName);
            $.ajax({
                url: '/delete-document',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    DocName: docName,
                    mod_name: modName
                },

                success: function(response) {
                    if (response.statusCode === 200) {
                        // Remove the document block from the DOM
                        $('.document-block').each(function() {
                            if ($(this).find('span').text() === docName) {
                                $(this).remove();
                            }
                        });
                        alert("Document deleted successfully");
                        window.location.reload();
                    } else {
                        // alert("Error: " + response.message);
                        alert(response.message);
                        window.location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert("An error occurred while deleting the document. Please try again later.");
                }
            });
        }

        // Event listener for Add Module button click
        $('#addModuleBtn').click(function() {
            $('#addModuleModal').css('display', 'block');
        });

        $('#addModuleForm').submit(function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            var formData = $(this).serialize(); // Serialize form data
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                success: function(response) {
                    if (response.statusCode === 200) {
                        alert("Module Added Successfully");
                        window.location.reload();
                    } else {
                        alert(response.message);
                        window.location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert("An error occurred while adding the module. Please try again later.");
                }
            });
        });

        // Event listener for document upload form submission
        $('#uploadDocumentForm').submit(function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            var formData = new FormData(this); // Create FormData object to handle file upload
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                processData: false, // Prevent jQuery from processing the data
                contentType: false, // Prevent jQuery from setting the content type
                success: function(response) {
                    if (response.statusCode === 200) {
                        alert("Document uploaded successfully");
                        window.location.reload();
                        // // Optionally, clear the file input field after successful upload
                        // $('#file').val('');
                        // fetchDocuments($('#mod_name').val()); 
                    } else {
                        alert("Error: " + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert("An error occurred while uploading the document. Please try again later.");
                }
            });
        });
        $('#addSubcategoryBtn').click(function() {
            $('#addSubcategoryModal').css('display', 'block');
        });

        //addsub
        $('#addSubcategoryForm').submit(function(event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Gather input values from textarea and convert to array
            var subcategoryValues = $('#subcategory').val().split('\n').map(function(value) {
                return value.trim();
            });

            // Add the array to the form data
            var formData = $(this).serializeArray();
            formData.push({
                name: 'subcategories',
                value: subcategoryValues
            });

            // Send AJAX request
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: formData,
                success: function(response) {
                    if (response.statusCode === 200) {
                        alert("Subcategory Added Successfully");
                        window.location.reload();
                    } else {
                        alert(response.message);
                        window.location.reload();
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert("An error occurred while adding the subcategory. Please try again later.");
                }
            });
        });

        //addsub

        $('#addDocumentBtn').click(function() {
            $('#addDocumentModal').css('display', 'block');
        });

        $('.close').click(function() {
            $('.modal').css('display', 'none');
        });

        $(window).click(function(event) {
            if (event.target.className === 'modal') {
                $('.modal').css('display', 'none');
            }
        });
    });
</script>

</html>