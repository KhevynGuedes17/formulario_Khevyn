<!DOCTYpE html>
<html>
<head>
    <title>Oficina da Net Formulário de Contato em pHp</title>
    <meta charset="iso-8859-1">
    <link rel="stylesheet" href="style.css" media="all" />
   
</head>
<body>
    <?php
    if(isset($_FILES['pic']))
    {
       $ext = strtolower(substr($_FILES['pic']['name'],-4)); 
       $new_name = date("IMAGEM") . $ext; 
       $dir = './img';
       move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$new_name); 
       echo("Imagem enviada com sucesso!");
       
    } 
    

    
    ?>

   <div class="titulo">
    <h2>Formulário de cadastro - <a>PWII</a></h2>
</div>

    <form action="validacao.php" method="post" onsubmit=validaForm(); name="meu_form"return false; class="form" enctype="multipart/form-data">
    <div class="name">
        <p>
        <label for="name">Primeiro Nome*</label>
        <input type="text" name="nome" required placeholder="Seu Nome" />
</p>
<p>
        <label for="Sobrenome">Sobrenome*</label>
        <input type="text" name="sobrenome" required placeholder="Sobrenome" />
</p>
  </div>
  
    <p class="email">
        <label for="email">E-mail*</label>
        <input type="email" name="email" required placeholder="mail@exemplo.com.br" />
    </p>
    
</div>

    <div class="documento">
         <p class="RG">
                    <label for="RG">RG*</label>
                    <input type="number" name="RG" required placeholder="99999999-9" />
        </p>
        <p class="CPF">
                    <label for="CpF">CPF*</label>
                    <input type="number" name="CPF" required placeholder="488.318.654-98" />
        </p>
 </div>
 <div class="radio-toolbar">
     <label for="sexo">Sexo</label>
        <input type="radio" id="radio1" name="radios" value="M" checked>
        <label for="radio1">Masculino</label>

        <input type="radio" id="radio2" name="radios" value="F">
        <label for="radio2">Feminino</label>

        <input type="radio" id="radio3" name="radios" value="P">
        <label for="radio3">Prefiro não dizer</label>
</div>
 
<div class="endereco">
         <p class="rua">
                        <label for="endereço">Endereço</label>
                        <input type="text" placeholder="Rua João Soares, Nº567" />
          </p>
          <p class="cep">
                        <label for="endereço">Cep</label>
                        <input type="number" placeholder="18126-450" />
          </p>
</div>
      <div class="telefone">
            <p class="num1">
                    <label for="telefone">Telefone*:</label>
                    <input type="tel" placeholder="(15) 997949274" />
         </p>
         <p class="num2">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" placeholder="(15) 997949274" />
         </p>
     </div>  
 <div class="senha"> 
        <p class="senha1">
                    <label for="senha" name="text_senha">Senha</label>
                    <input type="password" min="6" max="15" placeholder="******" />
</p>          
     <p class="senha2">
                    <label for="confirma" name="confirma">Confirmar senha</label>
                    <input type="password"  placeholder="******" />
         </p>

  </div>
   
         <label for="conteudo">Enviar imagem:</label>
   <input type="file" name="pic" accept="image/png" >    
   

    <p class="submit">
        <input type="submit" value="Enviar" />
          </p>     

      </form>
   </body>
</html>
 

