<?php
function lerLinhaDados($numeroLinha) {
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
    <title>Currículo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav class="nav_header">
            <a class="ah" href="curriculo.php">Curriculo</a>
            <a class="ah" href="portfolio.php">Portfólio</a>
           
        </nav>
    </header>
    <div class="man man_cur">
        <div class="cont_cur">
            <div class="curriculo_pdf">
                <iframe src="<?php echo lerLinhaDados(14)?>">
                    <p>Seu navegador não suporta iframes.</p>
                </iframe>
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
            <h1><?php echo lerLinhaDados(6)?></h1>
            <p><?php echo lerLinhaDados(8)?></p>
            
        </div>
        <div class="fpainel3">
            <h1><?php echo lerLinhaDados(10)?></h1>
            <p><?php echo lerLinhaDados(12)?></p>
            
        </div>
        <div class="fpainel4">
            <div class="cpainel0">
                <div class="fotof">
                    <div></div>
                </div>
                <div class="cpainel05">
                    <div class="cpainel1">

                        <div class="nomef"><?php echo lerLinhaDados(2)?></div>
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