<?php 
function textColor($str){
    $str = explode(' ', $str);
    $color = '';
    foreach ($str as $i => $el) {
        $color = ($i %2== 0) ?'red':'blue';
        $str[$i] = "<span style='color:$color'>$str[$i]</span>";
    }
    $str = implode(" ", $str);
    echo $str;  
    return 0;
}

function nightTheme(){
    $date = new DateTime(datetime: 'NOW');
    $hour = $date->format('G');
    if ($hour < 8 || $hour >= 23) {
        echo"<body class='night_theme'>";
    }else{
        echo"<body>";
    }
    ob_start();
    return 0;
}
function textGet(){
  $page_content = ob_get_clean();
  echo $page_content;
  $text = strip_tags($page_content);
  return $text;    
}
function vowelsCount($text){
  $text = mb_strtolower($text);
  $vowels = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я', 'a', 'e', 'i', 'o', 'u', 'y'];
  $vowels_count = 0;
  for ($i = 0; $i < mb_strlen($text); $i++) {
      $char = mb_substr($text, $i, 1);
      (in_array($char, $vowels)) && $vowels_count++;
  }
  echo "<p>Количество гласных на странице: $vowels_count</p>";  
  return $text;      
}
function wordCount($text){
  preg_match_all('/\p{L}+/u', $text, $matches);
  $word_count = count($matches[0]);
  echo "<p>Количество слов на странице: $word_count</p>";    
}
function dateNewYear(){
  $today = strtotime("now");
  $newYear = strtotime( "01-01-2026");
  echo "До Нового года осталось " . ceil(abs($newYear - $today)/(60*60*24)) . " дней.";    
}
?>