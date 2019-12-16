
<?php 
if(isset($info)){
    echo $info;
}
?>
<form action="" method="POST">
  <p>
   <label>Username</label>
   <input value="" name="username" type="text" required="required" /><br>
  </p>

  <p>
   <label>Password</label>
   <input name="password" type="password" required="required" />
  </p>
   <br />
  <p>

      <input type="submit" name="submit" value="Login">
          
      <input type="reset" value="Cancelar">
  </p>
 </form>