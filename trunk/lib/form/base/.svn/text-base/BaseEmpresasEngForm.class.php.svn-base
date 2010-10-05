<?php

/**
 * EmpresasEng form base class.
 *
 * @method EmpresasEng getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEmpresasEngForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_cgc_empresa_ee' => new sfWidgetFormInputHidden(),
      'nm_empresa_ee'     => new sfWidgetFormInputText(),
      'nu_rg_crea_ee'     => new sfWidgetFormInputText(),
      'nu_fone_ee'        => new sfWidgetFormInputText(),
      'de_ender_ee'       => new sfWidgetFormInputText(),
      'nu_cep_ee'         => new sfWidgetFormInputText(),
      'nm_municipio_ee'   => new sfWidgetFormInputText(),
      'cd_uf_ee'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nu_cgc_empresa_ee' => new sfValidatorPropelChoice(array('model' => 'EmpresasEng', 'column' => 'nu_cgc_empresa_ee', 'required' => false)),
      'nm_empresa_ee'     => new sfValidatorString(array('max_length' => 80)),
      'nu_rg_crea_ee'     => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'nu_fone_ee'        => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'de_ender_ee'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_cep_ee'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nm_municipio_ee'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'cd_uf_ee'          => new sfValidatorString(array('max_length' => 2, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empresas_eng[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EmpresasEng';
  }


}
