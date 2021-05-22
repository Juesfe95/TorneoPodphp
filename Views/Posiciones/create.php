<section>
    <br>
    <h2 style="text-align:center">Crear Posicion</h2>
    <br>
    <br>
    <div class="container">
        <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
    </div>
    <div class="container" style="background-color: #ECEFF1; width:90%; height: 14rem;">
        <br>
        <br>
        <form action="Store.php" method="POST">
            <div class="container text-center">

                <div class="mb-3">
                    <label class="fs-2" for="nombre" class="form-label">Nombre de la posicion</label>
                    <i class="fas fa-users fs-2"></i>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Posicion">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Crear Posicion</button>
                </div>
            </div>
        </form>
    </div>
</section>