<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel 快速入門 - 基本</title>
        <!-- CSS 及 JavaScript -->
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar 內容 -->
                <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                   

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
            </nav>
        </div>
        @yield('content')
    </body>
</html>
