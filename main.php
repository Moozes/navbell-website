<?php
    include('./functions/functions.php');
    include('./pages/main/challenges.php');
    include('./pages/main/filters.php');// i think i will do it in this page main.php
    include('./pages/main/start.php');//start the challenge and get the questions from api
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Main</title>

    <script src="jquery-3.3.1.js"></script>
    <!--<script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>-->

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="marg" style="background-color: #f5f5f5;">





   <!-- MAIN NAVBAR --> 
      <nav class="navbar navi navbar-expand-md navbar-light fixed-top py-1" role="navigation">
        <div class="container ">
          <a href="index.html" class="navbar-brand">
              <img src="img/navlogo.png" width="70" height="35" />
              <h5 class="d-inline align-middle">NavBel</h5>
          </a>

          <button
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapse"
          >
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
              <li class="nav-item px-2">
                <a href="main.html" class="nav-link active">Main</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown mr-3">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-user"></i> Welcome user

                </a>
                <div class="dropdown-menu">
                  <a href="profile.html" class="dropdown-item">
                    <i class="fas fa-user-circle">
                    </i> Profile
                  </a>

                  <a href="settings.html" class="dropdown-item">
                      <i class="fas fa-cog">
                      </i> Settings
                    </a>
                </div>
              </li>
              <li class="nav-item">
                <a href="login.html" class="nav-link">
                  <i class="fas fa-user-times"></i> Log out
                </a>
              </li>
            </ul>


          </div>


        </div>
      </nav>


<!-- MAIN NAVBAR -->       






<!-- FILTER NAVBAR -->
    <nav class="navbar navi navbar-expand-sm  navbar-light">
      <div class="container">
         <a href="" class="navbar-brand text-monospace mr-5">Filter by: </a>
          
        <form class="form-row" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

          
              <label class="my-2 col-xl-1 text-monospace" for="inlineFormCustomSelectMod text-muted">Module </label>
             
              <select class="my-3 custom-select mr-2 col-xl-1" id="inlineFormCustomSelectMod">
                <option selected name="module" value="all">None</option>
                <option value="1">math</option>
                <option value="2">physics</option>
                <option value="3">poo</option>
              </select>
            
          
            
              
            <label for="" class="my-2 col-xl-1 text-monospace text-muted">Minimum points </label>
            <input class="form-control my-3 mr-2 col-xl-1" type="text" id="minpoints" name="min_points" value=0>
          
          

           
              <label for="" class="my-2 col-xl-1 text-monospace text-muted">Maximum points </label>
              <input class="form-control my-3 mr-2 col-xl-1" type="text" id="maxpoints" name="max_points" value=1000><!-- supposant que 1000 est le max-->
            

              
                <label for="" class="my-2 mr-3 col-xl-1 text-monospace text-muted">Minimum questions </label>
                <input class="form-control my-3 mr-2 col-xl-1" type="text" id="minquestions" name="min_qst" value=1>
              

              
                  <label for="" class="my-2 mr-3 col-xl-1 text-monospace text-muted">Maximum questions </label>
                  <input class="form-control my-3 mr-3 col-xl-1" type="text" id="maxquestions" name="max_qst" value=50><!-- supposant que 50 est le max-->
             
    
                  <div class="my-3 col-xl-1">
          <button class="btn btn-light " type="submit" name="filter">Apply</button>
        </div>
        

      </form>
          
          
      </div>
  </nav>
<!-- FILTER NAVBAR -->






<!-- CARD SLIDER/CAROUSEL -->
<!-- The resources are links that I haven't styled yet, because there aren't any yet-->
<!-- The info about the challenge is probably going to be styled differently than the current one which isn't styled at all-->
<!--the padding is controlled using: py in .container-fluid and ml in .card-->
<div class="container-fluid py-5">
<div class="row ">
  <div class="col-sm-12 ">
    <div id="inam" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">


            <?php for($j = 0; $j<count($challenges); $j += 3) : ?>


                <div class="carousel-item<?php if($j == 0) echo ' active'; ?>">
                    <div class="container">
                        <div class="row">


                            <?php for($i = $j; $i<$j+3; $i++) : ?>
                            <?php if(isset($challenges[$i])) : ?>
                                <div class="col-sm-12 col-lg-4">
                                    <div class="card ml-4" style="width: 20rem; height: 27rem;">
                                        <img src="img/mcomp.jpg" class=" card-img-top"alt="" style="width: 318px; height: 153px;">
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <?php echo $challenges[$i]->module; ?>
                                            </h4>
                                            <p class="card-text">
                                                <?php echo $challenges[$i]->story; ?>
                                            </p>
                                    
                                            <p class="text-center text-muted text-monospace "><?php echo $challenges[$i]->point; ?> points | <?php echo $challenges[$i]->nbPersonSolved; ?>/5  | <?php echo $challenges[$i]->nbOfQuestions; ?> questions </p>
                                
                                        </div>
                                        <div class="card-footer ">
                                            <button type="button" class="btn btn-outline-primary"><a href="<?php //echo $challenges[$i]->resource[0]->url; ?>">Resources</a></button><!--there is a problem in json notation concerning the resourece--> 
                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                                <input type="hidden" name="id" value="<?php echo $challenges[$i]->id; ?>">
                                                <button type="submit" name="start"class="btn btn-primary " style="margin-left: 117px;">Start</button>
                                            </form>
                                        </div>

                                    </div>
                                </div> <!--class="col-sm-12 col-lg-4"-->
                                <?php endif ; ?>
                            <?php endfor ; ?>


                        </div>
                    </div>
                </div>

                
            <?php endfor ; ?>


        </div> <!--carousel inner-->





      <a href="#inam" class="carousel-control-prev" data-slide="prev" >
        <img src="img/lchevron.png" alt="" style="height:20px; width:20px;">
      </a>

      <a href="#inam" class="carousel-control-next" data-slide="next" id="right">
        <img src="img/rchevron.png" alt="" style="height:20px; width:20px;">
      </a>
    </div> <!--class="carousel slide "-->
  </div> <!--col-sm-12-->


</div>
</div>
<!-- CARD SLIDER/CAROUSEL -->







    <script>
      
      // Get the current year for the copyright
      $('#year').text(new Date().getFullYear());
    </script>
  </body>
</html>
