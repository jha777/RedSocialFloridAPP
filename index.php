<?php include('index_header.php'); ?>
<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio FloridAPP</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Asegúrate de que la ruta sea correcta -->
</head>
			<?php include('dbcon.php'); ?>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <div class="clr"><div class="title">Directorio FloridAPP</div></div>
            </div><!--/ Codrops top bar -->
            <section>				
			
                <div id="container_demo" >
				
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
								<?php include('login_form.php'); ?>
                        </div>
                        <div id="register" class="animate form">
								<?php include('sign_up_form.php'); ?>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>