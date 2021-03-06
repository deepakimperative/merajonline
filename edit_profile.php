<?php
session_start();
include("dbconnection.php");

// Update User Profile
if(isset($_POST['editprofilebutton']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$user_name = $_POST['user_name'];
	$mobile_number = $_POST['mobile_number'];
	$phone_number = $_POST['phone_number'];
	$address = $_POST['address'];
	
        updateUserProfile($firstname,$lastname,$email,$user_name,$mobile_number,$phone_number,$address,$_SESSION['user_loged_id']);
        header("location:user-profile?updatepromesage='Updated'");
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $web_title;?> Create New Customer Account</title>
    <meta name="description" content="Default Description" />
    <meta name="keywords" content="Magento, Varien, E-commerce" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- ================= Favicon ================== -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <!--[if lt IE 7]>
    <script type="text/javascript">
    //<![CDATA[
        var BLANK_URL = 'js/blank.html';
        var BLANK_IMG = 'js/spacer.gif';
    //]]>
    </script>
    <![endif]-->
    <!-- ================= Style Sheets ================== -->
    <!-- fancybox CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="all" />
    <!-- Bx Slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="all" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" media="all" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all" />
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="all" />
    <!-- Ajaxcart CSS -->
    <link rel="stylesheet" type="text/css" href="css/ajaxcart.css" media="all" />
    <!-- Megamenu CSS -->
    <link rel="stylesheet" type="text/css" href="css/megamenu.css" media="all" />
    <!-- Vmegamenu CSS -->
    <link rel="stylesheet" type="text/css" href="css/vmegamenu.css" media="all" />
    <!-- Testimonial CSS -->
    <link rel="stylesheet" type="text/css" href="css/testimonial.css" media="all" />
    <!-- Imageslider CSS -->
    <link rel="stylesheet" type="text/css" href="css/imageslider.css" media="all" />
    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/styles.css" media="all" />
    <!-- Mobileresponsive CSS -->
    <link rel="stylesheet" type="text/css" href="css/mobileresponsive.css" media="all" />
    
    <script>
    

   // Dynamic Change List Of Products
   function NoOfItemslist(nooflist)
   {
                        xhr =  new XMLHttpRequest();
			xhr.open('GET','no_of_item_display.php?allitemshow='+nooflist,true);
			xhr.send();
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById("changedynamicitems").innerHTML = xhr.responseText;
				}
			}
   }


// Sorting List

 function Sorting(sortingtype)
   {            
                     var   totaldisplayitemnum = document.getElementById("nolistcount").value;
                        xhr =  new XMLHttpRequest();
			xhr.open('GET','sorting-item-page.php?sortingtypeval='+sortingtype+'&totalitemdisplay='+totaldisplayitemnum,true);
			xhr.send();
			
			xhr.onreadystatechange=function()
			{
				if(xhr.readyState == 4 && xhr.status == 200)
				{
					document.getElementById("changedynamicitems").innerHTML = xhr.responseText;
				}
			}
   }
    
    </script>    
</head>

