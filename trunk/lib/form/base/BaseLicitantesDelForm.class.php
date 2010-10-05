<?php

/**
 * LicitantesDel form base class.
 *
 * @method LicitantesDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseLicitantesDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputText(),
      'dt_realizacao_licit_li' => new sfWidgetFormDateTime(),
      'nu_licitacao_li'        => new sfWidgetFormInputText(),
      'nu_doc_ng'              => new sfWidgetFormInputText(),
      'cd_tipo_ng'             => new sfWidgetFormInputText(),
      'nm_negociante_ng'       => new sfWidgetFormInputText(),
      'de_endereco_ng'         => new sfWidgetFormInputText(),
      'nu_fone_ng'             => new sfWidgetFormInputText(),
      'nu_cep_ng'              => new sfWidgetFormInputText(),
      'nm_municipio_ng'        => new sfWidgetFormInputText(),
      'cd_uf_nf'               => new sfWidgetFormInputText(),
      'id'                     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorString(array('max_length' => 3)),
      'dt_realizacao_licit_li' => new sfValidatorDateTime(),
      'nu_licitacao_li'        => new sfValidatorString(array('max_length' => 15)),
      'nu_doc_ng'              => new sfValidatorString(array('max_length' => 25)),
      'cd_tipo_ng'             => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nm_negociante_ng'       => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'de_endereco_ng'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_ng'             => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nu_cep_ng'              => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nm_municipio_ng'        => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'cd_uf_nf'               => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'id'                     => new sfValidatorPropelChoice(array('model' => 'LicitantesDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('licitantes_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LicitantesDel';
  }


}
