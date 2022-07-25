<?php include('./partials/header.php');?>
    <div class="container pt-5">
        <div class="row pt-5">
            <div class="col-md-8">
                IMG
            </div>
            <div class="col-md-4">
            <h1>Inicia sesion en esta gran tienda de juegos!</h1>
            <form action="login.php" method="post">
            <input class="form-control" type="text" name="email" placeholder="Escribe tu Correo Electronico">
            <input class="form-control " type="password" name="password" placeholder="Escribe tu contraseña">
            <input class="btn btn-primary" type="submit" value="send">
            </form>
            </div>
        </div>
    </div>
<?php include('./partials/footer.php');?>