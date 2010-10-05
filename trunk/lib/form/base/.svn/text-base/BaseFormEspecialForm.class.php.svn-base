<?php

/**
 * FormEspecial form base class.
 *
 * @method FormEspecial getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseFormEspecialForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputHidden(),
      'dt_exercicio'     => new sfWidgetFormInputHidden(),
      'cd_orgao'         => new sfWidgetFormInputHidden(),
      'cd_unid_orc'      => new sfWidgetFormInputHidden(),
      'dt_ref'           => new sfWidgetFormInputHidden(),
      'dt_entrega'       => new sfWidgetFormDateTime(),
      'nm_unid_orc'      => new sfWidgetFormInputText(),
      'cd_tipo_rel'      => new sfWidgetFormInputText(),
      'dt_devolucao'     => new sfWidgetFormDateTime(),
      'dt_prazo_max'     => new sfWidgetFormDateTime(),
      'dt_reenvio'       => new sfWidgetFormDateTime(),
      'cd_tipo_unid_adm' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorPropelChoice(array('model' => 'FormEspecial', 'column' => 'cd_municipio', 'required' => false)),
      'dt_exercicio'     => new sfValidatorPropelChoice(array('model' => 'FormEspecial', 'column' => 'dt_exercicio', 'required' => false)),
      'cd_orgao'         => new sfValidatorPropelChoice(array('model' => 'FormEspecial', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'      => new sfValidatorPropelChoice(array('model' => 'FormEspecial', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_ref'           => new sfValidatorPropelChoice(array('model' => 'FormEspecial', 'column' => 'dt_ref', 'required' => false)),
      'dt_entrega'       => new sfValidatorDateTime(array('required' => false)),
      'nm_unid_orc'      => new sfValidatorString(array('max_length' => 80)),
      'cd_tipo_rel'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'dt_devolucao'     => new sfValidatorDateTime(array('required' => false)),
      'dt_prazo_max'     => new sfValidatorDateTime(array('required' => false)),
      'dt_reenvio'       => new sfValidatorDateTime(array('required' => false)),
      'cd_tipo_unid_adm' => new sfValidatorString(array('max_length' => 2, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('form_especial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FormEspecial';
  }


}
