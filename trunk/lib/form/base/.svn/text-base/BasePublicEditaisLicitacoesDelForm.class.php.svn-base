<?php

/**
 * PublicEditaisLicitacoesDel form base class.
 *
 * @method PublicEditaisLicitacoesDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePublicEditaisLicitacoesDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputText(),
      'dt_realizacao_licit_li' => new sfWidgetFormDateTime(),
      'nu_licitacao_li'        => new sfWidgetFormInputText(),
      'nu_seq_pub_ed_li'       => new sfWidgetFormInputText(),
      'cd_publicacao_ed_li'    => new sfWidgetFormInputText(),
      'de_publicacao_ed_li'    => new sfWidgetFormInputText(),
      'dt_publicacao_ed_li'    => new sfWidgetFormDateTime(),
      'id'                     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorString(array('max_length' => 3)),
      'dt_realizacao_licit_li' => new sfValidatorDateTime(),
      'nu_licitacao_li'        => new sfValidatorString(array('max_length' => 15)),
      'nu_seq_pub_ed_li'       => new sfValidatorString(array('max_length' => 2)),
      'cd_publicacao_ed_li'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'de_publicacao_ed_li'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dt_publicacao_ed_li'    => new sfValidatorDateTime(array('required' => false)),
      'id'                     => new sfValidatorPropelChoice(array('model' => 'PublicEditaisLicitacoesDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('public_editais_licitacoes_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PublicEditaisLicitacoesDel';
  }


}
