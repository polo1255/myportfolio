<?php

    session_start();
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!'; 
        header('location: register.php');
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Portfolio</title>
    <style>
      body{
        background-color: #293556;
        font-family: myFirstFont;
  src: url(sansation_light.woff);
      }
      header .container img{
        margin-top: 30px;
        border-radius: 25px;
        width: 100%;
      }
      section .container{
        background-color: #5983fc;
        margin-top: 30px;
        margin-bottom: 30px;
        border-radius: 10px;
      }
      section h1{
        color: #ffffff;
        padding: 50px;
      }
      footer{
        padding-top: 4rem;
        padding-bottom: 4rem
      }
      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: #5983fc;
        color: white;
        cursor: grab;
        padding: 15px;
        border-radius: 4px;
              }

        #myBtn:hover {
          background-color: #3e60c1;
        }
        .container .name {
          margin-top : 50px;
          background-color: #5983fc;
          text-align: center;
          color: #ffffff;
          padding: 30px;
          border-radius: 20px;
        }
    </style>
</head>
<body>
<?php include("navbar.php")?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <header>
        <img src="img/k.png" width="100%">
        <div class="container">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" >
              <div class="carousel-item active">
                <img src="img/a12.png" width="100%" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/a23.png" width="100%" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/a25.png" width="100%" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="container">
        <?php 
            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
            ?>
            <h4 class="name">Welcome : <?php echo $row['firstname'] .''. $row['lastname']?></h4>
        </div>
    </header>
    <section>
        <div class="container">
          <h1>Portfolio</h1>
            <div class="card">
                <img class="card-img-top" src="img/k.jpg">
              <div class="card-body">
                <div class="text-center">
                  <h2 class="card-title">Hello!!!<br>My name is Pootada Torath<br>My nickname ia ta</h2>
                </div>
              </div>
          </div>
          <br>
        </div>
    </section>
    <script>
      let mybutton = document.getElementById("myBtn");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
        }
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
          }
    </script>
    <footer class="bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p class="text-muted">&copy; Pootada Torath SchoolTaphanhin</p>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>