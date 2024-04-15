<?php

  $hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
        'img'=> 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8QUxCRVJHT3xlbnwwfHwwfHx8MA%3D%3D'
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
        'img'=> 'https://images.unsplash.com/photo-1455587734955-081b22074882?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8QUxCRVJHT3xlbnwwfHwwfHx8MA%3D%3D'
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
        'img'=> 'https://images.unsplash.com/photo-1564501049412-61c2a3083791?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fEFMQkVSR098ZW58MHx8MHx8fDA%3D'
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
        'img'=> 'https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fEFMQkVSR098ZW58MHx8MHx8fDA%3D'
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
        'img'=> 'https://plus.unsplash.com/premium_photo-1675745329954-9639d3b74bbf?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8QUxCRVJHT3xlbnwwfHwwfHx8MA%3D%3D'
    ],
  ];

  $isPark= $_GET['park'];
  $withPark=[];
  $withoutPark=[];


  foreach ($hotels as $hotel): 
      if ($hotel['parking']) {
          $withPark[] = $hotel;
      } else {
          $withoutPark[] = $hotel;
      }
  endforeach; 
 

    var_dump('with',$withPark);
    var_dump('without', $withoutPark);
    var_dump($isPark);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <link rel="stylesheet" href="style.css">

  <title>php-hotel</title>
</head>
<body>  
  <div class="container d-flex justify-content-center">

    <form action="index.php" method="get">

      <label for="park">parcheggio</label>
      <select name="park" id="park">

       
        <option value="true" >presente</option>
        <option value="false" >non presente</option>

      </select>
    
      <button type="submit" class="btn btn-dark p-3">Cerca</button>
      <button type="reset" class="btn btn-dark p-3">reset</button>
      
    </form>
  
  </div>
  <div class="container d-flex flex-wrap justify-content-center p-5">


  <!-- situazione di default con nesuna ricerca -->
   
      <?php foreach($hotels as $hotel): ?>
        <?php if($isPark == $hotel['parking']): ?>
          <div class="card" style="width: 22rem;">
            <img src="<?php echo $hotel['img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title"><?php echo $hotel['name'] ?></h3>
              <p class="card-text"><?php echo 'Dal centro: '.$hotel['distance_to_center'].'km' ?></p>
              <p class="card-text"><?php echo 'voto: '.$hotel['vote'].' /5' ?></p>
              <?php ($hotel['parking']== true)?$message='presente':$message='non presente' ?>
              <p class="card-text"><?php echo'parcheggio: '. $message ?></p>
            </div>
          </div>
        <?php endif ?>
      <?php endforeach ?>



  </div>
</body>
</html>

