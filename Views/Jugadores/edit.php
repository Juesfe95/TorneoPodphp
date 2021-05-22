<br>
<section>
    <br>
    <h2 style="text-align:center">Editar Jugador</h2>
    <br>
    <div class="container" style="background-color: #ECEFF1; width:90%; height: 32rem;">
        <form action="update.php" method="POST">
            <div class="container text-center">
                <br>
                <div class="mb-3">
                    <label class="fs-2" for="id" class="form-label">Id del jugador</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $jugador->id ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="nombre" class="form-label">Nombre del Jugador</label>
                    <i class="fas fa-user-shield"></i>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $jugador->nombre ?>">
                </div>
                <div class="mb-3 form-group">
                    <label class="fs-2" for="posicion" class="form-label">Posicion</label>
                    <i class="fas fa-globe-americas "></i>
                    <select class="form-control" name="posicion">
                        <?php foreach ($listaPosiciones as $posicionP) { ?>
                            <option value="<?= $posicionP->id ?>" <?php if ($posicionP->id == $jugador->posicion_id) { ?> selected> <?php } ?><?= $posicionP->nombre ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3 form-group">
                    <label class="fs-2" for="equipo" class="form-label">Equipo</label>
                    <i class="fas fa-globe-americas "></i>
                    <select class="form-control" name="equipo">
                        <?php foreach ($listaEquipos as $equipoE) { ?>
                            <option value="<?= $equipoE->id ?>"
                             <?php if ($equipoE->id == $jugador->equipo_id) { ?> selected> <?php } ?><?= $equipoE->nombre ?>
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