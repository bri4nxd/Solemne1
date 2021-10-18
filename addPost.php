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
                    Crea un nuevo post
                </div>
                <div class="card-body">
                    <form action="controllers/addPostController.php" method="POST">
                        <div class="form-group">
                            <label for="autor">Autor</label>
                            <input type="text" name="autor" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="titulo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contenido">Contenido</label>
                            <textarea class="form-control" rows="5" name="contenido"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" name="fecha" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-block">
                                Agregar nuevo post
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