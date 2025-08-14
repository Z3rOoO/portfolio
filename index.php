<?php
function lerLinhaDados($caminhoDados, $numeroLinha) {
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

$caminho = "dados.txt";
echo lerLinhaDados($caminho, $linhaDesejada);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="man">
        <div class="conteiner">
            <div class="painel1">
                <div class="img"></div>
            </div>
            <div class="painel2">
                <div class="titulo"><?php echo lerLinhaDados($caminho,1)?></div>
                <div class="descricao">Lorem ipsum doddasd asdasdas in quam modi aut doloremque quia id vitae! Facilis,
                    alias.</div>
                <div class="spacer"></div>
                <div class="botoes">
                    <a href="curriculo.html"> Curriculo</a>
                    <a href="portfolio.html">Portfólio</a>
                    
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="fpainel1">
            <nav class="fnav_header">
                <a class="ah" href="curriculo.html">Curriculo</a>
                <a class="ah" href="portfolio.html">Portfólio</a>
                
            </nav>
        </div>
        <div class="fpainel2">
            <h1>Habilidades Técnicas Fundamentais</h1>
            <p>Domínio de Linguagens de Programação</p>
            <p>Controle de Versão (Git)</p>
            <p>Conhecimento de Banco de Dados</p>
            <p>Desenvolvimento Web e APIs</p>
            <p>Testes Automatizados</p>
            <p>Princípios de Arquitetura e Design de Software
            </p>
        </div>
        <div class="fpainel3">
            <h1>Habilidades Comportamentais e Profissionais</h1>
            <p>Comunicação Eficiente</p>
            <p>Capacidade de Aprendizado Contínuo</p>
            <p>Trabalho em Equipe e Colaboração</p>
            <p>Resolução de Problemas e Pensamento Analítico</p>
            <p>Gerenciamento de Tempo e Organização</p>
            <p>Experiência com Metodologias Ágeis</p>
        </div>
        <div class="fpainel4">
            <div class="cpainel0">
                <div class="fotof">
                    <div></div>
                </div>
                <div class="cpainel05">
                    <div class="cpainel1">

                        <div class="nomef">Henrique Cosme da Silva</div>
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