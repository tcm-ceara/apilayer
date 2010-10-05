<?php

/**
 * NotasPagamentos form base class.
 *
 * @method NotasPagamentos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNotasPagamentosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'              => new sfWidgetFormInputHidden(),
      'dt_versao_orc'             => new sfWidgetFormInputHidden(),
      'cd_orgao'                  => new sfWidgetFormInputHidden(),
      'cd_unid_orc'               => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'             => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'           => new sfWidgetFormInputHidden(),
      'nu_sub_empenho_np'         => new sfWidgetFormInputHidden(),
      'nu_nota_np'                => new sfWidgetFormInputHidden(),
      'dt_ref_np'                 => new sfWidgetFormInputText(),
      'nu_doc_caixa_np'           => new sfWidgetFormInputText(),
      'dt_nota_np'                => new sfWidgetFormDateTime(),
      'vl_nota_np'                => new sfWidgetFormInputText(),
      'vl_emp_a_pagar_np'         => new sfWidgetFormInputText(),
      'st_estornado_np'           => new sfWidgetFormInputText(),
      'cd_cpf_resp_pag_np'        => new sfWidgetFormPropelChoice(array('model' => 'DadosPessoais', 'add_empty' => true)),
      'nm_resp_pag_np'            => new sfWidgetFormInputText(),
      'deducoes_notas_pagas_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc')),
      'deducoes_notas_pag_list'   => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'TiposDeducoes')),
    ));

    $this->setValidators(array(
      'cd_municipio'              => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'             => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                  => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'               => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'             => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'           => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'nu_sub_empenho_np'         => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_sub_empenho_np', 'required' => false)),
      'nu_nota_np'                => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_nota_np', 'required' => false)),
      'dt_ref_np'                 => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'nu_doc_caixa_np'           => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'dt_nota_np'                => new sfValidatorDateTime(array('required' => false)),
      'vl_nota_np'                => new sfValidatorNumber(array('required' => false)),
      'vl_emp_a_pagar_np'         => new sfValidatorNumber(array('required' => false)),
      'st_estornado_np'           => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'cd_cpf_resp_pag_np'        => new sfValidatorPropelChoice(array('model' => 'DadosPessoais', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'nm_resp_pag_np'            => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'deducoes_notas_pagas_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc', 'required' => false)),
      'deducoes_notas_pag_list'   => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'TiposDeducoes', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_pagamentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasPagamentos';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['deducoes_notas_pagas_list']))
    {
      $values = array();
      foreach ($this->object->getDeducoesNotasPagass() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('deducoes_notas_pagas_list', $values);
    }

    if (isset($this->widgetSchema['deducoes_notas_pag_list']))
    {
      $values = array();
      foreach ($this->object->getDeducoesNotasPags() as $obj)
      {
        $values[] = $obj->getCdDeducaoTd();
      }

      $this->setDefault('deducoes_notas_pag_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveDeducoesNotasPagasList($con);
    $this->saveDeducoesNotasPagList($con);
  }

  public function saveDeducoesNotasPagasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['deducoes_notas_pagas_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(DeducoesNotasPagasPeer::CD_ORGAO, $this->object->getPrimaryKey());
    DeducoesNotasPagasPeer::doDelete($c, $con);

    $values = $this->getValue('deducoes_notas_pagas_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DeducoesNotasPagas();
        $obj->setCdOrgao($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

  public function saveDeducoesNotasPagList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['deducoes_notas_pag_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(DeducoesNotasPagPeer::DT_VERSAO_ORC, $this->object->getPrimaryKey());
    DeducoesNotasPagPeer::doDelete($c, $con);

    $values = $this->getValue('deducoes_notas_pag_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DeducoesNotasPag();
        $obj->setDtVersaoOrc($this->object->getPrimaryKey());
        $obj->setCdDeducaoTd($value);
        $obj->save();
      }
    }
  }

}
