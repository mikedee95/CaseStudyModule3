@extends('frontend.homefront')
@include('layouts.navbar')

@section('content')
    <style>
        body {
            background-image:url('https://i.redd.it/o8dlfk93azs31.jpg');
            background-position:center;
            background-size:cover;

            -webkit-font-smoothing: antialiased;
            font: normal 14px Roboto,arial,sans-serif;
            font-family: 'Dancing Script', cursive!important;
        }

        .container {
            padding: 110px;
        }
        ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #ffffff!important;
            opacity: 1; /* Firefox */
            font-size:18px!important;
        }
        .form-login {
            background-color: rgba(0,0,0,0.55);
            padding-top: 10px;
            padding-bottom: 20px;
            padding-left: 20px;
            padding-right: 20px;
            border-radius: 15px;
            border-color:#d2d2d2;
            border-width: 5px;
            color:white;
            box-shadow:0 1px 0 #cfcfcf;
        }
        .form-control{
            background:transparent!important;
            color:white!important;
            font-size: 18px!important;
        }
        h1{
            color:white!important;
        }
        h4 {
            border:0 solid #fff;
            border-bottom-width:1px;
            padding-bottom:10px;
            text-align: center;
        }

        .form-control {
            border-radius: 10px;
        }
        .text-white{
            color: white!important;
        }
        .wrapper {
            text-align: center;
        }
        .footer p{
            font-size: 18px;
        }
        /*.login-container{*/
        /*    margin-top: 5%;*/
        /*    margin-bottom: 5%;*/
        /*}*/
        /*.login-logo{*/
        /*    position: relative;*/
        /*    margin-left: -41.5%;*/
        /*}*/
        /*.login-logo img{*/
        /*    position: absolute;*/
        /*    width: 20%;*/
        /*    margin-top: 19%;*/
        /*    background: #282726;*/
        /*    border-radius: 4.5rem;*/
        /*    padding: 5%;*/
        /*}*/
        /*.login-form-1{*/
        /*    padding: 9%;*/
        /*    background:#282726;*/
        /*    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);*/
        /*}*/
        /*.login-form-1 h3{*/
        /*    text-align: center;*/
        /*    margin-bottom:12%;*/
        /*    color:#fff;*/
        /*}*/
        /*.login-form-2{*/
        /*    padding: 9%;*/
        /*    background: #f05837;*/
        /*    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);*/
        /*}*/
        /*.login-form-2 h3{*/
        /*    text-align: center;*/
        /*    margin-bottom:12%;*/
        /*    color: #fff;*/
        /*}*/
        /*.btnSubmit{*/
        /*    font-weight: 600;*/
        /*    width: 50%;*/
        /*    color: #282726;*/
        /*    background-color: #fff;*/
        /*    border: none;*/
        /*    border-radius: 1.5rem;*/
        /*    padding:2%;*/
        /*}*/
        /*.btnForgetPwd{*/
        /*    color: #fff;*/
        /*    font-weight: 600;*/
        /*    text-decoration: none;*/
        /*}*/
        /*.btnForgetPwd:hover{*/
        /*    text-decoration:none;*/
        /*    color:#fff;*/
        /*}*/
        /* The Modal (background) */
        /*.modal {*/
        /*    display: none; !* Hidden by default *!*/
        /*    position: fixed; !* Stay in place *!*/
        /*    z-index: 1; !* Sit on top *!*/
        /*    left: 0;*/
        /*    top: 0;*/
        /*    width: 100%; !* Full width *!*/
        /*    height: 100%; !* Full height *!*/
        /*    overflow: auto; !* Enable scroll if needed *!*/
        /*    background-color: rgb(0,0,0); !* Fallback color *!*/
        /*    background-color: rgba(0,0,0,0.4); !* Black w/ opacity *!*/
        /*    padding-top: 60px;*/
        /*}*/

        /*!* Modal Content/Box *!*/
        /*.modal-content {*/
        /*    background-color: #fefefe;*/
        /*    margin: 5% auto 15% auto; !* 5% from the top, 15% from the bottom and centered *!*/
        /*    border: 1px solid #888;*/
        /*    width: 80%; !* Could be more or less, depending on screen size *!*/
        /*}*/

        /*!* The Close Button (x) *!*/
        /*.close {*/
        /*    position: absolute;*/
        /*    right: 25px;*/
        /*    top: 0;*/
        /*    color: #000;*/
        /*    font-size: 35px;*/
        /*    font-weight: bold;*/
        /*}*/

        /*.close:hover,*/
        /*.close:focus {*/
        /*    color: red;*/
        /*    cursor: pointer;*/
        /*}*/

        /*!* Add Zoom Animation *!*/
        /*.animate {*/
        /*    -webkit-animation: animatezoom 0.6s;*/
        /*    animation: animatezoom 0.6s*/
        /*}*/

        /*@-webkit-keyframes animatezoom {*/
        /*    from {-webkit-transform: scale(0)}*/
        /*    to {-webkit-transform: scale(1)}*/
        /*}*/

        /*@keyframes animatezoom {*/
        /*    from {transform: scale(0)}*/
        /*    to {transform: scale(1)}*/
        /*}*/

        /*!* Change styles for span and cancel button on extra small screens *!*/
        /*@media screen and (max-width: 300px) {*/
        /*    span.psw {*/
        /*        display: block;*/
        /*        float: none;*/
        /*    }*/
        /*    .cancelbtn {*/
        /*        width: 100%;*/
        /*    }*/
        /*}*/
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-5 col-md-4 text-center">
                <h1 class='text-white'>Mein Library</h1>
                <div class="form-login"></br>
                    <h4>Login to the system</h4>
                    <form action="{{route('admin.login')}}" method="post">
                        @csrf
                        <input type="text" id="email" name="email" class="form-control input-sm chat-input" placeholder="Email"/>
                        </br></br>
                        <input type="password" id="password" name="password" class="form-control input-sm chat-input"
                               placeholder="Password"/>
                        </br></br>
                        <div class="wrapper">
                        <span>
                        <button type="submit" class="btn btn-light btn-md">Login <i class="fa fa-sign-in"></i></button>
                        <a href="#" class="btn btn-light btn-md">Forgot password? <i class="fa fa-sign-in"></i></a>
</span>
                    </form>
                </div>
                </div>
            </div>
        </div>
        </br></br></br>
        <!--footer-->
        <div class="footer text-white text-center">
            <p>Trying is the first step to failure | © LMS 2020 | Design by <a href="">Mike Wazowski</a></p>
        </div>
        <!--//footer-->
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    @include('layouts.footer')
@endsection


{{--    <!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>Title</title>--}}
{{--    <!-- Required meta tags -->--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}

{{--    <!-- Bootstrap CSS -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container">--}}
{{--    <div class="card">--}}
{{--        <div class="card-header">--}}
{{--            Login--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}
{{--<!-- Optional JavaScript -->--}}
{{--<!-- jQuery first, then Popper.js, then Bootstrap JS -->--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"--}}
{{--        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"--}}
{{--        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"--}}
{{--        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}
