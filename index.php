<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Descrivint a John Doe</h1>
    <h2>Les dades de John son:</h2>

    <?php
        $nombre = "John Doe";
        $edad = 30;
        $data = date("1986/03/11");   
        $telefon = 935555555;
        $adreça = "BlackPool, England";
        $email = "oswin@dr.who";
        $trabajo = False;
        
    ?>





        <ul>
            <li>Es diu: <?php echo $nombre?></li>
            <li>Te <?php echo $edad ?> anys </li>
            <li>Va néixer l'any: <?php echo $data ?> </li>
            <li>El seu telèfon és: <?php echo $telefon ?> </li>
            <li>Viu a <?php echo $adreça?> </li>
            <li>El seu e-mail és el <?php echo $email ?> </li>
            <li><?php 
                if($trabajo != 1){
                    echo "i actualment no treballa";
                }else echo "i actualment treballa";
            ?></li>
        </ul>
</body>
</html>