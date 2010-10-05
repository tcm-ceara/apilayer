<?php

/**
 * UnidOrcBensDel form base class.
 *
 * @method UnidOrcBensDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUnidOrcBensDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputText(),
      'nu_registro_bem'         => new sfWidgetFormInputText(),
      'dt_disponibilizacao_uob' => new sfWidgetFormDateTime(),
      'dt_ref_uob'              => new sfWidgetFormInputText(),
      'dt_versao_orc'           => new sfWidgetFormInputText(),
      'cd_orgao'                => new sfWidgetFormInputText(),
      'cd_unid_orc'             => new sfWidgetFormInputText(),
      'cd_cpf_serv_muni'        => new sfWidgetFormInputText(),
      'cd_ingresso'             => new sfWidgetFormInputText(),
      'cd_vinculo'              => new sfWidgetFormInputText(),
      'nu_expediente_no'        => new sfWidgetFormInputText(),
      'id'                      => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorString(array('max_length' => 3)),
      'nu_registro_bem'         => new sfValidatorString(array('max_length' => 20)),
      'dt_disponibilizacao_uob' => new sfValidatorDateTime(),
      'dt_ref_uob'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_versao_orc'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'                => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'             => new sfValidatorString(array('max_length' => 4)),
      'cd_cpf_serv_muni'        => new sfValidatorString(array('max_length' => 11)),
      'cd_ingresso'             => new sfValidatorString(array('max_length' => 1)),
      'cd_vinculo'              => new sfValidatorString(array('max_length' => 1)),
      'nu_expediente_no'        => new sfValidatorString(array('max_length' => 10)),
      'id'                      => new sfValidatorPropelChoice(array('model' => 'UnidOrcBensDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('unid_orc_bens_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UnidOrcBensDel';
  }


}
