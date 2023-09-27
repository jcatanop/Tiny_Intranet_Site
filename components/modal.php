<?php
$image = "feliz-navidad-design-template-e1a7934b5f7d3457fc77590e0dc5b8d0_screen.jpg";
$date = "29-12-2022";

if( $date  >= date("d-m-Y",time())){
  if( !isset($_SESSION['day']) || $_SESSION['day'] != date("d",time())  ){ ?>
        <!-- Modal --> 
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
          <div class="modal-dialog modal-dialog-centered modal-lg"  >
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <img src="./img/<?php echo $image ?>" class="img-fluid" alt="Responsive image" width="100%">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div> 
<?php $_SESSION['day'] = date("d",time()); 
  }
} ?>
