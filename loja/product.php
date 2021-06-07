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
</style>


<body>
    <section class="container">
        <form action="register.php" enctype="multipart/form-data" method="POST">
            <div class="form-row">
                <label class="col-md-6">
                    Nome do Jogo
                    <input class="form-control" type="text" name="nome" required placeholder="digite um nome">
                </label>
                <label class="col-md-3">
                    Preço
                    <input class="form-control" type="text" name="preco" required>
                </label>
                <label class="col-md-3">
                    Quantidade
                    <input class="form-control" type="number" name="quantidade" required>
                </label>
            </div> <!-- form-row-->
            <div class="form-row">
                <label class="col-md-4">
                    Categoria
                    <select class="form-control" name="categoria">
                        <option>Ação</option>
                        <option>Aventura</option>
                        <option>Terror</option>
                        <option>Multiplayer</option>
                        <option>RPG</option>
                    </select>
                </label>
            </div> <!-- card-row -->
            <button class="enviar" type="submit" name="cadastro_produto">
                <i class="fa fa-save"></i> Cadastrar</button>
        </form>
    </section>

    <?php
    include 'layout/footer.php';
    ?>

</body>

</html>