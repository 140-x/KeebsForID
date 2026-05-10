<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - KeebsForID</title>

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

        .section{
            padding:60px;
        }

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:20px;
        }

        h1{
            font-size:48px;
        }

        .add-button{
            background:#2563eb;
            color:white;
            padding:14px 22px;
            border-radius:14px;
            text-decoration:none;
            font-weight:600;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 5px 15px rgba(0,0,0,0.05);
            min-width:900px;
        }

        th, td{
            padding:20px;
            text-align:left;
        }

        th{
            background:#f8f8f8;
        }

        tr{
            border-bottom:1px solid #eee;
        }

        img{
            width:80px;
            border-radius:12px;
        }

        .edit{
            color:#2563eb;
            text-decoration:none;
            font-weight:600;
        }

        .delete{
            color:red;
            text-decoration:none;
            font-weight:600;
            margin-left:15px;
        }

        .action-buttons{
            display:flex;
            gap:10px;
        }

        .edit-btn{
            text-decoration:none;
            background:#2563eb;
            color:white;
            padding:8px 14px;
            border-radius:10px;
            font-size:14px;
            font-weight:500;
            transition:0.3s;
        }

        .edit-btn:hover{
            background:#1d4ed8;
        }

        .delete-btn{
            text-decoration:none;
            background:#ef4444;
            color:white;
            padding:8px 14px;
            border-radius:10px;
            font-size:14px;
            font-weight:500;
            transition:0.3s;
        }

        .delete-btn:hover{
            background:#dc2626;
        }

        .table-wrapper{
            width:100%;
            overflow-x:auto;
        }

        .logout-btn{
            background:#111;
            color:white;
            border:none;
            padding:12px 18px;
            border-radius:12px;
            cursor:pointer;
            font-weight:600;
            transition:0.3s;
        }

        .logout-btn:hover{
            background:#333;
        }

    @media(max-width:768px){

    .navbar{
        padding:20px;
    }

    .logo{
        font-size:28px;
    }

    .section{
        padding:20px;
    }

    .topbar{
        flex-direction:column;
        align-items:stretch;
        gap:20px;
        margin-bottom:20px;
    }

    .topbar h1{
        font-size:38px;
        line-height:1.1;
    }

    .add-button{
        width:100%;
        text-align:center;
        display:flex;
        justify-content:center;
        align-items:center;
        padding:16px;
        border-radius:16px;
        font-size:16px;
    }

    table{
        min-width:700px;
    }

    th, td{
        padding:16px;
        font-size:14px;
    }

    img{
        width:70px;
    }

    .action-buttons{
        flex-direction:column;
    }

    .edit-btn,
    .delete-btn{
        text-align:center;
    }

    .logout-btn{
        width:100%;
    }

}

    </style>

</head>
<body>

    <div class="navbar">

        <div class="logo">
            KeebsForID Admin
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="logout-btn">
                Logout
            </button>
        </form>

    </div>

    <div class="section">

        <div class="topbar">

            <h1>Keyboard Management</h1>

            <a href="/admin/create" class="add-button">
                + Add Keyboard
            </a>

        </div>

        <div class="table-wrapper">

        <table>

            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Switch</th>
                <th>Layout</th>
                <th>Price</th>
                <th>Action</th>
            </tr>

            @foreach($keyboards as $keyboard)

            <tr>

                <td>
                    <img src="{{ $keyboard->image }}">
                </td>

                <td>{{ $keyboard->name }}</td>

                <td>{{ $keyboard->brand }}</td>

                <td>{{ $keyboard->switch_type }}</td>

                <td>{{ $keyboard->layout }}</td>

                <td>
                    Rp {{ number_format($keyboard->price) }}
                </td>

                <td>

                    <div class="action-buttons">

                        <a href="/admin/edit/{{ $keyboard->id }}" class="edit-btn">
                            Edit
                        </a>

                        <a href="/admin/delete/{{ $keyboard->id }}" class="delete-btn">
                            Delete
                        </a>

                    </div>

                </td>

            </tr>

            @endforeach

        </table>

        </div>

    </div>

</body>
</html>