<?php
    //Funzione che conta i pacchetti persi
    function contaPacchettiPersi($ping_grezzi){
        $pacchetti_persi = 0;
        foreach ($ping_grezzi as $ping){
            if($ping == -1){
                $pacchetti_persi++;
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


    //Funzione calcolo ping medio
    function tempoMedioRisposta($ping_validi){
        $tempoMedio = 0;
        $contatore = 0;
        foreach($ping_validi as $ping){
            $tempoMedio += $ping;
            $contatore++;
        }

        $tempoMedio = round($tempoMedio/$contatore, 2);

        return $tempoMedio;
    }

    //Funzione calcolo min e max
    function calcoloMinMax($ping_validi, &$min, &$max){
        $min = $ping_validi[0];
        $max = $ping_validi[0];
        
        foreach($ping_validi as $ping){
            if($ping > $max){
                $max = $ping;
            }else if($ping < $min){
                $min = $ping;
            }
        }

    }

    
    $ping_grezzi = [45, 120, -1, 32, 210, 85, -1, 18, 95, 310, 45, 60, -1, 150, 28, 240, 18, 72];

    array_push($ping_grezzi, 55, 190, 12);

    $pacchetti_persi = contaPacchettiPersi($ping_grezzi);
    $ping_validi = pingValidi($ping_grezzi);
    $pingMedio = tempoMedioRisposta($ping_grezzi);

    $maxPing = 0;
    $minPing = 0;
    calcoloMinMax($ping_validi, $minPing, $maxPing);


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