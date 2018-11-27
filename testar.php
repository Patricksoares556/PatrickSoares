
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Números sequenciais</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
      /*  // Pega o primeiro caracter da string
        $str = 'Isto é um teste.';
        $first = $str{0};
        echo $first."<br>";
        // Pega o terceiro caracter da string
        $third = $str{2};
        echo $third."<br>";
        // Pega o último caracter da string
        $str = 'Isto ainda é um teste.';
        $last = $str{strlen($str)-1};
        echo $last."<br>";
        // Modifica o ultimo caracter da string
        $str = 'Olhe o mal';
        echo $str{strlen($str)-1} = 'r';*/
        $nome="abraao";
        $t=strlen($nome);
        $p=0;
        $achei=0;
        while ($p<$t){
            echo $nome{$p}."</br>";
            if ($nome{$p}=="a"){
                $achei=$achei+1;
            }
            $p=$p+1;

        }
        echo "<br/>Tamanho:".$t;
        echo "<br/>total de As:".$achei;

            ?>

</body>
</html>