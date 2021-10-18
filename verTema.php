<head id="hd1">
    <link href="./css/vistaBlog.css" rel="stylesheet" type="text/css" />
</head>

<?php
require_once('vendor/autoload.php');
require_once('models/Database/Database.php');


use Illuminate\Database\Capsule\Manager as DB;

$temas = DB::table('temas')->where('id', '=', $_GET['id'])->get();
?>

<body id="img" background="./img/fondo.jpg">
    <?php require_once './vistas/headerIniciado.php'; ?>


    <div class="card">
        <div class="card-body">
            <form action="controllers/updateTemaController.php" method="POST">
                <div class="form-group">
                    <div id="dv1"><?php echo $temas[0]->tema ?></div>
                    <div id="dv2">@<?php echo $temas[0]->autor ?></div>
                    <div id="dv3"><?php echo $temas[0]->fecha ?></div>
                </div>

                <div class="w-auto p-3" style="background-color: #eee;"><?php echo $temas[0]->contenido ?></div>

                <input type="hidden" name="id" value="<?= $temas[0]->id ?> ">
                <div class="form-group">
                </div>
            </form>
        </div>
    </div>
    </div>

    <?php require_once './vistas/footer.php';  ?>
</body>