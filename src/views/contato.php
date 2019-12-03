<?php $title = "Fale Conosco" ?>
<?php include "./src/views/includes/head.php" ?>

<?php
  //Esconder avisos de erro 
  error_reporting(E_ERROR | E_PARSE);

  if (isset($_POST['BTEnvia'])) {  
  //Variaveis de POST, alterar somente se necessário 
  //====================================================
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone']; 
  $mensagem = $_POST['mensagem'];
  //====================================================
  
  //Remetente --> Este email tem que válido no domínio
  //==================================================== 
  $email_remetente = "guto2xx@gmail.com"; // deve ser uma conta de email do seu dominio 
  //====================================================
  
  //Configurações do email, ajustar conforme necessidade
  //==================================================== 
  $email_destinatario = "guto2xx@gmail.com"; // pode ser qualquer email que receberá as mensagens
  $email_reply = "$email"; 
  $email_assunto = "Consitec - Mensagem de usuário"; // Este será o assunto da mensagem
  //====================================================
  
  //Monta o corpo da mensagem
  //====================================================
  $email_conteudo = "Nome = $nome \n"; 
  $email_conteudo .= "Email = $email \n";
  $email_conteudo .= "Telefone = $telefone \n"; 
  $email_conteudo .= "Mensagem = $mensagem \n"; 
  //====================================================
  
  //Configura os Headers (Alterar somente se necessário) 
  //==================================================== 
  $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
  //====================================================
  
  //Enviando o email 
  //==================================================== 
  if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
    $mail_success = "<div class='mail-notification-success'>Mensagem enviada com sucesso! Responderemos em breve.</div>"; 
  } 
  else{ 
    $mail_failure = "<div class='mail-notification-failure'>Falha no envio da mensagem. Tente novamente mais tarde.</div>";
  } 
  //====================================================
  } 
?>


<section>
  <h1>Fale Conosco</h1>

  <div class="contact-container">
    <span>
      <p>
        Entre em contato conosco utilizando o formulário abaixo, ou encontre a CONSITEC nos diversos canais de comunicação disponíveis.
      </p>
  
      <form action="<?php $PHP_SELF; ?>" method="POST"> 
        <label>Nome</label>
        <input type="text" size="30" name="nome"> 

        <label>E-mail</label>
        <input type="email" size="30" name="email"> 

        <label>Telefone</label>
        <input type="text" size="35" name="telefone"> 
 
        <label>Mensagem</label>
        <textarea name="mensagem"></textarea>

        <input type="submit" name="BTEnvia" value="ENVIAR">
        <?= $mail_success ?>
        <?= $mail_failure ?>
      </form>
    </span>

    <span class="contact-data">
      <h3>Consitec Engenharia e Tecnologia Ltda. 02.243.019/0001-94</h3>

      <span><i class="fas fa-map-marker-alt"></i> <label>Rua Arthur Friedenreich, 43 - Vila Rio Branco/SP</label></span>
      <span><i class="fas fa-phone-alt"></i> <label>(11) 2041-8711</label></span>
      <span><i class="far fa-envelope"></i> <label>contato@consitec.eng.br</label></span>
      <span><i class="fab fa-facebook-f"></i> <label>consitec.eng.tecnologia</label></span>
      <span><i class="fab fa-instagram"></i> <label>@consitec.eng.tecnologia</label></span>
    </span>
  </div>

</section>



<?php include "./src/views/includes/footer.php" ?>