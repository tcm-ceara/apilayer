<?php

/**
 * NotasEmpenhos form base class.
 *
 * @method NotasEmpenhos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNotasEmpenhosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_versao_orc'          => new sfWidgetFormInputHidden(),
      'cd_orgao'               => new sfWidgetFormInputHidden(),
      'cd_unid_orc'            => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'          => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'        => new sfWidgetFormInputHidden(),
      'dt_ref_ne'              => new sfWidgetFormInputText(),
      'cd_funcao'              => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'cd_subfuncao'           => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'cd_programa'            => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'cd_proj_ativ'           => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'nu_proj_ativ'           => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'nu_sub_proj_ativ'       => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'cd_elemento_od'         => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'md_nota_empenho'        => new sfWidgetFormInputText(),
      'de_historico_ne1'       => new sfWidgetFormInputText(),
      'de_historico_ne2'       => new sfWidgetFormInputText(),
      'vl_ant_saldo_dot_ne'    => new sfWidgetFormInputText(),
      'vl_empenhado_ne'        => new sfWidgetFormInputText(),
      'vl_atual_saldo_dot_ne'  => new sfWidgetFormInputText(),
      'tp_proc_licit_ne'       => new sfWidgetFormInputText(),
      'nu_doc_ng'              => new sfWidgetFormInputText(),
      'st_empenho_ne'          => new sfWidgetFormInputText(),
      'nu_nota_anulacao_ne'    => new sfWidgetFormInputText(),
      'dt_emiss_emp_subst_ne'  => new sfWidgetFormDateTime(),
      'nu_emp_subst_ne'        => new sfWidgetFormInputText(),
      'cd_tipo_ng'             => new sfWidgetFormInputText(),
      'nm_negociante_ng'       => new sfWidgetFormInputText(),
      'de_endereco_ng'         => new sfWidgetFormInputText(),
      'nu_fone_ng'             => new sfWidgetFormInputText(),
      'nu_cep_ng'              => new sfWidgetFormInputText(),
      'nm_municipio_ng'        => new sfWidgetFormInputText(),
      'cd_uf_nf'               => new sfWidgetFormPropelChoice(array('model' => 'UnidadesFederacao', 'add_empty' => true)),
      'cd_cpf_gestor'          => new sfWidgetFormInputText(),
      'recursos_empenhos_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ConveniosFirmados')),
      'empenhos_obras_list'    => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ObrasServEng')),
      'dados_empenhos_list'    => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Licitacoes')),
      'empenhos_bens_list'     => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'BensMunicipios')),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'               => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'            => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'          => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'        => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'dt_ref_ne'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_funcao'              => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_funcao')),
      'cd_subfuncao'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_subfuncao')),
      'cd_programa'            => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_programa')),
      'cd_proj_ativ'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_proj_ativ')),
      'nu_proj_ativ'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_proj_ativ')),
      'nu_sub_proj_ativ'       => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_sub_proj_ativ')),
      'cd_elemento_od'         => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_elemento_od')),
      'md_nota_empenho'        => new sfValidatorString(array('max_length' => 1)),
      'de_historico_ne1'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_historico_ne2'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vl_ant_saldo_dot_ne'    => new sfValidatorNumber(array('required' => false)),
      'vl_empenhado_ne'        => new sfValidatorNumber(array('required' => false)),
      'vl_atual_saldo_dot_ne'  => new sfValidatorNumber(array('required' => false)),
      'tp_proc_licit_ne'       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nu_doc_ng'              => new sfValidatorString(array('max_length' => 25)),
      'st_empenho_ne'          => new sfValidatorString(array('max_length' => 2)),
      'nu_nota_anulacao_ne'    => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'dt_emiss_emp_subst_ne'  => new sfValidatorDateTime(array('required' => false)),
      'nu_emp_subst_ne'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'cd_tipo_ng'             => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nm_negociante_ng'       => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'de_endereco_ng'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_ng'             => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nu_cep_ng'              => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nm_municipio_ng'        => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'cd_uf_nf'               => new sfValidatorPropelChoice(array('model' => 'UnidadesFederacao', 'column' => 'cd_sigla_uf', 'required' => false)),
      'cd_cpf_gestor'          => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'recursos_empenhos_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ConveniosFirmados', 'required' => false)),
      'empenhos_obras_list'    => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ObrasServEng', 'required' => false)),
      'dados_empenhos_list'    => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Licitacoes', 'required' => false)),
      'empenhos_bens_list'     => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'BensMunicipios', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_empenhos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasEmpenhos';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['recursos_empenhos_list']))
    {
      $values = array();
      foreach ($this->object->getRecursosEmpenhoss() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('recursos_empenhos_list', $values);
    }

    if (isset($this->widgetSchema['empenhos_obras_list']))
    {
      $values = array();
      foreach ($this->object->getEmpenhosObrass() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('empenhos_obras_list', $values);
    }

    if (isset($this->widgetSchema['dados_empenhos_list']))
    {
      $values = array();
      foreach ($this->object->getDadosEmpenhoss() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('dados_empenhos_list', $values);
    }

    if (isset($this->widgetSchema['empenhos_bens_list']))
    {
      $values = array();
      foreach ($this->object->getEmpenhosBenss() as $obj)
      {
        $values[] = $obj->getNuRegistroBem();
      }

      $this->setDefault('empenhos_bens_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveRecursosEmpenhosList($con);
    $this->saveEmpenhosObrasList($con);
    $this->saveDadosEmpenhosList($con);
    $this->saveEmpenhosBensList($con);
  }

  public function saveRecursosEmpenhosList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['recursos_empenhos_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(RecursosEmpenhosPeer::DT_VERSAO_ORC, $this->object->getPrimaryKey());
    RecursosEmpenhosPeer::doDelete($c, $con);

    $values = $this->getValue('recursos_empenhos_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new RecursosEmpenhos();
        $obj->setDtVersaoOrc($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
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
    $c->add(EmpenhosObrasPeer::DT_VERSAO_ORC, $this->object->getPrimaryKey());
    EmpenhosObrasPeer::doDelete($c, $con);

    $values = $this->getValue('empenhos_obras_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new EmpenhosObras();
        $obj->setDtVersaoOrc($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
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
    $c->add(DadosEmpenhosPeer::DT_VERSAO_ORC, $this->object->getPrimaryKey());
    DadosEmpenhosPeer::doDelete($c, $con);

    $values = $this->getValue('dados_empenhos_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DadosEmpenhos();
        $obj->setDtVersaoOrc($this->object->getPrimaryKey());
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
    $c->add(EmpenhosBensPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    EmpenhosBensPeer::doDelete($c, $con);

    $values = $this->getValue('empenhos_bens_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new EmpenhosBens();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setNuRegistroBem($value);
        $obj->save();
      }
    }
  }

}
