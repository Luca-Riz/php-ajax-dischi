<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- link css -->
  
  <link rel="stylesheet" href="css/style.css">
  <title>php-ajax-dischi</title>
</head>

<body>

<!-- Prima Milestone: Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

  <?php include __DIR__ . '/db/cds.php'; ?>

  <div class="container my-5">
      <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5"> 

        <?php foreach($cds as $cd){ ?>

          <div class="col px-4 my-2">
            <div class="headband">
              <img class="py-4" src="<?php echo $cd['poster']; ?>" alt="<?= $cd['title']; ?>">
              <h3 class="title pb-4 text-uppercase text-center"> <?php echo $cd['title']; ?> </h3>
              <div class="author"> <?php echo $cd['author']; ?> </div>
              <div class="year pb-3"> <?php echo $cd['genre']; ?> </div>
            </div>
          </div>

        <?php } ?>

      </div>
  </div>
  
</body>
</html>