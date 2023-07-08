<?php 
    require_once '../pdf/vendor/autoload.php';
    include '../conect.php';
    $text = '';
    $sq = $Conn->query("SELECT * FROM veiculo");
    $q = $Conn->query("SELECT Nome FROM usuarios join veiculo on usuarios.Id = veiculo.id_user");
    $total = mysqli_num_rows($sq);
    $ano_corrente = date('Y');
    $valor_total = 0;
    $moto = $Conn->query("SELECT * FROM veiculo WHERE Tipo_veiculo = 'Moto'");
    $total_moto = mysqli_num_rows($moto);

    $carro = $Conn->query("SELECT * FROM veiculo WHERE Tipo_veiculo = 'Carro'");
    $total_carro = mysqli_num_rows($carro);
    

    $head = "  
    <html sytle='font-family:Poppins;'>
    <link rel='stylesheet' href=''>
    <style>
        td {
            font-size: 10pt;
            text-align: center;
        }
    </style>
    <h1 style='text-align:center;'>Relatório de Actividades no Sistema</h1>
    <br>
    <h2 style='text-align:left;'>Veículos cadastrados ($total)</h2>

    <table border=1>
    <thead>
        <tr>                                                 
            <th>Marca</th>                                                 
            <th>Modelo</th>                                                 
            <th>Matrícula</th>                                                 
            <th>Cilindragem</th>                                                 
            <th>Data de Registro</th>                                                 
            <th>Tipo de Veículo</th>                                                 
            <th>Preço</th>  
            <th>Cadastrado por</th>                                                                                               
        </tr>
  </thead>

    <tbody>
    ";
    
    while ($linhas = $sq->fetch_assoc()) {             
        $user = $q->fetch_assoc();
        $valor_total += $linhas['Preco'];
    
    $text .= "
        echo '<tr><td>$linhas[Marca_veiculo]</td>';
        echo '<td>$linhas[Modelo_veiculo]</td>';
        echo '<td>$linhas[Matricula]</td>';
        echo '<td>$linhas[Cilindragem]</td>';
        echo '<td>$linhas[Data_registro]</td>';
        echo '<td>$linhas[Tipo_veiculo]</td>';
        echo '<td>$linhas[Preco]Kz</td></tr>';
        echo '<td>$user[Nome]</td></tr>';     
";
}

$foot = "


</tbody>
           
</table>
    <br>
    <h4>Total de arrecadado: ".number_format($valor_total,0,',','.') ."Kz</h4>
    <h4>Total de carro: $total_carro</h4>
    <h4>Total de Motorizada: $total_moto</h4>
</html>

";

	$mpdf = new \Mpdf\Mpdf();

    $nome_arquivo = "Relatório de actividades no Sistema";

	$mpdf->WriteHTML($head.$text.$foot);
    $mpdf->Output($nome_arquivo);
	$mpdf->Output();


?>

