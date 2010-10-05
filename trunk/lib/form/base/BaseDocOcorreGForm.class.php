<?php

/**
 * DocOcorreG form base class.
 *
 * @method DocOcorreG getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDocOcorreGForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_ano_ocorre'  => new sfWidgetFormInputText(),
      'nu_cont_ocorre' => new sfWidgetFormInputText(),
      'cd_tipo_doc'    => new sfWidgetFormInputText(),
      'nu_tot_linhas'  => new sfWidgetFormInputText(),
      'id'             => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'nu_ano_ocorre'  => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'nu_cont_ocorre' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_tipo_doc'    => new sfValidatorString(array('max_length' => 3)),
      'nu_tot_linhas'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'id'             => new sfValidatorPropelChoice(array('model' => 'DocOcorreG', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('doc_ocorre_g[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DocOcorreG';
  }


}
