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
<script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
<script type="text/javascript" src="jqwidgets/jqxdata.js"></script>
<script type="text/javascript" src="jqwidgets/jqxdraw.js"></script>
<script type="text/javascript" src="jqwidgets/jqxgauge.js"></script>
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
          $('#cuaca').load('cuaca.php');

          
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

                
        colorScheme: 'scheme02',
                border:{visible:false},
                animationDuration: 500,
                min: 0, max: 360,
                pointer: { length: '75%', width: '10%' ,style: { fill: '#000000', stroke: '#000000' } },
                style: { fill: 'white' },
                
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
             
             } });
           

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
    // function loadCuaca(){

    //         // $("#cuacaJogja").load('data1.php');
    //         $('#cuacaJogja').load('cuacajogja.php');
    //         $('#cuacabantul').load('cuacabantul.php');
    //         $('#cuacasleman').load('cuacasleman.php');
    //         $('#cuacawates').load('cuacawates.php');
    //         $('#cuacawonosari').load('cuacawonosari.php');
    //         $('#Gempa').load('getgempa.php');

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
<body>
<div class="container-fluid">
  <div class="row" style="background-color: #e7e7e7">
    <h3>STASIUN KLIMATOLOGI MLATI</h3>
    <p>BMKG YOGYAKARTA</p>
  </div>
  <div id="cuaca"></div>
  <div class="row">
    <div class="col-sm-3">
      <div class="panel panel-primary">
        <div class="panel-heading">UDARA</div>
        <div class="panel-body">
            <div class="col-sm-6" ><u>Temperature</u> <br> <span id="TT_AIR_AVG" style="font-size: 20px;">000</span> °C</div>
            <div class="col-sm-6"> <u>RH</u> <br><span id="RH_AVG" style="font-size: 20px;">000</span> %</div>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">ARAH ANGIN</div>
        <div class="panel-body">
              <div class="col-lg-12" align="center" style="">      
                <div  id="compass"></div>
                <div style="position: absolute; top: 0%; left: 48%" class="arahangin">N</div>
                <!-- <div style="position: absolute; top: 39%; right: 15%" class="arahangin">E</div> -->
                <div style="position: absolute; bottom: 15%; left: 48%" class="arahangin">S</div>
                <!-- <div style="position: absolute; top: 39%; left: 10%" class="arahangin">W</div> -->
                <div style="text-align: center;" class="arahangin">
                  <br>
                  Kecepatan <span id="WS_AVG">000</span> knot</div>
            </div>
        </div>
      </div>
      
    </div>


    <div class="col-sm-6">
      <div class="row">
      <div class="panel panel-primary halo">
        <div class="panel-heading">Citra Radar Cuaca Yogyakarta Terkini</div>
        <div style="position: relative; width: 100%">
            <div style="overflow: hidden;">
                  <img id="radarCuaca" src="" class="col-lg-12" style="width: 100% ;margin: 0 0 -22% 0;">
              </div>
              <table class="table-bordered col-lg-12" style="background-color: white; height:10% ;text-align: center;">
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
                        <td>30 s/d 38</td>
                        <td>38 s/d 48</td>
                        <td>48 s/d 58</td>
                        <td>&gt;58</td>
                    </tbody>
                </table>        
        </div>
          <div style="overflow: hidden;">
              <img id="radarCuaca" src="" class="col-lg-12" style="width: 100% ;margin: 0 0 -22% 0;">
          </div>
      </div>
        
      </div>
    </div>


    <div class="col-sm-3 panel">
      <div class="panel panel-primary">
        <div class="panel-heading">Info Lainnya</div>
        <div class="panel-body" id="Gempa">  

        </div>
      </div>

    </div>
  </div>
   <div class="row">
    <div class="col-sm-12">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">

      </div>
      <div class="col-sm-3"></div>




    </div>
    
  </div>
  <div class="row">
    
  </div>
</div>


</body>
</html>
