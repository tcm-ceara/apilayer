<?php

/**
 * BensMunicipios form base class.
 *
 * @method BensMunicipios getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBensMunicipiosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputHidden(),
      'nu_registro_bem'         => new sfWidgetFormInputHidden(),
      'dt_ref_bem'              => new sfWidgetFormInputText(),
      'dt_aquisicao_bem'        => new sfWidgetFormDateTime(),
      'tp_classificacao_bem'    => new sfWidgetFormInputText(),
      'tp_natureza_bem'         => new sfWidgetFormInputText(),
      'st_baixado_bem'          => new sfWidgetFormInputCheckbox(),
      'de_descricao_bem1'       => new sfWidgetFormInputText(),
      'de_descricao_bem2'       => new sfWidgetFormInputText(),
      'reaval_baixas_bens_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'AgentesPublicos')),
      'empenhos_bens_list'      => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'NotasEmpenhos')),
      'unid_orc_bens_list'      => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'AgentesPublicos')),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorPropelChoice(array('model' => 'BensMunicipios', 'column' => 'cd_municipio', 'required' => false)),
      'nu_registro_bem'         => new sfValidatorPropelChoice(array('model' => 'BensMunicipios', 'column' => 'nu_registro_bem', 'required' => false)),
      'dt_ref_bem'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_aquisicao_bem'        => new sfValidatorDateTime(),
      'tp_classificacao_bem'    => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'tp_natureza_bem'         => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'st_baixado_bem'          => new sfValidatorBoolean(),
      'de_descricao_bem1'       => new sfValidatorString(array('max_length' => 255)),
      'de_descricao_bem2'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'reaval_baixas_bens_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'AgentesPublicos', 'required' => false)),
      'empenhos_bens_list'      => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'NotasEmpenhos', 'required' => false)),
      'unid_orc_bens_list'      => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'AgentesPublicos', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bens_municipios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BensMunicipios';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['reaval_baixas_bens_list']))
    {
      $values = array();
      foreach ($this->object->getReavalBaixasBenss() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('reaval_baixas_bens_list', $values);
    }

    if (isset($this->widgetSchema['empenhos_bens_list']))
    {
      $values = array();
      foreach ($this->object->getEmpenhosBenss() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('empenhos_bens_list', $values);
    }

    if (isset($this->widgetSchema['unid_orc_bens_list']))
    {
      $values = array();
      foreach ($this->object->getUnidOrcBenss() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('unid_orc_bens_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveReavalBaixasBensList($con);
    $this->saveEmpenhosBensList($con);
    $this->saveUnidOrcBensList($con);
  }

  public function saveReavalBaixasBensList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['reaval_baixas_bens_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(ReavalBaixasBensPeer::NU_REGISTRO_BEM, $this->object->getPrimaryKey());
    ReavalBaixasBensPeer::doDelete($c, $con);

    $values = $this->getValue('reaval_baixas_bens_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new ReavalBaixasBens();
        $obj->setNuRegistroBem($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

  public function saveEmpenhosBensList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['empenhos_bens_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(EmpenhosBensPeer::NU_REGISTRO_BEM, $this->object->getPrimaryKey());
    EmpenhosBensPeer::doDelete($c, $con);

    $values = $this->getValue('empenhos_bens_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new EmpenhosBens();
        $obj->setNuRegistroBem($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

  public function saveUnidOrcBensList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['unid_orc_bens_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(UnidOrcBensPeer::NU_REGISTRO_BEM, $this->object->getPrimaryKey());
    UnidOrcBensPeer::doDelete($c, $con);

    $values = $this->getValue('unid_orc_bens_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new UnidOrcBens();
        $obj->setNuRegistroBem($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
