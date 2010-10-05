<?php

/**
 * DeducoesNotasPagDel form base class.
 *
 * @method DeducoesNotasPagDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDeducoesNotasPagDelForm extends BaseFormPropel
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
      'cd_deducao_td'     => new sfWidgetFormInputText(),
      'dt_ref_doc_dn'     => new sfWidgetFormInputText(),
      'vl_deducao_dn'     => new sfWidgetFormInputText(),
      'de_deducao_dn'     => new sfWidgetFormInputText(),
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
      'cd_deducao_td'     => new sfValidatorString(array('max_length' => 2)),
      'dt_ref_doc_dn'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'vl_deducao_dn'     => new sfValidatorNumber(),
      'de_deducao_dn'     => new sfValidatorString(array('max_length' => 255)),
      'id'                => new sfValidatorPropelChoice(array('model' => 'DeducoesNotasPagDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('deducoes_notas_pag_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DeducoesNotasPagDel';
  }


}
