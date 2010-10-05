<?php

/**
 * TiposEstruturaOld form base class.
 *
 * @method TiposEstruturaOld getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposEstruturaOldForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_tipo_doc_te'   => new sfWidgetFormInputText(),
      'cd_tipo_campo_te' => new sfWidgetFormInputText(),
      'nu_tam_minimo_te' => new sfWidgetFormInputText(),
      'nu_tam_maximo_te' => new sfWidgetFormInputText(),
      'st_chave_te'      => new sfWidgetFormInputCheckbox(),
      'nu_campo_te'      => new sfWidgetFormInputText(),
      'nu_exercicio_te'  => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_tipo_doc_te'   => new sfValidatorString(array('max_length' => 3)),
      'cd_tipo_campo_te' => new sfValidatorString(array('max_length' => 1)),
      'nu_tam_minimo_te' => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'nu_tam_maximo_te' => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'st_chave_te'      => new sfValidatorBoolean(),
      'nu_campo_te'      => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'nu_exercicio_te'  => new sfValidatorInteger(array('min' => -32768, 'max' => 32767, 'required' => false)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'TiposEstruturaOld', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipos_estrutura_old[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposEstruturaOld';
  }


}
