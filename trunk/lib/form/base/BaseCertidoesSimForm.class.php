<?php

/**
 * CertidoesSim form base class.
 *
 * @method CertidoesSim getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCertidoesSimForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_certidao_sim'  => new sfWidgetFormInputHidden(),
      'cd_municipio'     => new sfWidgetFormInputText(),
      'cd_tipo_unid_adm' => new sfWidgetFormPropelChoice(array('model' => 'TiposUnidAdm', 'add_empty' => false)),
      'dt_validade'      => new sfWidgetFormDateTime(),
      'dt_emissao'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'nu_certidao_sim'  => new sfValidatorPropelChoice(array('model' => 'CertidoesSim', 'column' => 'nu_certidao_sim', 'required' => false)),
      'cd_municipio'     => new sfValidatorString(array('max_length' => 3)),
      'cd_tipo_unid_adm' => new sfValidatorPropelChoice(array('model' => 'TiposUnidAdm', 'column' => 'cd_tipo_unid_adm')),
      'dt_validade'      => new sfValidatorDateTime(),
      'dt_emissao'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('certidoes_sim[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CertidoesSim';
  }


}
