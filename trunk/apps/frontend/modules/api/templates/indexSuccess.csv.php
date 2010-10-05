<?php header('Content-Type: text/csv'); ?>
<?php $t = $sf_data->getRaw('mapping');
      $elements=$t['elements']; 
$line='';
foreach ($elements as $element => $value)
{
	$title=$value['element'];
	$line.='"'.$title.'",';	
}
echo sprintf("%s",substr($line,0,strlen($line)-1));    
?> 
<?php   
  foreach ($sf_data->getRaw('contents') as $item) 
  {
    echo $item->asCSV($sf_data->getRaw('mapping'));
  }
?>
