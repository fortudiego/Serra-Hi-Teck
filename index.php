<!DOCTYPE html>
<html lang="en">

<head>
    <title>Serra ITech</title>
    <?php
    include_once "componentiBase/header.php";
    headerIndex();
    ?>
    <script type="text/javascript">
        function Login(){
            var id_utente = $('#usernameU').val();
            var pwd = $('#pwdU').val();

            $.ajax({
                type: "POST",
                url: "/script/utenti.php",
                data: "nome=" + nome + "&cognome=" + cognome,
                dataType: "html",
                success: function(risposta) {

                },
                error: function(){
                    alert("Chiamata fallita!!!");
                }
            });
        }
    </script>
</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Benvenuto in Serra ITech!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                               id="usernameU" aria-describedby="emailHelp"
                                               placeholder="Enter Username...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                               id="pwdU" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <a href="index.php" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.html">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

</body>

</html>
