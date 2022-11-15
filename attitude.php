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
          color: #ffffff
        }
        .container .c h4{
          float: right;
        }
        .container .c h5{
          float: right;
          color: #ffffff
        }
        footer{
        padding-top: 4rem;
        padding-bottom: 4rem
      }
      .container .c{
        margin-top: 80px;
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
          Attitude
          </h1>
        </div>
        <p>
          <h4>
            ในโลกยุคดิจิทัล  เทคโนโลยีมีบทบาทต่อชีวิตประจำวันของเรามาก  และมีส่วนสำคัญที่ช่วยอำนวยความสะดวก   ทั้งด้านการติดต่อสื่อสาร   การทำธุรกิจ  หรือแม้แต่การศึกษา   
            เทคโนโลยีเข้ามาเป็นตัวช่วยในการอำนวยความสะดวกให้กับมนุษย์   การเกิดการพัฒนาทางด้านเทคโนโลยี  ทำให้เกิดการเปลี่ยนแปลงเชิงสังคมมากมาย  อาทิ การสร้างโลกเสมือนจริง (Metaverse :Virtual Reality—VR)  
            การพัฒนาหุ่นยนต์ที่ใช้ในการทำงาน  เป็นต้น   สิ่งเหล่านี้ล้วนเกิดจากการเรียนรู้  พัฒนาต่อยอด เทคโนโลยีทั้งสิ้น
          </h4>
        <p>
        <p>
          <h4>
            ในช่วงของการค้นหาตนเอง  ผมยังไม่รู้ว่าตนเองมีความถนัดอะไร  หรือชอบอะไร  จนกระทั่งผมำด้แลกเปลี่ยนเรียนรู้ 
            กับเพื่อนคนหนึ่งที่ได้มีโอกาสเข้าแข่งขัน  Web Applicatoin  ผมรู้สึกท้าทาย  ตื่นเต้นกับการทำงานของเพื่อน ผมจึงลองทำการศึกษาและลงมือทำด้วยตนเอง  
            โดยเริ่มต้นจากการทำ web เขียนหน้าเว็บ ทำระบบและออกแบบหน้า Web Applicatoin  จึงรู้สึกชื่นชอบมากที่ได้เรียนรู้การเขียนลูกเล่นของ web และเพลิดเพลินกับการออกแบบในรูปแบบต่างๆ 
            นอกจากนั้นผมยังสนใจเรียนรู้ในเรื่องของการเขียน code ในหุ่นยนต์อีกด้วย
          </h4>
        </p>
        <p>
          <h4>
          เมื่อผมค้นพบความถนัด  และความชอบของผม   จากการลองผิดลองถูก  ผมจึงศึกษาหาข้อมูลเกี่ยวกับอาชีพ  ที่จะทำให้ผมสามารถได้ทำในสิ่งที่ผมรัก   ผมจึงอยากที่จะเป็น  "โปรแกรมเมอร์" เพราะเป็นอาชีพที่มีความท้าทายสำหรับผม  
          การออกแบบโปรแกรม  ที่จะส่งผลต่อโลกในอนาคต  ทำให้ผมมีความสนใจอยากที่จะเรียนรู้  และพัฒนาโปรแกรมที่จะช่วยอำนวยความสะดวกต่อทุกคนในอนาคต
          </h4>
        </p>
        <p>
          <h4>
          ผมอาจจะไม่ได้มีความสามารถด้านเทคโนโลยีมากนัก  แต่ผมคิดว่าความสามารถมาจากการได้รับโอกาส   การทำกิจกรรมในโรงเรียนหลายๆกิจกรรมที่ผมอยากเข้าร่วมเพื่อพัฒนาตนเอง แต่มีข้อจำกัดหลายอย่าง เช่น อุปกรณ์ไม่เพียงพอ   
          หรือจำกัดจำนวนคน  ทำให้ผมพลาดโอกาสสำคัญหลายๆครั้ง  
          แต่ผมก็ไม่เคยที่จะหยุดให้โอกาสตัว  ผมเรียนรู้และพัฒนาตนเองมาโดยตลอด  ในสิ่งที่ผมต้องการเรียนรู้
          </h4>
        </p>
        <p>
          <h4>
          ผมอยากได้รับโอกาส  ในการพัฒนาตนเองเพื่อทำสิ่งที่ผมตั้งใจไว้  คือการประกอบอาชีพโปรแกรมเมอร์  และได้มีโอกาสสร้าง พัฒนาโปรแกรมที่เป็นประโยชน์ ต่อมนุษย์   
          หากผมได้ศึกษาใน  คณะวิทยาศาสตร์  สาขา  วิทยาการคอมพิวเตอร์  จะทำให้ผมได้เรียนรู้เพิ่มเติมในสิ่งที่ผมยังไม่รู้  พัฒนาต่อยอด  ความถนัด ความชอบของผม  ให้ดียิ่งๆขึ้น   
          </h4>
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