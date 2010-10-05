<?php

/**
 * EstornosPagamentos form base class.
 *
 * @method EstornosPagamentos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEstornosPagamentosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputHidden(),
      'dt_versao_orc'       => new sfWidgetFormInputHidden(),
      'cd_orgao'            => new sfWidgetFormInputHidden(),
      'cd_unid_orc'         => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'       => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'     => new sfWidgetFormInputHidden(),
      'nu_sub_empenho_np'   => new sfWidgetFormInputHidden(),
      'nu_nota_np'          => new sfWidgetFormInputHidden(),
      'dt_estorno_ep'       => new sfWidgetFormDateTime(),
      'dt_ref_ep'           => new sfWidgetFormInputText(),
      'nm_assessor_ep'      => new sfWidgetFormInputText(),
      'de_justificativa_ep' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorPropelChoice(array('model' => 'EstornosPagamentos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'       => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'            => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'         => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'       => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'     => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'nu_sub_empenho_np'   => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_sub_empenho_np', 'required' => false)),
      'nu_nota_np'          => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_nota_np', 'required' => false)),
      'dt_estorno_ep'       => new sfValidatorDateTime(),
      'dt_ref_ep'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_assessor_ep'      => new sfValidatorString(array('max_length' => 40)),
      'de_justificativa_ep' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('estornos_pagamentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstornosPagamentos';
  }


}
