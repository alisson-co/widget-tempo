<?php
    $json = file_get_contents('db.json');

    $data = json_decode($json);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- import css -->
    <link rel="stylesheet" href="styles.css">
    <title>Teste</title>
</head>
<body>
    <div class="main-wrapper">
        <div class="main-content">
            <!-- first section -->
            <div class="main-content-column">
                <!-- temperatura -->
                <div class="main-content-temp">
                    <span class="main-content-title">Camboriú</span>
                    <div class="main-content-temp-time">
                        <?php
                            echo $data->temp;
                        ?>º
                    </div>    
                </div>
                <!-- sensação térmica -->
                <div class="main-content-feel">
                    <span>Sensação Térmica</span>
                    <div class="main-content-feel-num">
                        <?php
                            echo $data->feel;
                        ?>º
                    </div>    
                </div>
            </div>

            <!-- second section -->
            <div class="main-content-column">
                <!-- como está o dia -->
                <div class="main-content-temp">
                    <span class="main-content-title">SOL COM NUVENS</span>
                    <div class="main-content-temp-time">
                        <?php
                            echo $data->temp;
                        ?>
                    </div>    
                </div>
                <!-- velocidade do vento -->
                <div class="main-content-sensation">
                    <div class="main-content-sensation-num">
                        <?php
                            echo $data->wind;
                        ?> km/h
                    </div>    
                </div>
            </div>

            <!-- tertiary section -->
            <div class="main-content-column">
                <!-- UV -->
                <div class="main-content-temp">
                    <span class="main-content-title">INDICE UV</span>
                    <div class="main-content-temp-time">
                        <?php
                            echo $data->uv;
                        ?>
                    </div>    
                </div>
                <!-- umidade do ar -->
                <div class="main-content-sensation">
                    <div class="main-content-sensation-num">
                        <?php
                            echo $data->humi;
                        ?>%
                    </div>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>