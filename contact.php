<!DOCTYPE html>
<html>
<head>
	<title>Expert Corporate Training</title>
</head>
<body>
<?php
	include 'header.php';
?>
<?php
if($_REQUEST['SUBMIT']){
	require("class.phpmailer.php");

	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "ssl://smtp.gmail.com";  // specify main and backup server
	$mail->Port = 465; // SMTP servers
	$mail->SMTPAuth = true;     // turn on SMTP authentication
	$mail->Username = "shakti.cmexpertise@gmail.com";  // SMTP username
	$mail->Password = "cm@@1234"; // SMTP password

	$mail->From = "shakti.cmexpertise@gmail.com";
	$mail->FromName = "CMExpertise.org";
	$mail->AddAddress("career@cmexpertiseinfotech.com");

	$mail->Subject = "ECT NEW INQUIRY";
	$mail->Body    ="
Name:".$_REQUEST['fname']." ".$_REQUEST['lname']."
Email: ".$_REQUEST['email']."
Mobile: ".$_REQUEST['mobile']."
Selected Location: ".$_REQUEST['location']."
Selected Course: ".$_REQUEST['cource']."
Comment: ".$_REQUEST['comment']."";

	if(!$mail->Send())
	{
	   echo "Message could not be sent. <p>";
	   echo "Mailer Error: " . $mail->ErrorInfo;
	   exit;
	}

		$result= '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><strong>Success!</strong> Message has been sent.</div>';
	}

?>

	<div class="col-md-12 col-sm-12 col-xs-12 padding_zero contact_bg text-center">
	<div class="parallax_layer"></div>
		<p class="contact_bg_title"> Contact us</p>
		<p class="contact_bg_p"><a href="index.php" style="color:#fff;">Home</a> / Contact Us</p>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 padding_zero contact_padding">
		<div class="container">
			 <div class="col-md-6 col-sm-6 col-xs-12">
			 	<div class="map-wrap">
				    <div class="overlay" onclick="style.pointerEvents='none'"></div>
				        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14682.392672847922!2d72.525689!3d23.075189!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x38c3d0f20e1bf72b!2sCMExpertise+Infotech+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1505138155126" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

				<div class="w-contacts-list">
					<p class="w-contacts-item1"><i class="fa fa-map-marker contact_map" aria-hidden="true"></i> <span class="icon_padding">D - 304, Ganesh meridian , S.G. HighWay , Ahmedabad -  380060.</span></p>

             		<p class="w-contacts-item"><i class="fa fa-phone-square contact_icon" aria-hidden="true"></i><a href="tel:+91-8855253654" class="icon_padding">+91 8780258675</a></p>

           			<p class="w-contacts-item"><i class="fa fa-envelope-square contact_icon" aria-hidden="true"></i><a href="mailto:name@email.com" class="icon_padding">info@cmexpertise.org</a>

              		</p>

					<p></p>

                </div>
			 </div>

			 <div class="col-md-6 col-sm-6 col-xs-12">
			  <?php echo $result; ?>    
			 		<p class="contact_enquiry">Enquiry <span class="span_color">Form</span></p>

			 		<p class="contact_enquiry_sub_title">Contact Details</p>

			 		<form class="form-material set-submit-input margin_top" method="post" action="contact.php">
			 		<div class="col-md-12 col-sm-12 col-xs-12 padding_zero">
			 			<div class="col-md-6 col-sm-6 col-xs-12 padding_left">
		                <div class="form-group set-submit-box">
			                  <input type="text" name="fname" class="form-control" id="" required>
			                  <span class="form-bar"></span>
			                  <label class="float-label" for="email">Name</label>
			            </div>
			            </div>

			           <div class="col-md-6 col-sm-6 col-xs-12 padding_left">
		               <div class="form-group set-submit-box">
			                  <input type="text" name="lname" class="form-control" id="" required>
			                  <span class="form-bar"></span>
			                  <label class="float-label" for="email">Last Name</label>
			            </div>
			            </div>

		               <div class="col-md-6 col-sm-6 col-xs-12 padding_left">
		               <div class="form-group set-submit-box">
			                  <input type="email" name="email" class="form-control"  required>
			                  <span class="form-bar"></span>
			                  <label class="float-label" for="email">Email</label>
			            </div>
			            </div>

			           <div class="col-md-6 col-sm-6 col-xs-12 padding_left">
		               <div class="form-group set-submit-box">
			                  <input type="number" name="mobile" class="form-control" id="" required>
			                  <span class="form-bar"></span>
			                  <label class="float-label" for="email">Mobile</label>
			            </div>
			            </div>
			            </div>

		                <!-- <div class="form-group">
		                    <textarea  class="form-control textarea" id="" required="" ></textarea>
			                   <span class="form-bar"></span>
			                   <label class="float-label" >Message</label>
		                </div> -->

		                 <!-- <div class="col-md-12 col-sm-12 col-xs-12 padding_zero">
			                	<input type="button" name="" class="pull-left form_btn " value="Submit">
			              </div> -->

			              <div class="col-md-12 col-sm-12 cl-xs-12 contact_margin_top padding_zero">
			              <p class="contact_enquiry_sub_title text-left ">Select Location</p>
			              <div class="form-group set-submit-box text-left">
			                  <input type="radio" name="location" id="radbtn1" value="ECT Ahmedabad" checked="true">&nbsp;&nbsp;ECT Ahmedabad
			           	  </div>
			           	  </div>

			           	  <div class="col-md-12 col-sm-12 cl-xs-12 padding_zero">
			           	  <p class="contact_enquiry_sub_title text-left contact_margin_top">Certificate Course</p>
			              <div class="form-group set-submit-box text-left">
			                  <input type="radio" name="cource" value="android" checked="true">&nbsp;&nbsp;Android
			           	  </div>

			           	  <div class="form-group set-submit-box text-left">
			                  <input type="radio" name="cource" value="ios">&nbsp;&nbsp;iOS
			           	  </div>

			           	  <div class="form-group">
		                    <textarea  class="form-control textarea" name="comment" required></textarea>
			                   <span class="form-bar"></span>
			                   <label class="float-label" >Comments</label>
		                </div>

		                <div class="col-md-12 col-sm-12 col-xs-12 padding_zero">
			                	<input type="submit" name="SUBMIT" class="pull-left form_btn " value="Submit">
			              </div> 
			              </div>

         			</form>
            
			 </div>
		</div>
		
	</div>


<?php
	include 'footer.php';
?>

</body>
</html>