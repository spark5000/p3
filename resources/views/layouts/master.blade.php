<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Developer's Best Friend' --}}
        @yield('title', "Developer's Best Friend")
    </title>

    <meta charset='utf-8'>
    <link href="css/style.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <div class="wrapper">

        <nav>
            <ul>
              <li><a <?php if (strpos($_SERVER['REQUEST_URI'], 'home') !== false) echo 'class="active"'; ?> href="home">Home</a></li>
              <li><a <?php if (strpos($_SERVER['REQUEST_URI'], 'lorem-ipsum') !== false) echo 'class="active"'; ?> href="lorem-ipsum">Lorem Ipsum Generator</a></li>
              <li><a <?php if (strpos($_SERVER['REQUEST_URI'], 'user-generator') !== false) echo 'class="active"'; ?> href="user-generator">Sample User Generator</a></li>
            </ul>
        </nav>


        <section>
            {{-- Main page content will be yielded here --}}
            @yield('content')
        </section>

        {{-- @yield('body-content') --}}


        <footer>
            {{-- &copy; {{ date('Y') }} --}}
        </footer>
    </div>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
