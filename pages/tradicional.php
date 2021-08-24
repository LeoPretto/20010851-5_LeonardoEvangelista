<html>
<body>

  <h2>Donuts Tradicional</h2>

  

<div class="main">
  <aside class="texto">
  <?php echo $produtos["tradicional"]["descricao"]?>
   </aside>

   <div>
     <img class="img-prod" src="imagens/donutt.png"  alt="imagem_de_bolos">
     <div class="botao-valor">R$<?php echo $produtos["tradicional"]["preco"]?></div>
     <div class="botao-valor"><button  class="comprar">Comprar</button></div>
   </div>
</div>
 
</body>
</html>