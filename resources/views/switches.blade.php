<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switches - KeebsForID</title>

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
            position:sticky;
            top:0;
            z-index:100;
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
            font-size:16px;
        }

        .section{
            padding:60px;
        }

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:end;
            margin-bottom:40px;
        }

        .topbar h1{
            font-size:56px;
            margin-bottom:10px;
        }

        .product-count{
            color:#666;
        }

        .filter-area{
            display:flex;
            gap:15px;
        }

        .filter-area select{
            padding:12px 18px;
            border:none;
            border-radius:12px;
            background:white;
            box-shadow:0 5px 15px rgba(0,0,0,0.05);
            font-size:14px;
        }

        .grid{
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

        .content{
            padding:20px;
        }

        .content h3{
            margin-bottom:10px;
            font-size:24px;
        }

        .content p{
            color:#666;
            margin-bottom:8px;
        }

        .price{
            margin-top:15px;
            font-weight:600;
            font-size:20px;
            color:#2563eb;
        }

        .badge{
            display:inline-block;
            margin-top:10px;
            padding:6px 12px;
            background:#e0edff;
            color:#2563eb;
            border-radius:999px;
            font-size:13px;
            font-weight:600;
        }

        .logout-btn{
            background:none;
            border:none;
            font-size:16px;
            cursor:pointer;
            color:#111;
            font-weight:600;
        }

        .product-link{
            text-decoration:none;
            color:inherit;
        }

        .filter-area form{
            margin:0;
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
            padding:40px 20px;
        }

        .topbar{
            flex-direction:column;
            align-items:start;
            gap:20px;
        }

        .topbar h1{
            font-size:40px;
        }

        .filter-area{
            width:100%;
            flex-direction:column;
        }

        .filter-area select{
            width:100%;
        }

        .grid{
            grid-template-columns:1fr;
        }

        .filter-area form{
            margin:0;
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

    <div class="section">

        <div class="topbar">

            <div>
                <h1>Switches Catalog</h1>

                <p class="product-count">
                    {{ count($switches) }} products
                </p>
            </div>

            <div class="filter-area">

                <form method="GET">

                    <select name="layout" onchange="this.form.submit()">

                        <option value="">All Types</option>

                        <option value="Linear">Linear</option>
                        <option value="Tactile">Tactile</option>
                        <option value="Clicky">Clicky</option>

                    </select>

                </form>

                <form method="GET">

                    <input type="hidden" 
                    name="layout" 
                    value="{{ request('layout') }}">

                    <select name="sort" onchange="this.form.submit()">

                        <option value="">Sort By</option>

                        <option value="low"
                    {{ request('sort') == 'low' ? 'selected' : '' }}>
                            Price Low
                        </option>

                        <option value="high"
                        {{ request('sort') == 'high' ? 'selected' : '' }}>
                            Price High
                        </option>

                        <option value="latest"
                        {{ request('sort') == 'latest' ? 'selected' : '' }}>
                            Latest
                        </option>

                    </select>

                </form>

            </div>

        </div>

        <div class="grid">

            @foreach($switches as $switch)

            <div class="card">

                <img src="{{ $switch['image'] }}">

                <div class="content">

                    <h3>{{ $switch['name'] }}</h3>

                    <p>{{ $switch['type'] }}</p>

                    <p>{{ $switch['force'] }}</p>

                    <div class="badge">
                        {{ $switch['type'] }}
                    </div>

                    <p class="price">
                        {{ $switch['price'] }}
                    </p>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</body>
</html>