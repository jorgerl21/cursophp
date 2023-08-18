<?php 
date_default_timezone_set("America/Mexico_City");

function fecha_espanol_larga(){

    $fecha_Dia = date("d");
    $fecha_Mes = date("m");
    $fecha_Year = date("Y");

    $dia_Semana = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo"
    ];
    $meses_year = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre"
    ];

    $fecha_final = $dia_Semana[date("l")] . " " . $fecha_Dia . " de " . $meses_year[$fecha_Mes] . " de " . $fecha_Year;

    return $fecha_final;
}

echo fecha_espanol_larga();

echo "<br><br>";

function fecha_espanol_corta($fecha = ""){

    if ($fecha == "") {
        $fecha = date("d-m-Y");
    }else {
        $fecha = date("d-m-Y", strtotime($fecha));
    }

    $fecha = explode("-", $fecha);

    $fecha_Dia = $fecha[0];
    $fecha_Mes = $fecha[1];
    $fecha_Year = $fecha[2];
/*
    $dia_Semana = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo"
    ];*/
    $meses_year = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre"
    ];

    $fecha_final =  $fecha_Dia . " de " . $meses_year[$fecha_Mes] . " de " . $fecha_Year;

    return $fecha_final;
}

echo fecha_espanol_corta("21-08-2023");
?>