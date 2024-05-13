<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Tags & Parâmetros</title>
    <link rel="stylesheet" type="text/css" href="styletab.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>
<body>
<div id="relogio">
<?php 

date_default_timezone_set('America/Sao_Paulo');
$agora = new DateTime();
echo $agora->format('d-m-Y H:i:s');

$hora = date('H');

            if ($hora >= 5 && $hora < 12) {
                echo "  Bom dia!";
            } elseif ($hora >= 12 && $hora < 18) {
                echo "  Boa tarde!";
            } else {
                echo "  Boa noite!";
            }

            echo "<br>";
            
?>
</div> 
    
<header>

<nav id="menu">   
         
        <ul class="list" >
            <li ><a href="Curriculo.php" target="_blank">Curriculo</a></li>
            <li ><a href="layouttabela.php" target="_blank">Tabela</a></li>
            <li ><a href="sobre.php" target="_blank">Sobre</a></li>

        </ul>
        </nav>
</header>

<table id="tabela">
        <caption>Tags & Parâmetros <span>Maio/2024</span> </caption>
        
        <p>
            <tr><td rowspan="2" class="ce"> HTML </td><td class="cd">Div, header, href, nav, table, caption,  footer, target.</td> </tr>
            <tr><td class="cd">span, ul, li, a, h1, h2, h3, h4, tr, td, br .</td></tr>
            <tr><td class="ce"> CSS</td><td class="cd">class, id. </td></tr>
            <tr> <td class="ce">PHP</td> <td class="cd">echo, if, else, elseif, date, date_default_timezone_set, $ (variaveis).</td></tr>
        </p>
        </table>
        
<footer id="rodape">
<p>Copyright &reg;2024 - by Luiz Victor <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.instagram.com/luiz_victor.lv/" target="_blank">Instagram</a> | <a href="https://twitter.com/Luixxxvictor" target="_blank"> Twitter(X)</a> </p>
</footer>
</body>
</html>