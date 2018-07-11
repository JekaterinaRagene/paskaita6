<?php
if (isset($_GET['valandos'])) {
        $valandos = $_GET['valandos'];
        $time = explode(',' , $valandos);
        
}
if (isset($_GET['temperatura'])) {
        $temperatura = $_GET['temperatura'];
        $temp = explode (',', $temperatura);      
        
}

arsort($temp);
//var_dump($temp);

foreach ($temp as $indeksas => $elementas) {
    break;
 }
     // var_dump($indeksas);
 '<br>';
 $didziausiaTemp = $temp[$indeksas]; 
 $didziausiosTempIndeksas = $indeksas;
 
echo 'Auksciausia temperatura: ' . $temp[$indeksas]. ' buvo ' . $time[$didziausiosTempIndeksas]. 'valanda. <br>';
$normaliMinTemp = 36.0;
$normaliMaxTemp = 36.8;

foreach ($temp as $indeksas => $elementas) {
    if ($indeksas != $didziausiosTempIndeksas &&
            $elementas >= $didziausiaTemp - 0.5) {
        //artima auksciausiai
        echo 'Artima auksciausiai: ' . $time[$indeksas] . ' val. temperatura buvo ' . $elementas . '.<br>';
    }
}

foreach ($temp as $elemetas) {
    if ($normaliMaxTemp >= $elementas && $elementas >= $normaliMinTemp) {
            echo 'Normali temperatura buvo: ' . $time[$indeksas] . ' val., ' . $elementas . '.<br>'; 
            break;
        }
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

    <title>Ligonio temperatura</title>
</head>
<body>
    
    <main role="main" class="container">
        
        <canvas id="grafikas"></canvas>
        
        <script>
            var ctx = document.getElementById('grafikas').getContext('2d');
            
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',
                // The data for our dataset
                data: {
                    labels: [
                        <?php
                        foreach ($temp as $indeksas => $reiksme) {
                            echo $indeksas . ',';
                        }
                        ?>
                    ],
                    datasets: [
                        {
                            label: "Pries filtravima",
                            backgroundColor: 'transparent',
                            borderColor: 'rgb(255, 99, 132)',
                            data: [
                            <?php
                            echo implode(',', $temperatura);
                            ?>
                            ],
                        },
                        {
                            label: "Po filtravima",
                            backgroundColor: 'transparent',
                            borderColor: 'green',
                            data: [
                            <?php
                            echo implode(',', $temp);
                            ?>],
                        },
                    ]
                },
                // Configuration options go here
                options: {}
            });
        </script>
        
    </main>      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>