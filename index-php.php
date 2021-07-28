<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrapmin.css" rel="stylesheet" integrity="sha384+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">

  <title>php-ajax-dischi</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

  <?php include 'db.php'; ?>

  <div class="container">
      <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5" > 
          <div class="col px-4 my-2">
            
              <div class="headband">
              <?php foreach($cds as $cd){ ?>
                  <img class="py-4" src="<?php echo $cd['poster']; ?>" alt="#">
                  <h3 class="title pb-4 text-uppercase text-center"> <?php echo $cd['title']; ?> </h3>
                  <div class="author"> <?php echo $cd['author']; ?> </div>
                  <div class="year pb-3"> <?php echo $cd['genre']; ?> </div>
              <?php } ?>
              </div>
          </div>          
      </div>
  </div>


  
</body>
</html>