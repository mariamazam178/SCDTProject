<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>

</head>
<!--  -->

<body>
    <!-- Page Heading -->

    <div>
        <div class="container"> <!-- Using bootstarp classes to alocate the spaces and make the project responsive -->
            <div class="row">
                <div class="col-md-2">
                    <img style="padding-bottom:3px; width: 100px;" src="{{ asset('images/blendlogo.jpg') }}" alt="Logo"> <!-- inserting a logo -->
                </div>
                <div class="col-md-8">
                    <ul style="display:flex; list-style-type:none; padding-top:30px"> <!-- creating a navigation bar or a header for the website -->
                        <li><a style=" padding-right:40px;  font-size:20px" href="{{ route('index') }}">HOME</a></li>
                        <li><a style=" padding-right:40px;  font-size:20px" href="{{ route('aboutus') }}">ABOUT US</a>
                        </li>
                        <li><a style=" padding-right:40px;  font-size:20px" href="{{ route('menu') }}">MENU</a></li>
                        <li><a style=" padding-right:40px;  font-size:20px" href="{{ route('contactus') }}">CONTACT
                                US</a></li>
                        <li><a style=" padding-right:40px;  font-size:20px" href="{{ route('login') }}">LOGIN</a></li>
                        <li><a style=" padding-right:40px;  font-size:20px" href="{{ route('register') }}">SIGN UP</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2" style="margin-top: 35px;">
                    <a class="ordernowbtn" style="font-size:20px" href="{{ route('menu') }}">Order Now</a> <!-- order now button which leads to menu page -->
                </div>
            </div>
        </div>

        </header>


        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
</body>

</html>