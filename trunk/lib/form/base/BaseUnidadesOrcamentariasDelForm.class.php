<?php

/**
 * UnidadesOrcamentariasDel form base class.
 *
 * @method UnidadesOrcamentariasDel getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUnidadesOrcamentariasDelForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputText(),
      'dt_versao_orc'       => new sfWidgetFormInputText(),
      'cd_orgao'            => new sfWidgetFormInputText(),
      'cd_unid_orc'         => new sfWidgetFormInputText(),
      'cd_tipo_unid_adm'    => new sfWidgetFormInputText(),
      'nm_unid_orc'         => new sfWidgetFormInputText(),
      'tp_administracao_uo' => new sfWidgetFormInputText(),
      'id'                  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorString(array('max_length' => 3)),
      'dt_versao_orc'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'cd_orgao'            => new sfValidatorString(array('max_length' => 2)),
      'cd_unid_orc'         => new sfValidatorString(array('max_length' => 4)),
      'cd_tipo_unid_adm'    => new sfValidatorString(array('max_length' => 2)),
      'nm_unid_orc'         => new sfValidatorString(array('max_length' => 80)),
      'tp_administracao_uo' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'id'                  => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentariasDel', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('unidades_orcamentarias_del[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UnidadesOrcamentariasDel';
  }


}
