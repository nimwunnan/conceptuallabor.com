<?php


 function updateFootnotes($text){

    $regex = '/fn\d{1,3}/';
    preg_match_all($regex, $text, $matches);
    $total = count($matches[0]);
    // echo ("<h2>".count($matches[0])." matches found</h2>");
    // print_r($matches);

    $patternz = array();
    $replacementz = array();
    foreach ($matches[0] as $key => $value) {
      $pat = '/'.$value.'/';
      $val = "unique-string-seahorse".(strval($key)+1);
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
     $updatedText = preg_replace('/unique-string-seahorse/', 'fn', $text);
     return $updatedText;
}



// get file contents
$options = getopt("f::");

if ($options) {
    $filename = $options["f"];
}
else {
    $filename = "input.md";
}


$maintext = file_get_contents($filename);
$textArray = explode("# Footnotes", $maintext);
$newfile = "";

foreach($textArray as $key => $value){
    if ($key == 2){
        $value == substr($value, 12);
    }
    $newfile .= updateFootnotes($value);
}

 $output = fopen('output.md', "w+");
  fwrite($output, $newfile);
  fclose($output);
  echo ("done");



?>
