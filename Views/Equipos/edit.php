<br>
<section>
    <br>
    <h2 style="text-align:center">Editar Municipio</h2>
    <br>
    <div class="container" style="background-color: #ECEFF1; width:90%; height: 32rem;">
        <form action="update.php" method="POST">
            <div class="container text-center">
                <br>
                <div class="mb-3">
                    <label class="fs-2" for="id" class="form-label">Id del equipo</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $equipo->id ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="nombre" class="form-label">Nombre del Equipo</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $equipo->nombre ?>">
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="dt" class="form-label">Director tecnico</label>
                    <i class="fas fa-chess-board"></i>
                    <input type="text" class="form-control" id="dt" name="dt" value="<?= $equipo->dt ?>">
                </div>
                <div class="mb-3 form-group">
                    <label class="fs-2" for="municipio" class="form-label">Municipio</label>
                    <i class="fas fa-globe-americas "></i>
                    <select class="form-control" name="municipio">
                        <?php foreach ($listaMunicipios as $municipioN) { ?>
                            <option value="<?= $municipioN->id ?>"
                                <?php if($municipioN->id == $equipo->municipio_id) { ?> selected> <?php }?><?= $municipioN->nombre ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</section>