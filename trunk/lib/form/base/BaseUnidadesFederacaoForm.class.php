<?php

/**
 * UnidadesFederacao form base class.
 *
 * @method UnidadesFederacao getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUnidadesFederacaoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_unid_fed_uf' => new sfWidgetFormInputText(),
      'cd_sigla_uf'    => new sfWidgetFormInputHidden(),
      'nm_unid_fed_uf' => new sfWidgetFormInputText(),
      'cd_regiao_uf'   => new sfWidgetFormInputText(),
      'nm_regiao_uf'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_unid_fed_uf' => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'cd_sigla_uf'    => new sfValidatorPropelChoice(array('model' => 'UnidadesFederacao', 'column' => 'cd_sigla_uf', 'required' => false)),
      'nm_unid_fed_uf' => new sfValidatorString(array('max_length' => 20)),
      'cd_regiao_uf'   => new sfValidatorInteger(array('min' => -128, 'max' => 127, 'required' => false)),
      'nm_regiao_uf'   => new sfValidatorString(array('max_length' => 12, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('unidades_federacao[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UnidadesFederacao';
  }


}
