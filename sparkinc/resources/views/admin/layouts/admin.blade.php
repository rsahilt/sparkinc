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
                    <li class="{{ $slug === 'dashboard' ? 'activeadminnav' : '' }}">
                        <a href="/admin"><i class="fa fa-tachometer-alt"></i> &nbsp;Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-boxes"></i> &nbsp;Products</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-blog"></i> &nbsp;Blogs</a>
                    </li>

                    <li class="{{ $slug === 'dashboardmessage' ? 'activeadminnav' : '' }}">                       
                        <a href="/admin/messages"><i class="fa fa-envelope" style="padding-left:0"></i> &nbsp;Messages</a>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out-alt"></i> &nbsp;
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    <li>
                        <a href="#"></a>
                    </li>
                </ul>
            </nav>
        </aside>

        @yield('content')

        </section>
</body>
</html>