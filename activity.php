<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attitude</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <style>
         body{
        background-color: #293556;
        font-family: myFirstFont;
  src: url(sansation_light.woff);
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
        footer{
        padding-top: 4rem;
        padding-bottom: 4rem
      }
      .col-xs-6{
        background-size: cover;
        background-color: black;
        padding: 20px;
        border-radius: 25px;
        border: 1px  solid #ffffff;
        margin-top: 25px;
        margin-bottom: 20px;

      }
      h3,p,.button{
        margin: 15px;
        color: #ffffff;
      }
      div img{
        width: 100%;
        height: 210px;
        border: 1.5px solid black;
        border-radius: 15px;
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
  <img src="img/k.png" width="100%">
    <div class="container-fluid">
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
        <div class="row">
            <div class="col-xs-6 col-sm-4 wrap_portfolio wow fadeInDown">
                <div><img title="????????????????????????????????????????????????????????????" src="img/r.jpg" class="img-responsive" width="100%"></div>
                <h3>????????????????????????????????????????????????????????????</h3>
                <div class="mb-1 text-muted">12 ????????????????????? 2022</div>
                <p class="card-text mb-auto">-????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                <p class="card-text mb-auto"> -???????????????????????????????????????????????????????????????????????????????????????  ?????????????????????????????????????????????????????? </p>
                <div class="button"><button class="btn btn-primary">???????????????</button></div>
            </div>
            <div class="col-xs-6 col-sm-4 wrap_portfolio wow fadeInDown">
                <div><img title="????????????????????????????????????????????????????????????" src="img/c.jpg" class="img-responsive" width="100%"></div>
                <h3>????????????????????????????????????????????????????????????</h3>
                <div class="mb-1 text-muted">26 ????????????????????? 2022</div>
                <p class="mb-auto">-????????????????????????????????????????????????  ??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????? OLYMPUS ???????????????????????????????????????????????????  </p>
                <p class="mb-auto">-??????????????????????????????????????????????????????  ?????????????????????????????????????????????????????????????????????????????????????????????</p>
                <div class="button"><button class="btn btn-primary">???????????????</button></div>
            </div>
            <div class="col-xs-6 col-sm-4 wrap_portfolio wow fadeInDown">
                <div><img title="??????????????????????????????????????????" src="img/e.jpg" class="img-responsive" width="100%"></div>
                <h3>??????????????????????????????????????????</h3>
                <div class="mb-1 text-muted">24 ????????????????????? 2022</div>
                <p class="card-text mb-auto">-??????????????????????????????????????????????????????????????? ???????????????????????????????????????????????? 1 ???????????????????????? Web Application  ?????????????????????????????????????????????????????????????????? ???????????????????????? 70 ?????????????????????????????????????????????</p>
                <div class="button"><button class="btn btn-primary">???????????????</button></div>
            </div>
            <div class="col-xs-6 col-sm-4 wrap_portfolio wow fadeInDown">
                <div><img title="??????????????????????????????????????????" src="img/nj.jpg" class="img-responsive" width="100%"></div>
                <h3>??????????????????????????????????????????</h3>
                  <div class="mb-1 text-muted">10 ????????????????????? 2020</div>
                  <p class="mb-auto">-?????????????????????????????????????????????????????????????????? 1 ??????????????????????????????????????????????????????????????????????????????????????????????????????  ?????????????????? ????????????????????? ????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????? </p>
                  <div class="button"><button class="btn btn-primary">???????????????</button></div>
            </div>
            <div class="col-xs-6 col-sm-4 wrap_portfolio wow fadeInDown">
                <div><img title="??????????????????????????????????????????" src="img/0.jpg" class="img-responsive" width="100%"></div>
                <h3>??????????????????????????????????????????</h3>
                <div class="mb-1 text-muted">14 ?????????????????? 2022</div>
                <p class="card-text mb-auto">-???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                <p class="card-text mb-auto">-?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                <div class="button"><button class="btn btn-primary">???????????????</button></div>
            </div>
            <div class="col-xs-6 col-sm-4 wrap_portfolio wow fadeInDown">
                <div><img title="??????????????????????????????????????????" src="img/ml.jpg" class="img-responsive" width="100%"></div>
                <h3>??????????????????????????????????????????</h3>
                <div class="mb-1 text-muted">10 ?????????????????? 2022</div>
                <p class="mb-auto">-?????????.??????????????????????????????????????????????????????????????????????????????????????????????????????  ???????????????????????????????????????????????? ????????????????????? ????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                <div class="button"><button class="btn btn-primary">???????????????</button></div>
            </div>
            <div class="col-xs-6 col-sm-4 wrap_portfolio wow fadeInDown">
                <div><img title="??????????????????????????????????????????" src="img/2.jpg" width="100%" class="img-responsive"></div>
                <h3>??????????????????????????????????????????</h3>
                <div class="mb-1 text-muted">12 ?????????????????? 2020</div>
                <p class="card-text mb-auto">-??????. ????????????????????????????????????????????????????????????????????????????????????  ???????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                <p class="card-text mb-auto">-???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                <div class="button"><button class="btn btn-primary">???????????????</button></div>
            </div>
            <div class="col-xs-6 col-sm-4 wrap_portfolio wow fadeInDown">
                <div><img title="??????????????????????????????????????????" src="img/7.jpg" class="img-responsive" width="100%"></div>
                <h3>??????????????????????????????????????????</h3>
                <div class="mb-1 text-muted">29 ????????????????????? 2021</div>
                <p class="mb-auto">-???????????????????????????????????????????????????.??????????????? ????????????????????????????????????????????????????????????????????? ?????????????????????????????? ??????????????????????????????????????????????????????????????????????????????????????????????????? ??????????????????????????????????????????????????????????????????-????????????  ???????????????????????????</p>
                <div class="button"><button class="btn btn-primary">???????????????</button></div>
            </div>
            <div class="col-xs-6 col-sm-4 wrap_portfolio wow fadeInDown">
                <div><img title="????????????????????????????????????????????????????????????" src="img/45.jpg" class="img-responsive" width="100%"></div>
                <h3>????????????????????????????????????????????????????????????</h3>
                <div class="mb-1 text-muted">1 ??????????????????????????? 2020</div>
                <p class="mb-auto">-????????????????????????????????? Open house ????????????????????????????????????</p>
                <div class="button"><button class="btn btn-primary">???????????????</button></div>
            </div>
        </div>
      </div>
    </div>











































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