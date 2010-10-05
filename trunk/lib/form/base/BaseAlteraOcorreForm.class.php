<?php

/**
 * AlteraOcorre form base class.
 *
 * @method AlteraOcorre getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAlteraOcorreForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_ano_ocorre'    => new sfWidgetFormInputText(),
      'nu_cont_ocorre'   => new sfWidgetFormInputText(),
      'cd_tipo_rel'      => new sfWidgetFormInputText(),
      'cd_municipio'     => new sfWidgetFormInputText(),
      'dt_versao_orc'    => new sfWidgetFormInputText(),
      'cd_orgao'         => new sfWidgetFormInputText(),
      'cd_unid_orc'      => new sfWidgetFormInputText(),
      'nm_unid_orc'      => new sfWidgetFormInputText(),
      'cd_tipo_unid_adm' => new sfWidgetFormInputText(),
      'dt_ref'           => new sfWidgetFormInputText(),
      'dt_importacao'    => new sfWidgetFormDateTime(),
      'nu_processo_sp'   => new sfWidgetFormInputText(),
      'dt_entrega'       => new sfWidgetFormDateTime(),
      'dt_alteracao'     => new sfWidgetFormDateTime(),
      'de_alteracao'     => new sfWidgetFormInputText(),
      'obs'              => new sfWidgetFormInputText(),
      'id'               => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'nu_ano_ocorre'    => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'nu_cont_ocorre'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_tipo_rel'      => new sfValidatorString(array('max_length' => 1)),
      'cd_municipio'     => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'         => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'      => new sfValidatorString(array('max_length' => 4)),
      'nm_unid_orc'      => new sfValidatorString(array('max_length' => 80)),
      'cd_tipo_unid_adm' => new sfValidatorString(array('max_length' => 2)),
      'dt_ref'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_importacao'    => new sfValidatorDateTime(),
      'nu_processo_sp'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'dt_entrega'       => new sfValidatorDateTime(array('required' => false)),
      'dt_alteracao'     => new sfValidatorDateTime(array('required' => false)),
      'de_alteracao'     => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'obs'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'id'               => new sfValidatorPropelChoice(array('model' => 'AlteraOcorre', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('altera_ocorre[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AlteraOcorre';
  }


}
