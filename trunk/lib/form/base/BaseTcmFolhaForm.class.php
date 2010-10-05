<?php

/**
 * TcmFolha form base class.
 *
 * @method TcmFolha getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTcmFolhaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_seq'            => new sfWidgetFormInputHidden(),
      'cpf_servidor_tcm'  => new sfWidgetFormInputText(),
      'nome_servidor_tcm' => new sfWidgetFormInputText(),
      'valor_salario_tcm' => new sfWidgetFormInputText(),
      'data_admissao_tcm' => new sfWidgetFormInputText(),
      'lotacao_tcm'       => new sfWidgetFormInputText(),
      'ano_ref_tcm'       => new sfWidgetFormInputText(),
      'SITUACAO'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_seq'            => new sfValidatorPropelChoice(array('model' => 'TcmFolha', 'column' => 'cd_seq', 'required' => false)),
      'cpf_servidor_tcm'  => new sfValidatorString(array('max_length' => 11)),
      'nome_servidor_tcm' => new sfValidatorString(array('max_length' => 40)),
      'valor_salario_tcm' => new sfValidatorNumber(),
      'data_admissao_tcm' => new sfValidatorString(array('max_length' => 10)),
      'lotacao_tcm'       => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'ano_ref_tcm'       => new sfValidatorString(array('max_length' => 4)),
      'SITUACAO'          => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tcm_folha[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TcmFolha';
  }


}
