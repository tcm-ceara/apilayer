<?php

/**
 * DadosOrcamentos form base class.
 *
 * @method DadosOrcamentos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosOrcamentosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputHidden(),
      'dt_versao_orc'       => new sfWidgetFormInputHidden(),
      'nu_loa_do'           => new sfWidgetFormInputText(),
      'vl_tot_fix_orc_do'   => new sfWidgetFormInputText(),
      'nu_perc_supl_orc_do' => new sfWidgetFormInputText(),
      'vl_tot_supl_orc_do'  => new sfWidgetFormInputText(),
      'dt_envio_loa_do'     => new sfWidgetFormDateTime(),
      'dt_aprov_loa_do'     => new sfWidgetFormDateTime(),
      'dt_public_loa_do'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorPropelChoice(array('model' => 'DadosOrcamentos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'       => new sfValidatorPropelChoice(array('model' => 'Orcamentos', 'column' => 'dt_versao_orc', 'required' => false)),
      'nu_loa_do'           => new sfValidatorString(array('max_length' => 10)),
      'vl_tot_fix_orc_do'   => new sfValidatorNumber(),
      'nu_perc_supl_orc_do' => new sfValidatorNumber(),
      'vl_tot_supl_orc_do'  => new sfValidatorNumber(),
      'dt_envio_loa_do'     => new sfValidatorDateTime(),
      'dt_aprov_loa_do'     => new sfValidatorDateTime(),
      'dt_public_loa_do'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('dados_orcamentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosOrcamentos';
  }


}
