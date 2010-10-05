<?php

/**
 * EmpenhosObras form base class.
 *
 * @method EmpenhosObras getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEmpenhosObrasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'    => new sfWidgetFormInputHidden(),
      'dt_versao_orc'   => new sfWidgetFormInputHidden(),
      'cd_orgao'        => new sfWidgetFormInputHidden(),
      'cd_unid_orc'     => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'   => new sfWidgetFormInputHidden(),
      'nu_nota_empenho' => new sfWidgetFormInputHidden(),
      'dt_ini_obra_srv' => new sfWidgetFormInputHidden(),
      'tp_obra_srv'     => new sfWidgetFormInputHidden(),
      'nu_obra_srv'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'    => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'   => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'        => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'     => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'   => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho' => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'dt_ini_obra_srv' => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'dt_ini_obra_srv', 'required' => false)),
      'tp_obra_srv'     => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'tp_obra_srv', 'required' => false)),
      'nu_obra_srv'     => new sfValidatorPropelChoice(array('model' => 'ObrasServEng', 'column' => 'nu_obra_srv', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empenhos_obras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmpenhosObras';
  }


}
