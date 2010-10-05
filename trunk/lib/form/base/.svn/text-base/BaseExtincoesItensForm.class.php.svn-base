<?php

/**
 * ExtincoesItens form base class.
 *
 * @method ExtincoesItens getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseExtincoesItensForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputHidden(),
      'cd_item_ir'           => new sfWidgetFormInputHidden(),
      'cd_amparo_legal'      => new sfWidgetFormPropelChoice(array('model' => 'TiposAmparosLegais', 'add_empty' => false)),
      'nu_amparo_legal_er'   => new sfWidgetFormInputText(),
      'dt_amparo_legal_er'   => new sfWidgetFormDateTime(),
      'dt_public_er'         => new sfWidgetFormDateTime(),
      'nu_decreto_er'        => new sfWidgetFormInputText(),
      'dt_decreto_er'        => new sfWidgetFormDateTime(),
      'dt_public_decreto_er' => new sfWidgetFormDateTime(),
      'dt_ref_er'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorPropelChoice(array('model' => 'ItensRemuneratorios', 'column' => 'cd_municipio', 'required' => false)),
      'cd_item_ir'           => new sfValidatorPropelChoice(array('model' => 'ExtincoesItens', 'column' => 'cd_item_ir', 'required' => false)),
      'cd_amparo_legal'      => new sfValidatorPropelChoice(array('model' => 'TiposAmparosLegais', 'column' => 'cd_amparo_legal')),
      'nu_amparo_legal_er'   => new sfValidatorString(array('max_length' => 10)),
      'dt_amparo_legal_er'   => new sfValidatorDateTime(),
      'dt_public_er'         => new sfValidatorDateTime(),
      'nu_decreto_er'        => new sfValidatorString(array('max_length' => 10)),
      'dt_decreto_er'        => new sfValidatorDateTime(),
      'dt_public_decreto_er' => new sfValidatorDateTime(),
      'dt_ref_er'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('extincoes_itens[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExtincoesItens';
  }


}
