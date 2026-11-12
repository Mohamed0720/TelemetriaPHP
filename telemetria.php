<?php
    //Funzione che conta i pacchetti persi
    function contaPacchettiPersi($ping_grezzi){
        $pacchetti_persi = 0;
        foreach ($ping_grezzi as $ping){
            if($ping<0){
                $pacchetti_persi += 1;
            }
        }
        return $pacchetti_persi;
    }

    


    //Funzione che conta i ping validi e li restituisce in una lista
    function pingValidi($ping_grezzi){
        $lista = [];
        foreach ($ping_grezzi as $ping){
            if($ping>=0){
                $lista[] = $ping;
            }
        }
        return $lista;
    }

    
    $ping_grezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240, 18, 72];

    array_push($ping_grezzi, 55, 190, 12);

    $pacchetti_persi = contaPacchettiPersi($ping_grezzi);
    $ping_validi = $lista;
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telemetria</title>
</head>
<body>
    
</body>
</html>