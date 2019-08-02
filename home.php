<?php
    include 'koneksi.php';
?>

<html>
  <head>
	<meta http-equiv="refresh" content="3600">
    <title> Riksar 1.0 </title>
    <link href="css/layout.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="outer-wrapper" >
      <div id="header-wrapper"><img src="image/header3.png" style="margin-bottom:-10px;margin-right:350px;width:200px;height:50px;"><b>MEDIA INFORMASI VERBASAR</b> <img src="image/header2.png" style="margin-bottom:-10px;margin-left:450px;width:50px;height:50px;">
      </div>
      <div id="header-wrapper2">
        <ul>
          <li><a href="home.php">HOME</a></li>
          <li><a href="input.php">INPUT TARGET</a></li>
          <li><a href="berita.php">INPUT BERITA</a></li>
          <li style="float:right"><a class="active" href="#">
            <script type='text/javascript'>
              var months = ['JANUARI', 'FEBRUARI', 'MARET', 'APRIL', 'MEI', 'JUNI', 'JULI', 'AGUSTUS', 'SEPTEMBER', 'OKTOBER', 'NOVEMBER', 'DESEMBER'];
              var myDays = ['MINGGU', 'SENIN', 'SELASA', 'RABU', 'KAMIS', 'JUM&#39;AT', 'SABTU'];
              var date = new Date();
              var day = date.getDate();
              var month = date.getMonth();
              var thisDay = date.getDay(),
                  thisDay = myDays[thisDay];
              var yy = date.getYear();
              var year = (yy < 1000) ? yy + 1900 : yy;
                  document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
            </script></a>
          </li>
        </ul>
      </div>

      <div id="sidebar-wrapper">
        <button onclick="document.getElementById('myImage1').src='image/s.jpg'">OFF</button>
        <button onclick="document.getElementById('myImage1').src='image/s2.jpg'">ON</button>
        <img id="myImage1" src="image/s.jpg" style="width:100%">
        <button onclick="document.getElementById('myImage2').src='image/t.jpg'">OFF</button>
        <button onclick="document.getElementById('myImage2').src='image/t2.jpg'">ON</button>
        <img id="myImage2" src="image/t.jpg" style="width:100%">
        <button onclick="document.getElementById('myImage3').src='image/u.jpg'">OFF</button>
        <button onclick="document.getElementById('myImage3').src='image/u2.jpg'">ON</button>
        <img id="myImage3" src="image/u.jpg" style="width:100%">
        <button onclick="document.getElementById('myImage4').src='image/v.jpg'">OFF</button>
        <button onclick="document.getElementById('myImage4').src='image/v2.jpg'">ON</button>
        <img id="myImage4" src="image/v.jpg" style="width:100%">
      </div>
      <div id="sidebar-wrapper2">
        <button onclick="document.getElementById('myImage6').src='image/w.jpg'">OFF</button>
        <button onclick="document.getElementById('myImage6').src='image/w2.jpg'">ON</button>
        <img id="myImage6" src="image/w.jpg" style="width:100%">
        <button onclick="document.getElementById('myImage7').src='image/x.jpg'">OFF</button>
        <button onclick="document.getElementById('myImage7').src='image/x2.jpg'">ON</button>
        <img id="myImage7" src="image/x.jpg" style="width:100%">
        <button onclick="document.getElementById('myImage8').src='image/y.jpg'">OFF</button>
        <button onclick="document.getElementById('myImage8').src='image/y2.jpg'">ON</button>
        <img id="myImage8" src="image/y.jpg" style="width:100%">
        <button onclick="document.getElementById('myImage9').src='image/n.jpg'">OFF</button>
        <button onclick="document.getElementById('myImage9').src='image/n2.jpg'">ON</button>
        <img id="myImage9" src="image/n.jpg" style="width:100%">
      </div>
    

        <?php
                    $query = mysqli_query ($conn, "SELECT * FROM target ORDER BY id DESC limit 1");
                    $row_query = mysqli_fetch_array($query);
        ?> 


<div class="mySlides">
      <div id="main-wrapper">
        <h2 class="main-wrapper">TARGET TAHUNAN</h2>
        <p class="per"><u>
        <?php 
         $target=$row_query['utahun'];
         $persen = $row_query['itahun'] / $target * 100;
         echo round($persen, 2);
        ?> %
         </u></p>
        <p class="dar"><?php echo number_format($row_query['itahun'], 0, '', '.'); ?> / <?php echo number_format($row_query['utahun'], 0, '', '.'); ?></p>
      </div>
</div>

<div class="mySlides">
       <div id="main-wrapper">
        <h2 class="main-wrapper">PENGIRIMAN KE BI</h2>
        <p class="per"><u>
        <?php 
         $target=$row_query['ukirim'];
         $persen = $row_query['ikirim'] / $target * 100;
         echo round($persen, 2);
        ?> %
         </u></p>
        <p class="dar"><?php echo number_format($row_query['ikirim'], 0, '', '.'); ?> / <?php echo number_format($row_query['ukirim'], 0, '', '.'); ?></p>
      </div>
</div>

<div class="mySlides">
       <div id="main-wrapper">
        <h2 class="main-wrapper">TARGET BULANAN</h2>
        <p class="per"><u>
        <?php 
         $target=$row_query['ubulan'];
         $persen = $row_query['ibulan'] / $target * 100;
         echo round($persen, 2);
        ?> %
         </u></p>
        <p class="dar"><?php echo number_format($row_query['ibulan'], 0, '', '.'); ?> / <?php echo number_format($row_query['ubulan'], 0, '', '.'); ?></p>
      </div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

      
      <div id="footer-wrapper">

        <marquee>
        <?php
                    $query = mysqli_query ($conn, "SELECT * FROM batik WHERE tanggal=DATE(NOW())");
                    $row_query = mysqli_fetch_array($query);
        ?> 
<?php echo $row_query['berita']; ?> 


        <?php
                    $query = mysqli_query ($conn, "SELECT * FROM berita ORDER BY id DESC limit 1");
                    $row_query = mysqli_fetch_array($query);
        ?> 
<?php echo $row_query['berita']; ?> 
</marquee>
      </div>
      <div id="footer-wrapper2">
        <div id="clock"></div>
        <script type="text/javascript">
          function showTime() {
            var a_p = "";
            var today = new Date();
            var curr_hour = today.getHours();
            var curr_minute = today.getMinutes();
            var curr_second = today.getSeconds();
            if (curr_hour < 12) {
                a_p = "AM";
              } else {
                a_p = "PM";
              }
            if (curr_hour == 0) {
              curr_hour = 12;
              }
            if (curr_hour > 12) {
              curr_hour = curr_hour - 12;
              }
              curr_hour = checkTime(curr_hour);
              curr_minute = checkTime(curr_minute);
              curr_second = checkTime(curr_second);
              document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
            }

          function checkTime(i) {
            if (i < 10) {
              i = "0" + i;
            }
          return i;
            }
            setInterval(showTime, 500);
      </script>


    </div>
    </div>



  </body>
</html>
