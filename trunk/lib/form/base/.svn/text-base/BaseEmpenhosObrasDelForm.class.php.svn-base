<?php

/**
 * EmpenhosObrasDel form base class.
 *
 * @method EmpenhosObrasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEmpenhosObrasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'    => new sfWidgetFormInputText(),
      'dt_versao_orc'   => new sfWidgetFormInputText(),
      'cd_orgao'        => new sfWidgetFormInputText(),
      'cd_unid_orc'     => new sfWidgetFormInputText(),
      'dt_emissao_ne'   => new sfWidgetFormDateTime(),
      'nu_nota_empenho' => new sfWidgetFormInputText(),
      'dt_ini_obra_srv' => new sfWidgetFormDateTime(),
      'tp_obra_srv'     => new sfWidgetFormInputText(),
      'nu_obra_srv'     => new sfWidgetFormInputText(),
      'id'              => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'    => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'        => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'     => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'   => new sfValidatorDateTime(),
      'nu_nota_empenho' => new sfValidatorString(array('max_length' => 8)),
      'dt_ini_obra_srv' => new sfValidatorDateTime(),
      'tp_obra_srv'     => new sfValidatorString(array('max_length' => 1)),
      'nu_obra_srv'     => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'id'              => new sfValidatorPropelChoice(array('model' => 'EmpenhosObrasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empenhos_obras_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmpenhosObrasDel';
  }


}
