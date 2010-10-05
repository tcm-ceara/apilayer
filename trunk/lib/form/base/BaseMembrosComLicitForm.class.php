<?php

/**
 * MembrosComLicit form base class.
 *
 * @method MembrosComLicit getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseMembrosComLicitForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'          => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor'         => new sfWidgetFormInputHidden(),
      'dt_criac_comissao_cl'  => new sfWidgetFormInputHidden(),
      'nu_comissao_licit_cl'  => new sfWidgetFormInputHidden(),
      'nu_cpf_membro_cl'      => new sfWidgetFormInputHidden(),
      'tp_membro_cl'          => new sfWidgetFormInputText(),
      'dt_admis_membro_cl'    => new sfWidgetFormDateTime(),
      'dt_saida_membro_cl'    => new sfWidgetFormDateTime(),
      'nm_membro_cl'          => new sfWidgetFormInputText(),
      'de_endereco_membro_cl' => new sfWidgetFormInputText(),
      'nu_fone_membro_cl'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'          => new sfValidatorPropelChoice(array('model' => 'ComissoesLicitacoes', 'column' => 'cd_municipio', 'required' => false)),
      'cd_cpf_gestor'         => new sfValidatorPropelChoice(array('model' => 'MembrosComLicit', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'dt_criac_comissao_cl'  => new sfValidatorPropelChoice(array('model' => 'ComissoesLicitacoes', 'column' => 'dt_criac_comissao_cl', 'required' => false)),
      'nu_comissao_licit_cl'  => new sfValidatorPropelChoice(array('model' => 'ComissoesLicitacoes', 'column' => 'nu_comissao_licit_cl', 'required' => false)),
      'nu_cpf_membro_cl'      => new sfValidatorPropelChoice(array('model' => 'DadosMembrosComLicit', 'column' => 'nu_cpf_membro_cl', 'required' => false)),
      'tp_membro_cl'          => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'dt_admis_membro_cl'    => new sfValidatorDateTime(array('required' => false)),
      'dt_saida_membro_cl'    => new sfValidatorDateTime(array('required' => false)),
      'nm_membro_cl'          => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'de_endereco_membro_cl' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_membro_cl'     => new sfValidatorString(array('max_length' => 11, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('membros_com_licit[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'MembrosComLicit';
  }


}
