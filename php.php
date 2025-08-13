<?php
// Caminho do arquivo
$arquivo = 'dados.txt';

// Verifica se o arquivo existe
if (!file_exists($arquivo)) {
    die("Arquivo não encontrado.");
}

// Abre o arquivo para leitura
$handle = fopen($arquivo, "r");

if ($handle) {
    echo "<h3>Linhas com idade maior que 30:</h3><ul>";
    
    while (($linha = fgets($handle)) !== false) {
        // Remove espaços em branco e quebras de linha
        $linha = trim($linha);
        
        // Divide a linha por vírgula
        $dados = explode(',', $linha);
        
        // Verifica se tem pelo menos 3 colunas (nome, idade, profissão)
        if (count($dados) >= 3) {
            $nome = $dados[0];
            $idade = (int)$dados[1];
            $profissao = $dados[2];

            // Condição: idade maior que 30
            if ($idade > 30) {
                echo "<li>Nome: $nome | Idade: $idade | Profissão: $profissao</li>";
            }
        }
    }

    echo "</ul>";
    fclose($handle);
} else {
    echo "Erro ao abrir o arquivo.";
}