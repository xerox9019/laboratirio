<?php
/* @var $this yii\web\View */

$this->title = 'Ingreso de los alumnos';
?>
<div class="site-index">
    <!-- Header -->
    <header>
        
        <div align="center">
            <h1>LABORATORIO DE REDES</h1>
            <img src="/imagen/JAGUAR.png">
        </div>
         
    </header>
    
    <body> 
            <div align="center">
            <br><br><br>
            <?= $this->render('_form', ['model' => $model]); ?>
            <?php
            if ($user != null && $fecha != null) {
                ?>

                <div  style="color:black">
                    <?php echo "Matricula: " . $user->username;
                    echo "<br>"; ?>
                    <?php echo "Nombre y Apellido: " . $user->nombre . ' ' . $user->paterno . ' ' .$user->materno ;
                    echo "<br>"; ?>
                </div>
    <?php echo "<br>"; ?>
                <div class="alert alert-danger fade in">
                <?= $fecha ?> 
                </div>

    <?php
}
?>
    
    
    </body>


    <script type="text/javascript">
        <!--
          function isNumberKey(evt)
        {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
        //-->
    </script>

</div>
