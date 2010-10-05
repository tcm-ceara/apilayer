<?php

/**
 * CatEcoProjAtiv form base class.
 *
 * @method CatEcoProjAtiv getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCatEcoProjAtivForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'             => new sfWidgetFormInputHidden(),
      'dt_versao_orc'            => new sfWidgetFormInputHidden(),
      'cd_orgao'                 => new sfWidgetFormInputHidden(),
      'cd_unid_orc'              => new sfWidgetFormInputHidden(),
      'cd_funcao'                => new sfWidgetFormInputHidden(),
      'cd_subfuncao'             => new sfWidgetFormInputHidden(),
      'cd_programa'              => new sfWidgetFormInputHidden(),
      'cd_proj_ativ'             => new sfWidgetFormInputHidden(),
      'nu_proj_ativ'             => new sfWidgetFormInputHidden(),
      'nu_sub_proj_ativ'         => new sfWidgetFormInputHidden(),
      'cd_elemento_od'           => new sfWidgetFormInputHidden(),
      'vl_atual_ce_proj_ativ'    => new sfWidgetFormInputText(),
      'vl_orc_ce_proj_ativ'      => new sfWidgetFormInputText(),
      'fontes_anulacao_list'     => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'CreditosAdicionais')),
      'destino_realoc_orc_list'  => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'RealocacoesOrcamentarias')),
      'dotacoes_licitacoes_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Licitacoes')),
    ));

    $this->setValidators(array(
      'cd_municipio'             => new sfValidatorPropelChoice(array('model' => 'OrcDespCatEco', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'            => new sfValidatorPropelChoice(array('model' => 'OrcDespCatEco', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                 => new sfValidatorPropelChoice(array('model' => 'OrcDespCatEco', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'              => new sfValidatorPropelChoice(array('model' => 'OrcDespCatEco', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_funcao'                => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_funcao', 'required' => false)),
      'cd_subfuncao'             => new sfValidatorPropelChoice(array('model' => 'OrcDespProjAtiv', 'column' => 'cd_subfuncao', 'required' => false)),
      'cd_programa'              => new sfValidatorPropelChoice(array('model' => 'OrcDespProjAtiv', 'column' => 'cd_programa', 'required' => false)),
      'cd_proj_ativ'             => new sfValidatorPropelChoice(array('model' => 'OrcDespProjAtiv', 'column' => 'cd_proj_ativ', 'required' => false)),
      'nu_proj_ativ'             => new sfValidatorPropelChoice(array('model' => 'OrcDespProjAtiv', 'column' => 'nu_proj_ativ', 'required' => false)),
      'nu_sub_proj_ativ'         => new sfValidatorPropelChoice(array('model' => 'OrcDespProjAtiv', 'column' => 'nu_sub_proj_ativ', 'required' => false)),
      'cd_elemento_od'           => new sfValidatorPropelChoice(array('model' => 'OrcDespCatEco', 'column' => 'cd_elemento_od', 'required' => false)),
      'vl_atual_ce_proj_ativ'    => new sfValidatorNumber(),
      'vl_orc_ce_proj_ativ'      => new sfValidatorNumber(),
      'fontes_anulacao_list'     => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'CreditosAdicionais', 'required' => false)),
      'destino_realoc_orc_list'  => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'RealocacoesOrcamentarias', 'required' => false)),
      'dotacoes_licitacoes_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Licitacoes', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cat_eco_proj_ativ[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CatEcoProjAtiv';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['fontes_anulacao_list']))
    {
      $values = array();
      foreach ($this->object->getFontesAnulacaos() as $obj)
      {
        $values[] = $obj->getDtAbertCredCa();
      }

      $this->setDefault('fontes_anulacao_list', $values);
    }

    if (isset($this->widgetSchema['destino_realoc_orc_list']))
    {
      $values = array();
      foreach ($this->object->getDestinoRealocOrcs() as $obj)
      {
        $values[] = $obj->getDtAlteracaoRo();
      }

      $this->setDefault('destino_realoc_orc_list', $values);
    }

    if (isset($this->widgetSchema['dotacoes_licitacoes_list']))
    {
      $values = array();
      foreach ($this->object->getDotacoesLicitacoess() as $obj)
      {
        $values[] = $obj->getDtRealizacaoLicitLi();
      }

      $this->setDefault('dotacoes_licitacoes_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveFontesAnulacaoList($con);
    $this->saveDestinoRealocOrcList($con);
    $this->saveDotacoesLicitacoesList($con);
  }

  public function saveFontesAnulacaoList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['fontes_anulacao_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(FontesAnulacaoPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    FontesAnulacaoPeer::doDelete($c, $con);

    $values = $this->getValue('fontes_anulacao_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new FontesAnulacao();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setDtAbertCredCa($value);
        $obj->save();
      }
    }
  }

  public function saveDestinoRealocOrcList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['destino_realoc_orc_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(DestinoRealocOrcPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    DestinoRealocOrcPeer::doDelete($c, $con);

    $values = $this->getValue('destino_realoc_orc_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DestinoRealocOrc();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setDtAlteracaoRo($value);
        $obj->save();
      }
    }
  }

  public function saveDotacoesLicitacoesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['dotacoes_licitacoes_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(DotacoesLicitacoesPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    DotacoesLicitacoesPeer::doDelete($c, $con);

    $values = $this->getValue('dotacoes_licitacoes_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DotacoesLicitacoes();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setDtRealizacaoLicitLi($value);
        $obj->save();
      }
    }
  }

}
