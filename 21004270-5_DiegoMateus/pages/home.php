<?php 
 include 'dados/produtos.php';
 include 'function/real.php';?>

  <div class="banner">
    <div class="banner--item" style="background-image: url('/SiteVendasMarmitas-main/21004270-5_DiegoMateus/images/baner-comida-caseira.jpg');"></div>    
  </div>  
  <h1 class="h1s">CONHEÇA NOSSOS PRODUTOS</h1>
  <div class="produtos">
  <?php
    foreach($produto as $pdt):    
  ?>   
   <div class="marmitas">       
        <a id="product" href="index.php?p=produto.php&id=<?=$pdt['id']?>">     
        <img src="<?=$pdt['imagem']?>" style="width:200px; border-radius: 10%;">    
        <p><?=$pdt['nome']?></p>
        <p id="valor"><?=BRL($pdt['valor'])?></p></a>    
    </div>  
  <?php 
  endforeach;?> 
  </div>
</div>
