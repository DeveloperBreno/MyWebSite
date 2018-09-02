<!DOCTYPE html>
<html>
<head>
	<title>Baixar Ebook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


<style type="text/css">
body{
  margin: 0px;
  padding: 0px;

   font-family: PoiretOne-Regular;
    text-shadow: 0 1px 2px rgba(0,0,0,.1);

}

   
  
  #baixar{

  

    background-position: center;
    border: none;
    padding: 20px 0px;
    text-decoration: none;
    display: inline-block;
    background-color: #2196F3;
    transition: background-color .7s;
    font-size: 24px!important;
    font-family: Verdana,sans-serif;
    color: #fff;
    line-height: 0.5;
    text-align: center;
    font-weight: 400;
    width: 300px;
 
    margin: 10px 0px;
  }



.conteudoorodape h2{
  font-size: 30px;
    color: #555555;
    margin: 2px 0 -20px 0 !important;
    display: inline-block;
    margin: 0em;
    text-align: center;
    font-family: "Segoe UI",Arial,sans-serif;
    font-weight: 400;
}

.conteudoorodape h3{
    display: inline-block;
    font-size: 20px;
    -webkit-margin-before: 0px;
    -webkit-margin-after: 0px;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
}


input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}



a:-webkit-any-link {
    color: #555;
    text-decoration: none;
    cursor: auto;
    font-size: 20px;
    margin: 0px;
}

input[type=submit]{

background-image: url(ima/btebook.png);
    background-position: center;
    border: none;
    padding: 15px 32px;
    text-decoration: none;
    display: inline-block;
    background-color: #2196F3;
    transition: background-color .7s;
    font-size: 24px!important;
    font-family: Verdana,sans-serif;
    color: #fff;
    line-height: 0.5;
    text-align: center;
    font-weight: 400;
    width: 300px;
    height: 100px;
    margin: 10px 0px;

}

p{
      font-size: 30px;
    color: #555555;
    margin: 2px 0 -20px 0 !important;
    display: inline-block;
    margin: 0em;
    text-align: center;
    font-family: "Segoe UI",Arial,sans-serif;
    font-weight: 400;
}


:focus {
    outline: -webkit-focus-ring-color auto 0px;
}
  
	

	body{


		/background: url(ima/cimaebook.png) top left no-repeat, url(ima/baixoebook.jpg) right bottom no-repeat;/
		margin: auto;
		
		
	}

	.spaco{
		height: 20px;
	}

	.webe{
		margin: auto;
		width:  300px;
	}



  .compgrnade{
  background-image: url(ima/linha.png);
  background-position: bottom right;
  background-repeat: no-repeat;
  float: left;
  width: 100%;
  border-bottom: 50px solid #2196f3;
 
  padding-bottom: 95px;

}
</style>

</head>
<body>


<div class="compgrnade">

 <div class="webe">

<div class="spaco"></div>






<?php

$nome = $_GET["nome"];

if (isset($_POST['BTEnvia'])){
 
  //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
  //====================================================
  $email_remetente = "email@brenoweb.com"; // deve ser um email do dominio
  //====================================================
 
 
  //Configurações do email, ajustar conforme necessidade
  //====================================================
  $email_destinatario = "developerbreno@gmail.com"; // qualquer email pode receber os dados
  $email_reply = "$email";
  $email_assunto = "Contato formmail";
  //====================================================
 
 
  //Variaveis de POST, Alterar somente se necessário
  //====================================================
  $nome = $_POST['nome'];
  $email = $_POST['email'];
   
    $numero = $_POST['numero'];
   
   
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
   
   
  $mensagem = $_POST['mensagem'];
    
    




  //====================================================
 
  //Monta o Corpo da Mensagem
  //====================================================
$email_conteudo = "      $nome        \n"; 
$email_conteudo .= "     $email       \n"; 
$email_conteudo .= "     $telefone    \n"; 
$email_conteudo .= "     $celular     \n"; 
$email_conteudo .= "     $mensagem    \n Via ebook"; 




  //====================================================
 
  //Seta os Headers (Alerar somente caso necessario)
  //====================================================
  $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
  //====================================================
 
 
  //Enviando o email
  //====================================================
  if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){

echo $nome;
    echo '


<center>

<br/>
<br/>
<br/>

    <a id="baixar" href="Ebook Breno Web Dicas.pdf" download="Ebook Breno Web Dicas">Baixar</a><br/>


<p>
<br/>

Obrigado</p>


</center>
<style type="text/css">

input[type=text]{
  display: none;
  transition: 1s;

}
  

  input[type=submit]{
     display: none;
         transition: 1s;
  }

</style>




    '; 
  }
    else{
    echo "</p><center>Falha!</center></p>";
  }
  //====================================================
} 
?>





<form action="<? $PHP_SELF; ?>" method="POST"  name="meuform" method="POST" onsubmit="return aviso()">
    <p>
   
<p>
	







</p>
<input type="text" placeholder="E-mail" required="2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  name="email" >  


 

  
  

        <input type="submit" name="BTEnvia" value="Proximo">


    </p>

</form>



<div class="conteudoorodape">
<center>
       <H2>Breno Web</H2>
      <p><a href="tel:+5511977300114">11 97730-0114 </a><br>
      <a href="mailto:bw@brenoweb.com" style="text-decoration: none;"> bw@brenoweb.com</a><br>

       <a href="http://brenoweb.com/" id="top" class="scroll" style="text-decoration: none;"><img src="ima/cima.png" style="
    width: 114px;
"> </a>
</center>
    </div>


    </div>

</body>
</html>