<br>
<section>
    <br>
    <h2 style="text-align:center">Crear Jugador</h2>
    <br>
    <br>
    <div class="container">
        <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
        <?php } ?>
    </div>
    <div class="container" style="background-color: #ECEFF1; width:90%; height: 25rem;">
        <form action="store.php" method="POST">
            <div class="container text-center">
                <br>
                <div class="mb-3">
                    <label class="fs-2" for="nombre" class="form-label">Nombre del jugador</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                </div>
                <div class="mb-3 form-group">
                    <label class="fs-2" for="posicion" class="form-label">Posicion</label>
                    <i class="fas fa-globe-americas "></i>
                    <select class="form-control" name="posicion">
                        <?php foreach ($listaPosiciones as $posicion) { ?>
                            <option value="<?= $posicion->id ?>" selected><?= $posicion->nombre ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3 form-group">
                    <label class="fs-2" for="equipo" class="form-label">Equipo</label>
                    <i class="fas fa-globe-americas "></i>
                    <select class="form-control" name="equipo">
                        <?php foreach ($listaEquipos as $equipo) { ?>
                            <option value="<?= $equipo->id ?>" selected><?= $equipo->nombre ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Crear Jugador</button>
                </div>
            </div>
        </form>
    </div>
</section>