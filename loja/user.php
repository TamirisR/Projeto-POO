<?php
include 'layout/header.php';

?>

<style>
    body{
    margin: 0cm;
    width: 100%;
    min-height: 100vh;
    display: flex; 
    flex-direction: column;
    font-family: 'Open Sans', sans-serif;
}
.formulario {
    margin-top: 0.5rem;
    border-top: 5rem;
    font-size: 1.5rem;
    text-align: center;
}
.icon {
    margin-right: 0.2rem;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    width: 1.5rem;
}
.enviar {
    width: 10rem;
    margin: 1rem;
    padding: 12px 0;
    background: gray;
    color: white;
    font-weight: bold;
    font-size: 18px;
    border: none;
    border-radius: 20px;
    transition: 1s all;
    cursor: pointer;
    position: relative;
}
.enviar:hover {
    background: rgb(83, 83, 83);
    transform: scale(1.04);
}
</style>

<body>
    <section class="container">
        <form action="register.php" enctype="multipart/form-data" method="POST">
            <div class="formulario ">
                <label class="col-md-4">
                <img src=imagens/profile_user_icon.png class="icon">
                    Nome Completo
                    <input class="form-control" type="text" name="nome" required placeholder="digite seu nome e sobrenome">
                </label>
            </div> 
            <div class="formulario ">
                <label class="col-md-4">
                <img src=imagens/icon3.png class="icon">
                    E-mail
                    <input class="form-control" type="text" name="email" required placeholder="seuemail@dominio.com">
                </label>
            </div>
            <div class="formulario ">
                <label class="col-md-4">
                    <img src=imagens/icon2.png class="icon">    
                    Senha
                    <input class="form-control" type="password" name="senha" required placeholder="digite sua senha">
                </label>
            </div>
            <div class="formulario ">
            <button class="enviar" type="submit" name="cadastro_usuario">
                <i class="fa fa-save"></i> Cadastrar</button>
            </div>
        </form>
    </section>

    <?php
    include 'layout/footer.php';

    ?>

</body>

</html>