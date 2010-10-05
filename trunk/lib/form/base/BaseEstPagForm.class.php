<?php

/**
 * EstPag form base class.
 *
 * @method EstPag getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEstPagForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputText(),
      'dt_versao_orc'       => new sfWidgetFormInputText(),
      'cd_orgao'            => new sfWidgetFormInputText(),
      'cd_unid_orc'         => new sfWidgetFormInputText(),
      'dt_emissao_ne'       => new sfWidgetFormDateTime(),
      'nu_nota_empenho'     => new sfWidgetFormInputText(),
      'nu_sub_empenho_np'   => new sfWidgetFormInputText(),
      'nu_nota_np'          => new sfWidgetFormInputText(),
      'dt_estorno_ep'       => new sfWidgetFormDateTime(),
      'dt_ref_ep'           => new sfWidgetFormInputText(),
      'nm_assessor_ep'      => new sfWidgetFormInputText(),
      'de_justificativa_ep' => new sfWidgetFormInputText(),
      'id'                  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'            => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'         => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'       => new sfValidatorDateTime(),
      'nu_nota_empenho'     => new sfValidatorString(array('max_length' => 8)),
      'nu_sub_empenho_np'   => new sfValidatorString(array('max_length' => 3)),
      'nu_nota_np'          => new sfValidatorString(array('max_length' => 8)),
      'dt_estorno_ep'       => new sfValidatorDateTime(),
      'dt_ref_ep'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nm_assessor_ep'      => new sfValidatorString(array('max_length' => 40)),
      'de_justificativa_ep' => new sfValidatorString(array('max_length' => 255)),
      'id'                  => new sfValidatorPropelChoice(array('model' => 'EstPag', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('est_pag[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'EstPag';
  }


}
