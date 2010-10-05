<?php

/**
 * BensMunicipiosDel form base class.
 *
 * @method BensMunicipiosDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBensMunicipiosDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'         => new sfWidgetFormInputText(),
      'nu_registro_bem'      => new sfWidgetFormInputText(),
      'dt_ref_bem'           => new sfWidgetFormInputText(),
      'dt_aquisicao_bem'     => new sfWidgetFormDateTime(),
      'tp_classificacao_bem' => new sfWidgetFormInputText(),
      'tp_natureza_bem'      => new sfWidgetFormInputText(),
      'st_baixado_bem'       => new sfWidgetFormInputCheckbox(),
      'de_descricao_bem1'    => new sfWidgetFormInputText(),
      'de_descricao_bem2'    => new sfWidgetFormInputText(),
      'id'                   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'         => new sfValidatorString(array('max_length' => 3)),
      'nu_registro_bem'      => new sfValidatorString(array('max_length' => 20)),
      'dt_ref_bem'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_aquisicao_bem'     => new sfValidatorDateTime(),
      'tp_classificacao_bem' => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'tp_natureza_bem'      => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
      'st_baixado_bem'       => new sfValidatorBoolean(),
      'de_descricao_bem1'    => new sfValidatorString(array('max_length' => 255)),
      'de_descricao_bem2'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'                   => new sfValidatorPropelChoice(array('model' => 'BensMunicipiosDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('bens_municipios_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BensMunicipiosDel';
  }


}
