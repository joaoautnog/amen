<?php
//Variaveis recebendo o valor dos campos preenchidos
$nome=$_POST["nome"];
$sobrenome=$_POST["sobrenome"];
$email=$_POST["email"];
$ddd=$_POST["ddd"];
$fone=$_POST["fone"];
$mensagem=$_POST["msg"];
//variáveis do email
$data = date("d/m/y"); //função para pegar a data de envio do e-mail
$hora = date("H:i"); //para pegar a hora com a função date
$remetente="4everjoao@gmail.com";
$destinatario="joaoautnog@gmail.com";
$assunto="Contato pelo site AMEN";
$texto_msg="$data - $hora</br>
  		<b>Nome:</b> $nome</br>
			<b>Sobrenome:</b> $sobrenome</br>
			<b>Email:</b> $email</br>
			<b>Telefone:</b> ($ddd) $fone</br>
			<b>Mensagem:</b> $mensagem</br>";

//cabeçalho email
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From:$remetente\r\n"; 
$headers .= "Return-Path:$remetente\r\n";
$headers .= "Reply-To:$email\r\n";
$envio = mail($destinatario, $assunto, $texto_msg, $headers);

if($envio){
 echo "Mensagem enviada com sucesso";
}
else{
 echo "A mensagem não pode ser enviada";
 }
 ?>
