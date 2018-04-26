<?php
	session_start();

	if (($_SESSION['logado']==0))
	{
		header('location: login.php');
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Inicio</title>
<meta http-equiv="Page-Enter" content="RevealTrans(Duration=6)">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="shortcut icon" href="icon1.ico" type="image/x-icon" />
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />


<!-- font-awesome  icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
	</head> 
<body>




<div id="page-wrapper" style="padding-top: 5%">

			<?php
				include 'menu.php';
			?>

		<div class="main-page login-page" style="width: 90%"> 
			<?php
					echo "Seja bem vindo(a), ".$_SESSION['nomeUser'].".";
				?>
				<h2 class="title1" style="text-align: center; font-weight: bold;">Início</h2>
					<div class="widget-shadow">
		
						<table class="table table-bordered"> 
							
							<div>
								<br>
								<h2 style="text-align: center">Projetos em Andamento</h2>
								<br>
							</div>

							<thead> 
								<tr> 
									<th>#</th> 
									<th>First Name</th> 
									<th>Last Name</th> 
									<th>Username</th>
								</tr> 
							</thead> 
							<tbody> 
								<tr> 
									<th scope="row">1</th> 
									<td>Mark</td> 
									<td>Otto</td> 
									<td>@mdo</td> 
								</tr> 
								<tr> 
									<th scope="row">2</th> 
									<td>Jacob</td> 
									<td>Thornton</td> 
									<td>@fat</td> 
								</tr> 
								<tr> 
									<th scope="row">3</th> 
									<td>Larry</td> 
									<td>the Bird</td> 
									<td>@twitter</td> 
								</tr> 
							</tbody> 
						</table>
						<br>
					</div>
		</div>		
</div>

		<!--footer-->
		<div class="footer">
		   <p>&copy; 2018 Todos os direitos reservados a ARCH Software.</a></p>		
		</div>
        <!--//footer-->	
</body>
</html>
