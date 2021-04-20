<?php
$url = "https://covid19-brazil-api.vercel.app/api/report/v1/brazil/uf/df";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$covid = json_decode(curl_exec($ch));

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title>Página do Covid </title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Roboto', sans-serif;

        }
        h1, h2, h3, h4,h5,h6{
            font-family: 'Roboto', sans-serif;

        }
        .wrap{
            background: rgba(0,0,0,0.5) url("img/bras.jpg") no-repeat;
            background-position: center;
            background-size: cover;
            min-height: 100vh;
            overflow:hidden;
            background-blend-mode: overlay;

        }
        .wave{
            position: absolute;
            width: 100%;
            bottom: -140px;
            color: #fff;
            opacity: 1;
        }
        header{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 25px 80px;
            background: linear-gradient(to top, transparent, rgba(0,0,0,0.6));

        }
        header .logo{
            font-size: 28px;
            font-weight: 500;
            color: #ffffff;
            float: left;
        }

        header .menu{
            float: right;
            margin-top: 5px;
        }
        header ul li{
            display: inline-block;
        }
        header ul li a{
            text-decoration: none;
            font-size: 16px;
            color: #fff;
            margin: 0 25px;
            font-weight: 300;
            letter-spacing: 1px;
        }
        .content{
            max-width: 55%;
            padding: 200px 80px 0;
            color: #ffffff;
        }
        .content h1{
            font-size: 48px;
        }
        .content p{
            font-size: 20px;
            padding: 25px 0;
            font-weight: 300;
        }
        .content .btn-group{
            margin-top: 45px;
        }
        .content a {
            cursor: pointer;
            display: inline-block;
            padding: 15px 45px;
            text-decoration:none;
            color: #fff;
            border-radius: 50px;
        }

        .content a.color1{
            cursor: pointer;
            background-color: #ffc107;
        }
        .content a.color2{
            cursor: pointer;
            background-color:blueviolet;
        }
    .our-partners{
        padding: 0 80px;
        position: relative;
    }
    .our-partners h3{
        font-size: 28px;
        margin-bottom: 15px;
    }
    .our-partners hr{
        border: none;
        height: 4px;
        width: 100px;
        background-color: orange;
    }
    .our-partners-inner{
        margin-top: 50px;
        margin-bottom: 50px;
    }
    .our-partners-inner .texto{
        display: inline-block;
        width: 14%;
        padding: 33px;
        margin-right: 25px;
        border: 1px solid #cacaca;
        border-radius: 20px;
        box-shadow: 0 5px 0 #cacaca;
    }
    .our-partners-inner img{
        width: 100%;

    }

    .fundmort{
        background-color: darkred;
        color: #ffffff;
    }
    .fundorecuperado{
        background-color: darkgreen;
        color: #ffffff;
    }
   .fundoconfirmados{
            background-color: #ffc107;
            color: #ffffff;
        }
  .fundogeral{
            background-color: blueviolet;
            color: #ffffff;
        }

    </style>


</head>
<body>
<?php

?>
    <div class="wrap">
        <header>
            <div class="logo">COVID-19</div>
                <div class="menu">
                    <ul>
                        <li> <a href="#">HOME</a> </li>
                        <li> <a href="https://coronavirus.saude.gov.br/sobre-a-doenca#o-que-e-covid" target="_blank">SOBRE</a> </li>
                        <li> <a href="https://coronavirus.saude.gov.br/index.php/perguntas-e-respostas target="_blank">FAQ</a> </li>
                        <li> <a href="https://covid.saude.gov.br/" target="_blank">PAINEL</a> </li>
                        <li> <a href="https://coronavirus.saude.gov.br/sobre-a-doenca#transmissao" target="_blank">INFORMAÇÕES</a> </li>
                    </ul>
                </div>
        </header>

        <div class="content">
            <h1> COVID-19 </h1>
            <p> O vírus que causa a COVID-19 é transmitido principalmente por meio de gotículas
                geradas quando uma pessoa infectada tosse, espirra ou exala. Essas gotículas
                são muito pesadas para permanecerem no ar e são rapidamente depositadas em pisos ou superfícies. </p>
                <div class="btn-group">
                    <a href="#" target="_blank" class="color1">DISQUE SAÚDE</a>
                    <a href="#" target="_blank" class="color2">FONE: 136 </a>
                </div>
        </div>

           <!-- arte svg -->
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#FFF" fill-opacity="1" d="M0,32L40,42.7C80,53,160,75,240,80C320,85,400,75,480,85.3C560,96,
            640,128,720,144C800,160,880,160,960,154.7C1040,149,1120,139,1200,117.3C1280,96,1360,64,1400,48L1440,
            32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,
            320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>

    </div>



    <div class="our-partners">
        <h3>ANÁLISE EM TEMPO REAL </h3>
        <hr>

        <div class="our-partners-inner">
            <div class="texto fundogeral">

                <h4>País.:</h4>
                <p><?php echo $covid->state; ?> </p>
            </div>
            <div class="texto fundogeral">
                <h4>Casos.:</h4>

                <p><?php echo (number_format($covid->cases, 2, '.','.'));?> </p>

            </div>
          
            <div class="texto fundmort">
                <h4>Mortes</h4>
                <p><?php echo (number_format($covid->deaths, 2, '.','.'));?></p>

            </div>
            <div class="texto fundorecuperado">
                <h4>Recuperados</h4>
                <p><?php echo (number_format($covid->refuses, 2, '.','.'));?></p>
            </div>
            <div class="texto fundogeral">
                <h4>Atualização:</h4>
                <p><?=date("d/m/yy", strtotime($covid->datetime))?>

            </div>
        <div>
    </div>

</body>
</html>
