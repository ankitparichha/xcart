<?php
    session_start();
    if(!empty($_SESSION['fail-search'])){
      echo "<script>alert('No related Product Found!!!');</script>";
      unset($_SESSION['fail-search']);
    }
    if(empty($_SESSION['id'])){
      $_SESSION['notlogin']=1;
      header("Location:xcart.php");
    }

 ?>

<!DOCTYPE html>
<html>
  <head>
  <title>XCART: Online Buying and Selling of Used Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="sell.css">
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

    <table width="100%">
      <tr >
        <td width="15%">
        </td>
        <td >

                                <div class="post" background="images/bg2.jpg">
                                				<form method="post" onsubmit="return confirm('Do you want to continue?')" action="sellform.php">
                                          <table width="100%" background="images/bg2.jpg"  style="background-repeat:no-repeat; background-size:cover; text-align:left;margin-top:60px;border-radius:10px" >
                                            <tr height="60px">
                                              <td>
                                              </td>
                                              <td>
                                              </td>
                                              <td>
                                              </td>

                                            </tr>
                                            <tr height="10px">
                                              <td style="text-align:center">
                                                <p><h3><b>Product Info -</b></h3></p>
                                              </td>
                                              <td style="text-align:center; padding-left:150px; color:red"> * mandatory</td>
                                            </tr>

                                          <tr>
                                          <td style="text-align:right;">
                                					<label style="padding-top:25px; padding-right:30px">Select Category <span>*</span></label></td>
                                  				<td style="padding-left:30px;padding-top:20px;">	<select style=" border-radius:10px;padding-left:5px; width:60%; height:30px" name="category">
                                  					  <option>&nbsp;&nbsp;Select Category</option>
                                  					  <option value="Mobiles">&nbsp;Mobiles</option>
                                  					  <option value="Electronics and Appliances">&nbsp;Electronics and Appliances</option>
                                  					  <option value="Cars">&nbsp;Cars</option>
                                  					  <option value="Bikes">&nbsp;Bikes</option>
                                  					  <option value="Furniture">&nbsp;Furniture</option>
                                  					  <option value="Pets">&nbsp;Pets</option>
                                  					  <option value="Books, Sports and hobbies">&nbsp;Books, Sports and hobbies</option>
                                  					  <option value="Fashion">&nbsp;Fashion</option>
                                  					  <option value="Kids">&nbsp;Kids</option>
                                  					  <option value="Services">&nbsp;Services</option>
                                  					  <option value="Real, Estate">&nbsp;Real, Estate</option>
                                  					</select>
                                          </td>
                                          </tr>
                                          <tr>
                                          <td style="text-align:right;padding-top:28px; padding-right:30px">
                                					<label>Product Title <span>*</span></label>
                                          </td>
                                          <td style="padding-left:30px; padding-top:22px">
                                					<input placeholder="Title" type="text"  style="border-radius:10px; width:70%; height:30px; " name="title">
                                          </td>
                                          </tr>



                                          <tr>
                                          <td style="text-align:right;padding-top:28px; padding-right:30px">
                                					<label>Set Price <span>*</span></label>
                                          </td>
                                          <td style="padding-left:30px; padding-top:22px">
                                					<input placeholder="Price in INR" type="text"  style="border-radius:10px; width:70%; height:30px; " name="price">
                                          </td>
                                          </tr>

                                          <tr>
                                          <td style="text-align:right;padding-top:28px; padding-right:30px">
                                					<label>Brand <span>*</span></label>
                                          </td>
                                          <td style="padding-left:30px; padding-top:22px">
                                					<input placeholder="Enter brand name" type="text"  style="border-radius:10px; width:70%; height:30px; " name="brand">
                                          </td>
                                          </tr>

                                          <tr>
                                          <td style="text-align:right;">
                                					<label style="padding-top:25px; padding-right:30px">Condition <span>*</span></label></td>
                                  				<td style="padding-left:30px;padding-top:20px;">	<select style=" border-radius:10px;padding-left:5px; width:30%; height:30px" name="condition">
                                  					  <option>&nbsp;&nbsp;Select Condition</option>
                                  					  <option value="Excellent">&nbsp;Excellent</option>
                                  					  <option value="Very good">&nbsp;Very good</option>
                                  					  <option value="Good">&nbsp;Good</option>
                                  					  <option value="Bad">&nbsp;Bad</option>
                                  					  <option value="Broken">&nbsp;Broken</option>
                                  					</select>
                                          </td>
                                          </tr>

                                          <tr>
                                          <td style="text-align:right;padding-top:28px; padding-right:30px">
                                					<label>Purchase Date <span>*</span></label>
                                          </td>
                                          <td style="padding-left:30px; padding-top:22px">
                                					<input placeholder="Enter month and year (yyyy-mm-dd)" type="text"  style="border-radius:10px; width:70%; height:30px; " name="date">
                                          </td>
                                          </tr>



                                          <tr>
                                          <td style="text-align:right;padding-top:10px; padding-right:30px">
                                					<label style="padding-bottom:30px">Product Description <span>*</span></label></td>
                                          <td style="padding-left:30px; padding-top:25px">
                                					<textarea  name="description" placeholder="Write few lines about your product" style=" border-radius:10px; width:60%; height:70px; padding-left:20px"></textarea>
                                          </td>
                                          </tr>
                                          <tr>
                                            <td style="text-align:right;padding-top:18px; padding-right:30px">
                                    				<label>Photos for your Product :</label>
                                          </td>
                                          <td style="padding-left:30px;padding-top:15px">
                                  							<input name="upload" type="file" name="image">
                                          </td>
                                          </tr>

                                          <tr height="20px" >
                                            <td colspan="2" style="padding-top:35px">
                                              <hr>
                                            </td>
                                          </tr>
                                          <tr height="10px">
                                            <td style="text-align:center ; padding-top:20px">
                                              <p><h3><b>Personal Info -</b></h3></p>
                                            </td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                          <td style="text-align:right;padding-top:15px; padding-right:30px">
                                    						<label>Your Name <span>*</span></label></td>
                                    			<td style="padding-left:30px;padding-top:10px">
                                            <input style=" border-radius:10px; width:60%;height:30px; " name="nname" type="text"  placeholder="Enter name">
                                          </td>
                                          </tr>
                                          <tr>
                                          <td style="text-align:right;padding-top:18px; padding-right:30px">
                                    						<label>Your Mobile No <span>*</span></label></td>
                                    			<td style="padding-left:30px;padding-top:10px">
                                    						<input type="text" style=" border-radius:10px; width:50%;height:30px; " name="nphone" placeholder="Enter mobile number">
                                          </td>
                                          </tr>
                                          <tr>
                                          <td style="text-align:right;padding-top:22px; padding-right:30px">
                                    						<label>Your Email Address<span>*</span></label></td>
                                    			<td style="padding-left:30px;padding-top:18px">
                                    						<input type="email" style=" border-radius:10px; width:70%;height:30px; padding-left:20px " name="nemail" placeholder="Enter email">
                                          </td>
                                          </tr>
                                          <tr>
                                          <td style="text-align:right;">
                                					<label style="padding-bottom:30px; padding-top:15px; padding-right:30px">Address <span>*</span></label></td>
                                          <td style="padding-left:30px; padding-top:30px">
                                					<textarea  name="address" placeholder="Write complete address" style=" border-radius:10px; width:60%; height:70px;padding-left:20px"></textarea>
                                          </td>
                                          </tr>
                                          <tr>
                                          <td style="text-align:right;">
                                					<label style="padding-top:25px; padding-right:30px">State <span>*</span></label></td>
                                  				<td style="padding-left:30px;padding-top:20px;">
                                            <div >
                                            <div id="selection">
                                              <select id="listBox" style="padding-left:15px; border-radius:10px; width:60%; height:30px" name="state" onchange='selct_district(this.value)'></select>

                                            </div>
                                          </div>
                                          </td>
                                          </tr>

                                          <tr>
                                          <td style="text-align:right;">
                                					<label style="padding-top:35px; padding-right:30px">City <span>*</span></label></td>
                                  				<td style="padding-left:30px;padding-top:30px;">
                                            <div >
                                            <div id="selection">
                                              <select placeholder="Select city" style="padding-left:15px; border-radius:10px; width:60%; height:30px"  name="city" id='secondlist'></select>
                                            </div>
                                          </div>

                                          </td>
                                          </tr>



                                          <tr>
                                          <td style="text-align:right;padding-top:30px; padding-right:30px">
                                    						<label>Pin Code <span>*</span></label></td>
                                    			<td style="padding-left:30px;padding-top:25px">
                                    						<input type="text" style=" border-radius:10px; width:50%;height:30px; " name="pin" placeholder="Enter ZIP code">
                                          </td>
                                          </tr>



                                          <tr height="80px">
                                            <td colspan="2" >
                                              <hr>
                                            </td>
                                          </tr>
                                          <tr>
                                          <td colspan="2">
                                    						<p style="text-align:left" class="post-terms">By clicking <strong>Post Button</strong> you accept our <a style="color:blue" href="terms.html" target="_blank">Terms of Use </a> and <a style="color:blue" href="privacy.html" target="_blank">Privacy Policy</a></p>
                                              </td>
                                              </tr>
                                                <tr>
                                                <td style="text-align:right; padding-top:20px; padding-left:30px; padding-bottom:50px"  >
                                                  <a href="main.php"><button name="post" type="button" style=" border-radius:10px; width:50%; background-color:#ff1a1a;" >CANCEL</button></a></td>
                                                  <td style="text-align:right; padding-top:20px; padding-right:200px; padding-bottom:50px"  >
                                    					<button name="post" type="submit" style="border-radius:10px; width:60%; background-color:#009900">POST</button>
                                          </td>
                                          </tr>

                                          </table>
                                    		</form>
                                		</div>


        </td>
        <td width="15%">
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
      $_SESSION['prev']='sell.php';
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
