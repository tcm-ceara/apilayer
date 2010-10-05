<?php

/**
 * CertMuniErrados form base class.
 *
 * @method CertMuniErrados getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCertMuniErradosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'xcd_municipio' => new sfWidgetFormInputText(),
      'id'            => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'xcd_municipio' => new sfValidatorString(array('max_length' => 3)),
      'id'            => new sfValidatorPropelChoice(array('model' => 'CertMuniErrados', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cert_muni_errados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CertMuniErrados';
  }


}
