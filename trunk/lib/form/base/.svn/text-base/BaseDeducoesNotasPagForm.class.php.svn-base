<?php

/**
 * DeducoesNotasPag form base class.
 *
 * @method DeducoesNotasPag getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDeducoesNotasPagForm extends BaseFormPropel
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
      'cd_deducao_td'     => new sfWidgetFormInputHidden(),
      'dt_ref_doc_dn'     => new sfWidgetFormInputText(),
      'vl_deducao_dn'     => new sfWidgetFormInputText(),
      'de_deducao_dn'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorPropelChoice(array('model' => 'DeducoesNotasPag', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'     => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'          => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'       => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'     => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'   => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'nu_sub_empenho_np' => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_sub_empenho_np', 'required' => false)),
      'nu_nota_np'        => new sfValidatorPropelChoice(array('model' => 'NotasPagamentos', 'column' => 'nu_nota_np', 'required' => false)),
      'cd_deducao_td'     => new sfValidatorPropelChoice(array('model' => 'TiposDeducoes', 'column' => 'cd_deducao_td', 'required' => false)),
      'dt_ref_doc_dn'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'vl_deducao_dn'     => new sfValidatorNumber(),
      'de_deducao_dn'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('deducoes_notas_pag[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DeducoesNotasPag';
  }


}
