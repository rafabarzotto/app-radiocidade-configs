<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$equipe = array(
         0 => array(
        "id"=> 1,
        "imagemUrl"=> "",
        "nome"=> "Osorio",
        "descricao"=> "Locutor",
        "sobre"=> ""
         
    ),
        1 => array(
        "id"=> 2,
        "imagemUrl"=> "http://www.cidadefm10.com.br/app/rui.jpg",
        "nome"=> "Ruibamar Carlos Martins de Matos",
        "descricao"=> "Locutor",
        "sobre"=> ""
         
    )
);

	//encoda para formato JSON
	echo json_encode(array(
		"equipe" => $equipe
	));
?>