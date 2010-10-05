<?php

/**
 * ContratosDel form base class.
 *
 * @method ContratosDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseContratosDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputText(),
      'cd_cpf_gestor'          => new sfWidgetFormInputText(),
      'dt_contrato'            => new sfWidgetFormDateTime(),
      'nu_contrato'            => new sfWidgetFormInputText(),
      'tp_contrato'            => new sfWidgetFormInputText(),
      'md_contrato'            => new sfWidgetFormInputText(),
      'nu_contrato_original'   => new sfWidgetFormInputText(),
      'dt_contrato_original'   => new sfWidgetFormDateTime(),
      'dt_ini_vigenc_contrato' => new sfWidgetFormDateTime(),
      'dt_fim_vigenc_contrato' => new sfWidgetFormDateTime(),
      'de_objeto_contrato'     => new sfWidgetFormInputText(),
      'vl_valor_tot_contrato'  => new sfWidgetFormInputText(),
      'id'                     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorString(array('max_length' => 3)),
      'cd_cpf_gestor'          => new sfValidatorString(array('max_length' => 11)),
      'dt_contrato'            => new sfValidatorDateTime(),
      'nu_contrato'            => new sfValidatorString(array('max_length' => 15)),
      'tp_contrato'            => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'md_contrato'            => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nu_contrato_original'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'dt_contrato_original'   => new sfValidatorDateTime(array('required' => false)),
      'dt_ini_vigenc_contrato' => new sfValidatorDateTime(array('required' => false)),
      'dt_fim_vigenc_contrato' => new sfValidatorDateTime(array('required' => false)),
      'de_objeto_contrato'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vl_valor_tot_contrato'  => new sfValidatorNumber(array('required' => false)),
      'id'                     => new sfValidatorPropelChoice(array('model' => 'ContratosDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contratos_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContratosDel';
  }


}
