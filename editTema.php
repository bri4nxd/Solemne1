<head id="hd1">
    <link href="./css/vistaBlog.css" rel="stylesheet" type="text/css" />
</head>
<?php
require_once('vendor/autoload.php');
require_once('models/Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

$temas = DB::table('temas')->where('id', '=', $_GET['id'])->get();
?>

<?php require_once './vistas/headerIniciado.php'; ?>
<div class="row">
    <div class="col-md-12">
        <?php if (isset($_SESSION['actualizado'])) : ?>
            <div class="alert alert-success">
                <?= $_SESSION['actualizado']; ?>
            </div>
            <?php unset($_SESSION['actualizado']); ?>
        <?php endif; ?>

        <body id="img1" background="./img/fondo.jpg">
            <div class="card">
                <div class="card-body">
                    <form action="controllers/updateTemaController.php" method="POST">
                        <div>
                            <label>Autor</label>
                            <input type="text" name="autor" value="<?= $temas[0]->autor ?> " class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Temas</label>
                            <input type="text" name="tema" value="<?= $temas[0]->tema ?> " class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Contenido</label>
                            <textarea class="form-control" rows="5" name="contenido"><?php echo $temas[0]->contenido ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="date" name="fecha" value="<?= $temas[0]->fecha ?> " class="form-control">
                        </div>
                        <input type="hidden" name="id" value="<?= $temas[0]->id ?> ">
                        <div class="form-group">
                            <button class="btn btn-success btn-block">
                                Actualizar
                            </button>
                            <a class="btn btn-danger btn-block" href="indexTema.php">
                                Volver
                            </a>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    </body>
    <div class="col-md-6">
        <?php if (isset($_SESSION['usuario'])) : ?>
            <div class="alert alert-success">
                <?= $_SESSION['usuario']; ?>
            </div>
            <?php unset($_SESSION['usuario']); ?>
        <?php endif; ?>

    </div>
</div>


<?php require_once './vistas/footer.php';  ?>