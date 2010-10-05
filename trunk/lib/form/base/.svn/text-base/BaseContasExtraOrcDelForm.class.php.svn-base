<?php

/**
 * ContasExtraOrcDel form base class.
 *
 * @method ContasExtraOrcDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseContasExtraOrcDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'  => new sfWidgetFormInputText(),
      'dt_versao_orc' => new sfWidgetFormInputText(),
      'cd_conta_ctx'  => new sfWidgetFormInputText(),
      'dt_ref_ctx'    => new sfWidgetFormInputText(),
      'de_conta_ctx'  => new sfWidgetFormInputText(),
      'vl_saldo_ini'  => new sfWidgetFormInputText(),
      'id'            => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'  => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_conta_ctx'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_ref_ctx'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'de_conta_ctx'  => new sfValidatorString(array('max_length' => 60)),
      'vl_saldo_ini'  => new sfValidatorNumber(),
      'id'            => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrcDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contas_extra_orc_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContasExtraOrcDel';
  }


}
