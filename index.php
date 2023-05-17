<?php

include_once __DIR__ . "/Models/Movie.php";
include_once __DIR__ . "/Models/Genre.php";
include __DIR__ . "/db.php";

/* var_dump($movies); */

?>

<!DOCTYPE html>
<html lang='en'>

<head>
   <meta charset='UTF-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   <!-- bs5 -->
   <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'
      integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
   <title>Movies Object | OOP</title>
</head>

<body>

   <div class="container">
      <div class="text-center mb-5">
         <h1>
            Movies
         </h1>
      </div>

      <div class="row row-cols-2">
         <?php foreach ($movies as $movie): ?>
            <div class="col mb-4">
               <div class="card m-auto">
                  <div class="card-header">
                     <h2>
                        <?= $movie->name ?>
                     </h2>
                  </div>
                  <div class="card-body">
                     <ul>

                        <li>
                           <b>
                              Info:
                           </b>
                           <ul>
                              <li>
                                 <b>Description:</b>
                                 <?= $movie->description ?>
                              </li>
                              <li>
                                 <b>Genre:</b>
                                 <?= $movie->genre->name ?>
                              </li>
                           </ul>
                        </li>

                     </ul>

                  </div>
               </div>
            </div>
         <?php endforeach ?>
      </div>
   </div>


   <!-- bs5 -->
   <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
</body>

</html>