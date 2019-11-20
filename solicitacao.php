<?php
	session_start();
	$matricula = $_SESSION['matricula'];
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
<style>
.procedimentos {margin: -10px;}
#solicitar{margin: 20px 0px 0px -10px;}
</style>
<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<!--================Header Area =================-->
	<header class="header_area">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand logo_h" href="consulta.php">Solicitação de Reembolso</a>
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
								<div class="col-md-12">
								<div class="boking_table">
												<div class="row">
													<div class="col-md-12">
														<div class="book_tabel_item">
															<div class="form-group">
                                                                    <div class="input-group d-flex flex-row">

								<h2><?php
								
								include_once("conexao.php");
								
								$pesquisaNome = "SELECT nm_beneficiario FROM beneficiario WHERE nr_matricula LIKE $matricula";
								foreach ($conn->query($pesquisaNome) as $row) {
									echo "Beneficiário: " .  $row['nm_beneficiario'];
								};
								 
									echo "<br>Matricula: " . $matricula; 
								?></h2>

																
											<div class="col-md-8">
														<div class="book_tabel_item">
															<div class="form-group">
                                                                    <div class="input-group d-flex flex-row">
								
														<div class="col-md-34">                      
                                                            <div class="book_tabel_item">
                                                                    <div class="form-group">
                                                                        <div class="input-group d-flex flex-row">
											
																 <form name="solicitaReembolso" method="POST" action="ActionsPHP/realizaReembolso.php">
															
																					<div class="book_tabel_item">
																				   <div class="form-group">
																					
																						

							
							<table class="procedimentos" border="1" >
								<tr>
									<td></td>
									<td>Data do Procedimento</td>
									<td>Médico</td>
									<td>Especialidade</td>
									<td>Procedimento</td>
									<td>Valor</td>
								</tr>
						<?php
							//session_start(); //incia a conexão
							
							include_once("conexao.php"); //Arquivo de configuração da conexão
							//include("../Actions/php/lista.php");//Arquivo de configuração do sql com o banco
							
							$pesquisaTodos = "SELECT a.cd_procedimento, a.dt_atendimento ,c.ds_credenciado, e.ds_especialidade, p.ds_procedimento, p.vl_procedimento, p.proc_pago FROM atendimento a JOIN procedimento p ON a.cd_procedimento = p.cd_procedimento
							JOIN credenciado c ON a.cd_credenciado = c.cd_credenciado JOIN especialidade e ON a.cd_especialidade = e.cd_especialidade JOIN beneficiario b ON a.nr_matricula = b.nr_matricula WHERE b.nr_matricula = $matricula AND p.proc_pago <> 1"; //todos os contatos               

							//Executa as pesquisa e exibe na tela, enquanto possuir dados para serem pesquisados
							foreach ($conn->query($pesquisaTodos) as $row) {
								echo "<tr>";
								echo "<td align='center'><input type='radio' id='procedimento' name='procedimento' value='" .$row['cd_procedimento']. "'></td>";
								echo "<td name='date'>"	. $row['dt_atendimento']						. "</td>";
								echo "<td>"	. $row['ds_credenciado']						. "</td>";
								echo "<td>"	. $row['ds_especialidade']						. "</td>";
								echo "<td>"	. $row['ds_procedimento']						. "</td>";
								echo "<td>"	."R$ ". $row['vl_procedimento']						. "</td>";
								echo "</tr>";
							}
						?>
						</table>
					</div>
					</div>
									<div class="col-md-12">                      
										<div class="book_tabel_item">
											<div class="form-group">
												<div class="input-group d-flex flex-row">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">                      
										<div class="book_tabel_item">
											<div class="form-group">
												<div class="input-group d-flex flex-row">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">                      
										<div class="book_tabel_item">
											<div class="form-group">
												<div class="input-group d-flex flex-row">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">                      
										<div class="book_tabel_item">
											<div class="form-group">
												<div class="input-group d-flex flex-row">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-12">                      
										<div class="book_tabel_item">
											<div class="form-group">
												<div class="input-group d-flex flex-row">

												<div class="col-md-4">
										<div class="book_tabel_item">
											<div class="form-group">
												
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="book_tabel_item">
											<div class="form-group">
												
											</div>
										</div>
									</div>
					
									<div class="col-md-6">
										<div class="book_tabel_item">
											<div class="form-group">
												<input id="solicitar" class="book_now_btn button_hover"
					type="submit" value="Gerar Solicitação" onclick="validarSolicitacao()"/>
											</div>
										</div>
									</div>
												</div>
											</div>
										</div>
									</div>
									
														</form>
														</div>
														</div>
														</div>
														</div>
														</div>
														</div>
														</div>
														</div>
														</div>
													</div>
												</div><!-- class="book_tabel_item"-->
											</div><!-- end class="col-md-4-->
										</div><!-- end class="row"-->
									</div><!-- end class="boking_table"-->
								</div><!-- end class="col-md-12"-->
							</div><!-- end class="hotel_booking_table"-->
						</div> <!-- end class="container"-->
					</div><!-- end class="banner_content text-center" -->
				</div> <!--end class="banner_content text-center"-->
			</div><!--end class="container"-->
		</div> <!-- end class="booking_table d_flex align-items-center"-->
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