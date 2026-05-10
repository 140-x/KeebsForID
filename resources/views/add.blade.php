<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Keyboard</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f5f5f5;
            padding:60px;
        }

        .container{
            max-width:700px;
            margin:auto;
            background:white;
            padding:40px;
            border-radius:25px;
            box-shadow:0 5px 15px rgba(0,0,0,0.05);
        }

        h1{
            margin-bottom:30px;
            font-size:42px;
        }

        form{
            display:flex;
            flex-direction:column;
            gap:20px;
        }

        input,
        textarea{
            padding:16px;
            border:none;
            border-radius:14px;
            background:#f5f5f5;
            font-size:16px;
        }

        textarea{
            resize:none;
            height:120px;
        }

        button{
            padding:16px;
            border:none;
            border-radius:14px;
            background:#2563eb;
            color:white;
            font-size:16px;
            font-weight:600;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#1d4ed8;
        }

    </style>

</head>
<body>

<div class="container">

    <h1>Add Keyboard</h1>

    <form action="/admin/store" method="POST" enctype="multipart/form-data">

        @csrf

        <input type="text" name="name" placeholder="Keyboard Name">

        <input type="text" name="brand" placeholder="Brand">

        <input type="text" name="switch_type" placeholder="Switch Type">

        <input type="text" name="layout" placeholder="Layout">

        <input type="number" name="price" placeholder="Price">

        <input type="file" name="image">

        <textarea name="description" placeholder="Description"></textarea>

        <button type="submit">
            Add Keyboard
        </button>

    </form>

</div>

</body>
</html>