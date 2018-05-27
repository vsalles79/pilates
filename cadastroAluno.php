<?php
if(file_exists("init.php")) {
	require "init.php";		
} else {
	echo "Arquivo init.php nao foi encontrado";
	exit;
}

if(!function_exists("Abre_Conexao")) {
	echo "Erro o arquivo init.php foi auterado, nao existe a fun��o Abre_Conexao";
	exit;
}

Abre_Conexao();

if(mysql_errno() != 0) {
	if(!isset($erros)) {
		echo "Erro o arquivo init.php foi auterado, nao existe \$erros";
		exit;
	}
	echo $erros[mysql_errno()];
	exit;
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Cadastro Aluno</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html" />
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/cadastroAluno.js"></script>
  <script type="text/javascript" src="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
  <script type="text/javascript">

      /* M�scaras ER */
      function mascara(o,f){
          v_obj=o
          v_fun=f
          setTimeout("execmascara()",1)
      }
      function execmascara(){
          v_obj.value=v_fun(v_obj.value)
      }
      function mtel(v){
          v=v.replace(/\D/g,"");             //Remove tudo o que n�o � d�gito
          v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca par�nteses em volta dos dois primeiros d�gitos
          v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca h�fen entre o quarto e o quinto d�gitos
          return v;
      }
      function id( el ){
      	return document.getElementById( el );
      }
      window.onload = function(){
      	id('telefone').onkeypress = function(){
      		mascara( this, mtel );
      	}
      }
  </script>


  <style>
    <!--
    .textBox { border:1px solid gray; width:300px;} 
    -->
  </style>

</script>
<script language="javascript" type="text/javascript">
function validar() {
var nome = form1.nome.value;
var data = form1.data.value;
var cpf = form1.cpf.value;
var telefone = form1.telefone.value;
var celular = form1.celular.value;
var email = form1.email.value;
var sexo = form1.sexo.value;
var cep = form1.cep.value;
var endereco = form1.endereco.value;
var numero = form1.numero.value;
var statusUser = form1.statusUser.value;
var login = form1.login.value;
var senha = form1.senha.value;

if (nome == "") {
alert('Preencha o campo nome');
form1.nome.focus();
return false;
}
if (data == "") {
alert('Preencha o campo Data Nascimento');
form1.data.focus();
return false;
}
if (cpf == "") {
alert('Preencha o campo CPF');
form1.cpf.focus();
return false;
}
if (telefone == "") {
alert('Preencha o campo Telefone');
form1.telefone.focus();
return false;
}
if (celular == "") {
alert('Preencha o campo Celular');
form1.celular.focus();
return false;
}
if (email == "") {
alert('Preencha o campo Email');
form1.email.focus();
return false;
}
if (sexo == "") {
alert('Preencha o campo Sexo');
form1.sexo.focus();
return false;
}
if (cep == "") {
alert('Preencha o campo Cep');
form1.cep.focus();
return false;
}
if (endereco == "") {
alert('Preencha o campo Endere�o');
form1.endereco.focus();
return false;
}
if (numero == "") {
alert('Preencha o campo Numero');
form1.numero.focus();
return false;
}
if (login == "") {
alert('Preencha o campo Login');
form1.login.focus();
return false;
}
if (senha == "") {
alert('Preencha o campo Senha');
form1.Senha.focus();
return false;
}
}
</script>

<script language='JavaScript'>
function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla>47 && tecla<58 || tecla==46)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }
}
</script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/cadastroAluno.css">	
</head>

