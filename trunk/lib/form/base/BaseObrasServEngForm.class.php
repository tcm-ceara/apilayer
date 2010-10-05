<?php

/**
 * ObrasServEng form base class.
 *
 * @method ObrasServEng getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseObrasServEngForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_ini_obra_srv'        => new sfWidgetFormInputHidden(),
      'tp_obra_srv'            => new sfWidgetFormInputHidden(),
      'nu_obra_srv'            => new sfWidgetFormInputHidden(),
      'dt_versao_orc'          => new sfWidgetFormInputText(),
      'cd_orgao'               => new sfWidgetFormInputText(),
      'cd_unid_orc'            => new sfWidgetFormInputText(),
      'de_descricao_obra_srv1' => new sfWidgetFormInputText(),
      'de_descricao_obra_srv2' => new sfWidgetFormInputText(),
      'tp_execucao_obra_srv'   => new sfWidgetFormInputText(),
      'dt_fim_obra_srv'        => new sfWidgetFormDateTime(),
      'vl_tot_obra_srv'        => new sfWidgetFormInputText(),
      'rg_crea_obra_srv'       => new sfWidgetFormInputText(),
      'empenhos_obras_list'    => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'NotasEmpenhos')),
      'resp_engen_obras_list'  => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Engenheiros')),
      'contratos_obras_list'   => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Contratos')),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'cd_municipio', 'required' => false)),
      'dt_ini_obra_srv'        => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'dt_ini_obra_srv', 'required' => false)),
      'tp_obra_srv'            => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'tp_obra_srv', 'required' => false)),
      'nu_obra_srv'            => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'nu_obra_srv', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'               => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'            => new sfValidatorString(array('max_length' => 4)),
      'de_descricao_obra_srv1' => new sfValidatorString(array('max_length' => 255)),
      'de_descricao_obra_srv2' => new sfValidatorString(array('max_length' => 255)),
      'tp_execucao_obra_srv'   => new sfValidatorString(array('max_length' => 1)),
      'dt_fim_obra_srv'        => new sfValidatorDateTime(array('required' => false)),
      'vl_tot_obra_srv'        => new sfValidatorNumber(array('required' => false)),
      'rg_crea_obra_srv'       => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'empenhos_obras_list'    => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'NotasEmpenhos', 'required' => false)),
      'resp_engen_obras_list'  => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Engenheiros', 'required' => false)),
      'contratos_obras_list'   => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Contratos', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('obras_serv_eng[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ObrasServEng';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['empenhos_obras_list']))
    {
      $values = array();
      foreach ($this->object->getEmpenhosObrass() as $obj)
      {
        $values[] = $obj->getDtVersaoOrc();
      }

      $this->setDefault('empenhos_obras_list', $values);
    }

    if (isset($this->widgetSchema['resp_engen_obras_list']))
    {
      $values = array();
      foreach ($this->object->getRespEngenObrass() as $obj)
      {
        $values[] = $obj->getNuRgCreaEng();
      }

      $this->setDefault('resp_engen_obras_list', $values);
    }

    if (isset($this->widgetSchema['contratos_obras_list']))
    {
      $values = array();
      foreach ($this->object->getContratosObrass() as $obj)
      {
        $values[] = $obj->getDtContrato();
      }

      $this->setDefault('contratos_obras_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveEmpenhosObrasList($con);
    $this->saveRespEngenObrasList($con);
    $this->saveContratosObrasList($con);
  }

  public function saveEmpenhosObrasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['empenhos_obras_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(EmpenhosObrasPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    EmpenhosObrasPeer::doDelete($c, $con);

    $values = $this->getValue('empenhos_obras_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new EmpenhosObras();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setDtVersaoOrc($value);
        $obj->save();
      }
    }
  }

  public function saveRespEngenObrasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['resp_engen_obras_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(RespEngenObrasPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    RespEngenObrasPeer::doDelete($c, $con);

    $values = $this->getValue('resp_engen_obras_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new RespEngenObras();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setNuRgCreaEng($value);
        $obj->save();
      }
    }
  }

  public function saveContratosObrasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['contratos_obras_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(ContratosObrasPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    ContratosObrasPeer::doDelete($c, $con);

    $values = $this->getValue('contratos_obras_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new ContratosObras();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setDtContrato($value);
        $obj->save();
      }
    }
  }

}
