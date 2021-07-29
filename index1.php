<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- cdn vue -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

  <!-- cdn axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- cdn bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
  <title>php-ajax-dischi</title>
</head>
<body>

<!-- Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere -->

  <div id="app">

    <div class="container my-5">
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5"> 

            <div v-for="cd in cds" class="col px-4 my-2">
              <div class="headband">
                <img class="py-4" :src= "cd.poster" :alt= "cd.title">
                <h3 class="title pb-4 text-uppercase  text-center"> {{cd.title}} </h3>
                <div class="author"> {{cd.author}} </div>
                <div class="year pb-3"> {{cd.genre}} </div>
              </div>
            </div>

        </div>
    </div>
  </div>

  <script src="js/script.js"></script>
  
</body>
</html>