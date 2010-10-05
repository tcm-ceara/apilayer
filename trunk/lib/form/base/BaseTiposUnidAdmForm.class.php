<?php

/**
 * TiposUnidAdm form base class.
 *
 * @method TiposUnidAdm getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposUnidAdmForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_tipo_unid_adm' => new sfWidgetFormInputHidden(),
      'nm_tipo_unid_adm' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_tipo_unid_adm' => new sfValidatorPropelChoice(array('model' => 'TiposUnidAdm', 'column' => 'cd_tipo_unid_adm', 'required' => false)),
      'nm_tipo_unid_adm' => new sfValidatorString(array('max_length' => 40)),
    ));

    $this->widgetSchema->setNameFormat('tipos_unid_adm[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposUnidAdm';
  }


}
