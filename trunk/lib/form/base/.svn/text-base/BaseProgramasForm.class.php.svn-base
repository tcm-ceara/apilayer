<?php

/**
 * Programas form base class.
 *
 * @method Programas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProgramasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputHidden(),
      'dt_versao_orc'           => new sfWidgetFormInputHidden(),
      'cd_programa'             => new sfWidgetFormInputHidden(),
      'nm_programa'             => new sfWidgetFormInputText(),
      'orc_desp_proj_ativ_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias')),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorPropelChoice(array('model' => 'Programas', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'           => new sfValidatorPropelChoice(array('model' => 'Orcamentos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_programa'             => new sfValidatorPropelChoice(array('model' => 'Programas', 'column' => 'cd_programa', 'required' => false)),
      'nm_programa'             => new sfValidatorString(array('max_length' => 120)),
      'orc_desp_proj_ativ_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('programas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Programas';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['orc_desp_proj_ativ_list']))
    {
      $values = array();
      foreach ($this->object->getOrcDespProjAtivs() as $obj)
      {
        $values[] = $obj->getCdOrgao();
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
    $c->add(OrcDespProjAtivPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    OrcDespProjAtivPeer::doDelete($c, $con);

    $values = $this->getValue('orc_desp_proj_ativ_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new OrcDespProjAtiv();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdOrgao($value);
        $obj->save();
      }
    }
  }

}
