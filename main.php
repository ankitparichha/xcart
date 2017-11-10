<?php
    session_start();
    if(!empty($_SESSION['fail-search'])){
      echo "<script>alert('No related Product Found!!!');</script>";
      unset($_SESSION['fail-search']);
    }
    if(empty($_SESSION['id'])){
      header("Location:xcart.php");
    }
    if(!empty($_SESSION['success_sell']))
    {
      echo "<script>alert('Ad Successfully Submitted!!')</script>";
      unset($_SESSION['success_sell']);
    }
 ?>

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
  <body background="images/bg1.jpg" style="background-repeat:no-repeat; background-size:cover; ">
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
          <form class="searchbox_1" action="search.php" onsubmit="return sear()" method="get">
            <input type="text" class="search_1" placeholder="Search" name='search'/>
            <button type="submit" class="submit_1"  value="search">&nbsp;</button>
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
        </td>
        <td   style="padding-right:10px">
          <a href="logout.php"><button  class="navi" style="text-decoration:none; align:center; width:95%;border-radius:30px "><span class="glyphicon glyphicon-user" ></span> Logout</button></a>

        </td>
      </tr>
    </table>
  </tr>
  <tr >
    <table style="width:100%;
  	border-radius:10px;
  	margin:1;
  	height:35px;">
    <tr>
      <td style="font-size:22px; padding-top:20px;  font-family:Lucida Sans Unicode; " align="center">
        <b>Offers<b>
      </td>
      <td style="font-size:22px; padding-top:20px;  font-family:Lucida Sans Unicode; " align="center">
        <b>Recently Added<b>
      </td>
    </tr>
      <tr>
        <td >
          <div class="container">
    	       <div id="content-slider">
        	      <div id="slider">
            	     <div id="mask">
                     <ul>
               	       <li id="first" class="firstanimation">
                         <a href="#">
                           <img src="images/img_11.jpg" height="400px"	width="645px" alt="Festival offers"/>
                         </a>
                         <div class="tooltip">
                          <h1>Festival Offers</h1>
                        </div>
                      </li>

                      <li id="second" class="secondanimation">
                        <a href="#">
                          <img src="images/img_22.png" height="400px"	width="645px"  alt="Offers"/>
                        </a>
                        <div class="tooltip">
                          <h1>Offers</h1>
                        </div>
                      </li>

                      <li id="third" class="thirdanimation">
                        <a href="#">
                          <img src="images/img_33.jpg" height="400px"	width="645px"  alt="SBI"/>
                        </a>
                        <div class="tooltip">
                          <h1>SBI</h1>
                        </div>
                      </li>

                      <li id="fourth" class="fourthanimation">
                        <a href="#">
                          <img src="images/img_44.jpg" height="400px"	width="645px"  alt="HDFC"/>
                        </a>
                        <div class="tooltip">
                          <h1>HDFC</h1>
                        </div>
                      </li>

                      <li id="fifth" class="fifthanimation">
                        <a href="https://www.mobikwik.com/" target="_blank">
                          <img src="images/img_55.jpg" height="400px"	width="645px"  alt="Mobikwik"/>
                        </a>
                        <div class="tooltip">
                          <h1>Mobikwik</h1>
                        </div>
                      </li>
                    </ul>
                  </div>
                <div class="progress-bar"></div>
              </div>
            </div>
          </div>
        </td>
    <td style="padding-right:10px" >
      <div class="container">
	       <div id="content-slider">
    	      <div id="slider">
        	     <div id="mask">
                 <ul>
           	       <li id="first" class="firstanimation">
                     <a href="#">
                       <img src="images/img_1.jpg" height="400px"	width="645px" alt="Cougar"/>
                     </a>
                     <div class="tooltip">
                      <h1>Cougar</h1>
                    </div>
                  </li>

                  <li id="second" class="secondanimation">
                    <a href="#">
                      <img src="images/img_2.jpg" height="400px"	width="645px"  alt="Lions"/>
                    </a>
                    <div class="tooltip">
                      <h1>Lions</h1>
                    </div>
                  </li>

                  <li id="third" class="thirdanimation">
                    <a href="#">
                      <img src="images/img_3.jpg" height="400px"	width="645px"  alt="Snowalker"/>
                    </a>
                    <div class="tooltip">
                      <h1>Snowalker</h1>
                    </div>
                  </li>

                  <li id="fourth" class="fourthanimation">
                    <a href="#">
                      <img src="images/img_4.jpg" height="400px"	width="645px"  alt="Howling"/>
                    </a>
                    <div class="tooltip">
                      <h1>Howling</h1>
                    </div>
                  </li>

                  <li id="fifth" class="fifthanimation">
                    <a href="#">
                      <img src="images/img_5.jpg" height="400px"	width="645px"  alt="Sunbathing"/>
                    </a>
                    <div class="tooltip">
                      <h1>Sunbathing</h1>
                    </div>
                  </li>
                </ul>
              </div>
            <div class="progress-bar"></div>
          </div>
        </div>
      </div>
    </td>
    </tr>
    </table>
  </tr>


