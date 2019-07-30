<!DOCTYPE HTML>
<html>

<head>
</head>

<body>

    <h1>Fale conosco</h1>
    <p>
        Sua opinião é <strong>muito importante</strong> para nós. No formulário abaixo, preencha seus dados e envie seu elogío ou sua crítica.
    </p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nome completo: <input type="text" name="nome">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        sexo:
        <input type="radio" name="sexo" value="feminino">Feminino
        <input type="radio" name="sexo" value="masculino">Masculino
        <input type="radio" name="sexo" value="outro">Other
        <br><br>
        <br><br>
        Tipo de mensagem: <input type="text" name="tipo-mensagem">
        <br><br>
        mensagem: <textarea name="mensagem" rows="5" cols="40"></textarea>
        <br><br>
        <input type="submit" name="enviar" value="Enviar Mensagem">
    </form>

</body>

</html>
