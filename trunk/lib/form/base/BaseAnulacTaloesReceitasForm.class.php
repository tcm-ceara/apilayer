<?php

/**
 * AnulacTaloesReceitas form base class.
 *
 * @method AnulacTaloesReceitas getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAnulacTaloesReceitasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputHidden(),
      'dt_versao_orc'    => new sfWidgetFormInputHidden(),
      'cd_orgao'         => new sfWidgetFormInputHidden(),
      'cd_unid_orc'      => new sfWidgetFormInputHidden(),
      'cd_rubrica_or'    => new sfWidgetFormInputHidden(),
      'nu_talao_receita' => new sfWidgetFormInputHidden(),
      'dt_talao_receita' => new sfWidgetFormInputHidden(),
      'dt_anul_atr'      => new sfWidgetFormInputHidden(),
      'dt_ref_atr'       => new sfWidgetFormInputText(),
      'md_anul_atr'      => new sfWidgetFormInputText(),
      'vl_anul_atr'      => new sfWidgetFormInputText(),
      'de_hist_anul_atr' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorPropelChoice(array('model' => 'AnulacTaloesReceitas', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'    => new sfValidatorPropelChoice(array('model' => 'TaloesReceitas', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'         => new sfValidatorPropelChoice(array('model' => 'TaloesReceitas', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'      => new sfValidatorPropelChoice(array('model' => 'TaloesReceitas', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_rubrica_or'    => new sfValidatorPropelChoice(array('model' => 'TaloesReceitas', 'column' => 'cd_rubrica_or', 'required' => false)),
      'nu_talao_receita' => new sfValidatorPropelChoice(array('model' => 'TaloesReceitas', 'column' => 'nu_talao_receita', 'required' => false)),
      'dt_talao_receita' => new sfValidatorPropelChoice(array('model' => 'TaloesReceitas', 'column' => 'dt_talao_receita', 'required' => false)),
      'dt_anul_atr'      => new sfValidatorPropelChoice(array('model' => 'AnulacTaloesReceitas', 'column' => 'dt_anul_atr', 'required' => false)),
      'dt_ref_atr'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'md_anul_atr'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'vl_anul_atr'      => new sfValidatorNumber(array('required' => false)),
      'de_hist_anul_atr' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('anulac_taloes_receitas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AnulacTaloesReceitas';
  }


}
