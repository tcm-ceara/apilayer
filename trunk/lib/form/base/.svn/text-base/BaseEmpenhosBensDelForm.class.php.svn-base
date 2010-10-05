<?php

/**
 * EmpenhosBensDel form base class.
 *
 * @method EmpenhosBensDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEmpenhosBensDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'    => new sfWidgetFormInputText(),
      'nu_registro_bem' => new sfWidgetFormInputText(),
      'dt_versao_orc'   => new sfWidgetFormInputText(),
      'cd_orgao'        => new sfWidgetFormInputText(),
      'cd_unid_orc'     => new sfWidgetFormInputText(),
      'dt_emissao_ne'   => new sfWidgetFormDateTime(),
      'nu_nota_empenho' => new sfWidgetFormInputText(),
      'dt_ref_eb'       => new sfWidgetFormInputText(),
      'id'              => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'    => new sfValidatorString(array('max_length' => 3)),
      'nu_registro_bem' => new sfValidatorString(array('max_length' => 20)),
      'dt_versao_orc'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'        => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'     => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'   => new sfValidatorDateTime(),
      'nu_nota_empenho' => new sfValidatorString(array('max_length' => 8)),
      'dt_ref_eb'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'id'              => new sfValidatorPropelChoice(array('model' => 'EmpenhosBensDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empenhos_bens_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmpenhosBensDel';
  }


}
