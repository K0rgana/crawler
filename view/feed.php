<?php require_once '../controller/get_anun.php'; ?>
<div class="container my-4">

  <div class="row">

    <div class="col-md-3">
     <form action="" method="">
       <div class="form-group">
         <label for="exampleFormControlSelect1">Escolher estado</label>
         <select class="form-control" id="exampleFormControlSelect1" name="">
           <option> Acre </option>
           <option> Alagoas </option>
           <option> Amapá </option>
           <option> Amazonas </option>
           <option> Bahia </option>
           <option> Ceará </option>
           <option> Distrito Federal </option>
           <option> Espírito Santo </option>
           <option> Goiás </option>
           <option> Maranhão </option>
           <option> Mato Grosso </option>
           <option> Mato Grosso do Sul </option>
           <option> Minas Gerais </option>
           <option> Pará </option>
           <option> Paraíba </option>
           <option> Paraná </option>
           <option> Pernambuco </option>
           <option> Piauí </option>
           <option> Rio de Janeiro </option>
           <option> Rio Grande do Norte </option>
           <option> Rio Grande do Sul </option>
           <option> Rondônia </option>
           <option> Roraima </option>
           <option> Santa Catarina </option>
           <option> São Paulo </option>
           <option> Sergipe </option>
           <option> Tocantins </option>
         </select>
         <input class="btn btn-dk-green mx-0 mt-1" type="submit" value="Filtrar">
       </div>
     </form>

   </div>

   <div class="col-md-9">

     <?php $titulos = ['Eletrônicos', 'Metal', 'Papel', 'Plástico', 'Vidro']; ?>

     <?php for ($i = 1; $i <=5; $i++): ?>
      <?php $cat_anun = array_filter($result,function($anun) use ($i){
        return $anun['anu_cat_id'] == $i;
      }); ?>
      <!--Carousel Wrapper-->
      <div id="multi-item-example<?= $i ?>" class="carousel slide carousel-multi-item" data-ride="carousel">

        <!--Controls-->
        <a class="carousel-control-prev" href="#multi-item-example<?= $i ?>" data-slide="prev"><span class="fa fa-chevron-left" style="margin-top: 50px; margin-left: -80px;"></span></a>
        <a class="carousel-control-next" href="#multi-item-example<?= $i ?>" data-slide="next"><span class="fa fa-chevron-right" style="margin-top: 50px; margin-right: -80px;"></span></a>
        <!--/.Controls-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

          <!--First slide-->
          <h1><?= $titulos[$i - 1] ?></h1>
          <div class="carousel-item active">

            <div class="row">
              <?php for ($j=0; $j < 4 ; $j++) :?>
                <?php if ($j == 0): ?>
                  <?php $mode = current($cat_anun) ?>
                  <div class="col-md-3">
                    <div class="card mb-2">
                     <a href="anu_detail.php?d=<?= $mode['anu_id']?>">
                       <img class="card-img-top" src="<?=$mode['anu_imagem']?>"
                       alt="Card image cap">		
                     </a>
                   </div>
                 </div>
                 <?php else: ?>
                  <?php $mode = next($cat_anun) ?>

                  <div class="col-md-3 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      <a href="anu_detail.php?d=<?= $mode['anu_id']?>">
                       <img class="card-img-top" src="<?=$mode['anu_imagem']?>"
                       alt="Card image cap">
                     </a>
                   </div>
                 </div>
               <?php endif ?>

             <?php endfor ?>

           </div>

         </div>
         <!--/.First slide-->

         <!--Second slide-->
         <div class="carousel-item">

          <div class="row">
            <?php for ($j=4; $j < 8 ; $j++) :?>
              <?php $mode = next($cat_anun) ?>
              <?php if ($j == 4): ?>

                <div class="col-md-3">
                  <div class="card mb-2">
                   <a href="#">
                     <img class="card-img-top" src="<?=$mode['anu_imagem']?>"
                     alt="Card image cap">    
                   </a>
                 </div>
               </div>
               <?php else: ?>

                <div class="col-md-3 clearfix d-none d-md-block">
                  <div class="card mb-2">
                    <a href="#">
                     <img class="card-img-top" src="<?=$mode['anu_imagem']?>"
                     alt="Card image cap">
                   </a>
                 </div>
               </div>
             <?php endif ?>

           <?php endfor ?>







         </div>

       </div>
       <!--/.Second slide-->

     </div>
     <!--/.Slides-->

   </div>
   <!--/.Carousel Wrapper-->

 <?php endfor ?>

</div>

</div>

</div>
