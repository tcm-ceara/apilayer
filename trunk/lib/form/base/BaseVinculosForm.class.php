<?php

/**
 * Vinculos form base class.
 *
 * @method Vinculos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseVinculosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_vinculo'            => new sfWidgetFormInputHidden(),
      'de_vinculo'            => new sfWidgetFormInputText(),
      'agentes_publicos_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Servidores')),
    ));

    $this->setValidators(array(
      'cd_vinculo'            => new sfValidatorPropelChoice(array('model' => 'Vinculos', 'column' => 'cd_vinculo', 'required' => false)),
      'de_vinculo'            => new sfValidatorString(array('max_length' => 35)),
      'agentes_publicos_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Servidores', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vinculos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vinculos';
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
    $c->add(AgentesPublicosPeer::CD_VINCULO, $this->object->getPrimaryKey());
    AgentesPublicosPeer::doDelete($c, $con);

    $values = $this->getValue('agentes_publicos_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new AgentesPublicos();
        $obj->setCdVinculo($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
