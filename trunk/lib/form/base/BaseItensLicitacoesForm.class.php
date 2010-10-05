<?php

/**
 * ItensLicitacoes form base class.
 *
 * @method ItensLicitacoes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseItensLicitacoesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_realizacao_licit_li' => new sfWidgetFormInputHidden(),
      'nu_licitacao_li'        => new sfWidgetFormInputHidden(),
      'nu_seq_item_il'         => new sfWidgetFormInputHidden(),
      'nu_doc_ng'              => new sfWidgetFormPropelChoice(array('model' => 'Licitantes', 'add_empty' => false)),
      'de_item_il'             => new sfWidgetFormInputText(),
      'vl_venc_item_il'        => new sfWidgetFormInputText(),
      'cd_tipo_ng'             => new sfWidgetFormInputText(),
      'de_unid_item_il'        => new sfWidgetFormInputText(),
      'nu_quant_item_il'       => new sfWidgetFormInputText(),
      'vl_unit_item_il'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'Licitantes', 'column' => 'cd_municipio', 'required' => false)),
      'dt_realizacao_licit_li' => new sfValidatorPropelChoice(array('model' => 'Licitantes', 'column' => 'dt_realizacao_licit_li', 'required' => false)),
      'nu_licitacao_li'        => new sfValidatorPropelChoice(array('model' => 'Licitantes', 'column' => 'nu_licitacao_li', 'required' => false)),
      'nu_seq_item_il'         => new sfValidatorPropelChoice(array('model' => 'ItensLicitacoes', 'column' => 'nu_seq_item_il', 'required' => false)),
      'nu_doc_ng'              => new sfValidatorPropelChoice(array('model' => 'Licitantes', 'column' => 'nu_doc_ng')),
      'de_item_il'             => new sfValidatorString(array('max_length' => 255)),
      'vl_venc_item_il'        => new sfValidatorNumber(),
      'cd_tipo_ng'             => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'de_unid_item_il'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_quant_item_il'       => new sfValidatorNumber(array('required' => false)),
      'vl_unit_item_il'        => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('itens_licitacoes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ItensLicitacoes';
  }


}
