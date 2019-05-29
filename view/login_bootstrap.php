<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="_css/login_bootstrap.css">
<!------ Include the above in your HEAD tag ---------->

<!---*************welcome this is my simple empty strap by John Niro Yumang ******************* -->

<!DOCTYPE html>
<html lang="en">

    <title>Login e Cadastro</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <head>
        <script src="jquery/jquery.min.js"></script>
        <!---- jquery link local dont forget to place this in first than other script or link or may not work ---->
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!---- boostrap.min link local ----->
        
        <link rel="stylesheet" href="css/style.css">
        <!---- boostrap.min link local ----->

        <script src="js/bootstrap.min.js"></script>
        <!---- Boostrap js link local ----->
        
        <link rel="icon" href="images/icon.png" type="image/x-icon" />
        <!---- Icon link local ----->
        
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <!---- Font awesom link local ----->
    </head>
    <body>
    <div class="container-fluid">
        <div class="container">
            <h2 class="text-center" id="title">Fassa Login ou Crie Sua  Conta</h2>
             <p class="text-center">
                <small id="passwordHelpInline" class="text-muted"> Developer: follow me on facebook <a href="https://www.facebook.com/JheanYu"> John niro yumang</a> inspired from <a href="https://p.w3layouts.com/">https://p.w3layouts.com/</a>.</small>
            </p>
            <hr>
            <div class="row">
                <div class="col-md-5">
                    <form role="form" method="post" action="../controller/create.php">
                        <fieldset>                          
                            <p class="text-uppercase pull-center"> Criar conta:</p> 
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Seu Nome">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Senha">
                            </div>
                                <div class="form-group">
                                <input type="text" name="telefone" id="telefone" class="form-control input-lg" placeholder="Telefone">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input">
                                  By Clicking register you're agree to our policy & terms
                                </label>
                              </div>
                            <div>
                                <!--<input type="submit" class="btn btn-lg btn-primary   value="Register">-->
                                <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
                
                <div class="col-md-2">
                    <!-------null------>
                </div>
                
                <div class="col-md-5">
                        <form role="form" method="post" action="../model/login1.php">
                        <fieldset>                          
                            <p class="text-uppercase"> Fazer login: </p>   
                                
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Senha">
                            </div>
                            <div>
                                <input type="submit" class="btn btn-md" value="Entrar">
                            </div> 
                        </fieldset>
                </form> 
                </div>
            </div>
        </div>
        <p class="text-center">
            <small id="passwordHelpInline" class="text-muted"> Developer:<a href="http://www.psau.edu.ph/"> Pampanga state agricultural university ?</a> BS. Information and technology students @2017 Credits: <a href="https://v4-alpha.getbootstrap.com/">boostrap v4.</a></small>
        </p>
    </div>
    </body>
     

</html>