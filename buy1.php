<?php
    session_start();
    if(!empty($_SESSION['fail-search'])){
      echo "<script>alert('No related Product Found!!!');</script>";
      unset($_SESSION['fail-search']);
    }
    $_SESSION['buy']=1;
    $err="";
    $err1="";
    extract($_REQUEST);
          $con = mysqli_connect("localhost","root","","ankitdb");
          if(!$con)
          {
          die('Could not connect:'.mysqli_connect_error());
          }
          $sql="select * from sell where id=".$_SESSION['searchid'];
          $rs=mysqli_query($con,$sql) or die(mysql_error());
          $result=mysqli_fetch_array($rs);
            $category=$result['category'];
            $title=$result['title'];
            $price=$result['price'];
            $brand=$result['brand'];
            $condition=$result['condition1'];
            $date=$result['date'];
            $description=$result['description'];
            $nname=$result['nname'];
            $nphone=$result['nphone'];
            $nemail=$result['nemail'];
            $address=$result['address'];
            $state=$result['state'];
            $city=$result['city'];
            $pin=$result['pin'];

          mysqli_close($con);
?>

<!DOCTYPE html>
<html>
  <head>
  <title>XCART: Online Buying and Selling of Used Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="buy.css">
  <link rel="stylesheet" href="xcart.css">
  <script language="Javascript" src="jquery.js"></script>
  <script type="text/JavaScript" src="sell.js"></script>
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
  <body background="images/bg1.jpg " style="background-repeat:no-repeat; background-size:cover; ">
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
          <form class="searchbox_1" action="search.php" onsubmit="return sear()" method="post">
            <input type="text" class="search_1" placeholder="Search" name='search' />
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
        </td>
        <td   style="padding-right:10px">
          <a href="logout.php"><button  class="navi" style="text-decoration:none; align:center; width:95%;border-radius:30px "><span class="glyphicon glyphicon-user" ></span> Logout</button></a>

        </td>
      </tr>
    </table>
  </tr>
  <tr >

                              <table class="buyt" background="images/bg2.jpg" >
                                <tr>
                                <td  style="padding-left:20px; margin-top:30">
                                <table style="margin:30px">

                                <tr>
                                  <td class="xx" height="90px" width="55%">
                                    <h3 style="padding-left:30px; width:100%;font-weight: bold;">
                                                      <?php echo $title; ?></h3>

                                  </td>
                                    <td>
                                      <h4 style="padding-left:180px; width:100%;font-size:12;" ><i class="fa fa-map-marker"></i> <?php echo $city.", ".$state; ?><h4>
                                    </td>
                                  </tr>
                                <tr height="20%" >
                                  <td rowspan="2" class="xx" >
                                    <img src="images/iphone6s.jpg" style=" margin:40px ;width:85%" height="90%"  alt="iphone 6">
                                  </td>

                                  <td>
                                    <div style=" width:70%; height:300px;" class="arrow_box">

                                          <table>
                                            <tr>
                                              <td>
                                                <h3 style="padding-left:18px; width:100%" class="logo">Price:</h3>
                                              </td>
                                              <td>
                                                <h3 style="padding-left:18px; width:100%" class="logo"><?php echo $price; ?> INR</h3>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <h3 style="padding-left:15px; width:100%" class="logo ">Condition:</h3>
                                              </td>
                                              <td>
                                                <h3 style="padding-left:20px; width:100%" class="logo "><?php echo $condition; ?></h3>
                                              </td>
                                            </tr>
                                            <tr >
                                              <td>
                                                <h3 style="padding-left:18px; width:100%" class="logo">Item Type:</h3>
                                              </td>
                                              <td>
                                               <h3 height="70%" style="padding-left:18px; width:100%" class="logo"><?php echo $category; ?></h3>
                                             </td>
                                           </tr>

                                         </table>
                                              </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div style=" width:70%; height:300px; margin-top:30px" class="arrow_box">
                                        <table >
                                          <tr>
                                            <td>
                                                <h3 style="padding-left:20px;padding-top:25px; width:100%" class="logo">Interested in this Ad?</h3>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>
                                                <h4 style="padding-left:0px; width:100%;padding-top:40px; font-weight: bold;color: white;">Contact the seller!!</h4>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="padding-top:0px;" align="center">
                                                <h3 style="background-color:green; border-radius:50px;padding-left:0px; width:80%;padding-top:15px; height:60px; font-weight: bold;color: white;" ><?php echo $nphone; ?></h3>
                                              </td>
                                            </tr>
                                              </table>
                                              </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td class="xx">
                                    <div style=" width:100%; height:150px;" >
                                      <table>
                                        <tr>
                                          <td>
                                                <h4 style="padding-left:18px; width:100%" class="logo1">Brand:</h4>
                                          </td>
                                          <td>
                                                <h4 style="padding-left:18px; width:100%" class="logo1">  <?php echo $brand; ?></h4>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <h4 style="padding-left:17px; width:100%" class="logo1">Date of Purchase:<h4>
                                            </td>
                                            <td>
                                              <h4 style="padding-left:17px; width:100%" class="logo1"><?php echo $date; ?></h4>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                                <h4 style="padding-left:18px; width:100%" class="logo1">Abount the Product:<h4>
                                                </td>
                                                <td>
                                                <h4 style="padding-left:18px; width:100%" class="logo1"><?php echo $description; ?></h4>

                                              </td>
                                            </tr>
                                          </table>
                                              </div>
                                  </td>
                                  <td>
                                    <table width="100%">
                                      <tr>
                                      <td style="text-align:center; padding-top:0px; padding-left:20px; "  >
                                        <a href="thanks.php" style="font-size:25px; font-family:Rockwell;"><button name="buy" type="button" style=" border-radius:30px; width:70%;height:45px; background-color:#ff1a1a; "> BUY NOW</button></a></td>

                                      </tr>
                                      <tr>
                                        <td style="text-align:center; padding-left:20px;  padding-top:20px; padding-bottom:20px"  >
                                    <a href="thanks.php"><button name="post" type="button" onclick="cart()" style="font-size:25px; font-family:Rockwell;border-radius:30px; width:70%; background-color:#009900;height:45px;">ADD TO CART</button></a>
                                </td>
                                </tr>


                                    </table>
                                  </td>
                                </tr>
                                </table>
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
function cart()
{
  alert('Successfully Added to Cart');
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
      $_SESSION['prev']='buy1.php';
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
