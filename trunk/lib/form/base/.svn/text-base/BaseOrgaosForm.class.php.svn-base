<?php

/**
 * Orgaos form base class.
 *
 * @method Orgaos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrgaosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputHidden(),
      'dt_versao_orc'    => new sfWidgetFormInputHidden(),
      'cd_orgao'         => new sfWidgetFormInputHidden(),
      'cd_tipo_unid_adm' => new sfWidgetFormInputText(),
      'nm_orgao'         => new sfWidgetFormInputText(),
      'nu_cgc_orgao'     => new sfWidgetFormInputText(),
      'de_ender_orgao'   => new sfWidgetFormInputText(),
      'nu_cep_orgao'     => new sfWidgetFormInputText(),
      'nu_fone_orgao'    => new sfWidgetFormInputText(),
      'nu_fax_orgao'     => new sfWidgetFormInputText(),
      'de_email_orgao'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorPropelChoice(array('model' => 'Orcamentos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'    => new sfValidatorPropelChoice(array('model' => 'Orcamentos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'         => new sfValidatorPropelChoice(array('model' => 'Orgaos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_tipo_unid_adm' => new sfValidatorString(array('max_length' => 2)),
      'nm_orgao'         => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'nu_cgc_orgao'     => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'de_ender_orgao'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_cep_orgao'     => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nu_fone_orgao'    => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nu_fax_orgao'     => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'de_email_orgao'   => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orgaos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Orgaos';
  }


}
