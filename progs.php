<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$progs = array(
         0 => array(
             "id" => "0",
             "nome" => "Programação Musical",
             "horario" => "00:00 às 06:00",
             "locutor" => ""
         
    ),
        1 => array(
             "id" => "1",
             "nome" => "Querência",
             "horario" => "06:00 às 18:00",
             "locutor" => ""
         
    ),
             2 => array(
             "id" => "2",
             "nome" => "Bom Dia",
             "horario" => "08:00 às 12:00",
             "locutor" => ""
         
    ),
             3 => array(
             "id" => "3",
             "nome" => "Companhia",
             "horario" => "12:00 às 14:00",
             "locutor" => ""
         
    ),
            4 => array(
             "id" => "4",
             "nome" => "Conexão",
             "horario" => "14:00 às 17:00",
             "locutor" => ""
         
    ),
             5 => array(
             "id" => "5",
             "nome" => "M;aquina do Tempo",
             "horario" => "17:00 às 19:00",
             "locutor" => ""
         
    ),
            6 => array(
             "id" => "6",
             "nome" => "Voz do Brasil",
             "horario" => "19:00 às 20:00",
             "locutor" => ""
         
    ),
            7 => array(
             "id" => "7",
             "nome" => "Boa Noite",
             "horario" => "20:00 às 22:00",
             "locutor" => ""
         
    ),
            8 => array(
             "id" => "8",
             "nome" => "Programação Musical",
             "horario" => "22:00 às 24:00",
             "locutor" => ""
         
    )
);

	//encoda para formato JSON
	echo json_encode(array(
		"progs" => $progs
	));
?>