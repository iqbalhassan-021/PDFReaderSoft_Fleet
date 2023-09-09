<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soft Fleet</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .container {
            height: 100vh;
            width: 100%;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        form {
            height: 80%;
            width: 100%;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        input[type=text] {
            height: 50px;
            width: 300px;
            outline: none;
            margin-top: 10px;
            border: 2px solid gray;
            padding-left: 10px;
            border-radius: 8px;

        }

        textarea {

            width: 300px;
            outline: none;
            margin-top: 10px;
            border: 2px solid gray;
     
            border-radius: 8px;
            padding-top: 10px;

        }

        input[type=file] {

            margin-top: 10px;
            cursor: pointer;

        }

        button {
            height: 50px;
            width: 300px;
            outline: none;
            margin-top: 10px;
            border: none;

            border-radius: 8px;
            cursor: pointer;
            background-color: orangered;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Soft Fleet Test</h1>
        <form action="/pdf/read" method="POST" enctype="multipart/form-data">
            @csrf

            @if(isset($text))
            <textarea name="" id="" cols="30" rows="10">
            {{ $text }}
            </textarea>
            @endif
            <input type="file" name="pdf_file" id="" accept=".pdf">
            <button type="submit">Submit</button>
        </form>


    </div>
</body>

</html>