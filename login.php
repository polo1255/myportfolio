<?php 
    session_start(); 
    require_once 'db.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body{
        background-color: #293556;
        font-family: myFirstFont;
        src: url(sansation_light.woff);
        }
        section .container{
            margin-top: 250px;
            margin-bottom:140px
        }
        .container .button{
            text-align: center;
            margin: 50px;            
        }
        .container .button p,hr{
            margin-top: 50px; 
        }
        label,h3{
            color: aliceblue;
        }
        footer{
        padding-top: 4rem;
        padding-bottom: 4rem
      }
    </style>
</head>
<body>
<?php include("navbar.php")?>
<section>
    <div class="container" style="max-width: 500px;">
    <?php if(isset($_SESSION['error'])) {?>
                <div class="alert alert-danger" rloe="alert">
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error'])
                    ?>
                </div>
            <?php }?>
            <?php if(isset($_SESSION['succuss'])) {?>
                <div class="alert alert-success" rloe="alert">
                    <?php
                        echo $_SESSION['succuss'];
                        unset($_SESSION['succuss'])
                    ?>
                </div>
            <?php }?>
        <h3 class="mt-4">Log-in</h3>
        <form action="signin_db.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" aria-describedby="password">
            </div>
            <div class="button">
                <button type="submit" class="btn btn-success" name="signin">Sign in</button>
                <button type="reset" class="btn btn-danger" name="reset">cancel</button>
                <hr style="color: white;">
                <p><a href="register.php">สมัครสมาชิกคลิ๊กที่นี่</a></p>
            </div>
            
        </form>
    </div>
</section>
    <footer class="bg-dark">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 text-center">
              <p class="text-muted">&copy; Pootada Torath SchoolTaphanhin</p>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>