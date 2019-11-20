<?php
	session_start();
    $matricula = $_SESSION['matricula'];
    $solicitaReemb = $_SESSION['procedimento'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="image/favicon.png" type="image/png">
<title>Solicitação de Reembolso</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="vendors/linericon/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet"
	href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<!-- main css -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
</head>
<body>
	<!--================Header Area =================-->
	<header class="header_area">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="consulta.php">Página Principal</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset"
					id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
						<!--<li class="nav-item active"><a class="nav-link"
							href="index.jsp">Formulário</a></li> -->
							
						<li class="nav-item"><a class="nav-link" href="consulta.php">Consultar Beneficiário</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Area =================-->

	<!--================Banner Area =================-->
	<section class="banner_area">
		<div class="booking_table d_flex align-items-center">
			<div class="overlay bg-parallax" data-stellar-ratio="0.9"
				data-stellar-vertical-offset="0" data-background=""></div>
			<div class="container">
	
				<div class="banner_content text-center">
					<div class="banner_content text-center">
						<br>
						<div class="container">
							<div class="hotel_booking_table">
                                <h2><?php
                                include_once("conexao.php");
								
								$pesquisaNome = "SELECT b.nm_beneficiario, p.vl_procedimento, p.cd_procedimento FROM atendimento a JOIN procedimento p ON a.cd_procedimento = p.cd_procedimento
                                JOIN credenciado c ON a.cd_credenciado = c.cd_credenciado JOIN especialidade e ON a.cd_especialidade = e.cd_especialidade JOIN beneficiario b ON a.nr_matricula = b.nr_matricula WHERE b.nr_matricula = $matricula AND p.cd_procedimento LIKE $solicitaReemb";
								foreach ($conn->query($pesquisaNome) as $row) {
                                    echo "Sr(a) "	. $row['nm_beneficiario']						. " sua solicitação de Reembolso no valor de R$ "	. $row['vl_procedimento']						.  " foi realizada com sucesso!";
								};
                                
                                ?></h2>

							</div>

							<div class="hotel_booking_table">
                            <div class="col-md-3">
										<div class="book_tabel_item">
											<div class="form-group">
												<input class="book_now_btn button_hover"
					type="Button" value="Voltar" onclick="history.go(-1)"/>
											</div>
										</div>
									</div>
                   
							</div>
						</div>
					</div>

					<!--<a href="#" class="btn theme_btn button_hover">Get Started</a>-->
				</div>
			</div>
		</div>

	</section>

	<!--================ start footer Area  =================-->

	<!--================ End footer Area  =================-->


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script
		src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/camposReembolso.js"></script>
</body>
</html>