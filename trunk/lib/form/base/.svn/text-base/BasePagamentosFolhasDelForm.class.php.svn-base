<?php

/**
 * PagamentosFolhasDel form base class.
 *
 * @method PagamentosFolhasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePagamentosFolhasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputText(),
      'dt_versao_orc'     => new sfWidgetFormInputText(),
      'cd_orgao'          => new sfWidgetFormInputText(),
      'cd_unid_orc'       => new sfWidgetFormInputText(),
      'dt_emissao_ne'     => new sfWidgetFormDateTime(),
      'nu_nota_empenho'   => new sfWidgetFormInputText(),
      'nu_sub_empenho_np' => new sfWidgetFormInputText(),
      'nu_nota_np'        => new sfWidgetFormInputText(),
      'dt_compet_fl'      => new sfWidgetFormInputText(),
      'tp_folha'          => new sfWidgetFormInputText(),
      'dt_emissao_fl'     => new sfWidgetFormDateTime(),
      'dt_ref_fp'         => new sfWidgetFormInputText(),
      'vl_pag_folha_pf'   => new sfWidgetFormInputText(),
      'id'                => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'          => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'       => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'     => new sfValidatorDateTime(),
      'nu_nota_empenho'   => new sfValidatorString(array('max_length' => 8)),
      'nu_sub_empenho_np' => new sfValidatorString(array('max_length' => 3)),
      'nu_nota_np'        => new sfValidatorString(array('max_length' => 8)),
      'dt_compet_fl'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'tp_folha'          => new sfValidatorString(array('max_length' => 2)),
      'dt_emissao_fl'     => new sfValidatorDateTime(),
      'dt_ref_fp'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'vl_pag_folha_pf'   => new sfValidatorNumber(),
      'id'                => new sfValidatorPropelChoice(array('model' => 'PagamentosFolhasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pagamentos_folhas_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PagamentosFolhasDel';
  }


}
