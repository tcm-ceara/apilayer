<?php header('Content-Type: text/html'); ?>
<table class="<?php echo $status ?>">
<?php $t = $sf_data->getRaw('mapping');
      $elements=$t['elements']; 
echo "<tr>";
foreach ($elements as $element => $value)
{
	$title=$value['element'];
	echo "<th>$title</th>";	
}
echo "</tr>";
?> 

<?php   
  foreach ($sf_data->getRaw('contents') as $item) 
  {
    echo $item->asHTML($sf_data->getRaw('mapping'));
  }
?>
</table>
