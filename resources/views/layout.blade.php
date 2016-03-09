<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href="css/style.css">

</head>
<body>

<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="about">about</a></li>
        <li><a href="contact">contact</a></li>
        <li><a href="cards">cards</a></li>
    </ul>
</nav>

<div class="container">

    {{--for each route, the @section with name content
     for each html template will be inserted here--}}
    @yield('content')

</div>
</body>
</html>
