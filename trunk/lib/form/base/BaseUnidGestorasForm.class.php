<?php

/**
 * UnidGestoras form base class.
 *
 * @method UnidGestoras getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUnidGestorasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputHidden(),
      'dt_versao_orc'     => new sfWidgetFormInputHidden(),
      'cd_unid_gest_ug'   => new sfWidgetFormInputHidden(),
      'dt_ref_ug'         => new sfWidgetFormInputText(),
      'nm_unid_gest_ug'   => new sfWidgetFormInputText(),
      'dt_criacao_ug'     => new sfWidgetFormDateTime(),
      'dt_extincao_ug'    => new sfWidgetFormDateTime(),
      'nu_lei_criacao_ug' => new sfWidgetFormInputText(),
      'unid_orc_ug_list'  => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias')),
      'gestores_ug_list'  => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'AgentesPublicos')),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorPropelChoice(array('model' => 'UnidGestoras', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'     => new sfValidatorPropelChoice(array('model' => 'Orcamentos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_unid_gest_ug'   => new sfValidatorPropelChoice(array('model' => 'UnidGestoras', 'column' => 'cd_unid_gest_ug', 'required' => false)),
      'dt_ref_ug'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_unid_gest_ug'   => new sfValidatorString(array('max_length' => 80)),
      'dt_criacao_ug'     => new sfValidatorDateTime(),
      'dt_extincao_ug'    => new sfValidatorDateTime(array('required' => false)),
      'nu_lei_criacao_ug' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'unid_orc_ug_list'  => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias', 'required' => false)),
      'gestores_ug_list'  => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'AgentesPublicos', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('unid_gestoras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UnidGestoras';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['unid_orc_ug_list']))
    {
      $values = array();
      foreach ($this->object->getUnidOrcUgs() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('unid_orc_ug_list', $values);
    }

    if (isset($this->widgetSchema['gestores_ug_list']))
    {
      $values = array();
      foreach ($this->object->getGestoresUgs() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('gestores_ug_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveUnidOrcUgList($con);
    $this->saveGestoresUgList($con);
  }

  public function saveUnidOrcUgList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['unid_orc_ug_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(UnidOrcUgPeer::CD_UNID_GEST_UG, $this->object->getPrimaryKey());
    UnidOrcUgPeer::doDelete($c, $con);

    $values = $this->getValue('unid_orc_ug_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new UnidOrcUg();
        $obj->setCdUnidGestUg($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

  public function saveGestoresUgList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['gestores_ug_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(GestoresUgPeer::CD_UNID_GEST_UG, $this->object->getPrimaryKey());
    GestoresUgPeer::doDelete($c, $con);

    $values = $this->getValue('gestores_ug_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new GestoresUg();
        $obj->setCdUnidGestUg($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
