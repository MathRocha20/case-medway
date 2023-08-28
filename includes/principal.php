<?php
$nomesite = 'Matheus Rocha';
$telefone = '';
$whatsapp = '';
$linktelegram ='';
$linkinstagram = '';
$pastaEPagina = explode("/",$_SERVER['PHP_SELF']);
$pastaDominio = "";
for($i=0; $i < count($pastaEPagina); $i++){
	if(substr_count($pastaEPagina[$i], ".") == 0){
		$pastaDominio .= $pastaEPagina[$i]."/";
	}
}
$url = "https://".$_SERVER['HTTP_HOST'].$pastaDominio;

?>