<body id="cad-aluno">
  <div class="container">
    <div class="row">
      <div class="col-md-12" id="menuTab">
            <div class="menu">
            <ul class="menu-list">
              <li><a href="home.html" id="btnHome" class="btn btn-info" role="button" title="Home"><i class="fas fa-home"></i></a></li>
              <li><a href="agenda.php" id="btnAgenda" class="btn btn-danger" role="button" title="Agenda"><i class="fas fa-calendar-alt"></i></a></li>
              <li><a href="listar.php" id="btnAluno" class="btn btn-primary" role="button" title="Aluno"><i class="fas fa-user"></i></a></li>
              <li>
                <a href="#" id="btnReport" class="btn btn-warning" role="button" title="Cadastros">
            <i class="fas fa-briefcase"></i></a>
                 <ul class="sub-menu">
                  <li><a href="cadastroAluno.php">Aluno</a></li>
                  <li><a href="cadastroFuncionario.php">Colaborador</a></li>
                  <li><a href="servico.php">Servi&ccedil;o</a></li>
                  <li><a href="cadastroAgenda.php">Agendamento</a></li>
                </ul>
              </li>
              <!-- <li><a href="relatorio.html" id="btnReport" class="btn btn-warning" role="button" title="Relat�rio"><i class="fas fa-clipboard"></i></a></li> -->
            </ul>
          </div>
      </div>
    </div>
  
    <div class="tab-content">
      <div id="menu1">
        <div class="col-sm-12 form-aluno">
          <form id="form1" name="form1" method="post" action="salvarAluno.php">
              <div class="col-sm-6">

                    <div class="form-group">
                      <div class="input-group" id="name">
                        <input name="nome" type="text" id="nome" maxlength="45" class="textBox" placeholder="Nome"/>
                      </div>
                       <!-- <button type="button" class="btn btn-primary" id="search-name" data-toggle="modal" data-target="#myModal">
                          <i class="fa fa-search"></i></button> -->
                    </div>

                	
                    <div class="form-group">
                      <div class="input-group">
                        <input name="data" type="text" id="data" maxlength="10" class="textBox" placeholder="Data Nascimento" />
                      </div>
                    </div>
                	
                    <div class="form-group">
                      <div class="input-group">
                        <input  placeholder="CPF" name="cpf" type="text" id="cpf" maxlength="14" class="textBox" onkeypress='return SomenteNumero(event)' />
                      </div>
                    </div>
                       
                  	<div class="form-group">
                      <div class="input-group">
                        <input placeholder="Telefone" name="telefone" type="text" id="telefone" maxlength="14" class="textBox" onkeypress='return SomenteNumero(event)'/>
                      </div>
                    </div>
                  	
                    <div class="form-group">
                      <div class="input-group">
                        <input placeholder="Celular" name="celular" type="text" id="celular" maxlength="15" class="textBox" onkeypress='return SomenteNumero(event)'/>
                      </div>
                    </div>
                        
                  	<div class="form-group">
                      <div class="input-group">
                        <input placeholder="Email" name="email" type="text" id="email" maxlength="45" class="textBox" />
                      </div>
                    </div>
                  	
                  	<div class="form-group">
                      <div class="input-group">
                        <span class="sexo">Sexo: </span>
                        <input type="radio" name="sexo" id="cMasc" value="m" /><label class="label-masc">Masculino</label>
                        <input type="radio" name="sexo" id="cFem" value="f" /><label>Feminino</label>
                      </div>
                    </div>
              </div>

              <div class="col-sm-6">
                    <div class="form-group">
                      <div class="input-group">
                        <input placeholder="CEP" name="cep" type="text" id="cep" maxlength="9" class="textBox" onkeypress='return SomenteNumero(event)'/>
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <div class="input-group">
                        <input placeholder="Endere&ccedil;o" name="endereco" type="text" id="endereco" maxlength="45" class="textBox" />
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <div class="input-group">
                        <input placeholder="N&uacute;mero" name="numero" type="text" id="numero" maxlength="5" class="textBox" onkeypress='return SomenteNumero(event)'/>
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <div class="input-group">
                        <input placeholder="Complemento" name="complementoEnd" type="text" id="complementoEnd" maxlength="45" class="textBox" />
                      </div>
                    </div>
                  
                    <div class="form-group">
                      <div class="input-group">                   
                        <input placeholder="Login" name="login" type="text" id="login" maxlength="20" class="textBox" />
                      </div>
                    </div>
                	
                    <div class="form-group">
                      <div class="input-group">
                        <input placeholder="Senha" name="senha" type="text" id="senha" maxlength="6" class="textBox" />
                      </div>
                    </div>

                    <!--<div class="form-group">
                      <div class="input-group">
                        <span class="sexo">Status: </span>
                        <input type="radio" name="statusUser" id="statusUser" value="0" /><label class="label-masc">Ativo</label>
                        <input type="radio" name="statusUser" id="statusUser" value="1" /><label>Inativo</label>
                      </div>
                    </div>-->
                  
                    <div class="form-group">
                      <div><input type="submit" name="Submit" value="Salvar" class="btn-save" onclick="return validar()" /></div>
                    </div>
              </div>
          </form>
        </div>
      </div>

          <!--Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Alunos</h4>

                  <div class="form-group">
                      <div class="input-group" id="nome">
                          <input type="text" class="form-control" id="name" placeholder="Nome">
                           <button type="button" class="btn btn-primary" id="searchName"><i class="fa fa-search"></i></button>
                      </div>
                  </div>
                </div>
                <div class="modal-body">
                  <?php include 'listar.php';?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!--Fim Modal-->
    </div>
  </div>

</body>
</html>
