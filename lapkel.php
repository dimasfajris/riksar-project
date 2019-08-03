<?php
    include 'koneksi.php';
?>

<html>
  <head>
    <title> Riksar 1.0 </title>
    <link href="css/layout.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
          <script type="text/javascript" src="Chart.js"></script>
          <style>
            table, th, td {
              border: 1px solid white;
              border-collapse: collapse;
            }
            th, td {
              padding: 5px;
              text-align: center;
            }
          </style>
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
        <button class="dropbtn">Pilih Kelompok</button>
        <div class="dropdown-content">
          <a href="#">Kelompok 1</a>
          <a href="#">Kelompok 2</a>
          <a href="#">Kelompok 3</a>
          <a href="#">Kelompok 4</a>
          <a href="#">Kelompok 5</a>
          <a href="#">Kelompok 6</a>
          <a href="#">Kelompok 7</a>
          <a href="#">Kelompok 8</a>
          <a href="#">Kelompok 9</a>
          <a href="#">Kelompok 10</a>
          <a href="#">Kelompok 11</a>
          <a href="#">Kelompok 12</a>
          <a href="#">Kelompok 13</a>
        </div>
      </div>

      <table style="width:100%;">
        <tr>
          <tr>
          <th rowspan="2">Nama Pegawai</th>
          <th rowspan="2">NP</th>
          <th colspan="31">Tanggal</th>
        </tr>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
          <td>4</td>
          <td>5</td>
          <td>6</td>
          <td>7</td>
          <td>8</td>
          <td>9</td>
          <td>10</td>
          <td>11</td>
          <td>12</td>
          <td>13</td>
          <td>14</td>
          <td>15</td>
          <td>16</td>
          <td>17</td>
          <td>18</td>
          <td>19</td>
          <td>20</td>
          <td>11</td>
          <td>22</td>
          <td>23</td>
          <td>24</td>
          <td>25</td>
          <td>26</td>
          <td>27</td>
          <td>28</td>
          <td>29</td>
          <td>30</td>
          <td>30</td>
        </tr>
        <tr>
          <th>ujang 1</th>
          <th>__</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
        </tr>
        <tr>
          <th>ujang 1</th>
          <th>__</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
        </tr>
        <tr>
          <th>ujang 1</th>
          <th>__</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
        </tr>
        <tr>
          <th>ujang 1</th>
          <th>__</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
        </tr>
        <tr>
          <th>ujang 1</th>
          <th>__</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
        </tr>
        <tr>
          <th>ujang 1</th>
          <th>__</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
        </tr>
        <tr>
          <th>ujang 1</th>
          <th>__</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
        </tr>
        <tr>
          <th>ujang 1</th>
          <th>__</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
        </tr>
        <tr>
          <th>ujang 1</th>
          <th>__</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
        </tr>
        <tr>
          <th>ujang 1</th>
          <th>__</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
          <th>_</th>
        </tr>
      </table>

      <div style="width: 100%;">
    		<canvas id="myChart"></canvas>
    	</div>


    	<script>
    		var ctx = document.getElementById("myChart").getContext('2d');
    		var myChart = new Chart(ctx, {
    			type: 'bar',
    			data: {
    				labels: ["Tanggal 1", "Tanggal 2", "Tanggal 3", "Tanggal 4", "Tanggal 5",
                    "Tanggal 6", "Tanggal 7", "Tanggal 8", "Tanggal 9", "Tanggal 10",
                    "Tanggal 11", "Tanggal 12", "Tanggal 13", "Tanggal 14", "Tanggal 15",
                    "Tanggal 16", "Tanggal 17", "Tanggal 18", "Tanggal 19", "Tanggal 20",
                    "Tanggal 21", "Tanggal 22", "Tanggal 23", "Tanggal 24", "Tanggal 25",
                    "Tanggal 26", "Tanggal 27", "Tanggal 28", "Tanggal 29", "Tanggal 30",],
    				datasets: [{
    					label: '# Total Produksi',
    					data: [41,32,63,64,225,116,227,38,9,310,11,412,13,314,15,316,2,218,19,20,21,22,223,24,25,222,27,28,229,230,31],
    					backgroundColor: [
                'rgb(240, 248, 254)',
                'rgb(251, 235, 217)',
                'rgb(0, 255, 254)',
                'rgb(115, 255, 216)',
                'rgb(239, 255, 255)',
                'rgb(245, 245, 223)',
                'rgb(255, 227, 200)',
                'rgb(0, 0, 255)',
                'rgb(138, 43, 226)',
                'rgb(165, 42, 42)',
                'rgb(240, 248, 254)',
                'rgb(251, 235, 217)',
                'rgb(0, 255, 254)',
                'rgb(115, 255, 216)',
                'rgb(239, 255, 255)',
                'rgb(245, 245, 223)',
                'rgb(255, 227, 200)',
                'rgb(0, 0, 255)',
                'rgb(138, 43, 226)',
                'rgb(165, 42, 42)',
                'rgb(240, 248, 254)',
                'rgb(251, 235, 217)',
                'rgb(0, 255, 254)',
                'rgb(115, 255, 216)',
                'rgb(239, 255, 255)',
                'rgb(245, 245, 223)',
                'rgb(255, 227, 200)',
                'rgb(0, 0, 255)',
                'rgb(138, 43, 226)',
                'rgb(165, 42, 42)',
    					],
    					borderColor: [
                'rgb(240, 248, 254)',
      					'rgb(251, 235, 217)',
      					'rgb(0, 255, 254)',
      					'rgb(115, 255, 216)',
      					'rgb(239, 255, 255)',
      					'rgb(245, 245, 223)',
                'rgb(255, 227, 200)',
                'rgb(0, 0, 255)',
                'rgb(138, 43, 226)',
                'rgb(165, 42, 42)',
                'rgb(95, 158, 160)',
                'rgb(127, 255, 1)',
                'rgb(100, 149, 237)',
    					],
    					borderWidth: 1
    				}]
    			},
    			options: {
    				scales: {
    					yAxes: [{
    						ticks: {
    							beginAtZero:true
    						}
    					}]
    				}
    			}
    		});
    	</script>
    </div>



  </body>
</html>
