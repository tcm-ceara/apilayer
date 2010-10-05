<?php header('Content-Type: application/rdf+xml'); ?>
<?php   
// Some definitions
define("RDFAPI_INCLUDE_DIR", sfConfig::get('sf_root_dir')."/lib/rdfapi/");
include_once(RDFAPI_INCLUDE_DIR . "RdfAPI.php");




// Create an empty Model
$error=error_reporting();
error_reporting(E_ERROR);
//$model = ModelFactory::getDefaultModel();

//$mf = new ModelFactory();
//$model = $mf->getResModel(MEMMODEL);

// Create the resources
//$johnSmith = $model->createResource($personURI);
//$nome_municipio_property= $model->createProperty($uri.'NOME');

// Add the property
//$johnSmith->addProperty($vcard_FN, $fullNameLiteral); 
$uri = "http://api.tcm.ce.gov.br/$sys/1_0/".$table->getNmPopularTabela().".ns#";
$ns=$uri;
$model = ModelFactory::getDefaultModel();
$model->addNamespace('ns1',$ns);

  foreach ($sf_data->getRaw('contents') as $item) 
  {  
	$model2=$item->asRDFModel($sys,$sf_data->getRaw('mapping'));
	$model->addModel($model2);
  
#  	$itemURI="http://api/".$item->getNmMunicipio().".rdf";
#  	$itemLiteral = $model->createLiteral($item->getNmMunicipio());
#    $itemRes = $model->createResource($itemURI);
#    $itemRes->addProperty($nome_municipio_property, $itemLiteral);     
  }
      
  echo $model->writeRDFtoString();
error_reporting($error);
?>
