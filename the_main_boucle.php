


<!-- the third oucle -->
<?php
          $j = 0;
          while($j < count($challenges)) :
        ?>
        <div class="carousel-item <?php if($j == 0) echo 'active'; ?>">
          <div class="container">
            <div class="row">




              <?php
                $i = $j;
                while($i < $j+3) :
              ?>
              <?php if(isset($challenges[$i])) : ?> 
              <div class="col-sm-12 col-lg-4">
                <div class="card ml-4" style="width: 20rem; height: 27rem;">
                  <img src="img/mcomp.jpg" class=" card-img-top"alt="" style="width: 318px; height: 153px;">
                  <div class="card-body">
                    <h4 class="card-title">
                      Module <?php echo $challenges[$i]; ?>
                    </h4>
                    <p class="card-text">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, laudantium?
                    </p>
                    
                    <p class="text-center text-muted text-monospace ">120 points | 3/5  | 7 questions </p>
                    
                  </div>
                  <div class="card-footer ">
                    <button type="button" class="btn btn-outline-primary">Resources</button> <button type="button" class="btn btn-primary " style="margin-left: 117px;">Start</button>
                  </div>

                </div>
              </div> <!--class="col-sm-12 col-lg-4"-->
              <?php endif; ?>
              <?php
                $i++;
                endwhile;
              ?>



              
            </div>
          </div>
        </div>
        <?php
          $j += 3;
          endwhile;
        ?>
<!-- the third oucle -->




<!-- the filter boucle -->
<?php
          $i = 0;// the first position in the $challenges array
          $stop = false;
          while(!$stop) :
        ?>
        <div class="carousel-item <?php if($i == 0) echo 'active'; ?>">
          <div class="container">
            <div class="row">




              <?php
                $k = 0;
                while($k < 3 && $i < count($challenges)) : // untill showing 3 challenges or reaching the end of the array
              ?>
              
                <?php 
                  $condition = $challenges[$i] >= 0 && $challenges[$i] <= 5;// the filter condition
                  if($condition) : 
                ?>


                <div class="col-sm-12 col-lg-4">
                  <div class="card ml-4" style="width: 20rem; height: 27rem;">
                    <img src="img/mcomp.jpg" class=" card-img-top"alt="" style="width: 318px; height: 153px;">
                    <div class="card-body">
                      <h4 class="card-title">
                        Module <?php echo $challenges[$i]; ?>
                      </h4>
                      <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, laudantium?
                      </p>
                      
                      <p class="text-center text-muted text-monospace ">120 points | 3/5  | 7 questions </p>
                      
                    </div>
                    <div class="card-footer ">
                      <button type="button" class="btn btn-outline-primary">Resources</button> <button type="button" class="btn btn-primary " style="margin-left: 117px;">Start</button>
                    </div>

                  </div>
                </div> <!--class="col-sm-12 col-lg-4"-->


                <?php
                  $k++; // a challenge have been displayed
                  endif; 
                ?>
              
              <?php 
                $i++;
                endwhile; 

                // determine if there is more challenges which satisfies the filter condition to not create an empty slide
                $j = $i;
                $there_is_more = false;
                while($j < count($challenges) && !$there_is_more) {
                  if($challenges[$j] >= 0 && $challenges[$j] <= 5){
                    $there_is_more = true;
                  }
                  $j++;
                }

                if($i >= count($challenges) || !$there_is_more) {// gets out of the outer boucle while
                  $stop = true;
                }
              ?>
              



              
            </div>
          </div>
        </div>
        <?php endwhile; ?>
<!-- the filter boucle -->





















