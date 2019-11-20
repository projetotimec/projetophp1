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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</head>
<body>
	<!--================Header Area =================-->
	<header class="header_area">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="consulta.php">Consultar Cliente</a>
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
						<li class="nav-item active"><a class="nav-link"
							href="Consulta.php">Página Inicial</a></li>
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
								<h2>Solicitação de Reembolso</h2>

							</div>

							<div class="hotel_booking_table">
                             <form name="formulario" method="POST" action="ActionsPHP/ConsultaCliente.php">
						
												<div class="book_tabel_item">

													<div class="form-group">
													
														<div class="form-group">
														<div class="input-group d-flex flex-row">
															<input style= "background-color: transparent" type="none" class="form-control">
															
													<select class="wide" class="form-control" name="matricula">
														<option data-display="Matricula">Matricula</option>
														<?php
															//session_start(); //incia a conexão
															include_once("conexao.php"); //Arquivo de configuração da conexão
															//include("../Actions/php/lista.php");//Arquivo de configuração do sql com o banco

															$pesquisaTodos = "SELECT * FROM beneficiario"; //todos os contatos               

															//Executa as pesquisa e exibe na tela, enquanto possuir dados para serem pesquisados
															foreach ($conn->query($pesquisaTodos) as $row) {
																
																echo "<option name='select[]' value='" .$row['nr_matricula']. "'>"	. $row['nr_matricula']	. "/ " . $row['nm_beneficiario']					. "</option>";
																
															}
															
															
														?>
													</select>

													</div>
													</div>
											<input class="book_now_btn button_hover" type="submit" value="Consultar" onclick="validarFormulario()"/>
											
											
												   
                   
							<!--
														<div class="input-group d-flex flex-row">
															<input name="matricula" placeholder="Número da Apólice"
																onfocus="this.placeholder = ''"
																onblur="this.placeholder = 'Número da Apólice '"
																required="Y" type="text" class="form-control"
																onkeypress="return event.charCode >= 48 && event.charCode <= 57"
																title="Isira apenas números">
														</div>
												</div>

													

													<div class="form-group">
														<div class='input-group date' id='datetimepicker11'>
															<input name="nascimento" type='text' class="form-control"
																placeholder="Data de Nascimento" required /> <span
																class="input-group-addon"> <i
																class="fa fa-calendar" aria-hidden="true"></i>
															</span>
														</div>
													</div>


													<div class="form-group">
														<div class="input-group d-flex flex-row">
															<input name="endereco" placeholder="Endereço"
																onfocus="this.placeholder = ''"
																onblur="this.placeholder = 'Endereço '" required=""
																type="text" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<div class="input-group d-flex flex-row">
															<input name="motivo" placeholder="Descreva o motivo"
																onfocus="this.placeholder = ''"
																onblur="this.placeholder = 'Endereço '" required=""
																type="text" class="form-control">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="book_tabel_item">

													<div class="form-group">
														<div class="input-group d-flex flex-row">
															<input name="telefone" placeholder="Telefone"
																onfocus="this.placeholder = ''"
																onblur="this.placeholder = 'Telefone '" required
																type="text" class="form-control" title="(DD) XXXXX-XXXX"
																minlength="10" maxlength="14" onKeyUp="phone(this)">
														</div>
													</div>

													<div class="form-group">
														<div class="input-group d-flex flex-row">
															<input name="email" placeholder="Email"
																onfocus="this.placeholder = ''"
																onblur="this.placeholder = 'Email '" required
																type="text" class="form-control">
														</div>
													</div>

												</div>
											</div>
											<div class="col-md-4">
												<h3>Dados do Paciente (Caso este não seja o titular da
													apólice)</h3>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="book_tabel_item">


										<div class="input-group">
											<select name="genero" type="text" class="wide">
												<option data-display="Sexo">Sexo</option>
												<option value="1">Masculino</option>
												<option value="2">Feminino</option>
											</select>
										</div>
								
									 -->
							
										
									</div>
								</div>
								</form>
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