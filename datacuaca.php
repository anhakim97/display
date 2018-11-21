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
    //echo "<hr>";
    $name[$i]=$xml2->name.'';
    $coordinate[$i]=$xml2['coordinate'];
      ?>
      <?php
      $x = 1;
      foreach ($xml2->parameter as $xml3) {
        $idparameter[$x]=$xml3['id'].'';
        //echo $description[$name[$i]][$x]=$xml3['description'] ." - type : ";
        //echo $description[$name[$i]][$x]=$xml3['type'] ."<br>";
        $y = 1;
          if ($xml3['type']== 'hourly') {
            foreach ($xml3->timerange as $xml4) {
              $h[$name[$i]][$x][$y] = $xml4['h'];
              $t[$name[$i]][$x][$y] = $xml4->value;
              $type = $xml4['h'].'';
              //echo "  H : ".$xml4['h']." - ". $xml4['datetime']." - ". $xml4->value."<br>";
              $cuaca[$name[$i]][$idparameter[$x]][$type] = $xml4->value;
             //echo $name[$i]." - ".$idparameter[$x]." - ".$type." - ". $xml4->value ."<br>";
              $y++;
            }  
          }else if($xml3['type']== 'daily'){
            foreach ($xml3->timerange as $xml4) {
              $h[$name[$i]][$x][$y] = $xml4['day'];
              $t[$name[$i]][$x][$y] = $xml4->value;
              $type = $xml4['day'].'';
              //echo "  Day : ".$xml4['day']." - ". $xml4['datetime']." - ". $xml4->value."<br>";
              $cuaca[$name[$i]][$idparameter[$x]][$type] = $xml4->value;
              //$name[$i]." - ".$idparameter[$x]." - ".$type." - ". $xml4->value ."<br>";
              $y++;
            }  
          }
          
        
        
        $x++;
      }
      $i++;
  }
}
//echo "<pre>";
// print_r($cuaca['Bantul']['tmin']);
//echo "Hai";
//echo "</pre>";


  ?>