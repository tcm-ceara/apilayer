<?php

/**
 * Contratados form base class.
 *
 * @method Contratados getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseContratadosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'     => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor'    => new sfWidgetFormInputHidden(),
      'dt_contrato'      => new sfWidgetFormInputHidden(),
      'nu_contrato'      => new sfWidgetFormInputHidden(),
      'nu_doc_ng'        => new sfWidgetFormInputHidden(),
      'cd_tipo_ng'       => new sfWidgetFormInputText(),
      'nm_negociante_ng' => new sfWidgetFormInputText(),
      'de_endereco_ng'   => new sfWidgetFormInputText(),
      'nu_fone_ng'       => new sfWidgetFormInputText(),
      'nu_cep_ng'        => new sfWidgetFormInputText(),
      'nm_municipio_ng'  => new sfWidgetFormInputText(),
      'cd_uf_nf'         => new sfWidgetFormPropelChoice(array('model' => 'UnidadesFederacao', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cd_municipio'     => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'cd_municipio', 'required' => false)),
      'cd_cpf_gestor'    => new sfValidatorPropelChoice(array('model' => 'Contratados', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'dt_contrato'      => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'dt_contrato', 'required' => false)),
      'nu_contrato'      => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'nu_contrato', 'required' => false)),
      'nu_doc_ng'        => new sfValidatorPropelChoice(array('model' => 'Negociantes', 'column' => 'nu_doc_ng', 'required' => false)),
      'cd_tipo_ng'       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nm_negociante_ng' => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'de_endereco_ng'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_ng'       => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nu_cep_ng'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nm_municipio_ng'  => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'cd_uf_nf'         => new sfValidatorPropelChoice(array('model' => 'UnidadesFederacao', 'column' => 'cd_sigla_uf', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contratados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contratados';
  }


}
