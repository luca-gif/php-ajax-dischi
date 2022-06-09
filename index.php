<?php

include 'db.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"
    integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="./style/style.css">
  <title>Vue dischi php</title>
</head>

<body>

  <div id="root">

    <header>
      <div class="logo">LOGO</div>

      <select name="" id="">
        <option disabled value="">Seleziona un genere</option>
        <option value="all">All</option>
        <option value="rock">Rock</option>
        <option value="pop">Pop</option>
        <option value="jazz">Jazz</option>
        <option value="metal">Metal</option>
      </select>
    </header>

    <main>
      <div class="container">

        <?php foreach ($datas as $data) : ?>
        <div class="card">

          <img src=" <?= $data['poster'] ?> " alt="poster image">
          <h6 class="title"> <?= $data['title'] ?> </h6>
          <span class="author"> <?= $data['author'] ?> </span>
          <span class="year"> <?= $data['year'] ?> </span>

        </div>
        <?php endforeach; ?>


      </div>
    </main>

  </div>

  <script src="script.js"></script>
</body>

</html>