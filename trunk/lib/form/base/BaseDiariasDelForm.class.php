<?php

/**
 * DiariasDel form base class.
 *
 * @method DiariasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDiariasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputText(),
      'dt_versao_orc'       => new sfWidgetFormInputText(),
      'cd_orgao'            => new sfWidgetFormInputText(),
      'cd_unid_orc'         => new sfWidgetFormInputText(),
      'cd_cpf_serv_muni'    => new sfWidgetFormInputText(),
      'nu_portaria_da'      => new sfWidgetFormInputText(),
      'dt_portaria_da'      => new sfWidgetFormDateTime(),
      'dt_ref_da'           => new sfWidgetFormInputText(),
      'de_motivo_da'        => new sfWidgetFormInputText(),
      'cidade_destino_da'   => new sfWidgetFormInputText(),
      'cd_uf_da'            => new sfWidgetFormInputText(),
      'dt_ini_diarias_da'   => new sfWidgetFormDateTime(),
      'dt_fim_diarias_da'   => new sfWidgetFormDateTime(),
      'nu_diarias_da'       => new sfWidgetFormInputText(),
      'vl_unit_diarias_da'  => new sfWidgetFormInputText(),
      'vl_total_diarias_da' => new sfWidgetFormInputText(),
      'dt_emissao_ne'       => new sfWidgetFormDateTime(),
      'nu_nota_empenho'     => new sfWidgetFormInputText(),
      'nu_sub_empenho_np'   => new sfWidgetFormInputText(),
      'nu_nota_np'          => new sfWidgetFormInputText(),
      'id'                  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'            => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'         => new sfValidatorString(array('max_length' => 4)),
      'cd_cpf_serv_muni'    => new sfValidatorString(array('max_length' => 11)),
      'nu_portaria_da'      => new sfValidatorString(array('max_length' => 10)),
      'dt_portaria_da'      => new sfValidatorDateTime(),
      'dt_ref_da'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'de_motivo_da'        => new sfValidatorString(array('max_length' => 255)),
      'cidade_destino_da'   => new sfValidatorString(array('max_length' => 40)),
      'cd_uf_da'            => new sfValidatorString(array('max_length' => 2)),
      'dt_ini_diarias_da'   => new sfValidatorDateTime(),
      'dt_fim_diarias_da'   => new sfValidatorDateTime(),
      'nu_diarias_da'       => new sfValidatorNumber(),
      'vl_unit_diarias_da'  => new sfValidatorNumber(),
      'vl_total_diarias_da' => new sfValidatorNumber(),
      'dt_emissao_ne'       => new sfValidatorDateTime(),
      'nu_nota_empenho'     => new sfValidatorString(array('max_length' => 8)),
      'nu_sub_empenho_np'   => new sfValidatorString(array('max_length' => 3)),
      'nu_nota_np'          => new sfValidatorString(array('max_length' => 8)),
      'id'                  => new sfValidatorPropelChoice(array('model' => 'DiariasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('diarias_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DiariasDel';
  }


}
