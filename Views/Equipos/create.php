<br>
<section>
    <br>
    <h2 style="text-align:center">Crear Equipo</h2>
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
                    <label class="fs-2" for="nombre" class="form-label">Nombre del Equipo</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="dt" class="form-label">Director tecnico</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="text" class="form-control" id="dt" name="dt" placeholder="Director tecnico">
                </div>
                <div class="mb-3 form-group">
                    <label class="fs-2" for="municipio" class="form-label">Municipio</label>
                    <i class="fas fa-globe-americas "></i>
                    <select class="form-control" name="municipio">
                        <?php foreach ($listaMunicipios as $municipio) { ?>
                            <option value="<?= $municipio->id ?>" selected><?= $municipio->nombre ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Crear Equipo</button>
                </div>
            </div>
        </form>
    </div>
</section>