<br>
<section >
    <br>
    <h2 style="text-align:center">Editar Municipio</h2>
    <br>
    <br>
    <div class="container" style="background-color: #ECEFF1; width:90%; height: 18rem;">
        <br>
        <form action="update.php" method="POST">
            <div class="container text-center">
                <div class="mb-3">
                    <label class="fs-2" for="id" class="form-label">Id Municipio ...</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?= $municipioId->id ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="fs-2" for="nombre" class="form-label">Nombre del Municipio</label>
                    <i class="fas fa-globe-americas fs-2"></i>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $municipioId->nombre ?>">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-lg" type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </div>
</section>