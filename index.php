<?php include 'datacuaca.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Informasi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" href="bmkg.png" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bmkg.go.id/asset/css/thrustfault.css" type="text/css" />
  <link rel="stylesheet" href="http://www.bmkg.go.id/asset/css/thunderstorm.css" type="text/css" />
  <link href="https://playground.anychart.com/gallery/Circular_Gauges/Wind_Direction/iframe" rel="canonical">
  <link href="css/anychart-ui.min.css" rel="stylesheet" type="text/css">
  <link href="css/anychart-font.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="jqwidgets/jqxdraw.js"></script>
<script type="text/javascript" src="jqwidgets/jqxgauge.js"></script>
<script src="js/anychart-base.min.js"></script>
  <script src="js/anychart-ui.min.js"></script>
  <script src="js/anychart-exports.min.js"></script>
  <script src="js/anychart-circular-gauge.min.js"></script>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>

<style type="text/css">
        html{height: 100%;}
        body {min-height: 100%; min-width: 100%; text-align: center;margin: 0;  }
    .shadoww{
      -webkit-box-shadow: -2px 3px 40px 0px rgba(0,0,0,0.79);
            -moz-box-shadow: -2px 3px 40px 0px rgba(0,0,0,0.79);
             box-shadow: -2px 3px 40px 0px rgba(0,0,0,0.79);
    }
       
        .tabelvalue {
          background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #fafafa), color-stop(100%, #f3f3f3));
          background-image: -webkit-linear-gradient(#fafafa, #f3f3f3);
          background-image: -moz-linear-gradient(#fafafa, #f3f3f3);
          background-image: -o-linear-gradient(#fafafa, #f3f3f3);
          background-image: -ms-linear-gradient(#fafafa, #f3f3f3);
          background-image: linear-gradient(#fafafa, #f3f3f3);
          -webkit-border-radius: 3px;
          -moz-border-radius: 3px;
          -ms-border-radius: 3px;
          -o-border-radius: 3px;
          border-radius: 3px;
          -webkit-box-shadow: 0 0 50px rgba(0, 0, 0, 0.2);
          -moz-box-shadow: 0 0 50px rgba(0, 0, 0, 0.2);
          box-shadow: 0 0 50px rgba(0, 0, 0, 0.2);
          padding: 7px;
      }
    .labelcompass{
      font-family: Helvetica; text-align: center; font-size: 16px;
       color:black;
    }
    .arahangin{
      font-family: Helvetica; text-align: center; font-size: 19px;
      color:black; font-weight:bold;
    }
    .soillabel{
      font-size: 20px;text-align: left; color:#FFFF66; text-shadow: 0 0 10px #000066;
    }
    </style>    

 <script type="text/javascript">

        $(document).ready(function () {
          //$('#cuaca').load('cuaca.php');

          
        $('#compass').jqxGauge({
                ticksMinor: { interval: 1, size: '5%',style: {
                        fill: '#000000',
                        stroke: '#000000',
                        'stroke-width': '1px'
                    }   },
                ticksMajor: { interval: 20, size: '-5%',style: {
                        fill: '#000000',
                        stroke: '#000000',
                        'stroke-width': '2px'
                    }   },
                value: 0,
                width: '100%',
                height: '90%',
                labels: { visible: false},

                
        colorScheme: 'scheme02',
                border:{visible:false},
                animationDuration: 500,
                min: 0, max: 360,
                pointer: { length: '75%', width: '20%' ,style: { fill: '#ffffff', stroke: '#ffffff' } },
                style: { fill: 'none' },
                startAngle: -90,
                endAngle: 270, 
                
            });
            
              var hitung=0;    
              function lihatdata(){
             //toggleBounce();
               $.ajax({
                  type:"POST",
                  url:"data.php",
                  data:"viewdata=all",
                  dataType:"json",
                  success:function(data){
                 
                    $("#updatetime").html(data.tanggal);
                    $("#Jam").html(data.Jam);
                    $("#RR").html(data.RR);
                    $("#WS_AVG").html(data.WS_AVG);
                        $("#WS_MAX").html(data.WS_MAX);
                    $("#WD_AVG").html(data.WD_AVG);
                    $("#TT_AIR_MAX").html(data.TT_AIR_MAX);
                    $("#TT_AIR_AVG").html(data.TT_AIR_AVG);
                        $("#TT_AIR_MIN").html(data.TT_AIR_MIN);
                        $("#RH_MAX").html(data.RH_MAX);
                    $("#RH_AVG").html(data.RH_AVG);
                    $("#RH_MIN").html(data.RH_MIN);   
                    $("#PP_AIR_MAX").html(data.PP_AIR_MAX);
                    $("#PP_AIR_AVG").html(data.PP_AIR_AVG);        
                    $("#PP_AIR_MIN").html(data.PP_AIR_MIN);
                    $("#SR_AVG").html(data.SR_AVG);   
                    $("#SR_MAX").html(data.SR_MAX); 
                    $("#WL").html(data.WL);       
                    $("#TT_WL").html(data.TT_WL);
                    $("#TT_TS_M5").html(data.TT_TS_M5);
                    $("#TT_TS_0").html(data.TT_TS_0);
                    $("#TT_TS_5").html(data.TT_TS_5);
                    $("#TT_TS_10").html(data.TT_TS_10);
                    $("#TT_TS_20").html(data.TT_TS_20);
                    $("#TT_TS_50").html(data.TT_TS_50);
                    $("#TT_TS_100").html(data.TT_TS_100);
                    $("#TT_BS_M5").html(data.TT_BS_M5);
                    $("#TT_BS_0").html(data.TT_BS_0);
                    $("#TT_BS_5").html(data.TT_BS_5);
                    $("#TT_BS_10").html(data.TT_BS_10);
                    $("#TT_BS_20").html(data.TT_BS_20);
                    $("#TT_BS_50").html(data.TT_BS_50);
                    $("#TT_BS_100").html(data.TT_BS_100);
                    $('#compass').jqxGauge('value', data.WD_AVG);
                    //alert(data.WD_AVG);                
               
               } 
              });
           

}
     function viewRadar(){
      var url = 'http://dataweb.bmkg.go.id/MEWS/Radar/Citra_Radar_JOGJ.png';
          $.ajax({ 
              url : url, 
              cache: true,
              processData : false,
          }).always(function(){
              $("#radarCuaca").attr("src", url);
          }); 
    }
    function loadGempa(){

            $('#Gempa').load('getgempa.php');

    }       
           
     setInterval(function () {
            lihatdata();
            viewRadar();
            loadGempa();
        }, 2000);
    });
    
    



        
    </script>
    
</head>
<body style="background-image: url('img/back.jpg');">
  <div id=""></div>
<div class="container-fluid">
  <style type="text/css">
    @media only screen and (min-width: 768px) { 
      .logo{
        left: 30%; 
      }
    }
    @media only screen and (min-width: 400px) { 
      .logo{
        left: 5%;
      } 
    }
    
  </style>
  <div class="row" style="color: white">
    <img src="bmkg.png" style="height: 70px; position: absolute;" class="logo">
    <h3 style="color: white"><strong>STASIUN KLIMATOLOGI MLATI</strong></h3>
    <p>BMKG YOGYAKARTA</p>
    
  </div>
  <div id="cuaca"></div>
  <div class="row">
    <div class="col-sm-3 col-xs-12">
      <div class="row" style="height: 30px; background-color: #337ab7; text-align: center; color: white"> <strong>Cuaca Hari Ini Sleman</strong></div>
              <?php 
            date_default_timezone_set('Asia/Jakarta');
            date_default_timezone_get();
            $j = date('H');
            $date = date('Ymd');
            $tminToday = $cuaca['Sleman']['tmin'][$date];
            $tmaxToday = $cuaca['Sleman']['tmax'][$date];

         ?>
                             <?php 
                    function getData($j){
                      include 'datacuaca.php';
                      if ($j == '00' or $j == '01' or $j == '02' or $j == '03' or $j == '04' or $j == '05') {
                        $dataCuaca['jam'] = "Dini Hari";
                        $dataCuaca['bg1'] = "malam.jpg";
                        $dataCuaca['suhu'] = $cuaca['Sleman']['t']['0'];
                        $weather = $cuaca['Sleman']['weather']['0'];
                        $dataCuaca['hu'] = $cuaca['Sleman']['hu']['0'];
                        $dataCuaca['h'] = 0;
                      }else if($j == '06' or $j == '07' or $j == '08' or $j == '09' or $j == '10' or $j == '11'){
                        $dataCuaca['bg1'] = "siang.jpg";
                        $dataCuaca['suhu'] = $cuaca['Sleman']['t']['6'];
                        $weather = $cuaca['Sleman']['weather']['6'];
                        $dataCuaca['hu'] = $cuaca['Sleman']['hu']['6'];
                        $dataCuaca['jam'] = "Pagi";
                        $dataCuaca['h'] = 6;
                      }else if($j == '12' or $j == '13' or $j == '14' or $j == '15' or $j == '16' or $j == '17'){
                        $dataCuaca['bg1'] = "siang.jpg";
                        $dataCuaca['jam'] = "Siang";
                        $dataCuaca['suhu'] = $cuaca['Sleman']['t']['12'];
                        $weather = $cuaca['Sleman']['weather']['12'];
                        $dataCuaca['hu'] = $cuaca['Sleman']['hu']['12'];
                        $dataCuaca['h'] = 12;
                      }else{
                        $dataCuaca['bg1'] = "malam.jpg";
                        $dataCuaca['jam'] = "Malam";
                        $dataCuaca['suhu'] = $cuaca['Sleman']['t']['18'];
                        $weather = $cuaca['Sleman']['weather']['18'];
                        $dataCuaca['hu'] = $cuaca['Sleman']['hu']['18'];
                        $dataCuaca['h'] = 18;
                      }
                      if($weather==100){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah-pm.png';
                        $dataCuaca['ket']="cerah";
                        $dataCuaca['bg'] = 'img/bg/cerah-';
                      }else if($weather==101){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah%20berawan-pm.png';
                        $dataCuaca['ket']="Cerah Berawan";
                        $dataCuaca['bg'] = 'img/bg/cerah-berawan-';
                      }else if($weather==102){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/cerah%20berawan-pm.png';
                        $dataCuaca['ket']="Cerah Berawan";
                        $dataCuaca['bg'] = 'img/bg/cerah-berawan-';
                      }else if($weather==103){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/berawan-pm.png';
                        $dataCuaca['ket']="Berawan";
                        $dataCuaca['bg'] = 'img/bg/berawan-';
                      }else if($weather==104){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/berawan%20tebal-pm.png';
                        $dataCuaca['bg'] = 'img/bg/berawan-';
                        $dataCuaca['ket']="Berawan Tebal";
                      }else if($weather==5){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/udara%20kabur-pm.png';
                        $dataCuaca['bg'] = 'img/bg/berawan-';
                        $dataCuaca['ket']="Udara Kabur";
                      }else if($weather==10){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/asap-pm.png';
                        $dataCuaca['bg'] = 'img/bg/berawan-';
                        $dataCuaca['ket']="Asap";
                      }else if($weather==45){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/kabut-pm.png';
                        $dataCuaca['bg'] = 'img/bg/berawan-';
                        $dataCuaca['ket']="Kabut";
                      }else if($weather==60){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20ringan-pm.png';
                        $dataCuaca['bg'] = 'img/bg/hujan-ringan-lokal-';
                        $dataCuaca['ket']="Hujan Ringan";
                      }else if($weather==61){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20sedang-pm.png';
                        $dataCuaca['bg'] = 'img/bg/hujan-ringan-lokal-';
                        $dataCuaca['ket']="Hujan Sedang";
                      }else if($weather==63){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20lebat-pm.png';
                        $dataCuaca['bg'] = 'img/bg/hujan-ringan-lokal-';
                        $dataCuaca['ket']="Hujan Lebat";
                      }else if($weather==80){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20lokal-pm.png';
                        $dataCuaca['bg'] = 'img/bg/hujan-ringan-lokal-';
                        $dataCuaca['ket']="Hujan Lokal";
                      }else if($weather==95 || $weather==97){
                        $dataCuaca['url']='https://www.bmkg.go.id/asset/img/weather_icon/ID/hujan%20petir-pm.png';
                        $dataCuaca['ket']="Hujan Petir";
                        $dataCuaca['bg'] = 'img/bg/hujan-ringan-lokal-';
                      }
                      $dataCuaca['urlbg'] = $dataCuaca['bg'].$dataCuaca['bg1'];
                      return $dataCuaca;
                    }
                    ?>
                    <?php  
                    $dataCuaca = getData($j); 
                    ?>
         <div class="row" style="background-image:url('<?=$dataCuaca['urlbg'];?>'); color: white;">
            <div class="col-sm-7 col-xs-7">
              <img src='<?=$dataCuaca['url'];?>'style='margin-top:0; width: 70%; height: auto; '><br>
              <strong style='font-size: 150%'><?=$dataCuaca['suhu']; ?>°C</strong><br>
              <strong style='font-size: 150%'><?=$dataCuaca['ket']; ?></strong><br>
              T<i class='fas fa-arrow-down'></i><?=$tminToday?>°C 
              - T<i class='fas fa-arrow-up'></i><?=$tmaxToday?>°C
              - H <i class='fas fa-tint'></i> <?=$dataCuaca['hu']?><br>
              <strong style='font-size: 150%'><?=$dataCuaca['jam']; ?></strong><br>
            </div>
            <div class="col-sm-5 col-xs-5">
                    <?php if ($dataCuaca['jam'] == 'Dini Hari') {
                    ?>
                    <!-- pagi -->
                    <?php  $dataCuaca = getData('6'); ?>
                    <div class="row" style="background-image:url('<?=$dataCuaca['urlbg'];?>'); color: white;">
                      <div class="col-sm-6 col-xs-6">
                        <br>
                        <img src='<?=$dataCuaca['url'];?>'style='margin-top:0; width: 100%; height: auto; '><br>
                        <strong><?=$dataCuaca['suhu']; ?>°C</strong><br>
                      </div>
                      <div class="col-sm-6 col-xs-6"><strong><?=$dataCuaca['jam']; ?></strong><br>
                        <?=$dataCuaca['ket']; ?>
                      </div>
                    </div>
                    <!-- end pagi -->
                    <!-- siang -->
                    <?php  $dataCuaca = getData('12'); ?>
                    <div class="row" style="background-image:url('<?=$dataCuaca['urlbg'];?>'); color: white;">
                      <div class="col-sm-6 col-xs-6">
                        <br>
                        <img src='<?=$dataCuaca['url'];?>'style='margin-top:0; width: 100%; height: auto; '><br>
                        <strong><?=$dataCuaca['suhu']; ?>°C</strong><br>
                      </div>
                      <div class="col-sm-6 col-xs-6"><strong><?=$dataCuaca['jam']; ?></strong><br>
                        <?=$dataCuaca['ket']; ?>
                      </div>
                    </div>
                    <!-- end siang -->
                    <!-- malam -->
                    <?php  $dataCuaca = getData('18'); ?>
                    <div class="row" style="background-image:url('<?=$dataCuaca['urlbg'];?>'); color: white;">
                      <div class="col-sm-6 col-xs-6">
                        <br>
                        <img src='<?=$dataCuaca['url'];?>'style='margin-top:0; width: 100%; height: auto; '><br>
                        <strong><?=$dataCuaca['suhu']; ?>°C</strong><br>
                      </div>
                      <div class="col-sm-6 col-xs-6"><strong><?=$dataCuaca['jam']; ?></strong><br>
                        <?=$dataCuaca['ket']; ?>
                      </div>
                    </div>
                    <!-- end malam -->
                    <?php
                        }else if ($dataCuaca['jam'] == 'Pagi') {
                    ?>
                    <!-- siang -->
                    <?php  $dataCuaca = getData('12'); ?>
                    <div class="row" style="background-image:url('<?=$dataCuaca['urlbg'];?>'); color: white;">
                      <div class="col-sm-6 col-xs-6">
                        <br>
                        <img src='<?=$dataCuaca['url'];?>'style='margin-top:0; width: 100%; height: auto; '><br>
                        <strong><?=$dataCuaca['suhu']; ?>°C</strong><br>
                      </div>
                      <div class="col-sm-6 col-xs-6"><strong><?=$dataCuaca['jam']; ?></strong><br>
                        <?=$dataCuaca['ket']; ?>
                      </div>
                    </div>
                    <!-- end siang -->
                    <!-- malam -->
                    <?php  $dataCuaca = getData('18'); ?>
                    <div class="row" style="background-image:url('<?=$dataCuaca['urlbg'];?>'); color: white;">
                      <div class="col-sm-6 col-xs-6">
                        <br>
                        <img src='<?=$dataCuaca['url'];?>'style='margin-top:0; width: 100%; height: auto; '><br>
                        <strong><?=$dataCuaca['suhu']; ?>°C</strong><br>
                      </div>
                      <div class="col-sm-6 col-xs-6"><strong><?=$dataCuaca['jam']; ?></strong><br>
                        <?=$dataCuaca['ket']; ?>
                      </div>
                    </div>
                    <!-- end malam -->               
                    <?php
                        }else if ($dataCuaca['jam'] == 'Siang') {
                    ?>
                    <!-- malam -->
                    <?php  $dataCuaca = getData('18'); ?>
                    <div class="row" style="background-image:url('<?=$dataCuaca['urlbg'];?>'); color: white;">
                      <div class="col-sm-6 col-xs-6">
                        <br>
                        <img src='<?=$dataCuaca['url'];?>'style='margin-top:0; width: 100%; height: auto; '><br>
                        <strong><?=$dataCuaca['suhu']; ?>°C</strong><br>
                      </div>
                      <div class="col-sm-6 col-xs-6"><strong><?=$dataCuaca['jam']; ?></strong><br>
                        <?=$dataCuaca['ket']; ?>
                      </div>
                    </div>
                    <!-- end malam -->          
                    <?php
                        }else if ($dataCuaca['jam'] == 'Malam') {
                    ?>

                    <?php
                    } ?>  
            </div>
         </div>
         <div class="row" style="height: 30px; background-color: #337ab7; text-align: center; color: white"><strong>Cuaca Sleman Besok</strong></div>
      <div class="row" style="text-align: center">      
        <div class="col-sm-3 col-xs-3" style="height: 100%">
                    <!-- pagi -->
                     <?php  $dataCuaca = getData('0'); ?>
                    <div class="row" style="background-image:url('<?=$dataCuaca['urlbg'];?>'); color: white;">
                      <div class="col-sm-12">
                        <br>
                        <img src='<?=$dataCuaca['url'];?>'style='margin-top:0; width: 100%; height: auto; '><br>
                        <strong><?=$dataCuaca['suhu']; ?>°C</strong><br>
                        <strong><?=$dataCuaca['jam']; ?></strong><br>
                        <?=$dataCuaca['ket']; ?>
                      </div>
                    </div>
                    <!-- end pagi -->
        </div>
        <div class="col-sm-3 col-xs-3" style="height: 100%">
          <?php $dataCuaca = getData('6'); ?>
                    <div class="row" style="background-image:url('<?=$dataCuaca['urlbg'];?>'); color: white;">
                      <div class="col-sm-12">
                        <br>
                        <img src='<?=$dataCuaca['url'];?>'style='margin-top:0; width: 100%; height: auto; '><br>
                        <strong><?=$dataCuaca['suhu']; ?>°C</strong><br>
                        <strong><?=$dataCuaca['jam']; ?></strong><br>
                        <?=$dataCuaca['ket']; ?>
                      </div>
                    </div>
        </div>
        <div class="col-sm-3 col-xs-3" style="height: 100%">
          
                    <?php $dataCuaca = getData('12'); ?>
                    <div class="row" style="background-image:url('<?=$dataCuaca['urlbg'];?>'); color: white;">
                      <div class="col-sm-12">
                        <br>
                        <img src='<?=$dataCuaca['url'];?>'style='margin-top:0; width: 100%; height: auto; '><br>
                        <strong><?=$dataCuaca['suhu']; ?>°C</strong><br>
                        <strong><?=$dataCuaca['jam']; ?></strong><br>
                        <?=$dataCuaca['ket']; ?>
                      </div>
                    </div>
        </div>
        <div class="col-sm-3 col-xs-3" style="height: 100%">
          
                    <?php $dataCuaca = getData('18'); ?>
                    <div class="row" style="background-image:url('<?=$dataCuaca['urlbg'];?>'); color: white;">
                      <div class="col-sm-12">
                        <br>
                        <img src='<?=$dataCuaca['url'];?>'style='margin-top:0; width: 100%; height: auto; '><br>
                        <strong><?=$dataCuaca['suhu']; ?>°C</strong><br>
                        <strong><?=$dataCuaca['jam']; ?></strong><br>
                        <?=$dataCuaca['ket']; ?>
                      </div>
                    </div>
        </div>
      </div>
      <div class="row">

      </div>
    </div>


    <div class="col-sm-6 col-xs-12">
      <div class="row">
      <div class="panel panel-primary halo">
        <div class="panel-heading"><strong>Citra Radar Cuaca Yogyakarta Terkini</strong></div>
        <div style="position: relative; width: 100%">
            <div style="overflow: hidden;">
              <img id="radarCuaca" src=""  style="width: 100% ;margin: 0 0 -22% 0;">
               <table class="table-bordered col-lg-12 col-xs-12" style="background-color: white; text-align: center;">
                    <thead style="background-color: #efefef">
                      <tr>
                        <th> </th>
                        <th>Hujan ringan</th>
                        <th>Hujan sedang</th>
                        <th>Hujan lebat</th>
                        <th>Hujan sangat lebat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Nilai dBZ</td>
                        <td style="background-image: linear-gradient(to right, #81cb00, #ffe200)">30 s/d 38</td>
                        <td style="background-image: linear-gradient(to right, #ffa000, #ff3a00);">38 s/d 48</td>
                        <td style="background-image: linear-gradient(to right, #ff3a00, #e20000, #af0000); color: white">48 s/d 58</td>
                        <td style="background-image: linear-gradient(to right, #af0000, #cd0085, #c600fc); color: white">&gt;58</td>
                    </tbody>
                </table> 
              </div>
                    
        </div>
          <div style="overflow: hidden;">
              <img id="radarCuaca" src="" class="col-lg-12" style="width: 100% ;margin: 0 0 -22% 0;">
          </div>
      </div>
        
      </div>
    </div>


    <div class="col-sm-3 col-xs-12">
      <div class="row" >
        <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6" style="height: 30px; background-color: #337ab7; text-align: center; color: white"><strong>UDARA REALTIME</strong></div>
        <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6" style="height: 30px; background-color: #337ab7; text-align: center; color: white"><strong>ARAH ANGIN</strong></div>
      </div>
      <div class="row" >
        <div class="col-sm-5 col-xs-5 col-lg-5 col-md-5" >
          <div class="row">
            <u>Temperature</u> <br> <span id="TT_AIR_AVG" style="font-size: 20px;">000</span> °C
          </div>
          <div class="row">
            <u>RH</u> <br><span id="RH_AVG" style="font-size: 20px;">000</span> %
          </div>
        </div>
        <div class="col-sm-7 col-xs-7 col-lg-7 col-md-7" style="text-align: center;" align="center">
          <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">
            <strong>U</strong><br>
          <div id="compass"></div>
          <strong>S</strong><br>
          </div>
          <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">
            <u>Kecepatan</u> <br> <span id="WS_AVG" style="font-size: 20px;">000</span> knot
          </div>
          
          
        </div>
      </div>
      <div class="row" style="height: 30px; background-color: #337ab7; text-align: center; color: white"> GEMPA TERKINI</div>
      <div class="row">
        <div id="Gempa"></div>
      </div>
    </div>
  </div>
   <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 col-xs-6">

      </div>
      <div class="col-sm-3"></div>




    </div>
    
  </div>
  <div class="row">
    
  </div>
</div>


</body>
</html>
