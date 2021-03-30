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
 
    <div class="container-fluid site-title">
    <!-- <div class=""> -->
        <div class="container">
            <div class="row">
                <h3>L2-team08</h3>
            </div>
        </div>
    </div>
  
    <div id="cdc-meganav-wrapper">
        
        <div class="container" id="cdc-meganav-bar">
            
            <nav class="navbar navbar-expand-xl yamm">
            
                <ul class="nav navbar-nav nav-justified w-100">
                  
                    <li class="nav-item" id="menu_home">
                        <a class="nav-link <?php if($_SESSION['x'] == 0)echo "active"; ?>" href="home.php">
                            Home						</a>
                    </li>

                    <li class="nav-item" id="menu1">
                        <a class="nav-link <?php if($_SESSION['x'] == 1)echo "active"; ?>" href="page1.php">
                            COVID-19 mRNA Vaccines</a>
                    </li>

                    <li class="nav-item" id="menu2">
                        <a class="nav-link <?php if($_SESSION['x'] == 2)echo "active"; ?>" href="page2.php">
							COVID-19 Viral Vector Vaccines</a>
                    </li>

                    <li class="nav-item" id="menu3">
                        <a class="nav-link <?php if($_SESSION['x'] == 3)echo "active"; ?>" href="page3.php">
                            COVID-19 Protein Subunit Vaccine</a>
                    </li>
					<li class="nav-item" id="menu4">
                        <a class="nav-link <?php if($_SESSION['x'] == 4)echo "active"; ?>" href="page4.php">
                            Register for Vaccine</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
	      
    
</body>
</html>