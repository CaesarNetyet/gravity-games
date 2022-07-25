<main class="d-flex flex-column vh-100">
<?php include('./partials/header.php');?>
        <div class="row flex-grow-1 align-items-md-center">
            <div class="col-md-6 offset-md-1  text-center">
                <img class=" border border-3 border-warning rounded-3 img-fluid " src="./assets/img/esports.jpg" alt="">
            </div>
            <div class="col-md-4">
            <h1>Registrate en esta gran tienda de juegos!</h1>
            <form class="p-3 bg-primary text-white d-flex gap-3 flex-column rounded-3" action="signup.php" method="post">
            <input class="form-control" type="text" name="nombre" placeholder="Escribe tu nombre">
            <input class="form-control " type="text" name="apellidos" placeholder="Escribe tus apellidos">
            <input class="form-control" type="text" name="email" placeholder="Escribe tu Correo Electronico">
            <input class="form-control " type="password" name="password" placeholder="Escribe tu contraseña">
            <input class="btn bg-danger opacity-80 text-white" type="submit" value="Registarse">
            </form>
            </div>
        </div>

<?php include('./partials/footer.php');?>

</main>