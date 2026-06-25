<?php

/*
   RECEBER DADOS DO FORMULÁRIO
*/

$modelo = $_POST['modelo'];

$de = trim($_POST['de']);

$categoria = $_POST['categoria'];

$para = trim($_POST['para']);

$mensagemFinal = $_POST['mensagem_final'];


/*
   TRATAMENTO "NÃO INFORMAR"
*/

if(isset($_POST['nao_informar_de'])){

    $de = '';

}else{

    if(!empty($de)){

        $de = 'De: ' . $de;
    }
}

if(isset($_POST['nao_informar'])){

    $categoria = '';
}

$para = 'Para: ' . $para;


/*
   ESCOLHER O MODELO PNG
*/

$modelos = [

    'modelo1' => 'assets/modelos/modelo1.png',

    'modelo2' => 'assets/modelos/modelo2.png',

    'modelo3' => 'assets/modelos/modelo3.png',

    'modelo4' => 'assets/modelos/modelo4.png',

    'modelo5' => 'assets/modelos/modelo5.png',

    'modelo6' => 'assets/modelos/modelo6.png',

    'modelo7' => 'assets/modelos/modelo7.png',

    'modelo8' => 'assets/modelos/modelo8.png',

    'modelo9' => 'assets/modelos/modelo9.png',

    'modelo10' => 'assets/modelos/modelo10.png',

    'modelo11' => 'assets/modelos/modelo11.png',

    'modelo12' => 'assets/modelos/modelo12.png',

    'modelo13' => 'assets/modelos/modelo13.png',

    'modelo14' => 'assets/modelos/modelo14.png',

    'modelo15' => 'assets/modelos/modelo15.png',

    'modelo16' => 'assets/modelos/modelo16.png',

    'modelo17' => 'assets/modelos/modelo17.png',

    'modelo18' => 'assets/modelos/modelo18.png',

    'modelo19' => 'assets/modelos/modelo19.png',

    'modelo20' => 'assets/modelos/modelo20.png',

    'modelo21' => 'assets/modelos/modelo21.png',

    'modelo22' => 'assets/modelos/modelo22.png',

    'modelo23' => 'assets/modelos/modelo23.png',

    'modelo24' => 'assets/modelos/modelo24.png',

    'modelo25' => 'assets/modelos/modelo25.png',
];

$caminhoModelo = $modelos[$modelo];


/*
   ABRIR IMAGEM
*/

$imagem = imagecreatefrompng($caminhoModelo);


/*
   CONFIGURAR COR
*/

$corTexto = imagecolorallocate($imagem, 0, 0, 0);


/*
   FONTES
*/

$fonteGlacial =
'assets/fonts/GlacialIndifference-Regular.otf';

$fonteTenor =
'assets/fonts/TenorSans-Regular.ttf';


/*
   ESCREVER BLOCO 2
   X:158
   Y:360
*/

if(!empty($de)){

    imagettftext(

    	$imagem,

    	18,

    	0,

    	158,

    	360,

        $corTexto,

        $fonteGlacial,

        $de
    );
}


/*
   ESCREVER BLOCO 3
   X:445
   Y:360
*/

if(!empty($categoria)){

    imagettftext(

    	$imagem,

    	18,

    	0,

    	445,

    	360,

        $corTexto,

        $fonteTenor,

        $categoria
    );
}


/*
   ESCREVER BLOCO 4
   X:164
   Y:406
*/

imagettftext(

    $imagem,

    18,

    0,

    164,

    406,

    $corTexto,

    $fonteGlacial,

    $para
);


/*
   ESCREVER BLOCO 5
   X:456
   Y:406
*/

imagettftext(

    $imagem,

    18,

    0,

    456,

    406,

    $corTexto,

    $fonteTenor,

    $mensagemFinal
);


/*
   GERAR NOME ÚNICO
*/

$nomeArquivo = bin2hex(random_bytes(10)) . '.png';

/*
   GERAR NOME SEQUENCIAL
*/

// $arquivos = glob($pastaDestino . 'bilhete*.png');

// $numero = count($arquivos) + 1;

// $nomeArquivo = 'bilhete' . $numero . '.png';

/*
   DEFINIR PASTA DE DESTINO
*/

$turmasTarde = [

    '1° C',
    '1° D',
    '2° C',
    '2° D',
    '3° C',
    '3° D'

];


if(in_array($mensagemFinal, $turmasTarde)){

    $pastaDestino = 'bilhetes_tarde/';

}else{

    $pastaDestino = 'bilhetes_privados/';

}


$caminhoSalvar = $pastaDestino . $nomeArquivo;


/*
   SALVAR PNG
*/

imagepng(

    $imagem,

    $caminhoSalvar
);


/*
   LIBERAR MEMÓRIA
*/

imagedestroy($imagem);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="refresh" content="4;url=index.php">

    <link rel="stylesheet" href="css/style.css">

    <title>Sucesso</title>

</head>

<body>

    <div class="container-formulario">

        <div class="formulario">

            <h1>
                Aguarde ser redirecionado...
            </h1>

            <p
                style="
                    text-align:center;
                    margin-top:20px;
                    color:#555;
                "
            >

                Cartinha sendo gerada com sucesso!

            </p>

        </div>

    </div>

</body>

</html>
