<?php
function lerLinhaDados($numeroLinha)
{
    $caminhoDados = "dados.txt";
    // Verifica se o Dados.txt existe
    if (!file_exists($caminhoDados)) {
        return "Dados não encontrado.";
    }

    // Lê todas as linhas do Dados
    $linhas = file($caminhoDados, FILE_IGNORE_NEW_LINES);

    // Ajusta o índice da linha (começa em 1 para o usuário)
    $indice = $numeroLinha - 1;

    // Verifica se a linha existe
    if (isset($linhas[$indice])) {
        return $linhas[$indice];
    } else {
        return "Linha $numeroLinha não encontrada.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="nav_header">
            <a class="ah" href="curriculo.php">Curriculo</a>
            <a class="ah" href="portfolio.php">Portfólio</a>

        </nav>
    </header>

    <div class="man_por">
        <div class="pp1">
            <div class="pp2">
                <div class="pp3">
                    <a href="<?php echo lerLinhaDados(16) ?>">
                    <div class="img_so"></div>


                    </a>
                </div>
                <div class="pp4">
                    <a href="<?php echo lerLinhaDados(18) ?>">
                        <div class="img_po"></div>
                    </a>
                </div>
            </div>





            <div class="pp5">
                <div class="pp6">
                    <h1><?php echo lerLinhaDados(20) ?></h1>
                    <p><?php echo lerLinhaDados(22) ?></p>
                    <p><?php echo lerLinhaDados(24) ?></p>
                    <p><?php echo lerLinhaDados(26) ?></p>
                    <p><?php echo lerLinhaDados(28) ?></p>
                    <p><?php echo lerLinhaDados(30) ?></p>
                    <p><?php echo lerLinhaDados(56) ?></p>
                    <p><?php echo lerLinhaDados(58) ?></p>
                    <p><?php echo lerLinhaDados(60) ?></p>
                    <p><?php echo lerLinhaDados(62) ?></p>
                    <p><?php echo lerLinhaDados(64) ?></p>
                    <p><?php echo lerLinhaDados(66) ?></p>
                </div>
                <div class="pp7">
                <h1>Educação complementar</h1>
                    <p><?php echo lerLinhaDados(32) ?></p>
                    <p><?php echo lerLinhaDados(34) ?></p>
                    <p><?php echo lerLinhaDados(36) ?></p>
                    <p><?php echo lerLinhaDados(38) ?></p>
                    <p><?php echo lerLinhaDados(40) ?></p>
                    <p><?php echo lerLinhaDados(42) ?></p>
                    <p><?php echo lerLinhaDados(44) ?></p>
                    <p><?php echo lerLinhaDados(46) ?></p>
                    <p><?php echo lerLinhaDados(48) ?></p>
                    <p><?php echo lerLinhaDados(50) ?></p>
                    <p><?php echo lerLinhaDados(52) ?></p>
                    <p><?php echo lerLinhaDados(54) ?></p>
                </div>
            </div>
        </div>

    </div>
    <footer>
        <div class="fpainel1">
            <nav class="fnav_header">
                <a class="ah" href="curriculo.php">Curriculo</a>
                <a class="ah" href="portfolio.php">Portfólio</a>

            </nav>
        </div>
        <div class="fpainel2">
            <h1><?php echo lerLinhaDados(6) ?></h1>
            <p><?php echo lerLinhaDados(8) ?></p>

        </div>
        <div class="fpainel3">
            <h1><?php echo lerLinhaDados(10) ?></h1>
            <p><?php echo lerLinhaDados(12) ?></p>

        </div>
        <div class="fpainel4">
            <div class="cpainel0">
                <div class="fotof">
                    <div></div>
                </div>
                <div class="cpainel05">
                    <div class="cpainel1">

                        <div class="nomef"><?php echo lerLinhaDados(2) ?></div>
                    </div>
                    <div class="cpainel2">
                        <input type="text" class="input" placeholder="Me envie uma mensagem">
                        <input type="submit" class="submit">
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>