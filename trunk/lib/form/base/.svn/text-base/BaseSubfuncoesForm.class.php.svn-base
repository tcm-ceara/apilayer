<?php

/**
 * Subfuncoes form base class.
 *
 * @method Subfuncoes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseSubfuncoesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_subfuncao'            => new sfWidgetFormInputHidden(),
      'nm_subfuncao'            => new sfWidgetFormInputText(),
      'orc_desp_proj_ativ_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Programas')),
    ));

    $this->setValidators(array(
      'cd_subfuncao'            => new sfValidatorPropelChoice(array('model' => 'Subfuncoes', 'column' => 'cd_subfuncao', 'required' => false)),
      'nm_subfuncao'            => new sfValidatorString(array('max_length' => 120)),
      'orc_desp_proj_ativ_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Programas', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('subfuncoes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Subfuncoes';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['orc_desp_proj_ativ_list']))
    {
      $values = array();
      foreach ($this->object->getOrcDespProjAtivs() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('orc_desp_proj_ativ_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveOrcDespProjAtivList($con);
  }

  public function saveOrcDespProjAtivList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['orc_desp_proj_ativ_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(OrcDespProjAtivPeer::CD_SUBFUNCAO, $this->object->getPrimaryKey());
    OrcDespProjAtivPeer::doDelete($c, $con);

    $values = $this->getValue('orc_desp_proj_ativ_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new OrcDespProjAtiv();
        $obj->setCdSubfuncao($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
