<?php
function getKurs($kurs_name) {

    $kurs = $kurs_name;
    $tanggal = date('Y-m-d');

    $xml_link = "https://www.bi.go.id/biwebservice/wskursbi.asmx/getSubKursLokal3?mts=".$kurs."&startdate=".$tanggal."&enddate=".$tanggal."";
    $resultlink = file_get_contents($xml_link) or die("Error: Cannot create object");
    $xml = simplexml_load_string($resultlink);
    $results = $xml->xpath("//Table"); 

    foreach ($results as $result) {

        // echo $result->id_subkurslokal . "<br />";
        // echo $result->lnk_subkurslokal . "<br />";
        // echo $result->nil_subkurslokal . "<br />";
        // echo $result->beli_subkurslokal . "<br />";
        // echo $result->jual_subkurslokal . "<br />";
        // echo $result->tgl_subkurslokal . "<br />";
        // echo $result->mts_subkurslokal . "<br />";

        echo substr($result->mts_subkurslokal, 0, -2).";".$result->beli_subkurslokal.";".$result->jual_subkurslokal;

    }

}
function getRupiah($kurs_name) {

    $kurs = $kurs_name;
    $tanggal = date('Y-m-d');

    $xml_link = "https://www.bi.go.id/biwebservice/wskursbi.asmx/getSubKursLokal3?mts=".$kurs."&startdate=".$tanggal."&enddate=".$tanggal."";
    $resultlink = file_get_contents($xml_link) or die("Error: Cannot create object");
    $xml = simplexml_load_string($resultlink);
    $results = $xml->xpath("//Table"); 

    foreach ($results as $result) {

        // echo $result->id_subkurslokal . "<br />";
        // echo $result->lnk_subkurslokal . "<br />";
        // echo $result->nil_subkurslokal . "<br />";
        // echo $result->beli_subkurslokal . "<br />";
        // echo $result->jual_subkurslokal . "<br />";
        // echo $result->tgl_subkurslokal . "<br />";
        // echo $result->mts_subkurslokal . "<br />";

        echo substr($result->nil_subkurslokal, 0, -3);

    }

}
function getKursBeli($kurs_name) {

    $kurs = $kurs_name;
    $tanggal = date('Y-m-d');

    $xml_link = "https://www.bi.go.id/biwebservice/wskursbi.asmx/getSubKursLokal3?mts=".$kurs."&startdate=".$tanggal."&enddate=".$tanggal."";
    $resultlink = file_get_contents($xml_link) or die("Error: Cannot create object");
    $xml = simplexml_load_string($resultlink);
    $results = $xml->xpath("//Table"); 

    foreach ($results as $result) {

        // echo $result->id_subkurslokal . "<br />";
        // echo $result->lnk_subkurslokal . "<br />";
        // echo $result->nil_subkurslokal . "<br />";
        // echo $result->beli_subkurslokal . "<br />";
        // echo $result->jual_subkurslokal . "<br />";
        // echo $result->tgl_subkurslokal . "<br />";
        // echo $result->mts_subkurslokal . "<br />";

        echo substr($result->beli_subkurslokal, 0, -3);

    }

}
function getKursJual($kurs_name) {

    $kurs = $kurs_name;
    $tanggal = date('Y-m-d');

    $xml_link = "https://www.bi.go.id/biwebservice/wskursbi.asmx/getSubKursLokal3?mts=".$kurs."&startdate=".$tanggal."&enddate=".$tanggal."";
    $resultlink = file_get_contents($xml_link) or die("Error: Cannot create object");
    $xml = simplexml_load_string($resultlink);
    $results = $xml->xpath("//Table"); 

    foreach ($results as $result) {

        // echo $result->id_subkurslokal . "<br />";
        // echo $result->lnk_subkurslokal . "<br />";
        // echo $result->nil_subkurslokal . "<br />";
        // echo $result->beli_subkurslokal . "<br />";
        // echo $result->jual_subkurslokal . "<br />";
        // echo $result->tgl_subkurslokal . "<br />";
        // echo $result->mts_subkurslokal . "<br />";

        echo substr($result->jual_subkurslokal, 0, -3);

    }

}
?>