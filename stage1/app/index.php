<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HNG4 | Stage 1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <style>
    body{
      font-family: 'Raleway', sans-serif;
    }
    .card {
      position: relative;
      color: grey;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0,0,0,.125);
      border-radius: .25rem;
      width: 20rem;
    }
    .card > img {
      margin: auto;
    }
    .card > h1 {
      text-align: center;
    }
    .card > h2 {
      text-align: center;
    }
  </style>
</head>
<body style="background-color: #2D9CDB;">
    <div style="margin-top: 100px;">
      <div class="col-md-4">
          <div class="card" style="border: none;box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23); margin: auto;">
            <img src="http://placehold.it/180x180" alt="Card image cap" width="200" style="border-radius: 100%; padding: 20px;">
            <h2>WELCOME</h2>
            <?php
              echo $timestamp = date('H:i:s');
            ?> 
          </div>
      </div>
    </div>
</body>
</html>
