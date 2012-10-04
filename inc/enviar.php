<?php 
if(!empty($_POST)) {

	// To send HTML mail, the Content-type header must be set
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
	// More headers
	$headers .= 'From: <no-replay@qualityfood.com.br>' . "\r\n";

	//aqui são as configurações para enviar o e-mail para o visitante
	$titulo = "(Pedido de orçamento)";                  //titulo da mensagem enviada para o visitante
	$email = "higor@maxmeio.com";
	

	
	
	$message = '<html><body>';
	$message .= '<table rules="all" style="border:none;" cellpadding="10">';
	$message = "<tr><td><strong>Tipo de Serviço a ser Fornecido</strong></td>";
	if (isset($_GET['refeicao_feita_no_local'])) {
        $message .= "<td>{$_GET['refeicao_feita_no_local']}</td>";
	}

	if (isset($_GET['transportada_servido_no_local'])) {
        $message .= "<td>{$_GET['transportada_servido_no_local']}</td>";
	}

	if (isset($_GET['transportada_quentinha'])) {
        $message .= "<td>{$_GET['transportada_quentinha']}</td>";
	}	
	$message .= "</tr>";
	
	
	$message .= "<tr><td><strong>Modalidade de Fornecimento</strong></td>";
	
	if (isset($_GET['modalidade_fornecimento'])) {
	    $message .= "<td>";
        foreach($_GET['modalidade_fornecimento'] as $modalidade) {
            $message .= "{$modalidade}<br/>";
        }
        $message .= "</td>";
	}
	
	$message .= "</tr>";
	
    $message .= "<tr><td><strong>Freqüência diária do Fornecimento</strong></td>";
    $message .= "{$_GET['frequencia']}</tr>";
    $message .= "<tr><td>Opções de Refeições</td>";
    
    if (isset($_GET['refeicao_operacional'])) {
        $message .= "<td>Refeição operacional: {$_GET['refeicao_operacional']}</td>";
	}
	
	if (isset($_GET['refeicao_administrativa'])) {
        $message .= "<td>Refeição Administrativa: {$_GET['refeicao_administrativa']}</td>";
	}
	
	if (isset($_GET['refeicao_diretoria'])) {
        $message .= "<td>Refeição Diretoria: {$_GET['refeicao_diretoria']}</td>";
	}
	
	$message .= "</tr>";
    
	$message .= "<tr><td><strong>Nome da empresa:</strong> </td><td width='300'>" . strip_tags($_POST['nome_empresa']) . "</td></tr>";
	$message .= "<tr><td><strong>Endereço:</strong> </td><td width='300'>" . strip_tags($_POST['endereco']) . "</td></tr>";
	$message .= "<tr><td><strong>Cidade:</strong> </td><td width='300'>" . strip_tags($_POST['cidade']) . "</td></tr>";
	$message .= "<tr><td><strong>Estado:</strong> </td><td width='300'>" . strip_tags($_POST['estado']) . "</td></tr>";
	
	$message .= "<tr><td><strong>Nome do responsável:</strong> </td><td width='300'>" . strip_tags($_POST['nome_responsavel']) . "</td></tr>";
	$message .= "<tr><td><strong>Função:</strong> </td><td width='300'>" . strip_tags($_POST['funcao']) . "</td></tr>";
	$message .= "<tr><td><strong>Telefone:</strong> </td><td width='300'>" . strip_tags($_POST['telefone']) . "</td></tr>";						
	$message .= "<tr><td><strong>Email:</strong> </td><td width='300'>" . strip_tags($_POST['email']) . "</td></tr>";
	$message .= "<tr><td><strong>Comentário:</strong> </td><td width='300'>" . htmlentities($_POST['comentario']) . "</td></tr>";	
	$message .= "</table>";
	$message .= "</body></html>";
    
    
	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		echo "<p class='error'>O email informado é inválido</p>";
	}
	else if(mail($email, $titulo, $message, $headers))
	{
		echo "Mensagem enviado com sucesso!!!";
		session_destroy();
	}
}
?>