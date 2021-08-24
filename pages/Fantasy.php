<html> 
<body> 

<h2>Donuts Fantasy</h2>


<div class="main">
  <aside class="texto">
  <?php echo $produtos["fantasy"]["descricao"]?>
   </aside>

   <div>
     <img class="img-prod" src="imagens/donutfantasy.png"  alt="donut fantasy foto">
     <div class="botao-valor">R$<?php echo $produtos["fantasy"]["preco"]?></div>
     <div class="botao-valor"><button  class="comprar">Comprar</button></div>
   </div>
</div>

</body>
</html>