<body class=" cms-index-index cms-homepage2">
    <!-- ================= Main Wrapper ================== -->
    <div class="wrapper">
        <!-- ================= No Script ================== -->
        <noscript>
            <div class="global-site-notice noscript">
                <div class="notice-inner">
                    <p>
                        <strong>JavaScript seems to be disabled in your browser.</strong>
                        <br /> You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
                </div>
            </div>
        </noscript>
        <div class="page">
            <!-- ================= Header Wrapper ================== -->
            <header class="header-wrapper">
                <!-- ================= Header ================== -->
                <?php include("includes/header.php"); ?>
                <div class="header-menu-bar">
                    <div class="container">
                        <div class="container-inner">
                            <!-- ================= Menu Toolbar ================== -->
                            <div class="menu-toolbar">
                                <div class="search-cart-top">
                                    <!-- ================= Header Top Links ================== -->
                                    <?php
                                    include("includes/user-settings.php");
                                    ?>
                                    <!-- ================= Header Cart Mini================== -->
                                    <?php include("includes/maincart.php");?>

                                </div>
                                <!-- ================= Nav Container ================== -->
                                <nav class="nav-container">
                                    <!-- ================= Menu Mobile ================== -->
                                    <div class="nav-mobilemenu-container visible-xs">
                                        <?php 
                                        include("includes/mainnav.php");
                                        ?>
                                    </div>
                                    <!-- ================= Nav Megamenus ================== -->
                                    <?php include("includes/topmenu.php")?>

                                </nav>
                                <div class="nav-vcontainer hidden-xs hidden-sm">
                                    <div class="nav-inner">
                                        <div class="vmegamenu-title">
                                            <h2><i class="fa fa-bars"></i></h2>
                                        </div>
                                        <?php 
                                        include("includes/leftcatogries.php");
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ================= Main Section ================== -->
            <section class="main-wrapper">
            <div class="container">
                <div class="container-inner">
                    <div class="main-page">
                        <div class="main-container col1-layout">
                            <div class="main">
                                <div class="col-main">
                                    <div class="account-create">  

						<?php
							$user_details = getUserDetails($_SESSION['user_loged_id']);	
                                                        $user_result = mysql_fetch_array($user_details);
						?>				
                                        <form id="form-validate" method="post" action="">
                                            <div class="row">
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-8">
                                                    <div class="fieldset">                                                        
                                                        <h2 class="legend">Edit PROFILE</h2>
                                                        
                                                        
                                                        
                                                        <ul class="form-list">
                                                            <li class="fields">
                                                                <div class="customer-name">
                                                                    <div class="field name-firstname">
                                                                        <label class="required" for="firstname"><em>*</em>First Name</label>
                                                                        <div class="input-box">
                                                                            <input type="text" class="input-text required-entry" maxlength="255" title="First Name" value="<?php echo $user_result['firstname']; ?>" name="firstname" id="firstname">
                                                                        </div>
                                                                    </div>
                                                                    <div class="field name-lastname">
                                                                        <label class="required" for="lastname"><em>*</em>Last Name</label>
                                                                        <div class="input-box">
                                                                            <input type="text" class="input-text required-entry" maxlength="255" title="Last Name" value="<?php echo $user_result['lastname']; ?>" name="lastname" id="lastname">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="email_address"><em>*</em>Email Address</label>
                                                                <div class="input-box">
                                                                    <input type="text"  class="input-text validate-email required-entry" value="<?php echo $user_result['email']; ?>" title="Email Address" value="" id="email_address" name="email">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="user_name"><em>*</em>User Name</label>
                                                                <div class="input-box">
                                                                    <input type="text" class="input-text validate-email required-entry" title="User Name" value="<?php echo $user_result['user_name']; ?>" id="user_name" name="user_name">
                                                                </div>
                                                            </li>
                                                          
                                                           
                                                            
                                                            <li>
                                                                <label class="required" for="mobile_number"><em>*</em>Telephone Number</label>
                                                                <div class="input-box">
                                                                    <input type="text" class="input-text validate-email required-entry" title="Mobile Number" value="<?php echo $user_result['phone_number']; ?>" id="mobile_number" name="mobile_number">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <label class="required" for="phone_number"><em>*</em>Additional phone number (optional)</label>
                                                                <div class="input-box">
                                                                    <input type="text" class="input-text validate-email required-entry" title="phone number"  value="<?php echo $user_result['phone_number']; ?>" id="phone_number" name="phone_number">
                                                                </div>
                                                            </li>
                                                            
                                                            <li>
                                                                <label class="required" for="address"><em>*</em>Address </label>
                                                                <div class="input-box">
                                                                    <textArea  rows="10" cols="30" name="address"><?php echo $user_result['address']; ?></textArea>                                                                   
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        
                                                        <div class="buttons-set">

                                                        <button name="editprofilebutton" value="Submit"  class="button validation-passed" title="Submit" type="submit"><span><span>Submit</span></span></button>
                                                        
														</div>
                                                    </div>

                                                </div>
												
												
												
                                                <div class="col-sm-2"></div>
                                            </div>
                                        </form>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            <!-- ================= Footer Static ================== -->
            
            <!-- ================= Footer ================== -->
            <?php include("includes/footer.php");?>
        </div>
    </div>
    
   <script>
function getProvinces()
{
   var province_id=document.getElementById('province_id').value;  
   var optionValue =province_id;
   jQuery.ajax({
   	  type: "POST",
    	  url: "getcities.php",
    	  data: "province_id="+province_id,
    	  success: function(response){
	  jQuery("#province_cities").html(response);
  	   if(!optionValue)
  	   {
		jQuery("#province_cities").hide(); 
                jQuery("#provinces").show();                 
   	  }else
  	  {
		jQuery("#province_cities").show();  
                jQuery("#provinces").hide();  
          }
	}
        });	
}
</script>

<script type="text/javascript">
            jQuery().ready(function() {
                jQuery("#form-validate").validate({
                    rules: {
                        firstname: {
                            required: true,
                            minlength: 3
                        },
                        lastname: {
                            required: true,
                            minlength: 3
                        },
                        email: {
                            required: true,
                            email: true
                        },
                        user_name: {
                            required: true,
                            minlength: 3
                        },
                        password: {
                            required: true
                        },
                        confirm_password: {
                            required: true,
                            equalTo: "#password"
                        },
                        phone_number: {
                            required: true,
                            digits: true,
                            minlength: 11
                        },
                        agree: "required"
                    },
                    messages: {
                        email: {
                            required: "Please enter email address",
                            email: "Email address must be in the format of name@domain.com"
                        },
                        firstname: {
                            required: "Please enter your name",
                            minlength: "Name must be atleast 3 letter"
                        },
                        lastname: {
                            required: "Please enter your name",
                            minlength: "Name must be atleast 3 letter"
                        },                        
                        user_name: {
                            required: "Please enter user name",
                            minlength: "user name must be atleast 3 letter"
                        },
                        password: {
                            required: "Please enter a password"
                        },
                        confirm_password: {
                            required: "Please enter confirm password",
                            equalTo: "Password does not match"
                        },
                        phone_number: {
                            required: "Please enter your mobile number",
                            digits: "Mobile number must be in the format of 03212828275",
                            minlength: "Mobile number must only 11 digits"
                        },
                        agree: "Please accept our policy",

                    }
                });
                $("#password").focus(function() {
                    var password = $("#password").val();
                    var email = $("#email_check").val();
                    if (password && email && !this.value) {
                        this.value = password + "." + email;
                    }
                });
            });
        </script> 
    <style>
.error {
	color: #FF0000;
	font-size: 11px;
	font-weight: normal;
	padding-left: 29px;
}
.error1 {
	color: #FF0000;
	font-size: 14px;
	font-weight: bold;
	padding-left: 29px;
}
</style>

</body>

</html>