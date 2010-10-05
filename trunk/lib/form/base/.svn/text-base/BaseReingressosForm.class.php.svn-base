<?php

/**
 * Reingressos form base class.
 *
 * @method Reingressos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseReingressosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputHidden(),
      'dt_versao_orc'       => new sfWidgetFormInputHidden(),
      'cd_orgao'            => new sfWidgetFormInputHidden(),
      'cd_unid_orc'         => new sfWidgetFormInputHidden(),
      'cd_cpf_serv_muni'    => new sfWidgetFormInputHidden(),
      'cd_ingresso'         => new sfWidgetFormInputHidden(),
      'cd_vinculo'          => new sfWidgetFormInputHidden(),
      'nu_expediente_no'    => new sfWidgetFormInputHidden(),
      'nu_expediente_de'    => new sfWidgetFormInputHidden(),
      'nu_expediente_re'    => new sfWidgetFormInputHidden(),
      'cd_reingresso'       => new sfWidgetFormPropelChoice(array('model' => 'TiposReingressos', 'add_empty' => false)),
      'cd_expediente'       => new sfWidgetFormPropelChoice(array('model' => 'TiposExpedientes', 'add_empty' => false)),
      'dt_expediente_re'    => new sfWidgetFormDateTime(),
      'dt_public_re'        => new sfWidgetFormDateTime(),
      'cd_amparo_legal'     => new sfWidgetFormPropelChoice(array('model' => 'TiposAmparosLegais', 'add_empty' => false)),
      'nu_amparo_legal_re'  => new sfWidgetFormInputText(),
      'dt_amparo_legal_re'  => new sfWidgetFormDateTime(),
      'dt_public_amparo_re' => new sfWidgetFormDateTime(),
      'dt_ref_re'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorPropelChoice(array('model' => 'Desligamentos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'       => new sfValidatorPropelChoice(array('model' => 'Desligamentos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'            => new sfValidatorPropelChoice(array('model' => 'Desligamentos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'         => new sfValidatorPropelChoice(array('model' => 'Desligamentos', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_cpf_serv_muni'    => new sfValidatorPropelChoice(array('model' => 'Reingressos', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'cd_ingresso'         => new sfValidatorPropelChoice(array('model' => 'Desligamentos', 'column' => 'cd_ingresso', 'required' => false)),
      'cd_vinculo'          => new sfValidatorPropelChoice(array('model' => 'Desligamentos', 'column' => 'cd_vinculo', 'required' => false)),
      'nu_expediente_no'    => new sfValidatorPropelChoice(array('model' => 'Desligamentos', 'column' => 'nu_expediente_no', 'required' => false)),
      'nu_expediente_de'    => new sfValidatorPropelChoice(array('model' => 'Desligamentos', 'column' => 'nu_expediente_de', 'required' => false)),
      'nu_expediente_re'    => new sfValidatorPropelChoice(array('model' => 'Reingressos', 'column' => 'nu_expediente_re', 'required' => false)),
      'cd_reingresso'       => new sfValidatorPropelChoice(array('model' => 'TiposReingressos', 'column' => 'cd_reingresso')),
      'cd_expediente'       => new sfValidatorPropelChoice(array('model' => 'TiposExpedientes', 'column' => 'cd_expediente')),
      'dt_expediente_re'    => new sfValidatorDateTime(),
      'dt_public_re'        => new sfValidatorDateTime(),
      'cd_amparo_legal'     => new sfValidatorPropelChoice(array('model' => 'TiposAmparosLegais', 'column' => 'cd_amparo_legal')),
      'nu_amparo_legal_re'  => new sfValidatorString(array('max_length' => 10)),
      'dt_amparo_legal_re'  => new sfValidatorDateTime(),
      'dt_public_amparo_re' => new sfValidatorDateTime(),
      'dt_ref_re'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reingressos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reingressos';
  }


}
