<?php
 session_start();
 error_reporting(0);
  $_SESSION['x']=4;
 include("menu.php");
?>
<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="home_files/bootstrap.css">
    <link rel="stylesheet" href="home_files/app.css">
       
	<title>Home | COVID-19 Info Center</title>
    <meta name="description" content="">
    <meta name="keywords" content="">	
</head>

<body> 
	<script>
		function myFunction() {
			alert("Added Successfully");
		}
	</script>
	
	<?php		
		if(isset($_POST['btnsubmit'])){		
			$myfile = fopen("PersonalInfo.txt", "a") or die("Unable to open file!");
			
			$txt = "IC: ".$_POST['txtic']."\nName: ".$_POST['txtname']."\nEmail: ".$_POST['txtemail']."\nContact Number: ".$_POST['txtcontact']."\n\n";
			
			fwrite($myfile, $txt);
			fclose($myfile);
		}
	?>
    <!-- Page Content Wrap -->
    <div class="container d-flex flex-wrap body-wrapper bg-white">
    
        <!-- Content -->
        <main class="col-xl-9 order-xl-2">
            
            <div class="row">
            
                <div class="col content">
                
                    <div class="row">
                        <br>
                        <h2 id="content" class="open d-lg-block">Register for vaccine</h2>
                        <br>
                        <br>
                        <br>
                        <!-- <div class="container-fluid"> -->
						<!-- <div class="container"> -->
        
						<!-- <div class="card-body bg-quaternary"> -->
						
							<!-- <p style="font-size:14px;">After the U.S. Food and Drug Administration (FDA) approves a vaccine or authorizes a vaccine for emergency use, -->
							<!-- experts continue to assess vaccine effectiveness—or how a vaccine works in real-world conditions.   -->
							<!-- The goal is to understand how a vaccine protects people outside of strict clinical trial settings..</p> -->
						<!-- </div> -->
						<!-- </div> -->
						<!-- </div> -->
                    </div>
                    <div class="cdc-2020-bar container">
							
                    </div>
                 
                    <div class="syndicate">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card border-0 rounded-0 mb-3">
                                    <div class="card-body bg-primary">
                                        <div class="row">
                                            <div class="d-none">
                                                <div class="text-center">
                                                    <img src="home_files/clipboard.png" alt="Clipboard with checkmarks" class="card-img-top img-fluid p-0 bg-primary card-img-orig d-none d-md-block rounded-0">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <h3 class="card-title h3 mb-3 text-left">Information</h3>
												<form method="POST" enctype="multipart/form-data">
													IC:
													<div>
													<input type="text" placeholder="IC" name="txtic" value="" required pattern="[A-Za-z0-9]{12,12}" title="Twelve charaters only."/>
													</div>
													Name:
													<div>
													<input type="text" placeholder="NAME" name="txtname" value="" required pattern="[A-Za-z ]{0,}" title="Only alphabetic characters."/>
													</div>
													Email:
													<div>
													<input type="email" placeholder="Email" name="txtemail" value="" required />
													</div>
													Contact No:
													<div>
													<input type="number" placeholder="contact number" name="txtcontact" required value=""/>
													</div><br>
													<div>
													<input type="submit" name="btnsubmit" value="Register" onClick="myFunction();">
													</div>
												</form>
                                            </div>
                                            <div class="pl-md-0 col-md-3 d-none d-md-block">
                                                <div class="text-center">
                                                    <img src="home_files/clipboard.png" alt="Clipboard with checkmarks" class="card-img-top img-fluid p-0 bg-primary card-img-orig d-none d-md-block rounded-0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="row-fluid">
                                    <div class="vc_empty_space col-12 pt-3 pb-3">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
							
          <br>
          <br>
          <br>
     
        </main>
    						
    </div> 
            
    <div class="container-fluid">
        <div class="container">
        
            <div class="card-body bg-quaternary">
                    
                <h5>Disclaimer</h5>
                <p style="font-size:14px;">This website is created mainly for educational and non-commercial use only. It is a 
                partial fulfillment for completion of unit SWE20001 - Development Project 1 offered in 
                Swinburne University of Technology, Sarawak Campus. The web-master and author(s) do not 
                represent the business entity. The content of the pages of this website might be out-dated 
                or inaccurate, thus, the author(s) and web-master does not take any responsibility for 
                incorrect information disseminated or cited from this website.</p>
                
            </div>
        </div>
    </div>
    
</body>
</html>