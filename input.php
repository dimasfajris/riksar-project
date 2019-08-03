<?php
    include 'koneksi.php';
?>

<html>
  <head>
    <title> Riksar 1.0 </title>
    <link href="css/layout.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="outer-wrapper" >
      <div id="header-wrapper"><img src="image/header3.png" style="margin-bottom:-10px;margin-right:350px;width:200px;height:50px;"><b>MEDIA INFORMASI VERBASAR</b> <img src="image/header2.png" style="margin-bottom:-10px;margin-left:450px;width:50px;height:50px;">
      </div>
      <div id="header-wrapper2">
        <ul>
          <li><a href="index.html">BERANDA</a></li>
          <li><a href="input.php">INPUT TARGET</a></li>
          <li><a href="berita.php">INPUT BERITA</a></li>
	        <li><a href="laprod.php">LAPORAN PRODUKSI</a></li>
          <li><a href="inputlaprod.php">INPUT PRODUKSI</a></li>
          <li><a href="tolker.php">TOLERANSI KERUSAKAN</a></li>
          <li style="float:right"><a class="active" href="#about">
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
      <?php
        $query = mysqli_query ($conn, "SELECT * FROM target ORDER BY id DESC limit 1");
        $row_query = mysqli_fetch_array($query);
      ?>
      <div id="header-wrapper2" >
	      <form action="save.php" method="POST" style="margin:50px;">
                Ubah Target Pengiriman : <br><input type="text" name="ukirim" value="<?php echo $row_query['ukirim']; ?>">
                <br>
                Ubah Target Pertahun : <br><input type="text" name="utahun" value="<?php echo $row_query['utahun']; ?>">
                <br>
                Ubah Target Perbulan : <br><input type="text" name="ubulan" value="<?php echo $row_query['ubulan']; ?>">
                <br>
		*Peringatan! Kolom diatas hanya untuk penggantian target saja. Jika ingin input silahkan isi dibagian bawah.
		<br><br><br><br><p>
                Input Target Pengiriman : <br><input type="text" name="ikirim" value="<?php echo $row_query['ikirim']; ?>"> <?php echo $row_query['ikirim']; ?>
                <br>
                Input Target Pertahun : <br><input type="text" name="itahun" value="<?php echo $row_query['itahun']; ?>"> <?php echo $row_query['itahun']; ?>
                <br>
                Input Target Perbulan : <br><input type="text" name="ibulan" value="<?php echo $row_query['ibulan']; ?>"> <?php echo $row_query['ibulan']; ?>
                <br>
                <input type="submit" value="Save"> <input type="reset" value="Reset">
              </form>

      </div>

        <?php
                    $query = mysqli_query ($conn, "SELECT * FROM berita ORDER BY id DESC limit 1");
                    $row_query = mysqli_fetch_array($query);
        ?>
      <div id="footer-wrapper" style="text-align:center;">
          <marquee><?php echo $row_query['berita']; ?></marquee>
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
