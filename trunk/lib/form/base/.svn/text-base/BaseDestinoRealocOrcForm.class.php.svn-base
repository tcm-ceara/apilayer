<?php

/**
 * DestinoRealocOrc form base class.
 *
 * @method DestinoRealocOrc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDestinoRealocOrcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputHidden(),
      'dt_versao_orc'    => new sfWidgetFormInputHidden(),
      'dt_alteracao_ro'  => new sfWidgetFormInputHidden(),
      'nu_seq_no_dia_ro' => new sfWidgetFormInputHidden(),
      'cd_orgao'         => new sfWidgetFormInputHidden(),
      'cd_unid_orc'      => new sfWidgetFormInputHidden(),
      'cd_funcao'        => new sfWidgetFormInputHidden(),
      'cd_subfuncao'     => new sfWidgetFormInputHidden(),
      'cd_programa'      => new sfWidgetFormInputHidden(),
      'cd_proj_ativ'     => new sfWidgetFormInputHidden(),
      'nu_proj_ativ'     => new sfWidgetFormInputHidden(),
      'nu_sub_proj_ativ' => new sfWidgetFormInputHidden(),
      'cd_elemento_od'   => new sfWidgetFormInputHidden(),
      'dt_ref_dro'       => new sfWidgetFormInputText(),
      'vl_destino_dro'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'    => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'dt_versao_orc', 'required' => false)),
      'dt_alteracao_ro'  => new sfValidatorPropelChoice(array('model' => 'RealocacoesOrcamentarias', 'column' => 'dt_alteracao_ro', 'required' => false)),
      'nu_seq_no_dia_ro' => new sfValidatorPropelChoice(array('model' => 'RealocacoesOrcamentarias', 'column' => 'nu_seq_no_dia_ro', 'required' => false)),
      'cd_orgao'         => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'      => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_funcao'        => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_funcao', 'required' => false)),
      'cd_subfuncao'     => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_subfuncao', 'required' => false)),
      'cd_programa'      => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_programa', 'required' => false)),
      'cd_proj_ativ'     => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_proj_ativ', 'required' => false)),
      'nu_proj_ativ'     => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_proj_ativ', 'required' => false)),
      'nu_sub_proj_ativ' => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_sub_proj_ativ', 'required' => false)),
      'cd_elemento_od'   => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_elemento_od', 'required' => false)),
      'dt_ref_dro'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'vl_destino_dro'   => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('destino_realoc_orc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DestinoRealocOrc';
  }


}
