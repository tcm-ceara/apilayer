<?php

/**
 * DadosOrcamentosDel form base class.
 *
 * @method DadosOrcamentosDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosOrcamentosDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputText(),
      'dt_versao_orc'       => new sfWidgetFormInputText(),
      'nu_loa_do'           => new sfWidgetFormInputText(),
      'vl_tot_fix_orc_do'   => new sfWidgetFormInputText(),
      'nu_perc_supl_orc_do' => new sfWidgetFormInputText(),
      'vl_tot_supl_orc_do'  => new sfWidgetFormInputText(),
      'dt_envio_loa_do'     => new sfWidgetFormDateTime(),
      'dt_aprov_loa_do'     => new sfWidgetFormDateTime(),
      'dt_public_loa_do'    => new sfWidgetFormDateTime(),
      'id'                  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nu_loa_do'           => new sfValidatorString(array('max_length' => 10)),
      'vl_tot_fix_orc_do'   => new sfValidatorNumber(),
      'nu_perc_supl_orc_do' => new sfValidatorNumber(),
      'vl_tot_supl_orc_do'  => new sfValidatorNumber(),
      'dt_envio_loa_do'     => new sfValidatorDateTime(),
      'dt_aprov_loa_do'     => new sfValidatorDateTime(),
      'dt_public_loa_do'    => new sfValidatorDateTime(),
      'id'                  => new sfValidatorPropelChoice(array('model' => 'DadosOrcamentosDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dados_orcamentos_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosOrcamentosDel';
  }


}
