<?php

/**
 * Engenheiros form base class.
 *
 * @method Engenheiros getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseEngenheirosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_rg_crea_eng'        => new sfWidgetFormInputHidden(),
      'nm_engenheiro_eng'     => new sfWidgetFormInputText(),
      'cd_cpf_eng'            => new sfWidgetFormInputText(),
      'nu_cgc_empresa_ee'     => new sfWidgetFormInputText(),
      'resp_engen_obras_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ObrasServEng')),
    ));

    $this->setValidators(array(
      'nu_rg_crea_eng'        => new sfValidatorPropelChoice(array('model' => 'Engenheiros', 'column' => 'nu_rg_crea_eng', 'required' => false)),
      'nm_engenheiro_eng'     => new sfValidatorString(array('max_length' => 40)),
      'cd_cpf_eng'            => new sfValidatorString(array('max_length' => 11)),
      'nu_cgc_empresa_ee'     => new sfValidatorString(array('max_length' => 14, 'required' => false)),
      'resp_engen_obras_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ObrasServEng', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('engenheiros[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Engenheiros';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['resp_engen_obras_list']))
    {
      $values = array();
      foreach ($this->object->getRespEngenObrass() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('resp_engen_obras_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveRespEngenObrasList($con);
  }

  public function saveRespEngenObrasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['resp_engen_obras_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(RespEngenObrasPeer::NU_RG_CREA_ENG, $this->object->getPrimaryKey());
    RespEngenObrasPeer::doDelete($c, $con);

    $values = $this->getValue('resp_engen_obras_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new RespEngenObras();
        $obj->setNuRgCreaEng($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
