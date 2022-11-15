<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Profile</title>
    <style>
        body{
        background-color: #293556;
        font-family: myFirstFont;
  src: url(sansation_light.woff);
      }footer{
        padding-top: 4rem;
        padding-bottom: 4rem
      }
        header .container img{
        margin-top: 30px;
        border-radius: 25px;
        width: 100%;
      }
      .showcase-text{
        padding: 50px;
      }
      .showcase-img{
        background-size: cover;
        min-height: 20rem;
      }
      section{
        background-color: #5983fc;
        border-radius: 25px;
        margin-top: 30px;
        padding: 20px;
      }
      section h4{
        color: azure;
      }
      section h2{
        color: azure;
      }
      section .row{
        background-color: #170b41;
        border-radius: 20px;
        margin:20px
      }
      section .row .showcase-img{
        border-radius: 20px;
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
    </header>
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row g-0">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/d5.png');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Profile</h2>
            <p class="lead mb-0"><h4>Name : Pootada Torath / ภูธดา โตรัตน์<br> Nickname : Ta / ต๊ะ<br> Deta : 19 Apr. 2005<br> 
              Address : บ้านเลขที่ 6 ซอยหนุมาน 12 ต.ตะพานหิน อ.ตะพานหิน จ.พิจิตร รหัสไปรษณีย์ 66110<br> Religon : Buddhism / พุทธ <br> 
              Natinality : Thai / ไทย</h4></p>
          </div>
        </div>
      </div>

        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/er.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Contant</h2>
            <p class="lead mb-0"><h4> Facebook : Pootada Ta<br> Instagram : mynameist_26</br> Email : pootadatorath@gmail.com <br> Phone number : 0615713250</h4></p>
          </div>
        </div>
      </div>

        <div class="row g-0">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/fe.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Skill</h2>
            <p class="lead mb-0"><h4> PHP : 40 % <br>Html : 80 % <br>JS : 30 % <br>Css : 75 % <br></h4></p>
          </div>
        </div>
      </div>

        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/q.png');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Program Skill</h2>
            <p class="lead mb-0"><h4>Visual Studio Code</h4></p>
          </div>
        </div>
      </div>

        <div class="row g-0">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/y.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Hobby</h2>
            <p class="lead mb-0"><h4>Photograph</h4></p>
          </div>
        </div>
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
