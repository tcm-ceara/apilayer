<?php

/**
 * VariacoesExtraOrc form base class.
 *
 * @method VariacoesExtraOrc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseVariacoesExtraOrcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputHidden(),
      'dt_versao_orc'    => new sfWidgetFormInputHidden(),
      'cd_orgao'         => new sfWidgetFormInputHidden(),
      'cd_unid_orc'      => new sfWidgetFormInputHidden(),
      'cd_conta_ctx'     => new sfWidgetFormInputHidden(),
      'dt_lancamento_vi' => new sfWidgetFormInputHidden(),
      'dt_ref_vi'        => new sfWidgetFormInputText(),
      'vl_lancamento_vi' => new sfWidgetFormInputText(),
      'de_hist_lanc_vi1' => new sfWidgetFormInputText(),
      'de_hist_lanc_vi2' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'    => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'         => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'      => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_conta_ctx'     => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_conta_ctx', 'required' => false)),
      'dt_lancamento_vi' => new sfValidatorPropelChoice(array('model' => 'VariacoesExtraOrc', 'column' => 'dt_lancamento_vi', 'required' => false)),
      'dt_ref_vi'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'vl_lancamento_vi' => new sfValidatorNumber(),
      'de_hist_lanc_vi1' => new sfValidatorString(array('max_length' => 255)),
      'de_hist_lanc_vi2' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('variacoes_extra_orc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'VariacoesExtraOrc';
  }


}
