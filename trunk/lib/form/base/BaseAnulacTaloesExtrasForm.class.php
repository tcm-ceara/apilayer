<?php

/**
 * AnulacTaloesExtras form base class.
 *
 * @method AnulacTaloesExtras getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAnulacTaloesExtrasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputHidden(),
      'dt_versao_orc'       => new sfWidgetFormInputHidden(),
      'cd_orgao'            => new sfWidgetFormInputHidden(),
      'cd_unid_orc'         => new sfWidgetFormInputHidden(),
      'cd_conta_ctx'        => new sfWidgetFormInputHidden(),
      'nu_talao_receita_tx' => new sfWidgetFormInputHidden(),
      'dt_talao_receita_tx' => new sfWidgetFormInputHidden(),
      'dt_anul_atx'         => new sfWidgetFormInputHidden(),
      'dt_ref_atx'          => new sfWidgetFormInputText(),
      'md_anul_atx'         => new sfWidgetFormInputText(),
      'vl_anul_atx'         => new sfWidgetFormInputText(),
      'de_hist_anul_atx'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorPropelChoice(array('model' => 'TaloesExtras', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'       => new sfValidatorPropelChoice(array('model' => 'TaloesExtras', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'            => new sfValidatorPropelChoice(array('model' => 'TaloesExtras', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'         => new sfValidatorPropelChoice(array('model' => 'TaloesExtras', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_conta_ctx'        => new sfValidatorPropelChoice(array('model' => 'AnulacTaloesExtras', 'column' => 'cd_conta_ctx', 'required' => false)),
      'nu_talao_receita_tx' => new sfValidatorPropelChoice(array('model' => 'TaloesExtras', 'column' => 'nu_talao_receita_tx', 'required' => false)),
      'dt_talao_receita_tx' => new sfValidatorPropelChoice(array('model' => 'TaloesExtras', 'column' => 'dt_talao_receita_tx', 'required' => false)),
      'dt_anul_atx'         => new sfValidatorPropelChoice(array('model' => 'AnulacTaloesExtras', 'column' => 'dt_anul_atx', 'required' => false)),
      'dt_ref_atx'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'md_anul_atx'         => new sfValidatorString(array('max_length' => 1)),
      'vl_anul_atx'         => new sfValidatorNumber(),
      'de_hist_anul_atx'    => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('anulac_taloes_extras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AnulacTaloesExtras';
  }


}
