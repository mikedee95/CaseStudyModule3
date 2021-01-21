<!doctype html>
<html lang="en">
<head>
    <title>Mein Library</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        .glow {
            font-size: 80px;
            color: #fff;
            text-align: center;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
            }

            to {
                text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
            }
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0, 0, 0); /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: lightslategray;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 100%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }
            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }
            to {
                transform: scale(1)
            }
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }


        body {
            margin: 0;
            padding: 0;
            background: black;
            color: white;
        }

        nav {
            position: static;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 35px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: .2em 2em;
            float: right;
        }

        nav ul li {
            display: inline-block;
            margin: 0;
            padding: .2em .7em;
        }

        nav a {
            width: 100%;
            height: 100%;
            color: black;
            text-decoration: none;
            font-family: Ubuntu, serif;
            font-size: 1.15em;
            font-weight: lighter;
            letter-spacing: 1px;
            transition: .25s ease-in-out;
        }

        nav a:hover {
            color: rgb(220, 120, 0);
        }

        /*.navbar-brand {*/
        /*    position: absolute;*/
        /*    background: url(https://lh3.googleusercontent.com/proxy/HpTxckrEpC2gzi6w7kpB9J-5RHRlBZEqzTHhtRv6vyhHgod4BTYgnJRa8unTMXZOEYAqQp2WAwZYRrIqa9ta71_LUCVoYzsY4zUGXgmSCwcEOWJmbqbvnMso5Uc5jJkkFsVh);*/
        /*    width: 60px;*/
        /*    left: 60px;*/
        /*    background-size: contain;*/
        /*}*/
        .nav-bg {
            content: '';
            position: absolute;
            display: block;
            top: -100%;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: rgb(50, 50, 50);
            transition: .45s ease-in-out;
        }

        .bg-hidden {
            top: -100%;
            opacity: 0;
        }

        .bg-visible {
            top: 0;
            opacity: 1;
        }

        h1 {
            text-align: center;
            font-family: Ubuntu;
            letter-spacing: 1px;
        }

        .hero {
            position: relative;
            width: 100%;
            height: 500px;
            background: rgb(50, 50, 50);
            background: url(https://doninmass.files.wordpress.com/2013/04/walking-in-rain-painting-wallpaper-hd.jpg) no-repeat 50% 50% fixed;
            /*background-size: 130%;*/
            overflow: hidden;
        }

        .hero h1 {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            padding: .3em;
            font-size: 3em;
            font-weight: lighter;
        }

        .content-wrapper {
            width: 80%;
            height: 3000px;
            padding: 1em 10%;
        }

        .content-wrapper h1 {
            margin: 0;
            color: rgb(220, 120, 0);
        }
        .hero {
            position: relative;
            width: 100%;
            height: 500px;
            background: rgb(50, 50, 50);
            background: url(https://www.wallpapertip.com/wmimgs/0-3795_wallpaper-books-library-shelves-lighting-hd-book-library.jpg) no-repeat 50% 50% fixed;
            background-size: 130%;
            overflow: hidden;
        }
        .content-wrapper p {
            font-family: "Open Sans";
            text-indent: 1.5em;
        }
        body {
            margin: 0;
            padding: 0;
            background: black;
            color: white;
        }

        nav {
            position: static;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100%;
            height: 35px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: .2em 2em;
            float: right;
        }

        nav ul li {
            display: inline-block;
            margin: 0;
            padding: .2em .7em;
        }

        nav a {
            width: 100%;
            height: 100%;
            color: black;
            text-decoration: none;
            font-family: Ubuntu, serif;
            font-size: 1.15em;
            font-weight: lighter;
            letter-spacing: 1px;
            transition: .25s ease-in-out;
        }

        nav a:hover {
            color: rgb(220, 120, 0);
        }
        /*.navbar-brand {*/
        /*    position: absolute;*/
        /*    background: url(https://lh3.googleusercontent.com/proxy/HpTxckrEpC2gzi6w7kpB9J-5RHRlBZEqzTHhtRv6vyhHgod4BTYgnJRa8unTMXZOEYAqQp2WAwZYRrIqa9ta71_LUCVoYzsY4zUGXgmSCwcEOWJmbqbvnMso5Uc5jJkkFsVh);*/
        /*    width: 60px;*/
        /*    left: 60px;*/
        /*    background-size: contain;*/
        /*}*/
        .nav-bg {
            content: '';
            position: absolute;
            display: block;
            top: -100%;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: rgb(50, 50, 50);
            transition: .45s ease-in-out;
        }

        .bg-hidden {
            top: -100%;
            opacity: 0;
        }

        .bg-visible {
            top: 0;
            opacity: 1;
        }

        h1 {
            text-align: center;
            font-family: Ubuntu;
            letter-spacing: 1px;
        }

        .hero {
            position: relative;
            width: 100%;
            height: 500px;
            background: rgb(50, 50, 50);
            background: url(https://doninmass.files.wordpress.com/2013/04/walking-in-rain-painting-wallpaper-hd.jpg) no-repeat 50% 50% fixed;
            /*background-size: 130%;*/
            overflow: hidden;
        }

        .hero h1 {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            padding: .3em;
            font-size: 3em;
            font-weight: lighter;
        }

        .content-wrapper {
            width: 80%;
            height: 3000px;
            padding: 1em 10%;
        }

        .content-wrapper h1 {
            margin: 0;
            color: rgb(220, 120, 0);
        }

        .content-wrapper p {
            font-family: "Open Sans";
            text-indent: 1.5em;
        }
        .hero {
            position: relative;
            width: 100%;
            height: 500px;
            background: rgb(50, 50, 50);
            background: url(https://www.wallpapertip.com/wmimgs/0-3795_wallpaper-books-library-shelves-lighting-hd-book-library.jpg) no-repeat 50% 50% fixed;
            background-size: 130%;
            overflow: hidden;
        }
        .glow {
            font-size: 80px;
            color: #fff;
            text-align: center;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
            }

            to {
                text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
            }
        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: lightslategray;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 100%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }


    </style>
</head>
<body>
@yield('content')
<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
<script src="{{ asset('js/bootstrap.js') }}" type="text/js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
