<?php

/**
 * @plugin           sfPropelTextOutputBehaviorPlugin
 * @description      sfPropelTextOutputBehavior is a symfony plugin that enhance Propel objects for different output formats:
 *                     XML
 *                     JSON  
 * @author           Wolfgang Kubens<wolfgang.kubens [at] gmx [dot] net>
 * @version          0.0.4
 * @history          2008.05.12
 *                   - reflection replaced by call_user_func
 *                   - hydrate logic implemented
 *                   2007.08.25 
 *                   - Making plugin a behaviour for Proble objects
 *                   - Method obj2XML renamed to asXML
 *                   - Method obj2JSON renamed to asJSON
 *                   - Documentation overworked 
 *                   2007.08.25 plugin created                                                 
 */ 

class sfPropelTextOutputBehavior {
  
  private static function format($column, $value, $elements, &$data)
  {
    $column = strtolower($column);
    
    if ($elements) 
    {
      # individual mapping 
      if (key_exists($column,$elements) || in_array($column,$elements)) 
      {

        $format = '%s';
        if (key_exists($column,$elements) && key_exists('format',$elements[$column])) 
        {
          $format = $elements[$column]['format'];
        }

        $element = $column;
        if (key_exists($column,$elements) && key_exists('element',$elements[$column])) 
        {
          $element = $elements[$column]['element'];
        }

        $data['elements'][$element]=sprintf($format, $value);        
      }
    }
    else 
    {
      # default mapping 
      $data['elements'][$column] = $value;
    }
    
  }
  
  private static function load ($obj, $mapping = null, $pks = null) 
  {
    $class = get_class($obj);

    $data = array(
      'element'=>'',
      'elements'=>array()        
    );

    $data['element'] = $class;
    if (is_array($mapping) && key_exists('element',$mapping)) 
    {
      $data['element'] = $mapping['element'];  
    }   

    $elements = null;
    if (is_array($mapping) && key_exists('elements', $mapping)) 
    {
      $elements = $mapping['elements'];
    }

    $map = call_user_func($class.'Peer::getTableMap');
    foreach ($map->getColumns() as $column) 
    {

      $column_name = $column->getColumnName();
      $column_value = call_user_func(array($obj,'get'.$column->getPhpName()));
      sfPropelTextOutputBehavior::format($column_name, $column_value, $elements, $data);
      
      /*
      if ($column->isForeignKey() && $column->getTableName() != $column->getRelatedTableName()) {
        if ($mapping['hydrate']){
          try {

            $relatedClass = $map->getDatabaseMap()->getTable($column->getRelatedTableName())->getPhpName();
            $relatedMap = call_user_func($relatedClass.'Peer::getTableMap');
            foreach ($relatedMap->getColumns() as $relatedColumn) 
            {
              $relatedObj = call_user_func(array($obj,'get'.$relatedClass));
  
              $column_name = $relatedColumn->getTableName().'_'.$relatedColumn->getColumnName();
              $column_value = call_user_func(array($relatedObj,'get'.$relatedColumn->getPhpName()));
              sfPropelTextOutputBehavior::format($column_name, $column_value, $elements, $data);
            }

          }
          catch (Exception $e) {
          
          } 
        } 
      }
      */
    }
    return $data;
  }

  public static function asXML (BaseObject $obj, $mapping = null) {
    $data = sfPropelTextOutputBehavior::load($obj, $mapping);

    $xml = '';
    foreach ($data['elements'] as $element => $value) 
    {
      $xml .= sprintf(
        "<%s>%s</%s>",
        $element,
        $value,
        $element
      );
    }

    return sprintf(
      "<%s>%s</%s>",
      $data['element'],
      $xml,
      $data['element']
    );    
  }

  public static function asJSON (BaseObject $obj, $mapping = null) {
    $data = sfPropelTextOutputBehavior::load($obj, $mapping);

    $json = '';
    foreach ($data['elements'] as $element => $value) 
    {
      $json .= sprintf(
        '%s%s:%s',
        $json == '' ? '' : ',',
        $element,
        json_encode($value)
      );
    }

    return sprintf(
      '{%s}',
      $json
    );    
  }
  
  public static function asHTML (BaseObject $obj, $mapping = null) {
    $data = sfPropelTextOutputBehavior::load($obj, $mapping);    

    $html = '';
    foreach ($data['elements'] as $element => $value) 
    {
      $value=stristr($value,"http")==false?$value:sprintf("<a href='%s'>%s</a>",$value,$value);
      $html .= sprintf("<td class='%s'>%s</td>",$element, $value);
    }

    return sprintf("<tr class='%s'>%s</tr>",$data['element'],$html);    

  }
  
  public static function asCSV (BaseObject $obj, $mapping = null) {
    $data = sfPropelTextOutputBehavior::load($obj, $mapping);    

    $csv = '';
    foreach ($data['elements'] as $element => $value) 
    {
      $csv .= sprintf('"%s",',$value);
    }

    return sprintf("%s\n",substr($csv,0,strlen($csv)-1));   

  }  
  
  private static function getPKUrlParam(BaseObject $obj, $data, $mapping = null){
  	//Get PK Columns 
    $class = get_class($obj);
    $map = call_user_func($class.'Peer::getTableMap');
    $pks = $map->getPrimaryKeyColumns();
   
    $result="";    
    $elements = $mapping['elements'];
    foreach ($pks as $column)
    {
    	$column_name = strtolower($column->getColumnName());
        $column_value = call_user_func(array($obj,'get'.$column->getPhpName()));
        
        if (key_exists($column_name,$elements) && key_exists('element',$elements[$column_name])) 
        {
          $column_name = $elements[$column_name]['element'];
        }
                
    	$result .= $column_name."=".$column_value."&";
    }     
    return substr_replace($result ,"",-1);
  }
  
  public static function asRDFModel (BaseObject $obj, $sys = 'api', $mapping = null) {
    
    $data = sfPropelTextOutputBehavior::load($obj, $mapping);
    $params = self::getPKUrlParam($obj,$data,$mapping);
    
    $rdfElement = new Resource ("http://api.tcm.ce.gov.br/$sys/1_0/".$data['element'].".rdf?".$params);
    $ns="http://api.tcm.ce.gov.br/api/1_0/".$data['element'].".ns#";
        
    //    
    $model = ModelFactory::getDefaultModel();
    
    

    foreach ($data['elements'] as $element => $value) 
    {
		$property = new Resource($ns,$element);
		
		$value=stristr($value,"http")==false?new Literal($value):new Resource($value);
		
		$statement = new Statement($rdfElement, $property, $value);
		$model->add($statement);      
    }

    return $model;
  }
  
}

?>
