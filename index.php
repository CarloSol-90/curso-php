
<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
#Incicializar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/*Ejecutar la petición y guardamos el resultado*/
$result = curl_exec($ch);

//Una alternativa seria utilizar file_get_content
// $result = file_get_content(API_URL) // Si solo quieres hacer un GET de una API
$data = json_decode($result, true);

curl_close($ch);

?>

<head>
    <meta charset="UTF-8"/>
    <title>La Próxima película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>

<main>
    <div class="mcu-title">
    <h1 class="h1-mcu">MARVEL NEXT...</h1>
    <div/>


    <section>

    <img src="<?= $data["poster_url"]; ?>" width="250px" alt="Poster de <?= $data_title?>" style="border-radius: 20px";/>
    </section>

    <hgroup>
        <h3><?=$data["title"];?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"];?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]?></p>
    </hgroup>
</main>

<style>
    :root{
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    img{
        border: 2px solid whitesmoke;
        box-shadow: 0px 0px 80px 0px blue;
        margin-bottom: 20px;
    }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    .mcu-title{
        display: block;
        text-align: center;
    }

    .h1-mcu{
        color: whitesmoke;
        margin-bottom: 50px;
        text-shadow: 0px 0px 20px white;
    }

</style>

