<?php

/**
 * OrgaosDel form base class.
 *
 * @method OrgaosDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrgaosDelForm extends BaseFormPropel
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
      'cd_municipio'     => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'         => new sfValidatorString(array('max_length' => 2)),
      'cd_tipo_unid_adm' => new sfValidatorString(array('max_length' => 2)),
      'nm_orgao'         => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'nu_cgc_orgao'     => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'de_ender_orgao'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_cep_orgao'     => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nu_fone_orgao'    => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nu_fax_orgao'     => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'de_email_orgao'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'OrgaosDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orgaos_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrgaosDel';
  }


}
