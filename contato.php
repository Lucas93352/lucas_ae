<!-- contato.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Define o destinatário e o assunto do e-mail
    $para = "lucastomazini2008@gmial.com";  // Substitua com o seu e-mail
    $assunto = "Novo Contato - Meu Canal do YouTube";

    // Cria o conteúdo do e-mail
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n\n";
    $corpo .= "Mensagem:\n$mensagem\n";

    // Define os cabeçalhos do e-mail
    $cabecalhos = "From: $email";

    // Envia o e-mail
    if (mail($para, $assunto, $corpo, $cabecalhos)) {
        echo "<p>Obrigado pelo seu contato! Em breve, responderemos.</p>";
    } else {
        echo "<p>Desculpe, houve um erro ao enviar sua mensagem. Tente novamente.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>Entre em Contato</h1>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Formulário de Contato</h2>
            <form action="contato.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; lucas_ae</p>
    </footer>
</body>
</html>