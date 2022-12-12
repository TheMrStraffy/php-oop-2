<div class="row p-5 bg-dark">

  <?php foreach($products as $product) : ?>
  <div class="col-6">

    <div class="card mc-card mx-auto" style="width: 18rem;">
      <img class="card-img-top" src="<?php echo $product->image ?>" alt="<?php $product->name ?>">
      <div class="card-body">
        <h5 class="card-title"><?php echo $product->name ?>
      </h5>
      <div class="img-box">

        <img class="thumb" src="<?php echo $product->category->getIcon() ?>" alt="">
      </div>
        <p class="card-text">
          
          <?php if(property_exists($product,'ingredients')) :?>
          <ul>
            <?php foreach($product->ingredients as $ingredient) : ?>
              <li><?php echo $ingredient ?></li>
              <?php endforeach;  ?>
          </ul>
          <?php endif; ?>

          <?php if(property_exists($product,'feature')):?>
          <ul>
            <?php foreach($product->feature as $feat) : ?>
              <li><?php echo $feat ?></li>
              <?php endforeach;  ?>
          </ul>
          <?php endif; ?>
          <?php if(property_exists($product,'material')):?>
          <p><?php echo $product->material ?></p>
          <?php endif; ?>

        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>

  </div>
  <?php endforeach; ?>

</div>