<tr>
  <table class="nav3" width="100%" >
    <tr height="20px">
      <td>
      </td>
      <td>
      </td>
      <td>
      </td>

    </tr>
    <tr height="30px">
      <td >

        <b>Help</b><hr>

      </td>
      <td>

        <b>Xcart</b><hr>

      </td>
      <td>

        <b>MISC</b><hr>

      </td>
    </tr>

    <tr height="30px">
      <td width="33%">
        <a href="#" style="text-decoration:none; color:black">
        Payments
        </a>
      </td>
      <td width="34%">
        <a href="#" style="text-decoration:none; color:black">
        Contact Us
        </a>
      </td>
      <td width="33%">
        <a href="#" style="text-decoration:none; color:black">
        Online Shopping
        </a>
      </td>

    </tr>

    <tr height="30px">
      <td>
        <a href="#" style="text-decoration:none; color:black">
        Shipping
        </a>
      </td>
      <td>
        <a href="#" style="text-decoration:none; color:black">
        About Us
        </a>
      </td>
      <td>
        <a href="#" style="text-decoration:none; color:black">
        Affiliate Program
        </a>
      </td>

    </tr>

    <tr height="30px">
      <td>
        <a href="#" style="text-decoration:none; color:black">
        Cancellations and Returns
        </a>
      </td>
      <td>
        <a href="#" style="text-decoration:none; color:black">
        Careers
        </a>
      </td>
      <td>
        <a href="#" style="text-decoration:none; color:black">
        Gift Card
        </a>
      </td>

    </tr>
    <tr height="30px">
      <td>
        <a href="#" style="text-decoration:none; color:black">
        FAQ
        </a>
      </td>
      <td>
        <a href="#" style="text-decoration:none; color:black">
        Xcart Stories
        </a>
      </td>
      <td>
        <a href="#" style="text-decoration:none; color:black">
      Xcart First Subscription
      </a>
      </td>

    </tr>
    <tr height="30px">
      <td>
        <a href="#" style="text-decoration:none; color:black">
        Report Fringement
        </a>
      </td>
      <td>
        <a href="#" style="text-decoration:none; color:black">
        Press
        </a>
      </td>
      <td>
        <a href="#" style="text-decoration:none; color:black">
        Sitemap
      </a>
      </td>
    </tr>
    <tr height="30px">
      <td>
      </td>
      <td>
      </td>
      <td>
      </td>

    </tr>

  </table>
</tr>
<tr >
  <td  width="100%">
  <div id="wrap" align="center" >
  <div id="footer-wrap"><div id="footer" style="background-color:#b3d9ff; border-radius:6px">

      <p>
      &copy; 2017 Xcart Corp. Ltd.

            &nbsp;&nbsp;&nbsp;&nbsp;

      Design by <a href="https://www.linkedin.com/in/ankitparichha/" target="_blank">Ankit Parichha</a>

           | <a href="#">CSS Portal </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <a href="#">Home</a> |
           <a href="#">Sitemap</a> |
           <a href="#">RSS Feed</a> |
            <a href="#">Track</a> |
      <a href="#">Feedback</a>
      </p>

  </div></div>
</div>
</td>
</tr>

</table>
<script>
// Get the modal
var modal = document.getElementById('id01');
var modal1 = document.getElementById('id02');

window.onload = function(){
  if(x==1){
    document.getElementById('loginForm').classList.remove('animate');
    document.getElementById('id01').style.display='block';
  }
  if(x1==1){
    document.getElementById('signupForm').classList.remove('animate');
    document.getElementById('id02').style.display='block';
  }
}
function clickSignUp(){
  if(document.getElementsByName('pass')[0].value!=document.getElementsByName('pass-repeat')[0].value){
  document.getElementById('msg1').innerHTML="Passwords Must Match!!!";
  document.getElementsByName('pass')[0].value="";
  document.getElementsByName('pass-repeat')[0].value="";
  return false;
  }
  return true;
}
function sear()
{
   if(document.getElementsByName('search')[0].value==undefined || document.getElementsByName('search')[0].value==''){
     alert('Search bar cannot be empty!!');
    return false;
    }
    <?php
      $_SESSION['prev']='main.php';
     ?>
   return true;
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal ) {
        modal.style.display = "none";
        setTimeout(function(){document.getElementById('loginForm').classList.add('animate')},700);
    }
    if (event.target == modal1 ) {
        modal1.style.display = "none";
        setTimeout(function(){document.getElementById('signupForm').classList.add('animate')},700);
    }

}
</script>
  </body>
</html>
