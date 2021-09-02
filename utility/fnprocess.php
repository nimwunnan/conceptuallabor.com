<?php

// get file contents
    $options = getopt("f:");
    $filename = $options["f"];

    $text = file_get_contents($filename);

    $regex = '/fn\d{1,3}/';
    preg_match_all($regex, $text, $matches);
    $total = count($matches[0]);
    // echo ("<h2>".count($matches[0])." matches found</h2>");
    // print_r($matches);

    $patternz = array();
    $replacementz = array();
foreach ($matches[0] as $key => $value) {
  $pat = '/'.$value.'/';
  $val = "peggyfarts".(strval($key)+1);
  // $hack = file_get_contents('part1.txt');
  // $newtext = preg_replace($pat, $val, $text);
  // $text = $newtext;
  array_push($patternz, $pat);
  array_push($replacementz, $val);
  // echo ("<br>".$pat." becomes ".$val);
}
$combined = array_combine($patternz, $replacementz);
$combined = array_reverse($combined);
foreach ($combined as $pat => $val){
    $text = preg_replace($pat, $val, $text);  
}

 // $newfile = preg_replace($patternz, $replacementz, $text);
 $newfile = preg_replace('/peggyfarts/', 'fn', $text);
 $output = fopen('output.txt', "w+");
  fwrite($output, $newfile);
  fclose($output);
  echo ("done");


// print_r($patternz);
// echo "<br>";
// print_r($replacementz);
// echo "<br>";

// $match = ^fn-number;
// $total = count match for each matching 


?>