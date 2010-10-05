<?php

/**
 * ConcessoesItensDel form base class.
 *
 * @method ConcessoesItensDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseConcessoesItensDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputText(),
      'dt_versao_orc'    => new sfWidgetFormInputText(),
      'cd_orgao'         => new sfWidgetFormInputText(),
      'cd_unid_orc'      => new sfWidgetFormInputText(),
      'cd_cpf_serv_muni' => new sfWidgetFormInputText(),
      'cd_ingresso'      => new sfWidgetFormInputText(),
      'cd_vinculo'       => new sfWidgetFormInputText(),
      'nu_expediente_no' => new sfWidgetFormInputText(),
      'cd_item_ir'       => new sfWidgetFormInputText(),
      'nu_expediente_cr' => new sfWidgetFormInputText(),
      'cd_expediente'    => new sfWidgetFormInputText(),
      'dt_expediente_cr' => new sfWidgetFormDateTime(),
      'dt_public_cr'     => new sfWidgetFormDateTime(),
      'st_suspenso_cr'   => new sfWidgetFormInputCheckbox(),
      'st_extinto_cr'    => new sfWidgetFormInputCheckbox(),
      'dt_ref_cr'        => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'         => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'      => new sfValidatorString(array('max_length' => 4)),
      'cd_cpf_serv_muni' => new sfValidatorString(array('max_length' => 11)),
      'cd_ingresso'      => new sfValidatorString(array('max_length' => 1)),
      'cd_vinculo'       => new sfValidatorString(array('max_length' => 1)),
      'nu_expediente_no' => new sfValidatorString(array('max_length' => 10)),
      'cd_item_ir'       => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'nu_expediente_cr' => new sfValidatorString(array('max_length' => 10)),
      'cd_expediente'    => new sfValidatorString(array('max_length' => 1)),
      'dt_expediente_cr' => new sfValidatorDateTime(),
      'dt_public_cr'     => new sfValidatorDateTime(),
      'st_suspenso_cr'   => new sfValidatorBoolean(),
      'st_extinto_cr'    => new sfValidatorBoolean(),
      'dt_ref_cr'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'ConcessoesItensDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('concessoes_itens_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ConcessoesItensDel';
  }


}
