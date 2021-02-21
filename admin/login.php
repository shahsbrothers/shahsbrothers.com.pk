<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        
        .lds-dual-ring {
            display: inline-block;
            width: 80px;
            height: 80px;
        }
        
        .lds-dual-ring:after {
            content: " ";
            display: block;
            width: 50px;
            height: 50px;
            margin: 8px;
            border-radius: 50%;
            border: 6px solid rgb(199, 114, 114);
            border-color: rgb(214, 82, 82) transparent rgb(101, 75, 148) transparent;
            animation: lds-dual-ring 0.8s linear infinite;
        }
        
        @keyframes lds-dual-ring {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <form class="form-signin" id="form">
        <img class="mb-4" src="../assets/img/favicon.png" alt="" width="90" height="90">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" name="username" class="form-control mb-1" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
         </label>
        </div>
        <div class="mb-3">
            <div id="loading" style="display: none;">
                <div class="lds-dual-ring"></div>
            </div>
            <div id="error-message" class="text-danger"></div>
        </div>
        <button class=" btn btn-primary " type="submit ">Sign in</button>
        <p class="mt-5 mb-3 text-muted ">&copy; 2021-2021</p>
    </form>
    <script src="../assets/vendor/jquery/jquery.min.js "></script>
    <script>
        $(document).ready(function() {

            // process the form
            $('form').submit(function(event) {

                // get the form data
                // there are many ways to get this data using jQuery (you can use the class or id also)
                var formData = {
                    'username': $('input[name=username]').val(),
                    'password': $('input[name=password]').val()
                };

                // process the form
                $.ajax({
                        type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                        url: 'core/login.php', // the url where we want to POST
                        data: formData, // our data object
                        dataType: 'json', // what type of data do we expect back from the server
                        encode: true
                    })
                    // using the done promise callback
                    .done(function(data) {
                        console.log(data);

                        success = data.success;
                        if (success) {
                            setTimeout(function() {
                                window.location.href = "index.php";
                            }, 3000);
                            document.getElementById("loading").style.display = "block";
                            document.getElementById("inputEmail").classList.remove("is-invalid");
                            document.getElementById("inputPassword").classList.remove("is-invalid")


                        } else {
                            document.getElementById("loading").style.display = "none";
                            document.getElementById("inputEmail").classList.add("is-invalid");
                            document.getElementById("inputPassword").classList.add("is-invalid")
                                //document.getElementById("error-message").innerHTML = data.errors.login;

                        }
                        // here we will handle errors and validation messages
                    });

                // stop the form from submitting the normal way and refreshing the page
                event.preventDefault();
            });

        });
    </script>

</body>

</html>