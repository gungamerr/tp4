
<?php
     require_once "header.php";
?>

<main class="d-flex align-items-center justify-content-center height-100">
     <div class="content">
          <header class="text-center">
               <h2>Practico N° 4</h2>
          </header>
          <?php 
               if(isset($_GET['error'])){
                    $error = $_GET['error'];
                    if($error == "pass")
                    {
                         echo '<strong style="color:red">Account or pass invalid</strong>';
                    }else if($error =="empty")
                              {
                              echo '<strong style="color:red">Please complete all fields</strong>';
                              }
               }
          ?>
          <form action="action.php" method="post" class="login-form bg-dark-alpha p-5 text-white">
               <div class="form-group">
                    <label for="user">Usuario</label>
                    <input type="text" name="user" class="form-control form-control-lg" placeholder="Ingresar usuario" required="required">
               </div>
               <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="text" name="pass" class="form-control form-control-lg" placeholder="Ingresar constraseña" required="required" pattern=".{6,}">
               </div>
               <button class="btn btn-dark btn-block btn-lg" type="submit">Iniciar Sesión</button>
          </form>
     </div>
</main>

<?php
     require_once "footer.php";
?>