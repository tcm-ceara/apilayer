<?php

/**
 * OrcDespProjAtiv form base class.
 *
 * @method OrcDespProjAtiv getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrcDespProjAtivForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_versao_orc'          => new sfWidgetFormInputHidden(),
      'cd_orgao'               => new sfWidgetFormInputHidden(),
      'cd_unid_orc'            => new sfWidgetFormInputHidden(),
      'cd_funcao'              => new sfWidgetFormInputHidden(),
      'cd_subfuncao'           => new sfWidgetFormInputHidden(),
      'cd_programa'            => new sfWidgetFormInputHidden(),
      'cd_proj_ativ'           => new sfWidgetFormInputHidden(),
      'nu_proj_ativ'           => new sfWidgetFormInputHidden(),
      'nu_sub_proj_ativ'       => new sfWidgetFormInputHidden(),
      'cd_tipo_orcamento'      => new sfWidgetFormPropelChoice(array('model' => 'TiposOrcamentos', 'add_empty' => false)),
      'nm_proj_ativ'           => new sfWidgetFormInputText(),
      'de_proj_ativ'           => new sfWidgetFormInputText(),
      'vl_tot_fix_proj_ativ'   => new sfWidgetFormInputText(),
      'cat_eco_proj_ativ_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'OrcDespCatEco')),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'Programas', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'Programas', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'               => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'            => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_funcao'              => new sfValidatorPropelChoice(array('model' => 'OrcDespProjAtiv', 'column' => 'cd_funcao', 'required' => false)),
      'cd_subfuncao'           => new sfValidatorPropelChoice(array('model' => 'Subfuncoes', 'column' => 'cd_subfuncao', 'required' => false)),
      'cd_programa'            => new sfValidatorPropelChoice(array('model' => 'Programas', 'column' => 'cd_programa', 'required' => false)),
      'cd_proj_ativ'           => new sfValidatorPropelChoice(array('model' => 'OrcDespProjAtiv', 'column' => 'cd_proj_ativ', 'required' => false)),
      'nu_proj_ativ'           => new sfValidatorPropelChoice(array('model' => 'OrcDespProjAtiv', 'column' => 'nu_proj_ativ', 'required' => false)),
      'nu_sub_proj_ativ'       => new sfValidatorPropelChoice(array('model' => 'OrcDespProjAtiv', 'column' => 'nu_sub_proj_ativ', 'required' => false)),
      'cd_tipo_orcamento'      => new sfValidatorPropelChoice(array('model' => 'TiposOrcamentos', 'column' => 'cd_tipo_orcamento')),
      'nm_proj_ativ'           => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'de_proj_ativ'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vl_tot_fix_proj_ativ'   => new sfValidatorNumber(array('required' => false)),
      'cat_eco_proj_ativ_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'OrcDespCatEco', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orc_desp_proj_ativ[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrcDespProjAtiv';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['cat_eco_proj_ativ_list']))
    {
      $values = array();
      foreach ($this->object->getCatEcoProjAtivs() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('cat_eco_proj_ativ_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveCatEcoProjAtivList($con);
  }

  public function saveCatEcoProjAtivList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['cat_eco_proj_ativ_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(CatEcoProjAtivPeer::CD_SUBFUNCAO, $this->object->getPrimaryKey());
    CatEcoProjAtivPeer::doDelete($c, $con);

    $values = $this->getValue('cat_eco_proj_ativ_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new CatEcoProjAtiv();
        $obj->setCdSubfuncao($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
