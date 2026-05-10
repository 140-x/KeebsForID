<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Keyboard</title>

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
        }

        form{
            display:flex;
            flex-direction:column;
            gap:20px;
        }

        input, textarea{
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
        }

    </style>

</head>
<body>

<div class="container">

    <h1>Edit Keyboard</h1>

    <form action="/admin/update/{{ $keyboard->id }}" method="POST">

        @csrf

        <input type="text" name="name" value="{{ $keyboard->name }}">

        <input type="text" name="brand" value="{{ $keyboard->brand }}">

        <input type="text" name="switch_type" value="{{ $keyboard->switch_type }}">

        <input type="text" name="layout" value="{{ $keyboard->layout }}">

        <input type="number" name="price" value="{{ $keyboard->price }}">

        <input type="text" name="image" value="{{ $keyboard->image }}">

        <textarea name="description">{{ $keyboard->description }}</textarea>

        <button type="submit">
            Update Keyboard
        </button>

    </form>

</div>

</body>
</html>