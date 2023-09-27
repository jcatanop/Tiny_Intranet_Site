
<?php
  $lists_json = file_get_contents('data.json');
  $lists = json_decode($lists_json, false);

  $b = count($lists);
  $i = 0;
  foreach ($lists as $list) {

    if($i == 0){
?>
      <!-- Featured blog post-->
      <div class="card mb-4">
        <a href="#!"><img class="card-img-top" src="<?php echo $list->imagen ; ?> " alt="..." /></a>
        <div class="card-body">
          <div class="small text-muted"><?php echo $list->fecha ; ?></div>
          <h2 class="card-title"><?php echo $list->titulo ; ?></h2>
          <p class="card-text"><?php echo $list->texto ; ?></p>
        </div>
      </div>
<?php
    }
    if( $i % 2 == 1  ){
?>
      <!-- Nested row for non-featured blog posts-->
      <div class="row">

        <div class="col-lg-6">
          <!-- Blog post-->
          <div class="card mb-4">
            <img class="card-img-top" src="<?php echo $list->imagen ; ?>" alt="..." />
            <div class="card-body">
              <div class="small text-muted"><?php echo $list->fecha ; ?></div>
              <h2 class="card-title h4"><?php echo $list->titulo ; ?></h2>
              <p class="card-text"><?php echo $list->texto ; ?></p>
            </div>
          </div>
        </div>

<?php
    }
    if( $i % 2 == 0 && $i != 0){
?>
        <div class="col-lg-6">
          <!-- Blog post-->
          <div class="card mb-4">
            <img class="card-img-top" src="<?php echo $list->imagen ; ?>" alt="..." />
            <div class="card-body">
              <div class="small text-muted"><?php echo $list->fecha ; ?></div>
              <h2 class="card-title h4"><?php echo $list->titulo; ?></h2>
              <p class="card-text"><?php echo $list->texto; ?></p>
            </div>
          </div>
        </div>
      </div>
<?php
    }
    $i++;
    if($i == $b) echo "</div>";
  }
?>