<?php

/**
 * NeCorrecao form base class.
 *
 * @method NeCorrecao getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNeCorrecaoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'    => new sfWidgetFormPropelChoice(array('model' => 'Gestores', 'add_empty' => false)),
      'dt_versao_orc'   => new sfWidgetFormPropelChoice(array('model' => 'NotasEmpenhos', 'add_empty' => false)),
      'cd_orgao'        => new sfWidgetFormPropelChoice(array('model' => 'NotasEmpenhos', 'add_empty' => false)),
      'cd_unid_orc'     => new sfWidgetFormPropelChoice(array('model' => 'NotasEmpenhos', 'add_empty' => false)),
      'dt_emissao_ne'   => new sfWidgetFormPropelChoice(array('model' => 'NotasEmpenhos', 'add_empty' => false)),
      'nu_nota_empenho' => new sfWidgetFormPropelChoice(array('model' => 'NotasEmpenhos', 'add_empty' => false)),
      'cd_cpf_gestor'   => new sfWidgetFormPropelChoice(array('model' => 'Gestores', 'add_empty' => false)),
      'id'              => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'    => new sfValidatorPropelChoice(array('model' => 'Gestores', 'column' => 'cd_municipio')),
      'dt_versao_orc'   => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_versao_orc')),
      'cd_orgao'        => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_orgao')),
      'cd_unid_orc'     => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_unid_orc')),
      'dt_emissao_ne'   => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_emissao_ne')),
      'nu_nota_empenho' => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'nu_nota_empenho')),
      'cd_cpf_gestor'   => new sfValidatorPropelChoice(array('model' => 'Gestores', 'column' => 'cd_cpf_gestor')),
      'id'              => new sfValidatorPropelChoice(array('model' => 'NeCorrecao', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ne_correcao[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NeCorrecao';
  }


}
