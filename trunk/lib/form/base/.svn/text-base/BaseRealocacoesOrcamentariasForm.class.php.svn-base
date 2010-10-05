<?php

/**
 * RealocacoesOrcamentarias form base class.
 *
 * @method RealocacoesOrcamentarias getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRealocacoesOrcamentariasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'            => new sfWidgetFormInputHidden(),
      'dt_versao_orc'           => new sfWidgetFormInputHidden(),
      'dt_alteracao_ro'         => new sfWidgetFormInputHidden(),
      'nu_seq_no_dia_ro'        => new sfWidgetFormInputHidden(),
      'cd_orgao'                => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'cd_unid_orc'             => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'cd_funcao'               => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'cd_subfuncao'            => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'cd_programa'             => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'cd_proj_ativ'            => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'nu_proj_ativ'            => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'nu_sub_proj_ativ'        => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'cd_elemento_od'          => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => false)),
      'dt_ref_ro'               => new sfWidgetFormInputText(),
      'nu_lei_ro'               => new sfWidgetFormInputText(),
      'tp_realocacao_ro'        => new sfWidgetFormInputText(),
      'vl_realocado_ro'         => new sfWidgetFormInputText(),
      'destino_realoc_orc_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'CatEcoProjAtiv')),
    ));

    $this->setValidators(array(
      'cd_municipio'            => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'dt_versao_orc', 'required' => false)),
      'dt_alteracao_ro'         => new sfValidatorPropelChoice(array('model' => 'RealocacoesOrcamentarias', 'column' => 'dt_alteracao_ro', 'required' => false)),
      'nu_seq_no_dia_ro'        => new sfValidatorPropelChoice(array('model' => 'RealocacoesOrcamentarias', 'column' => 'nu_seq_no_dia_ro', 'required' => false)),
      'cd_orgao'                => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_orgao')),
      'cd_unid_orc'             => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_unid_orc')),
      'cd_funcao'               => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_funcao')),
      'cd_subfuncao'            => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_subfuncao')),
      'cd_programa'             => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_programa')),
      'cd_proj_ativ'            => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_proj_ativ')),
      'nu_proj_ativ'            => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_proj_ativ')),
      'nu_sub_proj_ativ'        => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_sub_proj_ativ')),
      'cd_elemento_od'          => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_elemento_od')),
      'dt_ref_ro'               => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'nu_lei_ro'               => new sfValidatorString(array('max_length' => 10)),
      'tp_realocacao_ro'        => new sfValidatorString(array('max_length' => 1)),
      'vl_realocado_ro'         => new sfValidatorNumber(),
      'destino_realoc_orc_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'CatEcoProjAtiv', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('realocacoes_orcamentarias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RealocacoesOrcamentarias';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['destino_realoc_orc_list']))
    {
      $values = array();
      foreach ($this->object->getDestinoRealocOrcs() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('destino_realoc_orc_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveDestinoRealocOrcList($con);
  }

  public function saveDestinoRealocOrcList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['destino_realoc_orc_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(DestinoRealocOrcPeer::DT_ALTERACAO_RO, $this->object->getPrimaryKey());
    DestinoRealocOrcPeer::doDelete($c, $con);

    $values = $this->getValue('destino_realoc_orc_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DestinoRealocOrc();
        $obj->setDtAlteracaoRo($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
