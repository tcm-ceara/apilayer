<?php

/**
 * ItensLicitacoesDel form base class.
 *
 * @method ItensLicitacoesDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseItensLicitacoesDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputText(),
      'dt_realizacao_licit_li' => new sfWidgetFormDateTime(),
      'nu_licitacao_li'        => new sfWidgetFormInputText(),
      'nu_seq_item_il'         => new sfWidgetFormInputText(),
      'nu_doc_ng'              => new sfWidgetFormInputText(),
      'de_item_il'             => new sfWidgetFormInputText(),
      'vl_venc_item_il'        => new sfWidgetFormInputText(),
      'cd_tipo_ng'             => new sfWidgetFormInputText(),
      'de_unid_item_il'        => new sfWidgetFormInputText(),
      'nu_quant_item_il'       => new sfWidgetFormInputText(),
      'vl_unit_item_il'        => new sfWidgetFormInputText(),
      'id'                     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorString(array('max_length' => 3)),
      'dt_realizacao_licit_li' => new sfValidatorDateTime(),
      'nu_licitacao_li'        => new sfValidatorString(array('max_length' => 15)),
      'nu_seq_item_il'         => new sfValidatorInteger(array('min' => -32768, 'max' => 32767)),
      'nu_doc_ng'              => new sfValidatorString(array('max_length' => 25)),
      'de_item_il'             => new sfValidatorString(array('max_length' => 255)),
      'vl_venc_item_il'        => new sfValidatorNumber(),
      'cd_tipo_ng'             => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'de_unid_item_il'        => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_quant_item_il'       => new sfValidatorNumber(array('required' => false)),
      'vl_unit_item_il'        => new sfValidatorNumber(array('required' => false)),
      'id'                     => new sfValidatorPropelChoice(array('model' => 'ItensLicitacoesDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('itens_licitacoes_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ItensLicitacoesDel';
  }


}
