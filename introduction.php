<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>introduction</title>
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
        .container-fluid .container{
          background-color: #5983fc;
          width: 100%;
          width: 1000px;
          border-radius: 10px;
          margin-top: 30px;
          margin-bottom: 30px;
          padding: 50px;
          padding-bottom: 100px;
        }
        .container h1{
          padding: 50px;
          color: #ffffff
        }
        .container .row h1{
          background-color: #293556;
          width: 100%;
          border-radius:25px
        }
        .container h3{
          color: #ffffff
        }
        .container h4{
          float: right;
        }
        .container h5{
          float: right;
        }
        footer{
        padding-top: 4rem;
        padding-bottom: 4rem
      }
      .c{
        margin-top: 80px;
      }
      .container .c h4{
          float: right;
          color: #ffffff
        }
        .container .c h5{
          float: right;
          color: #ffffff
        }
        .container_m .name {
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
    <div class="container_m">
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
      <div class="container">
        <div class="row">
          <h1>
          Introduction
          </h1>
        </div>
        <p>
          <h3>
            แฟ้มสะสมผลงาน (Portfolio) นี้ ข้าพเจ้าทำขึ้นเพื่อนเป็นตัวแทนนำเสนอเอกสารข้อมูลเกี่ยวกับ ประวัติส่วนตัว 
            ประวัติการศึกษา ความรู้ ความสามารถ ทักษะ และ ความสนใจพิเศษรวมทั้งเกียรติบัตรตลอดจนพัฒนาการทางด้านต่างๆของข้าพเจ้า
          </h3>
        <p>
        <p>
          <h3>
            ข้าพเจ้าหวังว่าว่าแฟ้มสะสมผลงานฉบับนี้จะทำให้ทุกท่านที่อ่านได้เห็นคุณค่าและความสามารถโดยรวมของข้าพเจ้า
          </h3>
        </p>
        <p>
          <h3>
            ขอขอบคุณคุณครูซึ่งเป็นผู้ให้คำแนะนำ ในการรวบรวมเอกสาร หลักฐาน และข้อมูลต่างๆในการจัดทำแฟ้มสะสมผลงาน (portfolio) ฉบับนี้ให้สำเร็จล่วงด้วยดีและขอขอบพระคุณคุณพ่อ 
            คุณแม่ ที่ได้กรุณาให้ความช่วยเหลือในการจัดเตรียมเอกสารและข้อแนะนำหลายประการจนทำให้แฟ้มสะสมผลงานฉบับนี้มีความสมบูรณ์มากยิ่งขึ้น
          </h3>
        </p>
        <div class="c">
          <p><h4>ภูธดา โตรัตน์</h4></p><br>
          <p><h5>ผู้จัดทำ</h5></p>
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