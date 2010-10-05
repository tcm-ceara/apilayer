<?php

/**
 * OrgaosInternet form base class.
 *
 * @method OrgaosInternet getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrgaosInternetForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputText(),
      'dt_versao_orc'    => new sfWidgetFormInputText(),
      'cd_orgao'         => new sfWidgetFormInputText(),
      'cd_tipo_unid_adm' => new sfWidgetFormInputText(),
      'nm_orgao'         => new sfWidgetFormInputText(),
      'nu_cgc_orgao'     => new sfWidgetFormInputText(),
      'de_ender_orgao'   => new sfWidgetFormInputText(),
      'nu_cep_orgao'     => new sfWidgetFormInputText(),
      'nu_fone_orgao'    => new sfWidgetFormInputText(),
      'nu_fax_orgao'     => new sfWidgetFormInputText(),
      'de_email_orgao'   => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'dt_versao_orc'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'cd_orgao'         => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'cd_tipo_unid_adm' => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'nm_orgao'         => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'nu_cgc_orgao'     => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'de_ender_orgao'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_cep_orgao'     => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nu_fone_orgao'    => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nu_fax_orgao'     => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'de_email_orgao'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'OrgaosInternet', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orgaos_internet[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrgaosInternet';
  }


}
