<?php
include 'layout/header.php';
include 'return.php';

?>

<style>
    body {
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



        <?php foreach ($b as $item) : ?>

            <div class="container w-50">

                <div class="form-control">
                    Nome do Produto: <?php echo ($item['nome']); ?>
                </div>

                <div class="form-control">
                    Preço: <?php echo ($item['preco']); ?>
                </div>

                <div class="form-control">
                    Quantidade: <?php echo ($item['quantidade']); ?>
                </div>

                <div class="form-control">
                    Categoria: <?php echo ($item['categoria']); ?>
                </div>
                <div>
                    <form action="register.php" method="post">
                        <input type="number" name="id" value="<?php echo ($item['idProduto']); ?>" style="display: none;">
                        <button class="enviar" type="submit" name="id_produto">Excluir</button>
                    </form>
                    <br>
                    <br>
                </div>
            </div>

        <?php endforeach; ?>

    </section>

    <?php
    include 'layout/footer.php';

    ?>

</body>

</html>