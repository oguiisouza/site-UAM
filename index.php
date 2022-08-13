<!-- github.com/oguiisouza | guilhermesc.com -->
<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
		$sobrenome = $_POST['sobrenome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $complemento = $_POST['complemento'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
		$conheceu = $_POST['conheceu'];
		$prod = $_POST['prod'];
		$mensagem = $_POST['mensagem'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,telefone,email,cep,endereco,complemento,cidade,uf,conheceu,prod,mensagem) 
        VALUES ('$nome','$sobrenome','$telefone','$email','$cep','$endereco','$complemento','$cidade','$uf','$conheceu','$prod','$mensagem')");

        header('Location: index.php');
    }

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title> Luz Ingá - Decorações</title>
		<meta http-equiv="content-type" content="text/html" />
		<meta charset="UTF-8">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

			<link rel="stylesheet" href="css/style.css" />
		</noscript>
	</head>
	<body>

		<!-- CABEÇALHO -->

			<header id="header">
					<h1 id="logo">Luz Ingá</h1>
					<nav id="nav">
						<ul>
							<li><a href="#intro">Home</a></li>
							<li><a href="#prod">Produtos</a></li>
							<li><a href="#contato">Contato</a></li>
						</ul>
					</nav>
			</header>

			<!-- INICIO -->

			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container 75%">
					<header>
						<h2>Luz Ingá</h2>
					</header>
					<p>Está busca de Lustres e Pendentes para acrescentar requinte à decoração do seu lar? </p> Temos todas as necessidades você pode dar um brilho a mais ao lado desses produtos.</p>
					<footer>
						<a href="#prod" class="button style2 down">Ver mais</a>
					</footer>
				</div>
			</section>

		<!-- FOTOS PRODUTOS -->

			<section id="prod" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>Produtos</h2>
					</header>
						<div class="container 75% gallery">
							<div class="row 0% images">
								<div class="6u"><a href="images/fulls/01.jpg" class="image fit from-left"><img src="images/fulls/01.jpg" title="Lustre Cristal" alt="Lustre" /></a></div>
								<div class="6u"><a href="images/fulls/02.jpg" class="image fit from-right"><img src="images/fulls/02.jpg" title="Lustre de Cristal Clássico" alt="Lustre" /></a></div>
							</div>
							<div class="row 0% images">
								<div class="6u"><a href="images/fulls/03.jpg" class="image fit from-left"><img src="images/fulls/03.jpg" title="Lustre Moderno" alt="Lustre" /></a></div>
								<div class="6u"><a href="images/fulls/04.jpg" class="image fit from-right"><img src="images/fulls/04.jpg" title="Lustre ADHARA" alt="Lustre" /></a></div>
							</div>
							<div class="row 0% images">
								<div class="6u"><a href="images/fulls/05.jpg" class="image fit from-left"><img src="images/fulls/05.jpg" title="Lustre" alt="Lustre" /></a></div>
								<div class="6u"><a href="images/fulls/06.jpg" class="image fit from-right"><img src="images/fulls/06.jpg" title="Lustre" alt="Lustre" /></a></div>
							</div>
						</div>
				</div>
			</section> 

			<!-- FORMULARIO -->
			<script>
				function getDadosEnderecoPorCEP(cep){
					let url = 'https://viacep.com.br/ws/' + cep + '/json/'
		
					let xmlHttp = new XMLHttpRequest()
					xmlHttp.open('GET', url)
		
					xmlHttp.onreadystatechange = () => {
						if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
							let dadosJSONText = xmlHttp.responseText
							let dadosJSONObj = JSON.parse(dadosJSONText)
		
						
							document.getElementById('endereco').value = dadosJSONObj.logradouro
							document.getElementById('cidade').value = dadosJSONObj.localidade
							document.getElementById('uf').value = dadosJSONObj.uf
		
		
		
						}
					}
					xmlHttp.send()
				}
		
		
			</script>
			 <script src="JS/index.js"></script>
			 <script src="https://cdn01.jotfor.ms/static/prototype.forms.js?3.3.35187" type="text/javascript"></script>
			 <script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.35187" type="text/javascript"></script>
			 <script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.35187" type="text/javascript"></script>
			 <script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.35187" type="text/javascript"></script>
			 <script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.35187" type="text/javascript"></script>
			 <script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
			 <script type="text/javascript">	JotForm.newDefaultTheme = true;
				 JotForm.extendsNewTheme = false;
				 JotForm.newPaymentUIForNewCreatedForms = false;
				 JotForm.newPaymentUI = true;
			 
				JotForm.setConditions([{"action":[{"field":"9","visibility":"Show","id":"action_0_1579704830003"}],"id":"1579704830003","index":"0","link":"Any","priority":"0","terms":[{"field":"8","operator":"equals","value":"Whatsapp"}],"type":"field"}]);
				 JotForm.init(function(){
				 /*INIT-START*/
				   JotForm.setPhoneMaskingValidator( 'input_5_full', '(##) #####-####' );
				   setTimeout(function() {
					   $('input_6').hint('ex: email@email.com');
					}, 20);
			 if (window.JotForm && JotForm.accessible) $('input_12').setAttribute('tabindex',0);
				   JotForm.alterTexts({"alphabetic":"Este campo pode apenas conter letras","alphanumeric":"Este campo pode apenas conter letras e números","confirmClearForm":"Are you sure you want to clear the form","email":"Insira um e-mail válido","freeEmailError":"Contas de e-mail grátis não são permitidas!","lessThan":"Your score should be less than","minSelectionsError":"Selecione pelo menos um campo","numeric":"Este campo pode apenas conter números","required":"Este campo é obrigatório","requireOne":"Pelo menos um campo é obrigatório!"});
				 /*INIT-END*/
				 });
			 
				JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"Faca um orcamento!","type":"control_head"},{"name":"enviar","qid":"2","text":"Enviar","type":"control_button"},{"name":"fullName3","qid":"3","text":"Nome Completo","type":"control_fullname"},{"name":"address4","qid":"4","text":"Endereco","type":"control_address"},{"name":"phoneNumber5","qid":"5","text":"Telefone","type":"control_phone"},{"name":"email6","qid":"6","subLabel":"","text":"E-mail","type":"control_email"},null,{"name":"howDid8","qid":"8","text":"Como nos encontrou?","type":"control_dropdown"},null,null,null,{"name":"faleMais","qid":"12","text":"Fale mais sobre suas ideias para decoracao:","type":"control_textarea"},null,null,null,{"description":"","name":"listeAbaixo16","qid":"16","text":"Liste abaixo os produtos que voce se interessou:","type":"control_checkbox"}]);
				setTimeout(function() {
			 JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"Faca um orcamento!","type":"control_head"},{"name":"enviar","qid":"2","text":"Enviar","type":"control_button"},{"name":"fullName3","qid":"3","text":"Nome Completo","type":"control_fullname"},{"name":"address4","qid":"4","text":"Endereco","type":"control_address"},{"name":"phoneNumber5","qid":"5","text":"Telefone","type":"control_phone"},{"name":"email6","qid":"6","subLabel":"","text":"E-mail","type":"control_email"},null,{"name":"howDid8","qid":"8","text":"Como nos encontrou?","type":"control_dropdown"},null,null,null,{"name":"faleMais","qid":"12","text":"Fale mais sobre suas ideias para decoracao:","type":"control_textarea"},null,null,null,{"description":"","name":"listeAbaixo16","qid":"16","text":"Liste abaixo os produtos que voce se interessou:","type":"control_checkbox"}]);}, 20); 
			 </script>
			 <style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
			 <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
			 <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.35187" />
			 <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.35187" />
			 <style type="text/css" id="form-designer-style">
				 /* Injected CSS Code */
			 .form-label.form-label-auto {
					 
				   display: block;
				   float: none;
				   text-align: left;
				   width: 100%;
				 
				   }
				 /* Injected CSS Code */
			 </style>
			 
			 <form class="jotform-form" action="index.php" method="POST" name="form_222230565289659" id="222230565289659" accept-charset="utf-8">
			   <input type="hidden" id="JWTContainer" value="" />
			   <input type="hidden" id="cardinalOrderNumber" value="" />
			   <div role="main" class="form-all">
				<section id="contato">
				 <style>
				   .form-all:before { background: none;}
				 </style>
				 <ul class="form-section page-section">
				   <li id="cid_1" class="form-input-wide" data-type="control_head">
					 <div class="form-header-group  header-large">
					   <div class="header-text httac htvam">
						 <h1 id="header_1" class="form-header" data-component="header">
						   Faça um orçamento 😀 
						 </h1>
					   </div>
					 </div>
				   </li>
		  <li class="form-line jf-required" data-type="control_fullname" id="id_3">
			<label class="form-label form-label-top form-label-auto" id="label_3" for="first_3">
			  Nome Completo
			  <span class="form-required">
				*
			  </span>
			</label>
			<div id="cid_3" class="form-input-wide jf-required" data-layout="full">
			  <div data-wrapper-react="true">
				<span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
				  <input type="text" id="first_3" name="nome" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_3 given-name" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" required="" />
				  <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Nome </label>
				</span>
				<span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
				  <input type="text" id="last_3" name="sobrenome" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_3 family-name" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" required="" />
				  <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Sobrenome </label>
				</span>
			  </div>
			</div>
		  </li>
		  <li class="form-line form-line-column form-col-1 jf-required" data-type="control_phone" id="id_5">
			<label class="form-label form-label-top form-label-auto" id="label_5" for="input_5_full">
			  Telefone
			  <span class="form-required">
				*
			  </span>
			</label>
			<div id="cid_5" class="form-input-wide jf-required" data-layout="half">
			  <span class="form-sub-label-container" style="vertical-align:top">
				<input type="tel" id="input_5_full" name="telefone" data-type="mask-number" class="mask-phone-number form-textbox validate[required, Fill Mask]" data-defaultvalue="" autoComplete="section-input_5 tel" style="width:310px" data-masked="true" value="" placeholder="(00) 00000-0000" data-component="phone" aria-labelledby="label_5" required="" />
				<label class="form-sub-label is-empty" for="input_5_full" id="sublabel_5_masked" style="min-height:13px" aria-hidden="false">  </label>
			  </span>
			</div>
		  </li>
		  <li class="form-line form-line-column form-col-2 jf-required" data-type="control_email" id="id_6">
			<label class="form-label form-label-top form-label-auto" id="label_6" for="input_6">
			  E-mail
			  <span class="form-required">
				*
			  </span>
			</label>
			<div id="cid_6" class="form-input-wide jf-required" data-layout="half">
			  <input type="email" id="input_6" name="email" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="ex: email@yahoo.com" data-component="email" aria-labelledby="label_6" required="" />
			</div>
		  </li>
		  <li class="form-line jf-required" data-type="control_address" id="id_4">
			<label class="form-label form-label-top form-label-auto" id="label_4" for="input_4_addr_line1">
			  Endereço
			  <span class="form-required">
				*
			  </span>
			</label>
			<div id="cid_4" class="form-input-wide jf-required" data-layout="full">

				<script language="JavaScript">
					function mascara(t, mask){
						 var i = t.value.length;
						 var saida = mask.substring(1,0);
						 var texto = mask.substring(i)
	
					 if (texto.substring(0,1) != saida){
					 t.value += texto.substring(0,1);
					}}
				 </script>

			  <div summary="" class="form-address-table jsTest-addressField">
				<div class="form-address-line-wrapper jsTest-address-line-wrapperField">
					<span class="form-address-line form-address-zip-line jsTest-address-lineField ">
					  <span class="form-sub-label-container" style="vertical-align:top">
						<input type="text" id="cep" name="cep" class="form-textbox validate[required] form-address-postal"size="10" maxlength="9"autoComplete="" data-component="zip" aria-labelledby="label_4 sublabel_4_postal" onblur="getDadosEnderecoPorCEP(this.value)" onkeypress="mascara(this, '#####-###')"/>
						<label class="form-sub-label" for="input_4_postal" id="sublabel_4_postal" style="min-height:13px" aria-hidden="false"> CEP </label>
					  </span>
					</span>
				  </div>
				<div class="form-address-line-wrapper jsTest-address-line-wrapperField">
				  <span class="form-address-line form-address-street-line jsTest-address-lineField">
					<span class="form-sub-label-container" style="vertical-align:top">
					  <input type="text" name="endereco" id="endereco"  class="form-textbox validate[required] form-address-line" data-defaultvalue="" value="" data-component="address_line_1" aria-labelledby="label_4 sublabel_4_addr_line1" required/>
					  <label class="form-sub-label" for="input_4_addr_line1" id="endereco" style="min-height:13px" aria-hidden="false"> Rua </label>
					</span>
				  </span>
				</div>
				<div class="form-address-line-wrapper jsTest-address-line-wrapperField">
				  <span class="form-address-line form-address-street-line jsTest-address-lineField">
					<span class="form-sub-label-container" style="vertical-align:top">
					  <input type="text" id="complemento" name="complemento" class="form-textbox form-address-line" data-defaultvalue="" autoComplete="section-input_4 address-line2" value="" data-component="address_line_2" aria-labelledby="label_4 sublabel_4_addr_line2" />
					  <label class="form-sub-label" for="input_4_addr_line2" id="complemento" style="min-height:13px" aria-hidden="false"> Número / Complemento </label>
					</span>
				  </span>
				</div>
				<div class="form-address-line-wrapper jsTest-address-line-wrapperField">
				  <span class="form-address-line form-address-city-line jsTest-address-lineField ">
					<span class="form-sub-label-container" style="vertical-align:top">
					  <input type="text" id="cidade" name="cidade" class="form-textbox validate[required] form-address-city" data-defaultvalue="" value="" data-component="city" aria-labelledby="label_4 sublabel_4_city" required/>
					  <label class="form-sub-label" for="input_4_city" id="cidade" style="min-height:13px" aria-hidden="false"> Cidade </label>
					</span>
				  </span>
				  <span class="form-address-line form-address-state-line jsTest-address-lineField ">
					<span class="form-sub-label-container" style="vertical-align:top">
					  <input type="text" id="uf" name="uf" class="form-textbox validate[required] form-address-state" data-defaultvalue="" autoComplete="section-input_4 address-level1" value="" data-component="state" aria-labelledby="label_4 sublabel_4_state" required />
					  <label class="form-sub-label" for="input_4_state" id="uf" style="min-height:13px" aria-hidden="false"> Estado </label>
					</span>
				  </span>
				</div>
			  </div>
			</div>
		  </li>
		  <li class="form-line jf-required" data-type="control_dropdown" id="id_8">
			<label class="form-label form-label-top form-label-auto" id="label_8" for="input_8">
			  Como nos encontrou?
			  <span class="form-required">
				*
			  </span>
			</label>
			<div id="cid_8" class="form-input-wide jf-required" data-layout="half">
			  <select class="form-dropdown validate[required]" id="input_8" name="conheceu" style="width:310px" data-component="dropdown" required="">
				<option value=""> Selecione </option>
				<option value="Instagram"> Instagram </option>
				<option value="Facebook"> Facebook </option>
				<option value="Jornal"> Jornal </option>
				<option value="Whatsapp"> Whatsapp </option>
			  </select>
			</div>
		  </li>
		  <li class="form-line jf-required" data-type="control_checkbox" id="id_16">
			<label class="form-label form-label-top" id="label_16" for="input_16">
			  Liste abaixo os produtos que você se interessou:
			  <span class="form-required">
				*
			  </span>
			</label>
			<div id="cid_16" class="form-input-wide jf-required" data-layout="full">
			  <div class="form-multiple-column" data-columncount="2" name="prod" role="group" aria-labelledby="label_16" data-component="checkbox">
				<span class="form-checkbox-item">
				  <span class="dragger-item"name="cid_16">
				  </span>
				  <input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_0" name="prod" value="Luminárias" required="" />
				  <label id="label_input_16_0" for="input_16_0"> Luminárias </label>
				</span>
				<span class="form-checkbox-item">
				  <span class="dragger-item">
				  </span>
				  <input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_1" name="prod" value="Tapetes" required="" />
				  <label id="label_input_16_1" for="input_16_1"> Tapetes </label>
				</span>
				<span class="form-checkbox-item" style="clear:left">
				  <span class="dragger-item">
				  </span>
				  <input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_2" name="prod" value="Móveis" required="" />
				  <label id="label_input_16_2" for="input_16_2"> Móveis </label>
				</span>
				<span class="form-checkbox-item">
				  <span class="dragger-item">
				  </span>
				  <input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_3" name="prod" value="Cortinas" required="" />
				  <label id="label_input_16_3" for="input_16_3"> Cortinas </label>
				</span>
			  </div>
			</div>
		  </li>
		  <li class="form-line" data-type="control_textarea" id="id_12">
			<label class="form-label form-label-top form-label-auto" id="label_12" for="input_12"> Fale sobre suas idéias para decoração: </label>
			<div id="cid_12" class="form-input-wide" data-layout="full">
			  <textarea id="input_12" class="form-textarea" name="mensagem" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_12"></textarea>
			</div>
		  </li>
		  <li class="form-line" data-type="control_button" id="id_2">
			<div id="cid_2" class="form-input-wide" data-layout="full">
			  <div data-align="center" class="form-buttons-wrapper form-buttons-center   jsTest-button-wrapperField">
				<button id="input_2" type="submit" name="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
				  Enviar
				</button>
			  </div>
			</div>
		  </li>
		</ul>
	  </div>
	</section>
			<!-- RODAPÉ -->
			
			<footer id="footer">

					<ul class="actions">
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					<ul class="menu">
						<li> Todos os direitos reservados &copy; 2022 Luz Ingá.</li>
					</ul>
			</footer>
	</body>
</html>
	<!-- github.com/oguiisouza -->
