<?php function draw_login() { 
?>
  
    
    <div id = "login" class = "container">

    <form class="authform_login" method="post" action="../actions/act_login.php">
       
      <input type="text" name="username" placeholder="username" required>
      <input type="password" name="password" placeholder="password" required>
        <center><input type="submit" value="Log In"></center>
    </form>
      </div>


  
        

<?php } ?>

<?php function draw_register() { 
?>
  <div id = "register" class = "container">
    
 
    <form class="authform_register" method="post" action="../actions/act_register.php">
      <input type="text" name="username" placeholder="username" required>
      <input type="password" name="password" placeholder="password" required>
       <input type="text" name="email" placeholder="email" required>
        <center><input type="submit" value="Register"></center>
    </form>

  </div>

     

<?php } ?>

<?php function draw_logged_in() {  //já não usamos
?>
 
    
    <h3><?php echo "Bem vindo " . $_SESSION['username'] . "." ?></h3>
    <?php     echo '<a href = "../pages/viewProfile.php?username='.$_SESSION['username'].'">'. "Perfil" . '</a>';?>
    <a href = "../actions/act_log_out.php"> Log Out</a>


 

   
}

<?php }

?>