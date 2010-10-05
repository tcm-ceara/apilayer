<?php

/**
 * AgentesPublicos form base class.
 *
 * @method AgentesPublicos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAgentesPublicosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputHidden(),
      'dt_versao_orc'           => new sfWidgetFormInputHidden(),
      'cd_orgao'                => new sfWidgetFormInputHidden(),
      'cd_unid_orc'             => new sfWidgetFormInputHidden(),
      'cd_cpf_serv_muni'        => new sfWidgetFormInputHidden(),
      'cd_ingresso'             => new sfWidgetFormInputHidden(),
      'cd_vinculo'              => new sfWidgetFormInputHidden(),
      'nu_expediente_no'        => new sfWidgetFormInputHidden(),
      'cd_expediente'           => new sfWidgetFormPropelChoice(array('model' => 'TiposExpedientes', 'add_empty' => false)),
      'dt_expediente_ap'        => new sfWidgetFormDateTime(),
      'cd_amparo_legal'         => new sfWidgetFormPropelChoice(array('model' => 'TiposAmparosLegais', 'add_empty' => false)),
      'nu_amparo_legal_ap'      => new sfWidgetFormInputText(),
      'dt_amparo_legal_ap'      => new sfWidgetFormDateTime(),
      'dt_public_amparo_ap'     => new sfWidgetFormDateTime(),
      'dt_posse_ap'             => new sfWidgetFormDateTime(),
      'nu_matricula_muni_ap'    => new sfWidgetFormInputText(),
      'cd_sit_funcional'        => new sfWidgetFormPropelChoice(array('model' => 'SitFuncionais', 'add_empty' => false)),
      'cd_regime_juridico'      => new sfWidgetFormPropelChoice(array('model' => 'RegimesJuridicos', 'add_empty' => false)),
      'cd_regime_prev_ap'       => new sfWidgetFormInputText(),
      'cd_ocup_cbo'             => new sfWidgetFormPropelChoice(array('model' => 'CboMunicipais', 'add_empty' => false)),
      'cd_tipo_cargo'           => new sfWidgetFormPropelChoice(array('model' => 'TiposCargos', 'add_empty' => false)),
      'vl_carga_horaria'        => new sfWidgetFormInputText(),
      'nu_dependentes_ap'       => new sfWidgetFormInputText(),
      'dt_ref_ap'               => new sfWidgetFormInputText(),
      'nm_serv_muni_ds'         => new sfWidgetFormInputText(),
      'tp_programa_social_ap'   => new sfWidgetFormInputText(),
      'cd_programa_social_ap'   => new sfWidgetFormInputText(),
      'ordenadores_list'        => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidOrcUg')),
      'reaval_baixas_bens_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'BensMunicipios')),
      'unid_orc_bens_list'      => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'BensMunicipios')),
      'concessoes_itens_list'   => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ItensRemuneratorios')),
      'gestores_ug_list'        => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidGestoras')),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'           => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'             => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_cpf_serv_muni'        => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'cd_ingresso'             => new sfValidatorPropelChoice(array('model' => 'TiposIngressos', 'column' => 'cd_ingresso', 'required' => false)),
      'cd_vinculo'              => new sfValidatorPropelChoice(array('model' => 'Vinculos', 'column' => 'cd_vinculo', 'required' => false)),
      'nu_expediente_no'        => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'nu_expediente_no', 'required' => false)),
      'cd_expediente'           => new sfValidatorPropelChoice(array('model' => 'TiposExpedientes', 'column' => 'cd_expediente')),
      'dt_expediente_ap'        => new sfValidatorDateTime(),
      'cd_amparo_legal'         => new sfValidatorPropelChoice(array('model' => 'TiposAmparosLegais', 'column' => 'cd_amparo_legal')),
      'nu_amparo_legal_ap'      => new sfValidatorString(array('max_length' => 10)),
      'dt_amparo_legal_ap'      => new sfValidatorDateTime(),
      'dt_public_amparo_ap'     => new sfValidatorDateTime(),
      'dt_posse_ap'             => new sfValidatorDateTime(),
      'nu_matricula_muni_ap'    => new sfValidatorString(array('max_length' => 15)),
      'cd_sit_funcional'        => new sfValidatorPropelChoice(array('model' => 'SitFuncionais', 'column' => 'cd_sit_funcional')),
      'cd_regime_juridico'      => new sfValidatorPropelChoice(array('model' => 'RegimesJuridicos', 'column' => 'cd_regime_juridico')),
      'cd_regime_prev_ap'       => new sfValidatorString(array('max_length' => 1)),
      'cd_ocup_cbo'             => new sfValidatorPropelChoice(array('model' => 'CboMunicipais', 'column' => 'cd_ocup_cbom')),
      'cd_tipo_cargo'           => new sfValidatorPropelChoice(array('model' => 'TiposCargos', 'column' => 'cd_tipo_cargo')),
      'vl_carga_horaria'        => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'nu_dependentes_ap'       => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'dt_ref_ap'               => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'nm_serv_muni_ds'         => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'tp_programa_social_ap'   => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'cd_programa_social_ap'   => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'ordenadores_list'        => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidOrcUg', 'required' => false)),
      'reaval_baixas_bens_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'BensMunicipios', 'required' => false)),
      'unid_orc_bens_list'      => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'BensMunicipios', 'required' => false)),
      'concessoes_itens_list'   => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ItensRemuneratorios', 'required' => false)),
      'gestores_ug_list'        => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidGestoras', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('agentes_publicos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AgentesPublicos';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['ordenadores_list']))
    {
      $values = array();
      foreach ($this->object->getOrdenadoress() as $obj)
      {
        $values[] = $obj->getCdUnidGestUg();
      }

      $this->setDefault('ordenadores_list', $values);
    }

    if (isset($this->widgetSchema['reaval_baixas_bens_list']))
    {
      $values = array();
      foreach ($this->object->getReavalBaixasBenss() as $obj)
      {
        $values[] = $obj->getNuRegistroBem();
      }

      $this->setDefault('reaval_baixas_bens_list', $values);
    }

    if (isset($this->widgetSchema['unid_orc_bens_list']))
    {
      $values = array();
      foreach ($this->object->getUnidOrcBenss() as $obj)
      {
        $values[] = $obj->getNuRegistroBem();
      }

      $this->setDefault('unid_orc_bens_list', $values);
    }

    if (isset($this->widgetSchema['concessoes_itens_list']))
    {
      $values = array();
      foreach ($this->object->getConcessoesItenss() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('concessoes_itens_list', $values);
    }

    if (isset($this->widgetSchema['gestores_ug_list']))
    {
      $values = array();
      foreach ($this->object->getGestoresUgs() as $obj)
      {
        $values[] = $obj->getCdUnidGestUg();
      }

      $this->setDefault('gestores_ug_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveOrdenadoresList($con);
    $this->saveReavalBaixasBensList($con);
    $this->saveUnidOrcBensList($con);
    $this->saveConcessoesItensList($con);
    $this->saveGestoresUgList($con);
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
    $c->add(OrdenadoresPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    OrdenadoresPeer::doDelete($c, $con);

    $values = $this->getValue('ordenadores_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new Ordenadores();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdUnidGestUg($value);
        $obj->save();
      }
    }
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
    $c->add(ReavalBaixasBensPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    ReavalBaixasBensPeer::doDelete($c, $con);

    $values = $this->getValue('reaval_baixas_bens_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new ReavalBaixasBens();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setNuRegistroBem($value);
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
    $c->add(UnidOrcBensPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    UnidOrcBensPeer::doDelete($c, $con);

    $values = $this->getValue('unid_orc_bens_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new UnidOrcBens();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setNuRegistroBem($value);
        $obj->save();
      }
    }
  }

  public function saveConcessoesItensList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['concessoes_itens_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(ConcessoesItensPeer::DT_VERSAO_ORC, $this->object->getPrimaryKey());
    ConcessoesItensPeer::doDelete($c, $con);

    $values = $this->getValue('concessoes_itens_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new ConcessoesItens();
        $obj->setDtVersaoOrc($this->object->getPrimaryKey());
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
    $c->add(GestoresUgPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    GestoresUgPeer::doDelete($c, $con);

    $values = $this->getValue('gestores_ug_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new GestoresUg();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdUnidGestUg($value);
        $obj->save();
      }
    }
  }

}
