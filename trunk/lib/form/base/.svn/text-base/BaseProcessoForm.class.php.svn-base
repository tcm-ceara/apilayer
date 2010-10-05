<?php

/**
 * Processo form base class.
 *
 * @method Processo getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProcessoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      't_nm_municipio'     => new sfWidgetFormInputText(),
      't_nu_doc_ng'        => new sfWidgetFormInputText(),
      't_nm_negociante_ng' => new sfWidgetFormInputText(),
      't_nu_nota_empenho'  => new sfWidgetFormInputText(),
      't_empenhado'        => new sfWidgetFormInputText(),
      't_dt_emissao_ne'    => new sfWidgetFormInputText(),
      't_dt_liquid'        => new sfWidgetFormInputText(),
      'id'                 => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      't_nm_municipio'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      't_nu_doc_ng'        => new sfValidatorString(array('max_length' => 25, 'required' => false)),
      't_nm_negociante_ng' => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      't_nu_nota_empenho'  => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      't_empenhado'        => new sfValidatorNumber(array('required' => false)),
      't_dt_emissao_ne'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      't_dt_liquid'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'id'                 => new sfValidatorPropelChoice(array('model' => 'Processo', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('processo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Processo';
  }


}
