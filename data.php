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
    <link rel="stylesheet" href="./util/css/styles.css">
    <title>Teste</title>
</head>
<body>
    <div class="main-wrapper">
        <div class="main-content">
            <!-- first section -->
            <div class="main-content-column">
                <!-- temperatura -->
                <div class="content-temp">
                    <div class="content-temp-location">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                        <span class="content-title">Camboriú</span>
                    </div>
                    <div class="content-day-temp">
                        <?php
                            echo $data->temp;
                        ?>º
                    </div>    
                </div>
            </div>

            <!-- second section -->
            <div class="main-content-column">
                <!-- como está o dia -->
                <div class="content-day-weather">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cloud-sun-fill" viewBox="0 0 16 16">
                        <path d="M11.473 11a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z"/>
                        <path d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129zm4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377zM14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                    </svg>  
                </div>
            </div>

            <!-- tertiary section -->
            <div class="main-content-column">
                  <!-- sensação térmica -->
                  <div class="content-feel">
                    <span>Sensação</span>
                    <div class="content-feel-num">
                        <?php
                            echo $data->feel;
                        ?>º
                    </div>    
                </div>
                <!-- velocidade do vento -->
                <div class="content-wind">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wind" viewBox="0 0 16 16">
                        <path d="M12.5 2A2.5 2.5 0 0 0 10 4.5a.5.5 0 0 1-1 0A3.5 3.5 0 1 1 12.5 8H.5a.5.5 0 0 1 0-1h12a2.5 2.5 0 0 0 0-5zm-7 1a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 2 2h-5a.5.5 0 0 1 0-1h5a1 1 0 0 0 0-2zM0 9.5A.5.5 0 0 1 .5 9h10.042a3 3 0 1 1-3 3 .5.5 0 0 1 1 0 2 2 0 1 0 2-2H.5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <div class="content-wind-vel">
                        <?php
                            echo $data->wind;
                        ?> km/h
                    </div>    
                </div> 
            </div>
        </div>
    </div>
</body>
</html>