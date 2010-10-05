<?php

/**
 * OrcDespCatEco form base class.
 *
 * @method OrcDespCatEco getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrcDespCatEcoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_versao_orc'          => new sfWidgetFormInputHidden(),
      'cd_orgao'               => new sfWidgetFormInputHidden(),
      'cd_unid_orc'            => new sfWidgetFormInputHidden(),
      'cd_elemento_od'         => new sfWidgetFormInputHidden(),
      'de_elemento_od'         => new sfWidgetFormInputText(),
      'vl_tot_fix_ce_od'       => new sfWidgetFormInputText(),
      'cat_eco_proj_ativ_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'OrcDespProjAtiv')),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'OrcDespCatEco', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'               => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'            => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_elemento_od'         => new sfValidatorPropelChoice(array('model' => 'OrcDespCatEco', 'column' => 'cd_elemento_od', 'required' => false)),
      'de_elemento_od'         => new sfValidatorString(array('max_length' => 120)),
      'vl_tot_fix_ce_od'       => new sfValidatorNumber(),
      'cat_eco_proj_ativ_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'OrcDespProjAtiv', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('orc_desp_cat_eco[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrcDespCatEco';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['cat_eco_proj_ativ_list']))
    {
      $values = array();
      foreach ($this->object->getCatEcoProjAtivs() as $obj)
      {
        $values[] = $obj->getCdSubfuncao();
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
    $c->add(CatEcoProjAtivPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    CatEcoProjAtivPeer::doDelete($c, $con);

    $values = $this->getValue('cat_eco_proj_ativ_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new CatEcoProjAtiv();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdSubfuncao($value);
        $obj->save();
      }
    }
  }

}
