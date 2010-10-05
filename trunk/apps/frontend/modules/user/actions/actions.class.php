<?php

/**
 * user actions.
 *
 * @package    sim
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

  }
  
  public function executeLogin(sfWebRequest $request)
  {
  	$result = myAuth::Authenticate($this->getRequestParameter('user'),$this->getRequestParameter('passwd'),$this->getUser());  	
  	$this->forward404Unless($result);  	  	
  }
}
