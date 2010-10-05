<?php

/**
 * api actions.
 *
 * @package    sim
 * @subpackage api
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $method=$this->getRequestParameter('method');
	$this->format=$this->getRequestParameter('sf_format','html');
	$this->sys=$this->getRequestParameter('sys');                        
    $this->table = TabelasPeer::retrieveByPopularName($method,$this->sys);
    $this->tablename=$this->table->getNmTabela();
    $this->model=sfInflector::classify($this->tablename);
    $this->forward404Unless($this->table);
    if ($this->format=='ns')
    {    	
    	# monta RDF NameSpace
    	return 'Success';
    }
    
    $fields=$this->table->getCamposEntrada();
    $con=Propel::getConnection($this->sys);

    $c=new Criteria();	

    foreach ($fields as $f)
    {
    	$value=$this->getRequestParameter($f->getNmPopularCampo());
    	if(isset($value)){
    		if ($f->getIdTipo()==1)
    		{
    			$c->add($f->getNmCampo(),$value);    			
    		}else{
    			$c->add($f->getNmCampo(),"%".$value."%",get_class($con)=='MssqlPropelPDO'?Criteria::LIKE:Criteria::ILIKE);
    		}
    		
    	}else{    		
    		$this->forward404Unless($f->getFlRequerido()=='N','Campo requerido: '.$f->getNmPopularCampo());
    	}
    }
    $this->mapping=$this->table->getMapping($this->format); 
    
    //var_dump($this->mapping);
    
    $this->status="ok";

    $this->contents=call_user_func_array($this->model."Peer::doSelect",array($c,$con)); 
    $this->setLayout(false);
  }
}
