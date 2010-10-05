<?php

/**
 * NegociantesTestes form base class.
 *
 * @method NegociantesTestes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNegociantesTestesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_doc_ng'           => new sfWidgetFormInputText(),
      'cd_tipo_ng'          => new sfWidgetFormInputText(),
      'nm_negociante_ng'    => new sfWidgetFormInputText(),
      'de_endereco_ng'      => new sfWidgetFormInputText(),
      'nu_fone_ng'          => new sfWidgetFormInputText(),
      'nu_cep_ng'           => new sfWidgetFormInputText(),
      'nm_municipio_ng'     => new sfWidgetFormInputText(),
      'cd_uf_nf'            => new sfWidgetFormInputText(),
      'nu_doc_ng_sonumeros' => new sfWidgetFormInputText(),
      'nu_doc_ng_numerico'  => new sfWidgetFormInputText(),
      'id'                  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'nu_doc_ng'           => new sfValidatorString(array('max_length' => 25)),
      'cd_tipo_ng'          => new sfValidatorString(array('max_length' => 1)),
      'nm_negociante_ng'    => new sfValidatorString(array('max_length' => 80)),
      'de_endereco_ng'      => new sfValidatorString(array('max_length' => 255)),
      'nu_fone_ng'          => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nu_cep_ng'           => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nm_municipio_ng'     => new sfValidatorString(array('max_length' => 40)),
      'cd_uf_nf'            => new sfValidatorString(array('max_length' => 2)),
      'nu_doc_ng_sonumeros' => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      'nu_doc_ng_numerico'  => new sfValidatorNumber(array('required' => false)),
      'id'                  => new sfValidatorPropelChoice(array('model' => 'NegociantesTestes', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('negociantes_testes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NegociantesTestes';
  }


}
