<?php header('Content-Type: text/xml'); ?>
<rsp status="<?php echo $status ?>">
<?php   
  foreach ($sf_data->getRaw('contents') as $item) 
  {
    echo $item->asXML($sf_data->getRaw('mapping'));
  }
?>
</rsp>
