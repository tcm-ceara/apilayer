<?php

/**
 * PagamentosFolhas form base class.
 *
 * @method PagamentosFolhas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePagamentosFolhasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputHidden(),
      'dt_versao_orc'     => new sfWidgetFormInputHidden(),
      'cd_orgao'          => new sfWidgetFormInputHidden(),
      'cd_unid_orc'       => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'     => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'   => new sfWidgetFormInputHidden(),
      'nu_sub_empenho_np' => new sfWidgetFormInputHidden(),
      'nu_nota_np'        => new sfWidgetFormInputHidden(),
      'dt_compet_fl'      => new sfWidgetFormInputHidden(),
      'tp_folha'          => new sfWidgetFormInputHidden(),
      'dt_emissao_fl'     => new sfWidgetFormInputHidden(),
      'dt_ref_fp'         => new sfWidgetFormInputHidden(),
      'vl_pag_folha_pf'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorPropelChoice(array('model' => 'PagamentosFolhas', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'     => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'          => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'       => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'     => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'   => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'nu_sub_empenho_np' => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_sub_empenho_np', 'required' => false)),
      'nu_nota_np'        => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_nota_np', 'required' => false)),
      'dt_compet_fl'      => new sfValidatorPropelChoice(array('model' => 'PagamentosFolhas', 'column' => 'dt_compet_fl', 'required' => false)),
      'tp_folha'          => new sfValidatorPropelChoice(array('model' => 'PagamentosFolhas', 'column' => 'tp_folha', 'required' => false)),
      'dt_emissao_fl'     => new sfValidatorPropelChoice(array('model' => 'PagamentosFolhas', 'column' => 'dt_emissao_fl', 'required' => false)),
      'dt_ref_fp'         => new sfValidatorPropelChoice(array('model' => 'PagamentosFolhas', 'column' => 'dt_ref_fp', 'required' => false)),
      'vl_pag_folha_pf'   => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('pagamentos_folhas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PagamentosFolhas';
  }


}
