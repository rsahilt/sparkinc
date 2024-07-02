<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Spark Inc</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="admin-header">
        <div class="admin-logo">
            <h1>SPARK INC</h1>
        </div>
        <div class="admin-nav-header">
            <ul style="list-style:none";>
                <li>
                    <div class="dropdown-icon">
                        <img src="{{ asset('/images/logo.png')}}" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </header>

    <section class="admin-section">
        <aside>
            <nav class="admin-nav">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-tachometer-alt"></i> &nbsp;Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-boxes"></i> &nbsp;Products</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-blog"></i> &nbsp;Blogs</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-envelope" style="padding-left:0"></i> &nbsp;Messages</a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-sign-out-alt"></i> &nbsp;Logout</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <div class="admin-content">
            <div class="cards-container">
                <div class="admin-card" >
                    <div class="admin-card-body">
                        <h5 class="card-title">Messages</h5>
                        <p class="card-text" style="font-size:2rem">{{ $totalMessages }}</p>
                    </div>
                </div>

                <div class="admin-card" >
                    <div class="admin-card-body">
                        <h5 class="card-title">Products</h5>
                        <p class="card-text" style="font-size:2rem">10</p>
                    </div>
                </div>

                <div class="admin-card" >
                    <div class="admin-card-body">
                        <h5 class="card-title">Blogs</h5>
                        <p class="card-text" style="font-size:2rem">10</p>
                    </div>
                </div>
                
            </div>

            <div class="admin-highlights">
                <h1>Recent Interactions</h1>
                <table class="table table-striped msg-table-admin">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Firstname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($messages as $message)
                        <tr>
                            <th scope="row">{{ $message->id }}</th>
                            <td>{{ $message->firstname }}</td>
                            <td>{{ $message->lastname }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->message }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </section>
</body>
</html>