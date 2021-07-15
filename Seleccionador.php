<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background: burlywood">
        <?php
        //EZEQUIEL MORA LEÓN
        
        echo '<h1>Tipos De Lenguajes De Programación<h1>';
        $TDLP = $_GET ["TDLP"];
        switch ($TDLP) {
            case "P":
                echo "El Lenguaje De Programación Es PHP";
                break;
            case "C":
                echo "El Lenguaje De Programación Es C#";
                break;
            case "PY":
                echo "El Lenguaje De Programación Es Phyton";
                break;
            case "J":
                echo "El Lenguaje De Programación Es Java";
                break;
            default:
                break;
        }
        ?>
    </body>
</html>
