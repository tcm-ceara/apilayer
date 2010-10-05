<?php

/**
 * UnidadesGestoras form base class.
 *
 * @method UnidadesGestoras getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUnidadesGestorasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormPropelChoice(array('model' => 'Orcamentos', 'add_empty' => false)),
      'dt_versao_orc'       => new sfWidgetFormPropelChoice(array('model' => 'Orcamentos', 'add_empty' => false)),
      'cd_cpf_gestor'       => new sfWidgetFormInputText(),
      'dt_ini_gestao'       => new sfWidgetFormPropelChoice(array('model' => 'DadosGestao', 'add_empty' => false)),
      'cd_orgao_ug'         => new sfWidgetFormInputText(),
      'cd_unid_orc_ug'      => new sfWidgetFormInputText(),
      'cd_funcao_ug'        => new sfWidgetFormInputText(),
      'cd_subfuncao_ug'     => new sfWidgetFormInputText(),
      'cd_programa_ug'      => new sfWidgetFormInputText(),
      'cd_proj_ativ_ug'     => new sfWidgetFormInputText(),
      'nu_proj_ativ_ug'     => new sfWidgetFormInputText(),
      'nu_sub_proj_ativ_ug' => new sfWidgetFormInputText(),
      'dt_fim_gestao_ug'    => new sfWidgetFormDateTime(),
      'cd_compet_gest_ug'   => new sfWidgetFormInputText(),
      'id'                  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorPropelChoice(array('model' => 'Orcamentos', 'column' => 'cd_municipio')),
      'dt_versao_orc'       => new sfValidatorPropelChoice(array('model' => 'Orcamentos', 'column' => 'dt_versao_orc')),
      'cd_cpf_gestor'       => new sfValidatorString(array('max_length' => 11)),
      'dt_ini_gestao'       => new sfValidatorPropelChoice(array('model' => 'DadosGestao', 'column' => 'dt_ini_gestao')),
      'cd_orgao_ug'         => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'cd_unid_orc_ug'      => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'cd_funcao_ug'        => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'cd_subfuncao_ug'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'cd_programa_ug'      => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'cd_proj_ativ_ug'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nu_proj_ativ_ug'     => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'nu_sub_proj_ativ_ug' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'dt_fim_gestao_ug'    => new sfValidatorDateTime(array('required' => false)),
      'cd_compet_gest_ug'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'id'                  => new sfValidatorPropelChoice(array('model' => 'UnidadesGestoras', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('unidades_gestoras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UnidadesGestoras';
  }


}
