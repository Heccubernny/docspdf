<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Include your CSS and JavaScript links here -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('show-form') }}">Form</a></li>
            </ul>
            
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <!-- Your footer content goes here -->
        <div>brought to you by &copy; 2023</div>
    </footer>
</body>
</html>