<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $keyboard->name }} - KeebsForID</title>

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
            color:#111;
        }

        .navbar{
            width:100%;
            background:white;
            padding:20px 60px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .logo{
            font-weight:700;
            letter-spacing:-1px;
            font-size:40px;
        }

        .menu{
            display:flex;
            gap:30px;
        }

        .menu a{
            text-decoration:none;
            color:#333;
        }

        .section{
            padding:60px;
            padding-bottom:80px;
        }

        .product-container{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:60px;
            align-items:start;
        }

        .product-image img{
            width:100%;
            border-radius:25px;
            box-shadow:0 5px 15px rgba(0,0,0,0.05);
        }

        .product-info h1{
            font-size:64px;
            margin-bottom:10px;
        }

        .brand{
            color:#666;
            margin-bottom:20px;
            font-size:20px;
        }

        .price{
            font-size:38px;
            font-weight:700;
            color:#2563eb;
            margin-bottom:30px;
        }

        .spec{
            margin-bottom:15px;
            font-size:18px;
            color:#444;
        }

        .description{
            margin-top:30px;
            line-height:1.8;
            color:#555;
        }

        .badge{
            display:inline-block;
            margin-top:20px;
            padding:8px 14px;
            background:#e0edff;
            color:#2563eb;
            border-radius:999px;
            font-size:14px;
            font-weight:600;
        }

        .button{
            display:inline-block;
            margin-top:35px;
            padding:14px 24px;
            background:#2563eb;
            color:white;
            text-decoration:none;
            border-radius:14px;
            font-weight:600;
            transition:0.3s;
        }

        .button:hover{
            opacity:0.9;
        }

        @media(max-width:768px){

        .navbar{
            padding:20px;
            flex-direction:column;
            gap:20px;
        }

        .menu{
            flex-wrap:wrap;
            justify-content:center;
            gap:15px;
        }

        .section{
            padding:30px 20px;
            padding-bottom:80px;
        }

        .product-container{
            grid-template-columns:1fr;
            gap:30px;
        }

        .product-info h1{
            font-size:42px;
        }

    }

    </style>

</head>
<body>

    <div class="navbar">

        <div class="logo">
            KeebsForID
        </div>

        <div class="menu">
            <a href="/">Home</a>
            <a href="/catalog">Keyboard</a>
            <a href="">Switches</a>
            <a href="">Keycaps</a>
            <a href="">Community</a>
            <a href="">Login</a>
        </div>

    </div>

    <div class="section">

        <div class="product-container">

            <div class="product-image">
                <img src="{{ $keyboard->image }}">
            </div>

            <div class="product-info">

                <h1>{{ $keyboard->name }}</h1>

                <p class="brand">
                    {{ $keyboard->brand }}
                </p>

                <div class="price">
                    Rp {{ number_format($keyboard->price) }}
                </div>

                <div class="spec">
                    Switch: {{ $keyboard->switch_type }}
                </div>

                <div class="spec">
                    Layout: {{ $keyboard->layout }}
                </div>

                <div class="badge">
                    {{ $keyboard->layout }}
                </div>

                <div class="description">
                    {{ $keyboard->description }}
                </div>

                <a href="" class="button">
                    Add to Wishlist
                </a>

            </div>

        </div>

    </div>

</body>
</html>