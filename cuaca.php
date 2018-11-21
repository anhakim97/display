<?php
set_time_limit(0);
$fp = fopen ('./DIYogyakarta.xml', 'w+');
$ch = curl_init('http://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-DIYogyakarta.xml');// or any url you can pass which gives you the xml file
curl_setopt($ch, CURLOPT_TIMEOUT, 50);
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_exec($ch);
curl_close($ch);
fclose($fp);
$xml = simplexml_load_file("DIYogyakarta.xml");

?>
<?php
foreach ($xml->forecast as $xml1) {
  $timestamp = $xml1->issue->timestamp;
  $year = $xml1->issue->year;
  $month = $xml1->issue->month;
  $day = $xml1->issue->day;
  $hour = $xml1->issue->hour;
  $minute = $xml1->issue->minute;
  $second =$xml1->issue->second;
  $i = 1;

  foreach ($xml->forecast->area as $xml2) {
    $id[$i]=$xml2['id'];
    $name[$i]=$xml2->name;
    $coordinate[$i]=$xml2['coordinate'];
      ?>
      <?php
      $x = 1;
      foreach ($xml2->parameter as $xml3) {
        $idparameter[$x]=$xml3['id'];
        $description[$x]=$xml3['description'];
        $y = 1;
          foreach ($xml3->timerange as $xml4) {
            $h[$i][$x][$y] = $xml4['h'];
            $t[$i][$x][$y] = $xml4->value;
            $cuaca[$i][$x][$y] = $xml4->value;
            $y++;
          }
        
        
        $x++;
      }
      $i++;
  }
}
  ?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>      
      <li data-target="#myCarousel" data-slide-to="4"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php $x = count($idparameter);
      $y = count($h);
      ?>
      <?php for ($i=1; $i < 6; $i++) {
        ?><div class="item <?php if($i==1){ echo "active";} ?>">
          <div class="panel panel-primary">
        	<div class="panel-heading">Prakiraan Cuaca <?php echo $name[$i]; ?></div>
        	<div class="panel-body">
          <div class="row" align="center">
            <div class="col-sm-4" style="background-color: #337ab7; color: white;"><u>Hari Ini , <?php echo $d = date('d-m-Y') ?></u></div>
            <div class="col-sm-4" style="background-color: #ffe400"><u>Besok <?php echo date('d-m-Y', strtotime('+1 days', strtotime( $d ))); ?></u></div>
            <div class="col-sm-4" style="background-color: #337ab7; color: white;"><u>Lusa <?php echo date('d-m-Y', strtotime('+2 days', strtotime( $d ))); ?></u></div>
          </div>
          <div class="row" style="text-align: center;">

          <?php 
            for ($j=1; $j < 13; $j++) { 
              $url='';
              $ket='';
              if($t[$i][7][$j]==100){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah-pm.png';
                $ket="cerah";
                $bg = 'img/bg/cerah-';
              }else if($t[$i][7][$j]==101){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah%20berawan-pm.png';
                $ket="Cerah Berawan";
                $bg = 'img/bg/cerah-berawan-';
              }else if($t[$i][7][$j]==102){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah%20berawan-pm.png';
                $ket="Cerah Berawan";
                $bg = 'img/bg/cerah-berawan-';
              }else if($t[$i][7][$j]==103){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/berawan-pm.png';
                $ket="Berawan";
                $bg = 'img/bg/berawan-';
              }else if($t[$i][7][$j]==104){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/berawan%20tebal-pm.png';
                $bg = 'img/bg/berawan-';
                $ket="Berawan Tebal";
              }else if($t[$i][7][$j]==5){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/udara%20kabur-pm.png';
                $bg = 'img/bg/berawan-';
                $ket="Udara Kabur";
              }else if($t[$i][7][$j]==10){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/asap-pm.png';
                $bg = 'img/bg/berawan-';
                $ket="Asap";
              }else if($t[$i][7][$j]==45){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/kabut-pm.png';
                $bg = 'img/bg/berawan-';
                $ket="Kabut";
              }else if($t[$i][7][$j]==60){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20ringan-pm.png';
                $bg = 'img/bg/hujan-ringan-lokal-';
                $ket="Hujan Ringan";
              }else if($t[$i][7][$j]==61){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20sedang-pm.png';
                $bg = 'img/bg/hujan-ringan-lokal-';
                $ket="Hujan Sedang";
              }else if($t[$i][7][$j]==63){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20lebat-pm.png';
                $bg = 'img/bg/hujan-ringan-lokal-';
                $ket="Hujan Lebat";
              }else if($t[$i][7][$j]==80){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20lokal-pm.png';
                $bg = 'img/bg/hujan-ringan-lokal-';
                $ket="Hujan Lokal";
              }else if($t[$i][7][$j]==95 || $t[$i][7][$j]==97){
                $url='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20petir-pm.png';
                $ket="Hujan Petir";
                $bg = 'img/bg/hujan-ringan-lokal-';
              }

            if ($h[$i][6][$j]==0) {
              $jam= "Dini Hari";
              $bg1 = "malam.jpg";
            }else if($h[$i][6][$j]==6) {
              $bg1 = "siang.jpg";
              $jam= "PAGI";
            }else if($h[$i][6][$j]==12) {
              $bg1 = "siang.jpg";
              $jam= "SIANG";
            }else if($h[$i][6][$j]==18) {
              $bg1 = "malam.jpg";
              $jam= "MALAM";
            }else if ($h[$i][6][$j]==24) {
              $bg1 = "malam.jpg";
              $jam= "Dini Hari";
            }else if($h[$i][6][$j]==30) {
              $bg1 = "siang.jpg";
              $jam= "PAGI";
            }else if($h[$i][6][$j]==36) {
              $bg1 = "siang.jpg";
              $jam= "SIANG";
            }else if($h[$i][6][$j]==42) {
              $bg1 = "malam.jpg";
              $jam= "MALAM";
            }else if ($h[$i][6][$j]==48) {
              $bg1 = "malam.jpg";
              $jam= "Dini Hari";
            }else if($h[$i][6][$j]==54) {
              $bg1 = "siang.jpg";
              $jam= "PAGI";
            }else if($h[$i][6][$j]==60) {
              $bg1 = "siang.jpg";
              $bg1 = "malam.jpg";
              $jam= "SIANG";
            }else if($h[$i][6][$j]==66) {
              $bg1 = "malam.jpg";
              $jam= "MALAM";
            }
              $urlbg = $bg.$bg1;
              $tmin = 1;
              if ($j==1 or $j==2 or $j==3 or $j==4){
                echo "<div class='col-sm-1' style='transform: scale(0.99); background-image:url(".$urlbg."); color: white; '>";
               $tm = "T<i class='fas fa-arrow-down'></i>".$t[$i][5][$tmin]."°C - T<i class='fas fa-arrow-up'></i>".$t[$i][3][$tmin]."°C";
                $tmin++;
                if($tmin==4){
                  $tmin=1;
                }
              }else if($j==5 or $j==6 or $j==7 or $j==8){
                echo "<div class='col-sm-1' style='transform: scale(0.99);border 1px; background-image:url(".$urlbg."); color: white'>";
               $tm = "T<i class='fas fa-arrow-down'></i>".$t[$i][5][$tmin]."°C - T<i class='fas fa-arrow-up'></i>".$t[$i][3][$tmin]."°C";
                $tmin++;
                if($tmin==4){
                  $tmin=1;
                }
              }else{
                echo "<div class='col-sm-1' style='transform: scale(0.99);background-image:url(".$urlbg."); color: white'>";
                $tm = "T<i class='fas fa-arrow-down'></i>".$t[$i][5][$tmin]."°C - T<i class='fas fa-arrow-up'></i>".$t[$i][3][$tmin]."°C";
                $tmin++;
                if($tmin==4){
                  $tmin=1;
                }
              }
              
            echo "<img src='".$url."'style='margin-top:0; width: 50%; height: auto; '><br>";
            echo "<strong style='font-size: 150%'>".$t[$i][6][$j]."°C</strong><br>";
            echo $tm."<br>";
            echo $ket."<br>";
            echo "<strong style='font-size: 120%'>".$jam."</strong><br>";
            echo "<br>";
            echo "</div>";

            }
            ?>
          </div>
      </div></div></div>
            <?php
          } ?>
      
      </div>
 

    <!-- Left and right controls -->
  </div>
