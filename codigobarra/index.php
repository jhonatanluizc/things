<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codigo de Barras</title>
    <link rel="stylesheet" href="style.css">

</head>



<body>

    <div class="menu">
        <div class="menu-itens">
            <a class="menu-item-select" href="index.php">Exercício</a>
            <a href="codigobarra.php">&nbsp;&nbsp;Verificador&nbsp;&nbsp;</a>
        </div>
    </div>

    <div class="exercicio">
        <p>
            Aluno: Jhonatan Luiz Chagas
        </p>
        <p>
            <br>
            Atividade #3
            <br>
            Data: 12/05/2020
            <br>
            Disciplina: Programação Web
        </p>
        <br>
        <p>
            Projeto: <b>Aplicação Web para verificação de código de barras</b>
        </p>
        <br>
        <p>
            Escreva um aplicativo em PHP orientado a objetoque simule um leitor de código de barras.
            O programa solicita ao usuário a digitação dos 13 dígitos do código de um determinado produto
            e retorna a seguir a informação indicando que o código é válido ou não. Considere que o usuário
            poderá lançar quantos códigos de produtos ele desejar. O programa realiza a entrada dos 13
            dígitos fornecidos pelo usuário, calcula o dígito verificador e retorna “OK” quando o código
            estácorreto ou a palavra “recusado” quando o código não é válido. A aplicação guarda o último
            digito que foi fornecido pelo usuário e compra o mesmo com o dígito que foi calculado pelo
            programa para estabelecer a validação.
        </p>
        <br>
        <p>
            Algoritmo para cálculo do dígito verificador do código de barras padrão EAN-13:
            Exemplo: tomando como base o número 7891000315507
            Multiplicam-se os dígitos do código por 1 e por 3, em sequência repetitiva de 1 e 3;
        </p>
        <p>
            <br>
            7 * 1 = 7
            <br>
            8 * 3 = 24
            <br>
            9 * 1 = 9
            <br>
            1 * 3 = 3
            <br>
            0 * 1 = 0
            <br>
            0 * 3 = 0
            <br>
            0 * 1 = 0
            <br>
            3 * 3 = 9
            <br>
            1 * 1 = 1
            <br>
            5 * 3 = 15
            <br>
            5 * 1 = 5
            <br>
            0 * 3 = 0
        </p>
        <br>
        <p>
            Somando o resultado das multiplicações encontra-se o total de 73.
            O valor total da soma das multiplicações deve ser dividido por 10:
            <br>
            73/10 = 7.3
            <br>
            Transforme o resultado em inteiro, "arredondando" o número para baixo 7 Some ao resultado da divisão
            <br>
            7+1 =8
            <br>
            Multiplique o resultado dessa soma por
            <br>
            10 8*10 = 80
            <br>
            Subtraia desse resultado o valor da soma inicial das multiplicações (73)
            <br>
            80 – 73 = 7
            <br>
            O digito verificador é 7. Assim o código completo 7891000315507 está correto.
        </p>
        <br>
    </div>
</body>

</html>