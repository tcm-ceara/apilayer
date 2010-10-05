<?php

/**
 * DadosPessoais form base class.
 *
 * @method DadosPessoais getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosPessoaisForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_cpf_serv_muni'    => new sfWidgetFormInputHidden(),
      'nu_identidade_ds'    => new sfWidgetFormInputText(),
      'de_exped_ident_ds'   => new sfWidgetFormInputText(),
      'nu_tit_eleitor_ds'   => new sfWidgetFormInputText(),
      'cd_est_civil'        => new sfWidgetFormInputText(),
      'cd_instrucao'        => new sfWidgetFormPropelChoice(array('model' => 'GrausInstrucao', 'add_empty' => false)),
      'cd_sexo_ds'          => new sfWidgetFormInputText(),
      'nm_serv_muni_ds'     => new sfWidgetFormInputText(),
      'nm_mae_serv_muni_ds' => new sfWidgetFormInputText(),
      'nm_pai_serv_muni_ds' => new sfWidgetFormInputText(),
      'de_endereco_ds'      => new sfWidgetFormInputText(),
      'nu_fone_ds'          => new sfWidgetFormInputText(),
      'dt_nascim_ds'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'cd_cpf_serv_muni'    => new sfValidatorPropelChoice(array('model' => 'DadosPessoais', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'nu_identidade_ds'    => new sfValidatorString(array('max_length' => 13)),
      'de_exped_ident_ds'   => new sfValidatorString(array('max_length' => 10)),
      'nu_tit_eleitor_ds'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'cd_est_civil'        => new sfValidatorString(array('max_length' => 1)),
      'cd_instrucao'        => new sfValidatorPropelChoice(array('model' => 'GrausInstrucao', 'column' => 'cd_instrucao')),
      'cd_sexo_ds'          => new sfValidatorString(array('max_length' => 1)),
      'nm_serv_muni_ds'     => new sfValidatorString(array('max_length' => 40)),
      'nm_mae_serv_muni_ds' => new sfValidatorString(array('max_length' => 40)),
      'nm_pai_serv_muni_ds' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'de_endereco_ds'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_ds'          => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'dt_nascim_ds'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('dados_pessoais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosPessoais';
  }


}
