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
          <li><a href="home.php">HOME</a></li>
          <li><a href="input.php">INPUT TARGET</a></li>
          <li><a href="berita.php">INPUT BERITA</a></li>
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

    	<div style="margin-left:150px;width: 85%;height: 85%;">
    		<canvas id="myChart"></canvas>
    	</div>


    	<script>
    		var ctx = document.getElementById("myChart").getContext('2d');
    		var myChart = new Chart(ctx, {
    			type: 'bar',
    			data: {
    				labels: ["Kelompok 1", "Kelompok 2", "Kelompok 3", "Kelompok 4", "Kelompok 5", "Kelompok 6", "Kelompok 7", "Kelompok 8", "Kelompok 9", "Kelompok 10", "Kelompok 11", "Kelompok 12", "Kelompok 13"],
    				datasets: [{
    					label: '# Total Produksi',
    					data: [300,222,30,44,15,116,117,118,19,210,211,412,113],
    					backgroundColor: [
    					'red',
    					'blue',
    					'green',
    					'yellow',
    					'pink',
    					'purpel',
              'rgb(255, 227, 200)',
              'rgb(0, 0, 255)',
              'rgb(138, 43, 226)',
              'rgb(165, 42, 42)',
              'rgb(95, 158, 160)',
              'rgb(127, 255, 1)',
              'rgb(100, 149, 237)',
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
	
	      <div id="header-wrapper2" style="margin-top:50px;font-size:85%;text-align:center;">
        <ul>
          <li><a href="home.php">KELOMPOK 1</a></li>
		  <li><a href="home.php">KELOMPOK 2</a></li>
		  <li><a href="home.php">KELOMPOK 3</a></li>
		  <li><a href="home.php">KELOMPOK 4</a></li>
		  <li><a href="home.php">KELOMPOK 5</a></li>
		  <li><a href="home.php">KELOMPOK 6</a></li>
		  <li><a href="home.php">KELOMPOK 7</a></li>
		  <li><a href="home.php">KELOMPOK 8</a></li>
		  <li><a href="home.php">KELOMPOK 9</a></li>
		  <li><a href="home.php">KELOMPOK 10</a></li>
		  <li><a href="home.php">KELOMPOK 11</a></li>
		  <li><a href="home.php">KELOMPOK 12</a></li>
		  <li><a href="home.php">KELOMPOK 13</a></li>
		  </li>
        </ul>
      </div>
    </div>



  </body>
</html>
