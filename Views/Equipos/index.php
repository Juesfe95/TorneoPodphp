<br>
<section>
    <?php if (isset($_GET["accion"])) { ?>
        <br>
        <div id="content" class="container" style="margin-top: 3rem;">
            <div class="<?= $clase ?>" role="alert">
                <?php if ($clase == "alert alert-success") { ?>
                    <i class="far fa-check-circle"></i>
                <?php } else { ?>
                    <i class="far fa-window-close"></i>
                <?php } ?>
                <?= $mensaje ?>
            </div>
            <br>
        </div>
    <?php } ?>
    <h2 style="text-align:center">Listado de Equipos</h2>
    <br>
    <div class="container">
        <div class="container text-center">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-dark text-warning">
                        <th class="fs-3" scope="col">#</th>
                        <th class="fs-3" scope="col">Id</th>
                        <th class="fs-3" scope="col">Nombre</th>
                        <th class="fs-3" scope="col">DT</th>
                        <th class="fs-3" scope="col">Municipio</th>
                        <th class="fs-3" scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $position = 0;
                    foreach ($listaEquipos as $equipo) {
                        $position++; ?>

                        <tr>
                            <th scope="row"><?= $position ?></th>
                            <td><?= $equipo->id ?></td>
                            <td><?= $equipo->nombre ?></td>
                            <td><?= $equipo->dt ?></td>
                            <td><?= $equipo->mNombre?></td>
                            <td>
                                <a class="btn btn-outline-warning" href="edit.php?id=<?= $equipo->id ?>" role=" button">
                                    <i class="fas fa-pen"></i></a>
                                <a class="btn btn-outline-danger" href="destroy.php?id=<?= $equipo->id ?>" role=" button">
                                    <i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>