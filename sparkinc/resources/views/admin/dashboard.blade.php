<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Spark Inc</title>
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
                    <div class="dropdown-icon"></div>
                </li>
            </ul>
        </div>
    </header>

    <section class="admin-section">
        <aside>
            <nav class="admin-nav">
                <ul>
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
                    <li>
                        <a href="#">Blogs</a>
                    </li>
                    <li>
                        <a href="#">Messages</a>
                    </li>
                </ul>
            </nav>
        </aside>
        <div class="admin-content"></div>
    </section>
</body>
</html>