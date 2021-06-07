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
.imagem{
    width: 10px;

}
h2{
    color: white;
    font-size: 4rem;
    text-align: center;
}
.icon {
    margin-right: 0.2rem;
    margin-top: 0.5rem;
    width: 1.5rem;
    margin-bottom: 0.5rem;
}
#nome,
#email,
#senha,
#avatar {
    padding-top: 1rem;
    padding-left: 2rem;
    margin-top: 1.5rem;
    width: 20rem;
    font-size: 1.5rem;
}
#icon2 {
    margin-right: 0.2rem;
    margin-top: 0.5rem;
    width: 320px;
    margin-bottom: 0.5rem;
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
    <h2>Cadastre-se <img src="imagens/logo.png" class="imagem" alt="Logo da Eagle Games" /></h2>
    <section class="container">
        <form action="register.php" method="post">
            <div class="form-row">
                <label class="col-md-5">
                <img src=imagens/profile_user_icon.png class="icon">
                    Nome Completo
                    <input class="form-control" type="text" name="nome" required placeholder="Nome e sobrenome">
                </label>
                <div>
                     <label class="col-md-5">
                <img src=imagens/icon3.png class="icon">
                    E-mail
                    <input class="form-control" type="text" name="email" required placeholder="seuemail@dominio.com">
                </label>
                </div>
               
                <label class="col-md-3">
                <img src=imagens/icon2.png class="icon">
                    Senha
                    <input class="form-control" type="password" name="senha" required placeholder="digite sua senha">
                </label>
            </div> <!-- form-row-->
            <div class="form-row">
                <label class="col-md-6">
                <img src=imagens/house2.png id="icon2">
                    Endereço
                    <input class="form-control" type="text" name="endereco">
                </label>
                <label class="col-md-4">
                <img src=imagens/pay.png id="icon2">
                    Forma de Pagamento
                    <select class="form-control" name="categoria">
                        <option>Cartao de Credito</option>
                        <option>Cartao de Debito</option>
                        <option>Boleto</option>
                        <option>Dinheiro</option>
                    </select>
                </label>
                <label class="col-md-3">
                <img src=imagens/password.png id="icon2" >
                    Senha do Cartao
                    <input class="form-control" type="password" name="senhaDoCartao">
                </label>
            </div> <!-- form-row-->



            <button class="enviar"  type="submit" name="cadastro_cliente">
                <i class="fa fa-save"></i> Confirmar Cadastro</button>

        </form>
    </section>
    <?php
    include 'layout/footer.php';

    ?>

</body>

</html>