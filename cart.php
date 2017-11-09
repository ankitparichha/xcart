<!DOCTYPE html>
<html>
  <head>
  <title>XCART: Online Buying and Selling of Used Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="xcart.css">
  <link rel="icon" href="images/icon.jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  function blinker() {
  	$('.blinking').fadeOut(500);
  	$('.blinking').fadeIn(500);
  }
  setInterval(blinker, 100);
  </script>
  </head>
  <body style="background-color: #999966">




<table>
  <tr >
    <table class="nav">
      <tr>
        <td align="center" style="width:15%">
          <a  href="xcart.php">
            <img src="images/main.jpg"  style="padding-left:15px" width="200" height="60" alt="Image not found">
          </a>
        </td>
        <td align="center" style="width:73%" >
          <form class="searchbox_1" action="search.php" method="post">
            <input type="search" class="search_1" placeholder="Search" />
            <button type="submit" class="submit_1" value="search">&nbsp;</button>
          </form>
        </td>
        <td  style="font-size:25px">

          <a href="cart.php" style="text-decoration:none; color:#800000">
            <img src="images/cart.png" alt="Image not found" width="50" height="37">

          <b>&nbsp;CART</b>
        </a>
        </td>
      </tr>
    </table>
  </tr>
  <tr>
    <table class="nav1">
      <tr>
        <td width="62%" style="text-align:center">
          Sell&nbsp;&nbsp;anything&nbsp;&nbsp;to&nbsp;&nbsp;anyone&nbsp;&nbsp;in&nbsp;&nbsp;just&nbsp;&nbsp;one&nbsp;&nbsp;click.

          <a class="blinking navi" style="text-decoration:none; color:red " href="sell.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELL &nbsp;&nbsp;NOW&nbsp;!</a>
        </td>
        <td align="center" >
          <a class="navi" style="text-decoration:none;" href="xcart.php">Home</a>
        </td>
        <td  align="center" style="padding-left:15px" >
          <a class="navi" style="text-decoration:none;"   href="track.php">Track Order</a>
        </td>
        <td  style="padding-left:25px" >
          <button class="navi" style="text-decoration:none; width:85%;border-radius:30px";  onclick="document.getElementById('id02').style.display='block' "><span class="glyphicon glyphicon-user"></span> Sign Up</button>
          <div id="id02" class="modal" >
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
          <form class="modal-content animate" action="signupform.php">
            <div class="imgcontainer">
              <img src="images/male.png" height="140px" width="140px" alt="Avatar" class="avatar">
            </div>
            <div class="container">
              <label style="align:left;margin-left:10px; font-size:15px;" ><b>Email:</b></label></br>
              <input style="width:95%;height:45px; margin-left:10px;border-radius:10px" type="text" placeholder="Enter Email" name="email" required></br>

              <label style="align:left;margin-left:10px; font-size:15px;" ><b>Password:</b></label></br>
              <input style="width:95%;height:45px;margin-left:10px; border-radius:10px" type="password" placeholder="Enter Password" name="psw" required></br>

              <label style="align:left;margin-left:10px; font-size:15px;" ><b>Confirm Password:</b></label></br>
              <input style="width:95%;height:45px;margin-left:10px; border-radius:10px" type="password" placeholder="Confirm Password" name="psw-repeat" required></br>
              <input style="margin-left:10px;" type="checkbox" checked="checked"> Remember me</br>
              <p style="margin-left:10px;">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

              <div class="clearfix" style="background-color:#f1f1f1; height:65px; border-radius:9px">
                <button style="width:47% ; height:45px; border-radius:10px;margin-left:10px" type="button"  onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <button style="width:48%;; border-radius:10px; height:45px ;" type="submit" class="signupbtn">Sign Up</button>
              </div>
            </div>
          </form>
        </div>


        </td>
        <td   style="padding-right:10px">
          <button  class="navi" style="text-decoration:none; align:center; width:95%;border-radius:30px "  onclick="document.getElementById('id01').style.display='block'"><span class="glyphicon glyphicon-user"></span> Login</button>

          <div id="id01" class="modal">
            <span onclick="document.getElementById('id01').style.display='none'"
          class="close" title="Close Modal">&times;</span>

            <!-- Modal Content -->
            <form class="modal-content animate" action="loginform.php" method="post">
              <div class="imgcontainer">
                <img src="images/male.png" height="140px" width="140px" alt="Avatar" class="avatar">
              </div>

              <div class="container" >
                <label style="font-size:15px;margin-left:10px;" align="left" ><b>Username: </b></label>
                <input style="width:95%;margin-left:10px; border-radius:10px " type="text"  placeholder="Enter Username" name="uname" required>

                <label style="font-size:15px;margin-left:10px;" align="left"><b>Password: </b></label>
                <input style="width:95%;margin-left:10px; border-radius:10px" type="password" placeholder="Enter Password" name="psw" required>
                <input style="margin-left:10px;" type="checkbox" checked="checked"> Remember me
                <button style="height:45px;margin-left:10px; border-radius:10px; width:95%" type="submit">Login</button>

              </div>

              <div class="container" style="background-color:#f1f1f1; width:95%; border-radius:9px" >
                <button style="height:45px;margin-left:10px; width:30%; border-radius:10px" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw"><a href="#">Forgot password?</a></span>
              </div>
            </form>
          </div>




        </td>
      </tr>
    </table>
  </tr>
  <tr>
      <form action="xcartform.php" method="GET">
    <td>    Username: <input type="textbox" name="uname"></br> </td>
    <td>    Last name: <input type="textbox" name="lname"></br> </td>
    <td>    Age: <input type="text" name="age"></br> </td>
    <td>    <input type="submit" value="Submit"> </td>
      </form>
  </tr>

</table>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal ) {
        modal.style.display = "none";
    }
    if (event.target == modal1 ) {
        modal1.style.display = "none";
    }
}
</script>
  </body>
</html>
