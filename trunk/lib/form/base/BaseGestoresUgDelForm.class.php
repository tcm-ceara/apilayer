<?php

/**
 * GestoresUgDel form base class.
 *
 * @method GestoresUgDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseGestoresUgDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputText(),
      'dt_versao_orc'     => new sfWidgetFormInputText(),
      'cd_unid_gest_ug'   => new sfWidgetFormInputText(),
      'cd_orgao'          => new sfWidgetFormInputText(),
      'cd_unid_orc'       => new sfWidgetFormInputText(),
      'cd_cpf_serv_muni'  => new sfWidgetFormInputText(),
      'cd_ingresso'       => new sfWidgetFormInputText(),
      'cd_vinculo'        => new sfWidgetFormInputText(),
      'nu_expediente_no'  => new sfWidgetFormInputText(),
      'dt_ini_gestao_gug' => new sfWidgetFormDateTime(),
      'dt_ref_gug'        => new sfWidgetFormInputText(),
      'nm_gestor_gug'     => new sfWidgetFormInputText(),
      'dt_fim_gestao_gug' => new sfWidgetFormDateTime(),
      'cd_tipo_cargo'     => new sfWidgetFormInputText(),
      'st_ordenador_gug'  => new sfWidgetFormInputCheckbox(),
      'id'                => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_unid_gest_ug'   => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'cd_orgao'          => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'       => new sfValidatorString(array('max_length' => 4)),
      'cd_cpf_serv_muni'  => new sfValidatorString(array('max_length' => 11)),
      'cd_ingresso'       => new sfValidatorString(array('max_length' => 1)),
      'cd_vinculo'        => new sfValidatorString(array('max_length' => 1)),
      'nu_expediente_no'  => new sfValidatorString(array('max_length' => 10)),
      'dt_ini_gestao_gug' => new sfValidatorDateTime(),
      'dt_ref_gug'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_gestor_gug'     => new sfValidatorString(array('max_length' => 40)),
      'dt_fim_gestao_gug' => new sfValidatorDateTime(array('required' => false)),
      'cd_tipo_cargo'     => new sfValidatorString(array('max_length' => 2)),
      'st_ordenador_gug'  => new sfValidatorBoolean(),
      'id'                => new sfValidatorPropelChoice(array('model' => 'GestoresUgDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('gestores_ug_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'GestoresUgDel';
  }


}
