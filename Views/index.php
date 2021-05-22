<br>
<br>
<div class="container">
    <?php if (isset($_GET["accion"])) { ?>
        <div class="<?= $clase ?>" role="alert">
            <?= $mensaje ?>
        </div>
    <?php } ?>
</div>
<div class="container">
    <div class="escudo ">

    </div>
</div>
<br>
<section>
    <div class="container" style="background-color: #ECEFF1; width:90%; height: 23rem;">
        <br>
        <form action="iniciarsesion.php" method="POST">
            <div class="container text-center">
                <div class="mb-3">
                    <label class="fs-2" for="usuario" class="form-label">USUARIO</label>
                    <i class="fas fa-user fs-2"></i>
                    <input type="email" class="form-control" id="usuario" name="usuario" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="pasword" class="form-label">PASSWORD</label>
                    <i class="fas fa-key fs-2"></i>
                    <input type="password" class="form-control" id="pasword" name="pasword" placeholder="********">
                </div>
                <div id="row">
                    <div class="mb-3">
                        <button class="btn btn-primary btn-lg" type="submit">Ingresar</button>
                    </div>
                    <div class="mb-3">
                        <a href="Logins/create.php"> <button class="btn btn-info btn-lg" type="button">Registrarse</button></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>