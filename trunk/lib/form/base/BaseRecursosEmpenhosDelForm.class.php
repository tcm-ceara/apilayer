<?php

/**
 * RecursosEmpenhosDel form base class.
 *
 * @method RecursosEmpenhosDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRecursosEmpenhosDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputText(),
      'dt_versao_orc'     => new sfWidgetFormInputText(),
      'cd_orgao'          => new sfWidgetFormInputText(),
      'cd_unid_orc'       => new sfWidgetFormInputText(),
      'dt_emissao_ne'     => new sfWidgetFormDateTime(),
      'nu_nota_empenho'   => new sfWidgetFormInputText(),
      'cd_tipo_rec_rc'    => new sfWidgetFormInputText(),
      'nu_seq_rec_emp'    => new sfWidgetFormInputText(),
      'dt_celebracao_cf'  => new sfWidgetFormDateTime(),
      'nu_seq_cf'         => new sfWidgetFormInputText(),
      'vl_rec_empenho_re' => new sfWidgetFormInputText(),
      'id'                => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'          => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'       => new sfValidatorString(array('max_length' => 4)),
      'dt_emissao_ne'     => new sfValidatorDateTime(),
      'nu_nota_empenho'   => new sfValidatorString(array('max_length' => 8)),
      'cd_tipo_rec_rc'    => new sfValidatorString(array('max_length' => 1)),
      'nu_seq_rec_emp'    => new sfValidatorString(array('max_length' => 2)),
      'dt_celebracao_cf'  => new sfValidatorDateTime(array('required' => false)),
      'nu_seq_cf'         => new sfValidatorInteger(array('min' => -32768, 'max' => 32767, 'required' => false)),
      'vl_rec_empenho_re' => new sfValidatorNumber(),
      'id'                => new sfValidatorPropelChoice(array('model' => 'RecursosEmpenhosDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('recursos_empenhos_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RecursosEmpenhosDel';
  }


}
