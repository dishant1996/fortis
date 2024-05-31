<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Document</title>
    <link rel="icon" type="image/x-icon" href="https://www.fortismalar.com/assets/dist/images/favicon.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input[type="file"],
        select {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .home-link {
            text-align: center;
            margin-top: 20px;
        }

        .home-link a {
            color: #007bff;
            text-decoration: none;
        }

        .home-link a:hover {
            text-decoration: underline;
        }

        #upload-error {
            color: red;
            margin-top: 10px;
            text-align: center;
            font-size: smaller;
        }

        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black with opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            /* 5% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
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

        /* Additional styles for the form inside the modal */
        .modal-content form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .modal-content label {
            margin-bottom: 10px;
        }

        .modal-content select,
        .modal-content input[type="file"],
        .modal-content input[type="submit"] {
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .modal-content input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .modal-content input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Upload Document</h1>
        <form action="upload.document" method="post" enctype="multipart/form-data">
            @csrf
            <label for="file">Choose File:</label>
            <input type="file" name="file" id="file" accept=".pdf">
            <label for="mod_name">Module Name:</label>
            <select name="mod_name" id="mod_name">
                @foreach($modules as $moduleName)
                <option value="{{ $moduleName }}">{{ $moduleName }}</option>
                @endforeach
            </select>
            <button type="submit">Upload</button>
        </form>
        <div class="home-link">
            <a href="/">Home</a>
            <div id="upload-error"></div>
        </div>
    </div>
    <script>
        window.onload = function() {
            let form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                let formData = new FormData(form);
                fetch("c", {
                        method: "POST",
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Upload failed');
                        }
                        return response.json();
                    })
                    .then(result => {
                        console.log(result);
                        alert("File uploaded successfully!");
                    })
                    .catch(error => {
                        console.error(error);
                        document.getElementById('upload-error').innerText = "Upload failed. Please try again.";
                    });
            });
        };
    </script>
</body>

</html>