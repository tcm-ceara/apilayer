<?php

/**
 * OrdenadoresDel form base class.
 *
 * @method OrdenadoresDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrdenadoresDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputText(),
      'dt_versao_orc'     => new sfWidgetFormInputText(),
      'cd_unid_gest_ug'   => new sfWidgetFormInputText(),
      'cd_orgao'          => new sfWidgetFormInputText(),
      'cd_unid_orc'       => new sfWidgetFormInputText(),
      'dt_inclusao_uog'   => new sfWidgetFormDateTime(),
      'cd_cpf_serv_muni'  => new sfWidgetFormInputText(),
      'cd_ingresso'       => new sfWidgetFormInputText(),
      'cd_vinculo'        => new sfWidgetFormInputText(),
      'nu_expediente_no'  => new sfWidgetFormInputText(),
      'dt_ini_gestao_ord' => new sfWidgetFormDateTime(),
      'dt_ref_ord'        => new sfWidgetFormInputText(),
      'nm_ordenador_ord'  => new sfWidgetFormInputText(),
      'dt_fim_gestao_ord' => new sfWidgetFormDateTime(),
      'cd_tipo_cargo'     => new sfWidgetFormInputText(),
      'id'                => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_unid_gest_ug'   => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'cd_orgao'          => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'       => new sfValidatorString(array('max_length' => 4)),
      'dt_inclusao_uog'   => new sfValidatorDateTime(),
      'cd_cpf_serv_muni'  => new sfValidatorString(array('max_length' => 11)),
      'cd_ingresso'       => new sfValidatorString(array('max_length' => 1)),
      'cd_vinculo'        => new sfValidatorString(array('max_length' => 1)),
      'nu_expediente_no'  => new sfValidatorString(array('max_length' => 10)),
      'dt_ini_gestao_ord' => new sfValidatorDateTime(),
      'dt_ref_ord'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_ordenador_ord'  => new sfValidatorString(array('max_length' => 40)),
      'dt_fim_gestao_ord' => new sfValidatorDateTime(array('required' => false)),
      'cd_tipo_cargo'     => new sfValidatorString(array('max_length' => 2)),
      'id'                => new sfValidatorPropelChoice(array('model' => 'OrdenadoresDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ordenadores_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrdenadoresDel';
  }


}
