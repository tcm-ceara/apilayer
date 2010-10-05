<?php

/**
 * Erros3 form base class.
 *
 * @method Erros3 getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseErros3Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_ano_ocorre'  => new sfWidgetFormInputText(),
      'nu_cont_ocorre' => new sfWidgetFormInputText(),
      'cd_tipo_doc'    => new sfWidgetFormInputText(),
      'nu_linha'       => new sfWidgetFormInputText(),
      'nm_tabela'      => new sfWidgetFormInputText(),
      'de_historico'   => new sfWidgetFormInputText(),
      'id'             => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'nu_ano_ocorre'  => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'nu_cont_ocorre' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_tipo_doc'    => new sfValidatorString(array('max_length' => 3)),
      'nu_linha'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_tabela'      => new sfValidatorString(array('max_length' => 30)),
      'de_historico'   => new sfValidatorString(array('max_length' => 255)),
      'id'             => new sfValidatorPropelChoice(array('model' => 'Erros3', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('erros3[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Erros3';
  }


}
