<?php 

if (isset($_GET['enviar'])){

    $title = $_GET['title'];
    $header = $_GET['titulo'];
    $contenido = $_GET['contenido'];

    $encriptado_title = hash('md5', $title);

    $color1 = $_GET['colortitle'];
    $color2 = $_GET['colorcontenido'];

    if(!empty($color1 && $color2)){
        $color1 = 'black';
        $color2 = 'black';
    } else {
        $color1 = $_GET['colortitle'];
        $color2 = $_GET['colorcontenido'];
    }

if(strlen($contenido && $header && $title) >= 1){

    $style1 = "<style>h1{color: ".$color1.";}</style>";
    $style2 = "<style>p{color: ".$color2.";}</style>";

    $file_html = fopen("website".$encriptado_title.".html", "a") or die("Fallo creando la pagina web");

    fwrite($file_html, "<!DOCTYPE html>
    <html>
    <head>
        <title>".$title."</title>
    </head>
    <body>
    <h1>".$header."</h1>
    ".$style1."
    ".$style2."

    <p>".$contenido."</p>

        
    </body>
    </html>"  
);

$log_web = fopen("log_websites.txt", "a");
fwrite($log_web, "[".date("d/M/Y H:i:s")."] Website Created Name file: website".$encriptado_title.".html \n");
fclose($log_web);

header("Location: website".$encriptado_title.".html");

} else {
    echo "Completa los cmapos para crear una pagina web :v";
}

}

?>

