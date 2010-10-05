<?php

/**
 * EmpenhosBens form base class.
 *
 * @method EmpenhosBens getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEmpenhosBensForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'    => new sfWidgetFormInputHidden(),
      'nu_registro_bem' => new sfWidgetFormInputHidden(),
      'dt_versao_orc'   => new sfWidgetFormInputHidden(),
      'cd_orgao'        => new sfWidgetFormInputHidden(),
      'cd_unid_orc'     => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'   => new sfWidgetFormInputHidden(),
      'nu_nota_empenho' => new sfWidgetFormInputHidden(),
      'dt_ref_eb'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'    => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_municipio', 'required' => false)),
      'nu_registro_bem' => new sfValidatorPropelChoice(array('model' => 'BensMunicipios', 'column' => 'nu_registro_bem', 'required' => false)),
      'dt_versao_orc'   => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'        => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'     => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'   => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho' => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'dt_ref_eb'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
    ));

    $this->widgetSchema->setNameFormat('empenhos_bens[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmpenhosBens';
  }


}
