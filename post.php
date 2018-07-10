<?php
if (isset($_GET['valandos'])) {
        $valandos = $_GET['valandos'];
        $time = explode(',' , $valandos);
        
}
if (isset($_GET['temperatura'])) {
        $temperatura = $_GET['temperatura'];
        $temp = explode ('. ,', $temperatura);      
        arsort($temp);
}
foreach ($temp as $indeksas => $elementas) {
    if($indeksas == 0) {
        echo $temp[0];
    }
}

//foreach ($menesiuDienos as $menesioIndeksas => $dienuSkaicius) {
//    if ($dienuSkaicius == 31) {
//        $pirmas[] = $menesiuVardai[$menesioIndeksas];
//        $pirmasString = implode(',',$pirmas);
//        $counter++;
//    }
////
//
//ptint_r($t);

//foreach ($temp as $indeksas => $skaicius) {
//    $maksTemp = $indeksas;
//    break;
//}
//

//print_r($skaicius) ;
//        $result = 0;
//        $suma = array_sum($skaicius);                      
//        foreach ($skaicius as $value => $value) {
//            $result = $suma + $value;
//        }   
//        $vidurkis = $result / count($skaicius);
//        echo 'Vidutinė temperatūra:'. round($vidurkis, 2).' laipsniai';
//

?>

