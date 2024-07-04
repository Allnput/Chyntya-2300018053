<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <title>OTAKUVERSE</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
      <!-- ================================== HEADER ======================================== --> 
  <header class="header" id="header">
  <nav class="nav container">
    <a href="index.php" class="nav__logo"><img src="img/logo.png" alt="logo"></a>
    <div class="nav__menu" id="nav-menu">
      <ul class="nav__list">
         <li class="nav__item">
            <a href="index.php" class="nav__link">Home</a>
         </li>

   <!-- Close button -->
   <div class="nav__close" id="nav-close">
      <i class="ri-close-line"></i>
   </div>
</div>

<div class="nav__actions">
   <!-- Toggle button -->
   <div class="nav__toggle" id="nav-toggle">
      <i class="ri-menu-line"></i>
   </div>
</div>
</nav>
</header>

      <!-- ================================== HEADER END ======================================== --> 
      <h1 class="anime-list">ANIME LIST</h1>

      <div class="box">
        </div>

   <div class="list-carousel">
      <div class="list-track">
       <div class="list-anime">
           <div class="foto">
            <a href="kny.php"><img src="img/kny.jpg" alt="Rebecca Flex"></a>
           </div>
           <h3 class="dalam-foto">kimetsu no yaiba</h3>
           <div class="box-jadwal">
           <p>Selasa</p>
           </div>
       </div>

       <div class="list-anime">
           <div class="foto">
            <a href="aot.php"><img src="img/aot.jpg" alt="Rebecca Flex"></a>
           </div>
           <h3 class="dalam-foto">Attack on titan</h3>
           <div class="box-jadwal">
           <p>Kamis</p>
           </div>
       </div>

       <div class="list-anime">
           <div class="foto">
            <a href="bb.php"><img src="img/blackbutler.jpg" alt="Rebecca Flex"></a>
           </div>
           <h3 class="dalam-foto">Kuroshitsuji</h3>
           <div class="box-jadwal">
           <p>Jumat</p>
           </div>
       </div>

       <div class="list-anime">
           <div class="foto">
            <a href="date.php"><img src="img/datealive.jpg" alt="Rebecca Flex"></a>
           </div>
           <h3 class="dalam-foto">Date a live</h3>
           <div class="box-jadwal">
           <p>Jumat</p>
           </div>
       </div>

       <div class="list-anime">
           <div class="foto">
            <a href="dr.php"><img src="img/dr_stone.jpg" alt="Rebecca Flex"></a>
           </div>
           <h3 class="dalam-foto">Dr. Stone</h3>
           <div class="box-jadwal">
           <p>Sabtu</p>
           </div>
       </div>

       <div class="list-anime">
           <div class="foto">
            <a href="hori.php"><img src="img/horimiya.jpg" alt="Rebecca Flex"></a>
           </div>
           <h3 class="dalam-foto">Horimiya</h3>
           <div class="box-jadwal">
           <p>Minggu</p>
           </div>
       </div>

       <div class="list-anime">
           <div class="foto">
            <a href="jjk.php"><img src="img/jjk.jpg" alt="Rebecca Flex"></a>
           </div>
           <h3 class="dalam-foto">Jujutsu Kaisen</h3>
           <div class="box-jadwal">
           <p>Senin</p>
           </div>
       </div>
      
       <div class="list-anime">
           <div class="foto">
            <a href="mushoku.php"><img src="img/moushoku tensei.jpg" alt="Rebecca Flex"></a>
           </div>
           <h3 class="dalam-foto">Moushoku Tensei</h3>
           <div class="box-jadwal">
           <p>Senin</p>
           </div>
       </div>

       <div class="list-anime">
           <div class="foto">
            <a href="spy.php"><img src="img/spy.jpg" alt="Rebecca Flex"></a>
           </div>
           <h3 class="dalam-foto">Spy X Family</h3>
           <div class="box-jadwal">
           <p>Senin</p>
           </div>
       </div>

       <div class="list-anime">
           <div class="foto">
            <a href="tate.php"><img src="img/tatenoyusha.jpg" alt="Rebecca Flex"></a>
           </div>
           <h3 class="dalam-foto">Tate no Yusha</h3>
           <div class="box-jadwal">
           <p>Senin</p>
           </div>
       </div>

       <div class="list-anime">
           <div class="foto">
            <a href="wind.php"><img src="img/windbreaker.jpg" alt="Rebecca Flex"></a>
           </div>
           <h3 class="dalam-foto">Wind Breaker</h3>
           <div class="box-jadwal">
           <p>Selasa</p>
           </div>
       </div>
       
      </div>  
   </div>  


   <!-- ============================== FOOOTER ================================= -->
   <footer class="footer">
    <div class="footer-left">
        <!-- ========================================= HIT COUNTER ====================================== -->
      <?php

      echo "<meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>";
      
      $con=mysqli_connect('localhost','root','','MyDB');
      
      $sql='SELECT * from tbl_visitor';
      
      $res=mysqli_query($con,$sql);
      
      $row=mysqli_fetch_array($res);
      
      $str=$row[0];
      
      $length=strlen($str);
      
      if($length==1)
       $counter="00000000".$row[0];
      else if($length==2)
       $counter="0000000".$row[0];
      else if($length==3)
       $counter="000000".$row[0]; 
      else if($length==4)
       $counter="00000".$row[0];
      else if($length==5)
       $counter="0000".$row[0];
      else if($length==6)
       $counter="000".$row[0];
      else if($length==7)
       $counter="00".$row[0];
      else if($length==8)
       $counter="0" .$row[0];
      
      $up_count=$row[0]+1; 
      $sql="UPDATE `tbl_visitor` SET `count`= '$up_count' WHERE 1";
      
      mysqli_query($con,$sql);
      
      ?>
      
      <div class='row'>
       <div cass='col-4'>
       <h5 class='text-danger'>View</h5>
       </div>
       <div class='col-8'>
        <table class='table-sm' style='background-color: #F19351; color: black;'> 
         <tr>
            <td style='border: 1px solid white; color: black;'><?php echo $counter[0] ?></td>
            <td style='border: 1px solid white; color: black;'><?php echo $counter[1] ?></td>
            <td style='border: 1px solid white; color: black;'><?php echo $counter[2] ?></td>
            <td style='border: 1px solid white; color: black;'><?php echo $counter[3] ?></td>
            <td style='border: 1px solid white; color: black;'><?php echo $counter[4] ?></td>
            <td style='border: 1px solid white; color: black;'><?php echo $counter[5] ?></td>
            <td style='border: 1px solid white; color: black;'><?php echo $counter[6] ?></td>
            <td style='border: 1px solid white; color: black;'><?php echo $counter[7] ?></td>
            <td style='border: 1px solid white; color: black;'><?php echo $counter[8] ?></td>
          </tr>
        </table>
       </div>
      </div>
              <!-- ========================================= HIT COUNTER END ====================================== -->

    </div>

    <div class="footer-center">
        <div>
          <i class="ri-mail-fill"></i>
            <p><a href="#">OtakuVerse@gmail.com</a></p>
        </div>
    </div>

    <div class="footer-right">
        <p class="footer-about">
            <span>About</span>
            OtakuVerse adalah platform digital yang didedikasikan untuk para penggemar anime Otakuverse bertujuan menjadi sumber utama informasi bagi para penggemar anime, 
            membantu mereka untuk selalu terupdate dengan anime-anime terbaru yang tayang setiap musimnya.
        </p>

        <div class="footer-media">
            <a href="#"><i class="ri-tiktok-fill"></i></a>
            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"><i class="ri-twitter-x-line"></i></a>
            <a href="#"><i class="ri-instagram-fill"></i></a>
        </div>
    </div>

</footer>
   <!-- ============================== FOOOTER END ================================= -->
  <!-- JAVA -->
  <script src="js/script.js"></script>
</body>

</html>