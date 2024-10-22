<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formlario</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f9;
        color: #333;
        padding: 20px;
    }

    div {
        background-color: white;
        width: 80%;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        border-radius: 8px;
    }

    h1 {
        color: #5d5d5d;
    }

    form {
        margin-top: 20px;
    }

    fieldset {
        border: none;
        padding: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-size: 16px;
        color: #666;
    }
    input[type="text"] {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .boton{
        display: grid;
        justify-content: center;
        align-items: center;
    }
    .boton {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 4px;
    }
    .boton:hover {
        background-color: #45a049;
    }
</style>
</head>
    <body>
    <div> <br><br><br>
        <h1 class="bi bi-exclamation-octagon me-1">MODIFICAR DATOS</h1>
        <hr>
        <?php foreach($datos as $fila) { ?>
         <!-- General Form Elements -->
         <center>
         <form action="" method="POST">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
                  <input type="text" id="nombre" name="nombre" value="<?= $fila->nombre ?>">               
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Telefono</label>                 
                  <input type="text" id="telefono" name="telefono" value="<?= $fila->telefono ?>">                  
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>                
                  <input type="email" id="email" name="email" value="<?= $fila->email ?>"><br>              
                </div>
                
                <center><input id="editar" class="boton" type="submit" value="ACTUALIZAR" name="editar"> </center>
                
              </form><!-- End General Form Elements -->
              </center>
        <?php } ?>
    </div>
    

                 
</body>
</html> 