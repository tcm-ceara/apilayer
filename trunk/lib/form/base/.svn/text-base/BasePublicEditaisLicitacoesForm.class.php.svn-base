<?php

/**
 * PublicEditaisLicitacoes form base class.
 *
 * @method PublicEditaisLicitacoes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePublicEditaisLicitacoesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_realizacao_licit_li' => new sfWidgetFormInputHidden(),
      'nu_licitacao_li'        => new sfWidgetFormInputHidden(),
      'nu_seq_pub_ed_li'       => new sfWidgetFormInputHidden(),
      'cd_publicacao_ed_li'    => new sfWidgetFormInputText(),
      'de_publicacao_ed_li'    => new sfWidgetFormInputText(),
      'dt_publicacao_ed_li'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'PublicEditaisLicitacoes', 'column' => 'cd_municipio', 'required' => false)),
      'dt_realizacao_licit_li' => new sfValidatorPropelChoice(array('model' => 'Licitacoes', 'column' => 'dt_realizacao_licit_li', 'required' => false)),
      'nu_licitacao_li'        => new sfValidatorPropelChoice(array('model' => 'Licitacoes', 'column' => 'nu_licitacao_li', 'required' => false)),
      'nu_seq_pub_ed_li'       => new sfValidatorPropelChoice(array('model' => 'PublicEditaisLicitacoes', 'column' => 'nu_seq_pub_ed_li', 'required' => false)),
      'cd_publicacao_ed_li'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'de_publicacao_ed_li'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dt_publicacao_ed_li'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('public_editais_licitacoes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'PublicEditaisLicitacoes';
  }


}
