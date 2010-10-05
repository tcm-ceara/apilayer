<?php

/**
 * DadosPessoaisInternet2 form base class.
 *
 * @method DadosPessoaisInternet2 getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosPessoaisInternet2Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_cpf_serv_muni'    => new sfWidgetFormInputText(),
      'nu_identidade_ds'    => new sfWidgetFormInputText(),
      'de_exped_ident_ds'   => new sfWidgetFormInputText(),
      'nu_tit_eleitor_ds'   => new sfWidgetFormInputText(),
      'cd_est_civil'        => new sfWidgetFormInputText(),
      'cd_instrucao'        => new sfWidgetFormInputText(),
      'cd_sexo_ds'          => new sfWidgetFormInputText(),
      'nm_serv_muni_ds'     => new sfWidgetFormInputText(),
      'nm_mae_serv_muni_ds' => new sfWidgetFormInputText(),
      'nm_pai_serv_muni_ds' => new sfWidgetFormInputText(),
      'de_endereco_ds'      => new sfWidgetFormInputText(),
      'nu_fone_ds'          => new sfWidgetFormInputText(),
      'dt_nascim_ds'        => new sfWidgetFormDateTime(),
      'id'                  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_cpf_serv_muni'    => new sfValidatorString(array('max_length' => 11)),
      'nu_identidade_ds'    => new sfValidatorString(array('max_length' => 13, 'required' => false)),
      'de_exped_ident_ds'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_tit_eleitor_ds'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'cd_est_civil'        => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cd_instrucao'        => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cd_sexo_ds'          => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nm_serv_muni_ds'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'nm_mae_serv_muni_ds' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'nm_pai_serv_muni_ds' => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'de_endereco_ds'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_ds'          => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'dt_nascim_ds'        => new sfValidatorDateTime(array('required' => false)),
      'id'                  => new sfValidatorPropelChoice(array('model' => 'DadosPessoaisInternet2', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dados_pessoais_internet2[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosPessoaisInternet2';
  }


}
