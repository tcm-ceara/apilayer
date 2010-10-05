<?php

/**
 * PensionistasSe form base class.
 *
 * @method PensionistasSe getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePensionistasSeForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_cpf_pe'         => new sfWidgetFormInputHidden(),
      'cd_municipio'      => new sfWidgetFormPropelChoice(array('model' => 'Servidores', 'add_empty' => false)),
      'dt_versao_orc'     => new sfWidgetFormPropelChoice(array('model' => 'Servidores', 'add_empty' => false)),
      'cd_orgao'          => new sfWidgetFormPropelChoice(array('model' => 'Servidores', 'add_empty' => false)),
      'cd_unid_orc'       => new sfWidgetFormPropelChoice(array('model' => 'Servidores', 'add_empty' => false)),
      'cd_cpf_serv_muni'  => new sfWidgetFormInputText(),
      'nm_pensionista_pe' => new sfWidgetFormInputText(),
      'de_ender_pe'       => new sfWidgetFormInputText(),
      'nu_fone_pe'        => new sfWidgetFormInputText(),
      'nm_ex_segurado_pe' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_cpf_pe'         => new sfValidatorPropelChoice(array('model' => 'PensionistasSe', 'column' => 'cd_cpf_pe', 'required' => false)),
      'cd_municipio'      => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'cd_municipio')),
      'dt_versao_orc'     => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'dt_versao_orc')),
      'cd_orgao'          => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'cd_orgao')),
      'cd_unid_orc'       => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'cd_unid_orc')),
      'cd_cpf_serv_muni'  => new sfValidatorString(array('max_length' => 11)),
      'nm_pensionista_pe' => new sfValidatorString(array('max_length' => 40)),
      'de_ender_pe'       => new sfValidatorString(array('max_length' => 255)),
      'nu_fone_pe'        => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nm_ex_segurado_pe' => new sfValidatorString(array('max_length' => 40)),
    ));

    $this->widgetSchema->setNameFormat('pensionistas_se[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PensionistasSe';
  }


}
