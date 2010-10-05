<?php

/**
 * UnidOrcUg form base class.
 *
 * @method UnidOrcUg getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUnidOrcUgForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputHidden(),
      'dt_versao_orc'    => new sfWidgetFormInputHidden(),
      'cd_unid_gest_ug'  => new sfWidgetFormInputHidden(),
      'cd_orgao'         => new sfWidgetFormInputHidden(),
      'cd_unid_orc'      => new sfWidgetFormInputHidden(),
      'dt_inclusao_uog'  => new sfWidgetFormInputHidden(),
      'dt_ref_uog'       => new sfWidgetFormInputText(),
      'dt_exclusao_uog'  => new sfWidgetFormDateTime(),
      'ordenadores_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'AgentesPublicos')),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'    => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_unid_gest_ug'  => new sfValidatorPropelChoice(array('model' => 'UnidGestoras', 'column' => 'cd_unid_gest_ug', 'required' => false)),
      'cd_orgao'         => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'      => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_inclusao_uog'  => new sfValidatorPropelChoice(array('model' => 'UnidOrcUg', 'column' => 'dt_inclusao_uog', 'required' => false)),
      'dt_ref_uog'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_exclusao_uog'  => new sfValidatorDateTime(array('required' => false)),
      'ordenadores_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'AgentesPublicos', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('unid_orc_ug[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UnidOrcUg';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['ordenadores_list']))
    {
      $values = array();
      foreach ($this->object->getOrdenadoress() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('ordenadores_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveOrdenadoresList($con);
  }

  public function saveOrdenadoresList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['ordenadores_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(OrdenadoresPeer::CD_UNID_GEST_UG, $this->object->getPrimaryKey());
    OrdenadoresPeer::doDelete($c, $con);

    $values = $this->getValue('ordenadores_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new Ordenadores();
        $obj->setCdUnidGestUg($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
