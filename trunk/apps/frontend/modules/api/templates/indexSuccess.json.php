<?php header('Content-Type: application/json'); ?>
{"rsp": {"_content": { 
<?php 
  $i=0;     
  foreach($sf_data->getRaw('contents') as $item)
  {
    echo " ", $item->asJSON($sf_data->getRaw('mapping')),(++$i < count($contents) ? ',' : '*'), "\n";
  }
?>
        }, 
        "stat": "<?php echo $status ?>"         
    } 
}

