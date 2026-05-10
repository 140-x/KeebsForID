<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeebsForID</title>

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
            overflow-x: hidden;
        }

        .navbar{
            width:100%;
            background:white;
            padding:20px 60px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
            position:sticky;
            top:0;
        }

        .logo{
            font-weight:700;
            letter-spacing:-1px;
            font-size:40px
        }

        .menu{
            display:flex;
            gap:30px;
        }

        .menu a{
            text-decoration:none;
            color:#333;
            font-size:16px;
        }

        .hero{
            width:100%;
            height:500px;
            background:url('https://pressplayid.com/cdn/shop/files/Keebs_Category_Banner_1500x300px.png?v=1758180057&width=1500') center/cover;
            display:flex;
            align-items:center;
            padding:60px;
            overflow: hidden;
        }

        .hero-content{
            background:rgba(255,255,255,0.85);
            padding:40px;
            border-radius:20px;
            width:500px;
        }

        .hero-content h1{
            font-size:52px;
            margin-bottom:20px;
        }

        .hero-content p{
            font-size:18px;
            color:#555;
            line-height:1.6;
        }

        .btn{
            display:inline-block;
            margin-top:25px;
            padding:14px 28px;
            background:#2563eb;
            color:white;
            text-decoration:none;
            border-radius:10px;
        }

        .section{
            padding:70px 60px;
        }

        .section-title{
            font-size:36px;
            margin-bottom:40px;
        }

        .categories{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:25px;
        }

        .card{
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 5px 15px rgba(0,0,0,0.05);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card img{
            width:100%;
            height:250px;
            object-fit:cover;
        }

        .card-content{
            padding:20px;
        }

        .card-content h3{
            margin-bottom:10px;
        }

        .card-content p{
            color:#666;
        }

        .logout-btn{
            background:none;
            border:none;
            font-size:16px;
            cursor:pointer;
            color:#111;
            font-weight:600;
        }

        .hero-btn{
            display: inline-block;
            background: #3366ff;
            color: white;
            padding: 14px 32px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            transition: 0.3s;
        }

        .hero-btn:hover{
            background: #2952cc;
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

        .hero{
            padding:20px;
            height:auto;
        }

        .hero-content{
            width:100%;
            padding:25px;
        }

        .hero-content h1{
            font-size:36px;
        }

        .section{
            padding:40px 20px;
        }

        .categories{
            grid-template-columns:1fr;
        }

        .menu form{
            display:inline;
        }

        .menu button{
            background:none;
            border:none;
            font-size:16px;
            cursor:pointer;
            font-family:'Poppins', sans-serif;
            color:#111;
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
    <a href="/switches">Switches</a>
    <a href="/keycaps">Keycaps</a>
    <a href="/community">Community</a>

    @guest
        <a href="{{ route('login') }}">Login</a>
    @endguest

    @auth
        <span>{{ Auth::user()->name }}</span>

        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf

           <button type="submit" class="logout-btn">
                Logout
           </button>
        </form>
    @endauth

</div>

    </div>

    <div class="hero">

        <div class="hero-content">

            <h1>Discover Your Perfect Keeb</h1>

            <p>
                Explore custom keyboard, switches, keycaps, dan berbagai aksesoris untuk setup impianmu.
            </p>

            <a href="/catalog" class="hero-btn">
                Browse Collection
            </a>

        </div>

    </div>

    <div class="section">

        <h2 class="section-title">
            Popular Categories
        </h2>

        <div class="categories">

            <div class="card">
                <img src="https://chilkey.com/cdn/shop/files/ND75_MilkTea_FrontBack_1080x1080_48876b54-6f19-45ff-bc3b-e8af4cf421bf.jpg?v=1735010528&width=713">

                <div class="card-content">
                    <h3>Mechanical Keyboard</h3>
                    <p>Keyboard custom premium untuk berbagai gaya typing.</p>
                </div>
            </div>

            <div class="card">
                <img src="https://pressplayid.com/cdn/shop/files/DSC09531.jpg?v=1719201919">

                <div class="card-content">
                    <h3>Switches</h3>
                    <p>Linear, tactile, dan clicky switch sesuai preferensimu.</p>
                </div>
            </div>

            <div class="card">
                <img src="https://pressplayid.com/cdn/shop/files/Photo_10-07-24_14.20.18.jpg?v=1721635746">

                <div class="card-content">
                    <h3>Keycaps</h3>
                    <p>Premium PBT and custom keycap sets untuk melengkapi setup kamu.</p>
                </div>
            </div>

            <div class="card">
                <img src="https://pressplayid.com/cdn/shop/products/f7447fcb-97e7-47f9-99cb-fdfa084a2691-artboard-2mecha.jpg?v=1705909822">

                <div class="card-content">
                    <h3>Accessories</h3>
                    <p>Coiled cable, deskmat, artisan, dan aksesoris lainnya.</p>
                </div>
            </div>

        </div>

    </div>

</body>
</html>