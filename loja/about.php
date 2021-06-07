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
#retangulo {
    fill:#bbbfca
  }
   .retangulo {
    position: absolute;
    overflow: visible;
    width: 1117px;
    height: 347px;
    left: 200px;
    top: 200px;
  }
  #sobre-nos {
    left: 20%;
    top: 200px;
    position: absolute;
    overflow: visible;
    width: 828px;
    text-align: left;
    font-style: normal;
    font-weight: normal;
    font-size: 35px;
    color: rgba(0,0,0,1);
  }
</style>
<body>
    <section class="container">
    <svg class="retangulo">
      <rect id="retangulo" rx="150" ry="150" x="0" y="0" width="1200" height="450">
      </rect>
    </svg>
    <div id="sobre-nos">
      <p>Todo apaixonado por jogos tem suas críticas, elogios, comentários e seu desejo por comprar jogos novos e aqueles da infância e é isso que pensamos quando criamos
        o “Eagle Games”, montar uma loja onde se encontram os melhores jogos, lançamentos e claro os antigos raros.
      </p>
    </div>
    </section>




    <?php
    include 'layout/footer.php';

    ?>

</body>

</html>