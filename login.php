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
  <SCRIPT TYPE="text/javascript"> function popup(mylink, windowname) { if (! window.focus)return true; var href; if (typeof(mylink) == 'string') href=mylink; else href=mylink.href; window.open(href, windowname, 'width=400,height=200,scrollbars=yes'); return false; } </SCRIPT>
  </head>
  <body style="background-color: #e0e0d1;">

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
            <td width="65%" style="text-align:center">
              Sell&nbsp;&nbsp;anything&nbsp;&nbsp;to&nbsp;&nbsp;anyone&nbsp;&nbsp;in&nbsp;&nbsp;just&nbsp;&nbsp;one&nbsp;&nbsp;click.

              <a class="blinking navi" style="text-decoration:none; color:red " href="sell.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELL &nbsp;&nbsp;NOW</a>
            </td>
            <td align="right">
              <a class="navi" style="text-decoration:none;" href="xcart.php">Home</a>
            </td>
            <td  align="right" >
              <a class="navi" style="text-decoration:none;"  href="track.php">Track Order</a>
            </td>
            <td  style="padding-left:15px" align="center">
              <a class="navi" style="text-decoration:none;"  href="signup.php" onclick="return popup(this, 'notes')"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
            </td>
            <td  align="center" style="padding-right:30px">
              <a class="navi" style="text-decoration:none;"  href="login.php" onclick="return popup(this, 'notes')"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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

    </body>
  </html>
