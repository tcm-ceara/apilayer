<?php

/**
 * TempDespesas form base class.
 *
 * @method TempDespesas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTempDespesasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo'               => new sfWidgetFormInputHidden(),
      'NUM_EXERCICIO_NTE'    => new sfWidgetFormInputText(),
      'COD_ORGAO_NTE'        => new sfWidgetFormInputText(),
      'NUM_DOCTO_NTE'        => new sfWidgetFormInputText(),
      'COD_DESPESA_NTE'      => new sfWidgetFormInputText(),
      'DSC_DESPESA_NTE'      => new sfWidgetFormInputText(),
      'COD_UNIT_COMPRAS_NTE' => new sfWidgetFormInputText(),
      'QTD_DESPESA_NTE'      => new sfWidgetFormInputText(),
      'VLR_UNIT_DESPESA_NTE' => new sfWidgetFormInputText(),
      'ORDEM_CAMPO'          => new sfWidgetFormInputText(),
      'Historico_extra'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'codigo'               => new sfValidatorPropelChoice(array('model' => 'TempDespesas', 'column' => 'codigo', 'required' => false)),
      'NUM_EXERCICIO_NTE'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'COD_ORGAO_NTE'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'NUM_DOCTO_NTE'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'COD_DESPESA_NTE'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'DSC_DESPESA_NTE'      => new sfValidatorString(array('max_length' => 480, 'required' => false)),
      'COD_UNIT_COMPRAS_NTE' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'QTD_DESPESA_NTE'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'VLR_UNIT_DESPESA_NTE' => new sfValidatorNumber(array('required' => false)),
      'ORDEM_CAMPO'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'Historico_extra'      => new sfValidatorString(array('max_length' => 240, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('temp_despesas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TempDespesas';
  }


}
