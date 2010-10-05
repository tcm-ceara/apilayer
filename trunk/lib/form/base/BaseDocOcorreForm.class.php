<?php

/**
 * DocOcorre form base class.
 *
 * @method DocOcorre getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDocOcorreForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_ano_ocorre'  => new sfWidgetFormInputHidden(),
      'nu_cont_ocorre' => new sfWidgetFormInputHidden(),
      'cd_tipo_doc'    => new sfWidgetFormInputHidden(),
      'nu_tot_linhas'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nu_ano_ocorre'  => new sfValidatorPropelChoice(array('model' => 'DocOcorre', 'column' => 'nu_ano_ocorre', 'required' => false)),
      'nu_cont_ocorre' => new sfValidatorPropelChoice(array('model' => 'DocOcorre', 'column' => 'nu_cont_ocorre', 'required' => false)),
      'cd_tipo_doc'    => new sfValidatorPropelChoice(array('model' => 'DocOcorre', 'column' => 'cd_tipo_doc', 'required' => false)),
      'nu_tot_linhas'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->widgetSchema->setNameFormat('doc_ocorre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DocOcorre';
  }


}
