<?php

/**
 * Usuarios form base class.
 *
 * @method Usuarios getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUsuariosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'ch_matricula_us' => new sfWidgetFormInputHidden(),
      'ti_codsetor_se'  => new sfWidgetFormInputHidden(),
      'vc_nome_us'      => new sfWidgetFormInputText(),
      'ch_senha_us'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'ch_matricula_us' => new sfValidatorPropelChoice(array('model' => 'Usuarios', 'column' => 'ch_matricula_us', 'required' => false)),
      'ti_codsetor_se'  => new sfValidatorPropelChoice(array('model' => 'Usuarios', 'column' => 'ti_codsetor_se', 'required' => false)),
      'vc_nome_us'      => new sfValidatorString(array('max_length' => 20)),
      'ch_senha_us'     => new sfValidatorString(array('max_length' => 8)),
    ));

    $this->widgetSchema->setNameFormat('usuarios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuarios';
  }


}
