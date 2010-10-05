<?php

/**
 * EstornosLiq form base class.
 *
 * @method EstornosLiq getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEstornosLiqForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputHidden(),
      'dt_versao_orc'       => new sfWidgetFormInputHidden(),
      'cd_orgao'            => new sfWidgetFormInputHidden(),
      'cd_unid_orc'         => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'       => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'     => new sfWidgetFormInputHidden(),
      'dt_liquid_liq'       => new sfWidgetFormInputHidden(),
      'dt_estorno_el'       => new sfWidgetFormDateTime(),
      'dt_ref_el'           => new sfWidgetFormInputText(),
      'nm_assessor_el'      => new sfWidgetFormInputText(),
      'de_justificativa_el' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorPropelChoice(array('model' => 'EstornosLiq', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'       => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'            => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'         => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'       => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'     => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'nu_nota_empenho', 'required' => false)),
      'dt_liquid_liq'       => new sfValidatorPropelChoice(array('model' => 'Liquidacoes', 'column' => 'dt_liquid_liq', 'required' => false)),
      'dt_estorno_el'       => new sfValidatorDateTime(),
      'dt_ref_el'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_assessor_el'      => new sfValidatorString(array('max_length' => 40)),
      'de_justificativa_el' => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('estornos_liq[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstornosLiq';
  }


}
