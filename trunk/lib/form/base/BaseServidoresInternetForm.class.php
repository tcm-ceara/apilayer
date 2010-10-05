<?php

/**
 * ServidoresInternet form base class.
 *
 * @method ServidoresInternet getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseServidoresInternetForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'       => new sfWidgetFormInputText(),
      'dt_versao_orc'      => new sfWidgetFormInputText(),
      'cd_orgao'           => new sfWidgetFormInputText(),
      'cd_unid_orc'        => new sfWidgetFormInputText(),
      'cd_cpf_serv_muni'   => new sfWidgetFormInputText(),
      'st_desligamento_se' => new sfWidgetFormInputCheckbox(),
      'id'                 => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'       => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'           => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'        => new sfValidatorString(array('max_length' => 4)),
      'cd_cpf_serv_muni'   => new sfValidatorString(array('max_length' => 11)),
      'st_desligamento_se' => new sfValidatorBoolean(),
      'id'                 => new sfValidatorPropelChoice(array('model' => 'ServidoresInternet', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servidores_internet[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ServidoresInternet';
  }


}
