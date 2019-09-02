
<div id='header'>
  <div id='centered-header'>

    <div id='logo'>
      <label id='logo-space'>Space</label>
      <label id='logo-game'>Game</label>
    </div>

    <div id='header-menu-left'>
      <ul>
        <li> Register |</li>
        <li> Help</li>
        <li></li>
      </ul>
    </div>

    <div id='header-menu-right'>
        <?php


          if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            print "session set";

          }else{
            ?>
            <form id='frmlogin' name='login' method = 'post' action='#'>
              <input type="text" class='input' id='username' name= 'username' required>
              <input type="password" class='input' name='password' id='password' required>
              <input type="submit" id='btnlogin' name='btnlogin'><br/>
              <label id='' clear:'both'>Forgot password</label>
              </form>
        <?php  }
 ?>




    </div>
  </div>
</div>
