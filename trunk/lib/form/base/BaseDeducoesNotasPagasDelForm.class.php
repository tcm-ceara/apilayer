<?php

/**
 * DeducoesNotasPagasDel form base class.
 *
 * @method DeducoesNotasPagasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDeducoesNotasPagasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputText(),
      'dt_versao_orc'        => new sfWidgetFormInputText(),
      'cd_orgao'             => new sfWidgetFormInputText(),
      'cd_unid_orc'          => new sfWidgetFormInputText(),
      'dt_emissao_ne'        => new sfWidgetFormDateTime(),
      'nu_nota_empenho'      => new sfWidgetFormInputText(),
      'nu_sub_empenho_np'    => new sfWidgetFormInputText(),
      'nu_nota_np'           => new sfWidgetFormInputText(),
      'cd_conta_ctx'         => new sfWidgetFormInputText(),
      'dt_ref_doc_dnp'       => new sfWidgetFormInputText(),
      'vl_deducao_dnp'       => new sfWidgetFormInputText(),
      'tp_classificacao_dnp' => new sfWidgetFormInputText(),
      'id'                   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'             => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'          => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'        => new sfValidatorDateTime(),
      'nu_nota_empenho'      => new sfValidatorString(array('max_length' => 8)),
      'nu_sub_empenho_np'    => new sfValidatorString(array('max_length' => 3)),
      'nu_nota_np'           => new sfValidatorString(array('max_length' => 8)),
      'cd_conta_ctx'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_ref_doc_dnp'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'vl_deducao_dnp'       => new sfValidatorNumber(),
      'tp_classificacao_dnp' => new sfValidatorString(array('max_length' => 1)),
      'id'                   => new sfValidatorPropelChoice(array('model' => 'DeducoesNotasPagasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('deducoes_notas_pagas_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DeducoesNotasPagasDel';
  }


}
