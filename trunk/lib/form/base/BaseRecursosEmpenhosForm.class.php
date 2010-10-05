<?php

/**
 * RecursosEmpenhos form base class.
 *
 * @method RecursosEmpenhos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRecursosEmpenhosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'      => new sfWidgetFormInputHidden(),
      'dt_versao_orc'     => new sfWidgetFormInputHidden(),
      'cd_orgao'          => new sfWidgetFormInputHidden(),
      'cd_unid_orc'       => new sfWidgetFormInputHidden(),
      'dt_emissao_ne'     => new sfWidgetFormInputHidden(),
      'nu_nota_empenho'   => new sfWidgetFormInputHidden(),
      'cd_tipo_rec_rc'    => new sfWidgetFormInputHidden(),
      'nu_seq_rec_emp'    => new sfWidgetFormInputHidden(),
      'dt_celebracao_cf'  => new sfWidgetFormPropelChoice(array('model' => 'ConveniosFirmados', 'add_empty' => true)),
      'nu_seq_cf'         => new sfWidgetFormPropelChoice(array('model' => 'ConveniosFirmados', 'add_empty' => true)),
      'vl_rec_empenho_re' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'      => new sfValidatorPropelChoice(array('model' => 'ConveniosFirmados', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'     => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'          => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'       => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'cd_unid_orc', 'required' => false)),
      'dt_emissao_ne'     => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'dt_emissao_ne', 'required' => false)),
      'nu_nota_empenho'   => new sfValidatorPropelChoice(array('model' => 'NotasEmpenhos', 'column' => 'nu_nota_empenho', 'required' => false)),
      'cd_tipo_rec_rc'    => new sfValidatorPropelChoice(array('model' => 'OrigensRecursos', 'column' => 'cd_tipo_rec_rc', 'required' => false)),
      'nu_seq_rec_emp'    => new sfValidatorPropelChoice(array('model' => 'RecursosEmpenhos', 'column' => 'nu_seq_rec_emp', 'required' => false)),
      'dt_celebracao_cf'  => new sfValidatorPropelChoice(array('model' => 'ConveniosFirmados', 'column' => 'dt_celebracao_cf', 'required' => false)),
      'nu_seq_cf'         => new sfValidatorPropelChoice(array('model' => 'ConveniosFirmados', 'column' => 'nu_seq_cf', 'required' => false)),
      'vl_rec_empenho_re' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('recursos_empenhos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RecursosEmpenhos';
  }


}
