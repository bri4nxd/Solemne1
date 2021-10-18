<?php require_once './vistas/headerIniciado.php'; ?>

<body id="img1" background="./img/fondo.jpg">
<div class="row">
    <div class="col-md-12">
        <?php if(isset($_SESSION['agregar'])): ?>
        <div class="alert alert-success">
            <?= $_SESSION['agregar'];?>
        </div>
        <?php unset($_SESSION['agregar']); ?> 
        <?php endif; ?>
        <div class="mt-4">
            <div class="card">
                <div class="card-header">
                    Crea un nuevo tema
                </div>
                <div class="card-body">
                    <form action="controllers/addTemaController.php" method="POST">
                        <div class="form-group">
                            <label for="autor">Autor</label>
                            <input type="text" name="autor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="tema">Tema</label>
                            <input type="text" name="tema" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-block">
                                Agregar nuevo tema
                            </button>
                            <div class="form-group">
                            <a href="index.php" class="btn btn-danger btn-block">
                                Volver
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        </body>

<?php require_once './vistas/footer.php';  ?>