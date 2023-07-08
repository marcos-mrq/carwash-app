<?php 
	include '../conect.php';
	session_start();
	require_once '../pdf/vendor/autoload.php';
    include '../conect.php';

	$balc = 0;
	$nome_marca = (isset($_POST["input-marca"])) ? $_POST["input-marca"] : empty($nome_marca);
	$nome_modelo = (isset($_POST["input-modelo"])) ? $_POST["input-modelo"] : empty($nome_modelo);
	$matricula = (isset($_POST["input-matricula"])) ? $_POST["input-matricula"] : empty($matricula);
	$cilind = (isset($_POST["input-cilindragem"])) ? $_POST["input-cilindragem"] : empty($cilind);
	$data_registro = date('Y/m/d H:i:s');
	$tipo_veiculo = (isset($_POST["select_veiculo"])) ? $_POST["select_veiculo"] : empty($tipo_veiculo);
	$preco = 1000;
	$balc = $_SESSION['user_id'];
	$nome_prop = (isset($_POST["input-prop"])) ? $_POST["input-prop"] : empty($nome_prop);
	$tel_client = (isset($_POST["client_number"])) ? $_POST["client_number"] : 0;
	$email = (isset($_POST["input_client_email"])) ? $_POST["input_client_email"] : empty($email);

		if ( empty($nome_marca) || empty($nome_modelo) ||empty($matricula) || empty($cilind) || empty($tipo_veiculo) || empty($nome_prop) || ($tel_client == 0) || empty($email) ) {
			$_SESSION['msg'] = "<script>Swal.fire('Erro ao cadastrar','Verifique se os campos estão preenchidos!','error');</script>";
			header("Location: register.php");
		} else {
		if ($cilind > 1.00 ) {
			$preco = 2000;

			$sql_client = "INSERT INTO clientes(Nome,Telefone,Email) 
			VALUES ('$nome_prop','$tel_client','$email')";
			$q_client = $Conn->query($sql_client);

			$ql_c = $Conn->query("SELECT * FROM clientes");
			while($linhas = $ql_c->fetch_assoc()){
				$id_cli = $linhas['idclientes'];
			}

			$sql = "INSERT INTO veiculo(Marca_veiculo,Modelo_veiculo, Matricula, Cilindragem,Data_registro,Tipo_veiculo,Preco,id_user,Proprietario) 
			VALUES ('$nome_marca','$nome_modelo', '$matricula','$cilind','$data_registro','$tipo_veiculo','$preco','$balc','$id_cli')";
			$q = $Conn->query($sql);

			$mpdf = new \Mpdf\Mpdf();

			$nome_arquivo = "Comprovativo de lavagem do Veículo";

			$head = "
			<!DOCTYPE html>
			<html lang='pt'>
			<head>
				<meta charset='UTF-8'>
				<title>Document</title>
			</head>

			<style>
				* {
					box-sizing: border-box;
					padding:0;
					margin:0;
					font-family: Poppins;
				}

				.header span{
					font-size: 12pt;
				}

				div.header{
					width:100%;
				}

				.header ul{
					list-style: none;
				}

				.header ul li{
					font-size: 12pt;
				}

				hr{
					height:3px;
				}
			</style>

			<body>

				<div class='header'>
					<ul style='display: flex'>
						<li style=''>$data_registro</li>
						<li style='color: red;'>Comprovativo Digital</li>
						<li style='color:#59ADFF;'>SGES (Sistema de Gestão de Estação de Servíço)</li>
					</ul>
				</div>
				<hr>
				<h3 style='text-align:center;'>Detalhes da Operação realizada (Cadastro)</h3>
				<br><br>
			";

			$body = "
				Marca do veículo:$nome_marca<br><br>
				Modelo do veículo:$nome_modelo<br><br>
				Matrícula:$matricula<br><br>
				Cilindragem:$cilind<br><br>
				Tipo do veículo:$tipo_veiculo<br><br>
				Preço:$preco<br><br>
				Nome do proprietário:$nome_prop<br><br>
				Número de Telefone:$tel_client<br><br>
				Email:$email<br>
			";

			$footer = "
			<br><br><br><br><br><br>
				<span style=''>Obs: O preço varia de acordo com a cilindragem. Se a cilindragem for maior que 1.00 o preço será 2000kz a lavagem senão o preço será 1000kz.</span>
				</body>
			</html>
				
			";
			$mpdf->WriteHTML($head.$body.$footer);
			$mpdf->Output($nome_arquivo);
			$mpdf->Output();
			mail($email,"Assunto","Operação realizada com sucesso.Seu veículo já foi lavado!
			Obs:O preço varia de acordo com a cilindragem.Se a cilindragem for maior que 1.00 o preço será 2000kz a lavagem senão o preço será 1000kz.
			Informações do veículo
			---------------------------------
			Marca do veiculo: $nome_marca
			Modelo do veiculo: $nome_modelo
			Matrícula: $matricula
			Cilindragem: $cilind
			Tipo de veiculo:$tipo_veiculo
			Preço: $preco
			Nome do Proprietário: $nome_prop
			Número de Telefone: $tel_client
			","SGES(Sistema de Gestão de Estação de Servíço)");			
			$_SESSION['msg'] = "<script>Swal.fire('Cadastrado com sucesso!','','success');</script>";
			header("Location: register.php");
		} else {
			$preco = 1000;

			$sql_client = "INSERT INTO clientes(Nome,Telefone,Email) 
			VALUES ('$nome_prop','$tel_client','$email')";
			$q_client = $Conn->query($sql_client);

			$ql_c = $Conn->query("SELECT * FROM clientes");
			while($linhas = $ql_c->fetch_assoc()){
				$id_cli = $linhas['idclientes'];
			}

			$sql = "INSERT INTO veiculo(Marca_veiculo,Modelo_veiculo, Matricula, Cilindragem,Data_registro,Tipo_veiculo,Preco,id_user,Proprietario) 
			VALUES ('$nome_marca','$nome_modelo', '$matricula','$cilind','$data_registro','$tipo_veiculo','$preco','$balc','$id_cli')";
			$q = $Conn->query($sql);

			$mpdf = new \Mpdf\Mpdf();

			$nome_arquivo = "Comprovativo de lavagem do Veículo";

			$head = "
			<!DOCTYPE html>
			<html lang='pt'>
			<head>
				<meta charset='UTF-8'>
				<title>Document</title>
			</head>

			<style>
				* {
					box-sizing: border-box;
					padding:0;
					margin:0;
					font-family: Poppins;
				}

				.header span{
					font-size: 12pt;
				}

				div.header{
					width:100%;
				}

				.header ul{
					list-style: none;
				}

				.header ul li{
					font-size: 12pt;
				}

				hr{
					height:3px;
				}
			</style>

			<body>

				<div class='header'>
					<ul style='display: flex'>
						<li style=''>$data_registro</li>
						<li style='color: red;'>Comprovativo Digital</li>
						<li style='color:#59ADFF;'>SGES (Sistema de Gestão de Estação de Servíço)</li>
					</ul>
				</div>
				<hr>
				<h3 style='text-align:center;'>Detalhes da Operação realizada (Cadastro)</h3>
				<br><br>
			";

			$body = "
				Marca do veículo:$nome_marca<br><br>
				Modelo do veículo:$nome_modelo<br><br>
				Matrícula:$matricula<br><br>
				Cilindragem:$cilind<br><br>
				Tipo do veículo:$tipo_veiculo<br><br>
				Preço:$preco<br><br>
				Nome do proprietário:$nome_prop<br><br>
				Número de Telefone:$tel_client<br><br>
			";

			$footer = "
			<br><br><br><br><br><br>
				<span style=''>Obs: O preço varia de acordo com a cilindragem. Se a cilindragem for maior que 1.00 o preço será 2000kz a lavagem senão o preço será 1000kz.</span>
				</body>
			</html>
				
			";
			$mpdf->WriteHTML($head.$body.$footer);
			$mpdf->Output($nome_arquivo);
			$mpdf->Output();
			mail($email,"Assunto","Operação realizada com sucesso.Seu veículo já foi lavado!
			Obs:O preço varia de acordo com a cilindragem.Se a cilindragem for maior que 1.00 o preço será 2000kz a lavagem senão o preço será 1000kz.
			Informações do veículo
			---------------------------------
			Marca do veiculo: $nome_marca
			Modelo do veiculo: $nome_modelo
			Matrícula: $matricula
			Cilindragem: $cilind
			Tipo de veiculo:$tipo_veiculo
			Preço: $preco
			Nome do Proprietário: $nome_prop
			Número de Telefone: $tel_client
			","SGES(Sistema de Gestão de Estação de Servíço)");
			$_SESSION['msg'] = "<script>Swal.fire('Cadastrado com sucesso!','','success');</script>";
			header("Location: register.php");
		}

	} 

	