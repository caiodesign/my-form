<?php
include_once('includes/header.php'); // Chama o header
?>
				<div class="row">
					<div class="home-form">
						<div class="col-md-12">
							<h4>Preencha o formulário abaixo para encaminhar seus dados.</h4>
							<hr>
						</div>
						<div id="form-error" class="col-md-12">
						</div>
					<form id="formulario-contato" action="includes/enviaFormulario.php" method="POST">
						<div class="input-box col-md-12">
							<label>Nome Completo <span class="text-danger">*</span></label>
							<input type="text" name="nome" placeholder="Seu nome">
						</div>
						<div class="input-box col-md-12">
							<label>CPF/CNPJ <span class="text-danger">*</span></label>
							<input type="text" name="cpf" placeholder="Seu CPF">
						</div>
						<div class="input-box col-md-6"><!-- CELULAR -->
							<label>Celular <span class="text-danger">*</span></label>
							<div class="tel-box">
								<div class="tel-box-original">
									<input type="text" name="ddd" placeholder="00">
									<input type="text" name="celular" placeholder="99999-1234">
								</div>
							</div>
						</div>
						<div id="add-tel" class=""><!-- ADICIONA -->
							<p><a href="#" id="add-tel-link">+ Adicionar outro telefone</a></p>
						</div>
						<div class="input-box col-md-6"><!-- EMAIL -->
							<label>E-mail <span class="text-danger">*</span></label>
							<input type="text" name="email" placeholder="Seu e-mail">
						</div>
						<div id="add-tel-desktop" class="col-md-12"></div>
						<div class="input-btn col-md-12 center-this">
							<button name="button">Enviar ></button>
						</div>
						<div class="col-md-6">
							<hr>
							<p><span class="text-danger">*</span> Itens obrigatórios</p>
						</div>
					</form>
				</div>
			</div>

<?php
include_once('includes/footer.php'); // Chama o footer
?>
