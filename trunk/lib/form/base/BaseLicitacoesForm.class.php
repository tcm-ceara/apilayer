<?php

/**
 * Licitacoes form base class.
 *
 * @method Licitacoes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLicitacoesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'              => new sfWidgetFormInputHidden(),
      'dt_realizacao_licit_li'    => new sfWidgetFormInputHidden(),
      'nu_licitacao_li'           => new sfWidgetFormInputHidden(),
      'hr_realizacao_li'          => new sfWidgetFormInputText(),
      'dt_emissao_edital_li'      => new sfWidgetFormDateTime(),
      'md_licitacao_li'           => new sfWidgetFormInputText(),
      'tp_licitacao_li'           => new sfWidgetFormInputText(),
      'de_objeto_licitacao_li1'   => new sfWidgetFormInputText(),
      'de_objeto_licitacao_li2'   => new sfWidgetFormInputText(),
      'vl_orc_estimado_obj_li'    => new sfWidgetFormInputText(),
      'vl_limite_superior_obj_li' => new sfWidgetFormInputText(),
      'cd_cpf_gestor'             => new sfWidgetFormPropelChoice(array('model' => 'ComissoesLicitacoes', 'add_empty' => false)),
      'dt_criac_comissao_cl'      => new sfWidgetFormPropelChoice(array('model' => 'ComissoesLicitacoes', 'add_empty' => false)),
      'nu_comissao_licit_cl'      => new sfWidgetFormPropelChoice(array('model' => 'ComissoesLicitacoes', 'add_empty' => false)),
      'cd_cpf_resp_homolog_li'    => new sfWidgetFormPropelChoice(array('model' => 'DadosPessoais', 'add_empty' => true)),
      'nm_resp_homolog_li'        => new sfWidgetFormInputText(),
      'dt_realizacao_licit_pa'    => new sfWidgetFormDateTime(),
      'md_processo_adm_pa'        => new sfWidgetFormInputText(),
      'cd_cpf_resp_juridico_pa'   => new sfWidgetFormInputText(),
      'nm_resp_juridico_pa'       => new sfWidgetFormInputText(),
      'dt_homologacao_pa'         => new sfWidgetFormDateTime(),
      'de_justifica_preco_pa1'    => new sfWidgetFormInputText(),
      'de_justifica_preco_pa2'    => new sfWidgetFormInputText(),
      'de_motivo_fornec_pa1'      => new sfWidgetFormInputText(),
      'de_motivo_fornec_pa2'      => new sfWidgetFormInputText(),
      'de_fund_legal_pa'          => new sfWidgetFormInputText(),
      'nm_orgao_ata_pa'           => new sfWidgetFormInputText(),
      'licitantes_list'           => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Negociantes')),
      'dados_empenhos_list'       => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'NotasEmpenhos')),
      'dotacoes_licitacoes_list'  => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'CatEcoProjAtiv')),
    ));

    $this->setValidators(array(
      'cd_municipio'              => new sfValidatorPropelChoice(array('model' => 'ComissoesLicitacoes', 'column' => 'cd_municipio', 'required' => false)),
      'dt_realizacao_licit_li'    => new sfValidatorPropelChoice(array('model' => 'Licitacoes', 'column' => 'dt_realizacao_licit_li', 'required' => false)),
      'nu_licitacao_li'           => new sfValidatorPropelChoice(array('model' => 'Licitacoes', 'column' => 'nu_licitacao_li', 'required' => false)),
      'hr_realizacao_li'          => new sfValidatorString(array('max_length' => 5)),
      'dt_emissao_edital_li'      => new sfValidatorDateTime(array('required' => false)),
      'md_licitacao_li'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'tp_licitacao_li'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'de_objeto_licitacao_li1'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_objeto_licitacao_li2'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vl_orc_estimado_obj_li'    => new sfValidatorNumber(array('required' => false)),
      'vl_limite_superior_obj_li' => new sfValidatorNumber(array('required' => false)),
      'cd_cpf_gestor'             => new sfValidatorPropelChoice(array('model' => 'ComissoesLicitacoes', 'column' => 'cd_cpf_gestor')),
      'dt_criac_comissao_cl'      => new sfValidatorPropelChoice(array('model' => 'ComissoesLicitacoes', 'column' => 'dt_criac_comissao_cl')),
      'nu_comissao_licit_cl'      => new sfValidatorPropelChoice(array('model' => 'ComissoesLicitacoes', 'column' => 'nu_comissao_licit_cl')),
      'cd_cpf_resp_homolog_li'    => new sfValidatorPropelChoice(array('model' => 'DadosPessoais', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'nm_resp_homolog_li'        => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'dt_realizacao_licit_pa'    => new sfValidatorDateTime(array('required' => false)),
      'md_processo_adm_pa'        => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cd_cpf_resp_juridico_pa'   => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nm_resp_juridico_pa'       => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'dt_homologacao_pa'         => new sfValidatorDateTime(array('required' => false)),
      'de_justifica_preco_pa1'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_justifica_preco_pa2'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_motivo_fornec_pa1'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_motivo_fornec_pa2'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_fund_legal_pa'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nm_orgao_ata_pa'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'licitantes_list'           => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Negociantes', 'required' => false)),
      'dados_empenhos_list'       => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'NotasEmpenhos', 'required' => false)),
      'dotacoes_licitacoes_list'  => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'CatEcoProjAtiv', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('licitacoes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Licitacoes';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['licitantes_list']))
    {
      $values = array();
      foreach ($this->object->getLicitantess() as $obj)
      {
        $values[] = $obj->getNuDocNg();
      }

      $this->setDefault('licitantes_list', $values);
    }

    if (isset($this->widgetSchema['dados_empenhos_list']))
    {
      $values = array();
      foreach ($this->object->getDadosEmpenhoss() as $obj)
      {
        $values[] = $obj->getDtVersaoOrc();
      }

      $this->setDefault('dados_empenhos_list', $values);
    }

    if (isset($this->widgetSchema['dotacoes_licitacoes_list']))
    {
      $values = array();
      foreach ($this->object->getDotacoesLicitacoess() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('dotacoes_licitacoes_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveLicitantesList($con);
    $this->saveDadosEmpenhosList($con);
    $this->saveDotacoesLicitacoesList($con);
  }

  public function saveLicitantesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['licitantes_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(LicitantesPeer::DT_REALIZACAO_LICIT_LI, $this->object->getPrimaryKey());
    LicitantesPeer::doDelete($c, $con);

    $values = $this->getValue('licitantes_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new Licitantes();
        $obj->setDtRealizacaoLicitLi($this->object->getPrimaryKey());
        $obj->setNuDocNg($value);
        $obj->save();
      }
    }
  }

  public function saveDadosEmpenhosList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['dados_empenhos_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(DadosEmpenhosPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    DadosEmpenhosPeer::doDelete($c, $con);

    $values = $this->getValue('dados_empenhos_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DadosEmpenhos();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setDtVersaoOrc($value);
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
    $c->add(DotacoesLicitacoesPeer::DT_REALIZACAO_LICIT_LI, $this->object->getPrimaryKey());
    DotacoesLicitacoesPeer::doDelete($c, $con);

    $values = $this->getValue('dotacoes_licitacoes_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DotacoesLicitacoes();
        $obj->setDtRealizacaoLicitLi($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
