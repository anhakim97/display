<?php
// set_time_limit(0);
// $fp = fopen ('./DIYogyakarta.xml', 'w+');
// $ch = curl_init('http://data.bmkg.go.id/datamkg/MEWS/DigitalForecast/DigitalForecast-DIYogyakarta.xml');// or any url you can pass which gives you the xml file
// curl_setopt($ch, CURLOPT_TIMEOUT, 50);
// curl_setopt($ch, CURLOPT_FILE, $fp);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
// curl_exec($ch);
// curl_close($ch);
// fclose($fp);
$xml = simplexml_load_file("DIYogyakarta.xml");
// echo "<pre>";
// print_r($xml->forecast->area);
// echo "</pre>";
// foreach ($xml->forecast as $xml1) {
//  echo "Timestamp : ".$timestamp = $xml1->issue->timestamp;
//  echo "<br>";
//  echo "Year : ".$year = $xml1->issue->year;
//  echo "<br>";
//  echo "month : ".$month = $xml1->issue->month;
//  echo "<br>";
//  echo "day : ".$day = $xml1->issue->day;
//  echo "<br>";
//  echo "Hour : ".$hour = $xml1->issue->hour;
//  echo "<br>";
//  echo "minute : ".$minute = $xml1->issue->minute;
//  echo "<br>";
//  echo "second : ".$second =$xml1->issue->second;
//  echo "<br><hr>";
//  echo "<ul>";
//  $i = 1;
//  foreach ($xml->forecast->area as $xml2) {
//    echo "<li>[".$i."] -ID   :".$id[$i]=$xml2['id']."</li>";
//    echo "<li>[".$i."] - NAME : ".$name[$i]=$xml2->name."</li>";
//    echo "<li>[".$i."] - Coordinate : ".$coordinate[$i]=$xml2['coordinate']."</li>";
//      echo "<ul>";
//      $x = 1;
//      foreach ($xml2->parameter as $xml3) {
//        echo "<li>[".$i."][".$x."] - ID : ".$idparameter[$x]=$xml3['id']." <br>[".$i."][".$x."] - description : ".$description[$x]=$xml3['description']."</li>";
//        echo "<ul>";
//        $y = 1;
//        foreach ($xml3->timerange as $xml4) {
//          echo $timerange[$x][$y]= "<li>[".$i."][".$x."][".$y."] - h : ".$h[$x][$y] = $xml4['h']."<br>[".$i."][".$x."][".$y."] - datetime : ".$datetime[$x][$y] = $xml4['datetime']."<br>[".$i."][".$x."][".$y."] - value : ".$value[$x][$y] = $xml4->value;
//          $data[$i][$x][$y] = 
//          "Nama : ". $name[$i]. "<br>".
//          "idparameter : ". $idparameter[$x]. "<br>".
//          "description : ". $description[$i]. "<br>".
//          "h : ". $h[$x][$y]. "<br>".
//          "datetime : ". $datetime[$x][$y]. "<br>".
//          "Value : ". $value[$x][$y]. "<br><hr>";
//          $name_data[$i][$x][$y] = $name[$i];
//          $desc_data[$i][$x][$y] = $description[$i];
//          $h_data[$i][$x][$y] = $h[$x][$y];
//          $date_data[$i][$x][$y] = $datetime[$x][$y];
//          $value_data[$i][$x][$y] = $value[$x][$y];

//          $y++;
//        }

//        $x++;
//        echo "</ul>";
//      }
//      echo "</ul>";

//      $i++;
//  }
//  echo "</ul>";
//  }
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
