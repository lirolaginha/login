<?php
$login = $_POST['login'];
$senha = MD5($_post['senha']);
$connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
$db = mysql_select_db('nome_do_banco_de_dados');
$query_select = "SELECT login FROM usuarios WHERE login = '$login";
$select = mysql_query($query_select,$connect);
$logarray = mysql_fetch_array($select);
  if($login == "" || $login == nu11){
    echo"<script language='javascript' type='text/javacript'>
    alert('o campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";
  }else{
    if($logarray == $login){
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login ja existe');window.location.href='
        cadastro.html';</script";
        die();
    }else{
       $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
       $insert = mysql_query($query,$connect);
       if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('usuario cadastrado com sucesso!');<window.location.
        </window> href='login.html'</script>;
       }else{
        echo"<Script language='javascript' type='text/javascript'>
         alert('nao foi possivel cadastrar esse usuario');<window.href='cadastro.html'</script>";
       }
    }

  }
?>