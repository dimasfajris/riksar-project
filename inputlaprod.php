<?php
    include 'koneksi.php';
?>

<html>
  <head>
    <title> Riksar 1.0 </title>
    <link href="css/layout.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
          <script type="text/javascript" src="Chart.js"></script>
  </head>
  <body>
    <div id="outer-wrapper" >
      <div id="header-wrapper"><img src="image/header3.png" style="margin-bottom:-10px;margin-right:350px;width:200px;height:50px;"><b>MEDIA INFORMASI VERBASAR</b> <img src="image/header2.png" style="margin-bottom:-10px;margin-left:450px;width:50px;height:50px;">
      </div>
      <div id="header-wrapper2" >
        <ul>
          <li><a href="index.html">BERANDA</a></li>
          <li><a href="input.php">INPUT TARGET</a></li>
          <li><a href="berita.php">INPUT BERITA</a></li>
	        <li><a href="laprod.php">LAPORAN PRODUKSI</a></li>
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

    	<style type="text/css">
    		body{
    			font-family: roboto;
    		}
    	</style>

      <style>
      /* Style The Dropdown Button */
      .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
      }

      /* The container <div> - needed to position the dropdown content */
      .dropdown {
        position: relative;
        display: inline-block;
      }

      /* Dropdown Content (Hidden by Default) */
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      /* Links inside the dropdown */
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }

      /* Change color of dropdown links on hover */
      .dropdown-content a:hover {background-color: #f1f1f1}

      /* Show the dropdown menu on hover */
      .dropdown:hover .dropdown-content {
        display: block;
      }

      /* Change the background color of the dropdown button when the dropdown content is shown */
      .dropdown:hover .dropbtn {
        background-color: #3e8e41;
      }
      </style>

      <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>

      <form action="contact.php" method="POST">
          <fieldset>
          <legend>Form</legend>
          <p>
              <label>Tanggal :</label>
              <input type="date" name="tanggal" />
          </p>
          <p>
              <label>jumlah blanko:</label>
              <input type="number" min="10" max="90" name="umur" />
          </p>
          <p>
              <label>jumlah seri:</label>
              <input type="number" min="10" max="90" name="umur" />
          </p>
          <p>
              <input type="submit" name="submit" value="Send" />
          </p>
          </fieldset>
      </form>

    </div>



  </body>
</html>
