<?php

/**
 * Diarias form base class.
 *
 * @method Diarias getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDiariasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputHidden(),
      'dt_versao_orc'       => new sfWidgetFormInputHidden(),
      'cd_orgao'            => new sfWidgetFormInputHidden(),
      'cd_unid_orc'         => new sfWidgetFormInputHidden(),
      'cd_cpf_serv_muni'    => new sfWidgetFormInputHidden(),
      'nu_portaria_da'      => new sfWidgetFormInputHidden(),
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
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'       => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'            => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'         => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_cpf_serv_muni'    => new sfValidatorPropelChoice(array('model' => 'Diarias', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'nu_portaria_da'      => new sfValidatorPropelChoice(array('model' => 'Diarias', 'column' => 'nu_portaria_da', 'required' => false)),
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
    ));

    $this->widgetSchema->setNameFormat('diarias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Diarias';
  }


}
