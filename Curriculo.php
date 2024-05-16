<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculo</title>
    <link rel="stylesheet" type="text/css" href="stylecur.css">
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
            echo $agora->format('d/m/Y H:i:s');
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
<h1 id="titulo";>
        
        Luiz Victor Melo Santos</h1>
<header>

<nav id="menu">   
         
        <ul class="list" >
            <li ><a href="Curriculo.php" target="_self">Curriculo</a></li>
            <li ><a href="layouttabela.php" target="_blank">Tabela</a></li>
            <li ><a href="sobre.php" target="_blank">Sobre</a></li>

        </ul>
        </nav>
</header>

    <h2>Dados Pessoas</h2>
        <h3>Telefone:(79)9 9920-3669</h3>
        <h3>E-Mail: luizvictormelo.lv@hotmail.com</h3>
        <h3>Data de Nascimento: 24/01/2000</h3>
        <h3>Estado: Sergipe</h3>
        <h3>Municipio: Nossa Senhora do Socorro</h3>
        <h3>Naturalidade: Aracaju/Se</h3>
        <h3>Nacionalidade: Brasileiro</h3>
        <h3>Endereço: Rua Andeilson Santos Lima, Nº 13 - Conjunto Marcos Freire 2</h3>
        <h3>Estado Civil: Casado</h3>
        <h3>Sexo: Masculino
        <h3>CNH: A/B</h3>
    <h2>Escolaridade</h2> 
        <p>Ensino Médio Completo, Ensino Superior Cursando</p>
    <h2>Cursos</h2>
        <p>Informática Básica e Avançada, Inglês Básico, Auxiliar Administrativo Profissionalizante.</p>
    <h2>Experiência Profissional</h2>
        <h4>Empresa: Pisolar Comercio De Tintas</h4>
    <p>Função: Auxiliar Administrativo <br>
    Período: 18/01/2016 à 17/05/2017 </p>
        <h4>Empresa: Yazaki Do Brasil</h4>
    <p>Função: Auxiliar De Produção <br>
    Período: 07/10/2019 à 06/05/2024</p>
<footer id="rodape">
<p>Copyright &copy;2024 - by Luiz Victor <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="https://www.instagram.com/luiz_victor.lv/" target="_blank">Instagram</a> | <a href="https://twitter.com/Luixxxvictor" target="_blank"> Twitter(X)</a> </p>
</footer>
</body>
</html>


