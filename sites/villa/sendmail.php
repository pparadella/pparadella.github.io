<?
$para = "pedroparadella0001@hotmail.com";//Coloque aqui o email que receberá as msgs
$assunto = "Reserva";
$message = "<strong>Nome:</strong> $nome<br><strong>Endereço:</strong> $endereco<br><strong>Cidade:</strong> $cidade      <strong>Estado:</strong> $estado<br><strong>País:</strong> $pais      <strong>Cep:</strong> $cep<br><strong>Telefone:</strong> $telefone      <strong>Fax:</strong> $fax<br><strong>E-mail:</strong> $email<br><strong>Check-in:</strong> $checkin      <strong>Check-out:</strong> $checkout<br><strong>Adultos:</strong> $adultos      <strong>Crianças:</strong> $criancas";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $email\r\n";

/* Enviar o email */
if ($acao=="mandar") {
 if(mail($para, $assunto, $message, $headers)) {
  echo "&saida=Obrigado!<br>Sua mensagem foi enviada com sucesso!&";
 } else {
  echo "&saida=Ocorreu um erro!<br>Fale com o administrador!&";
 }
}
?>