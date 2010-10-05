<?php

/**
 * TiposIngressos form base class.
 *
 * @method TiposIngressos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposIngressosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_ingresso'           => new sfWidgetFormInputHidden(),
      'de_ingresso'           => new sfWidgetFormInputText(),
      'agentes_publicos_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Servidores')),
    ));

    $this->setValidators(array(
      'cd_ingresso'           => new sfValidatorPropelChoice(array('model' => 'TiposIngressos', 'column' => 'cd_ingresso', 'required' => false)),
      'de_ingresso'           => new sfValidatorString(array('max_length' => 35)),
      'agentes_publicos_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Servidores', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipos_ingressos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposIngressos';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['agentes_publicos_list']))
    {
      $values = array();
      foreach ($this->object->getAgentesPublicoss() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('agentes_publicos_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveAgentesPublicosList($con);
  }

  public function saveAgentesPublicosList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['agentes_publicos_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(AgentesPublicosPeer::CD_INGRESSO, $this->object->getPrimaryKey());
    AgentesPublicosPeer::doDelete($c, $con);

    $values = $this->getValue('agentes_publicos_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new AgentesPublicos();
        $obj->setCdIngresso($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
