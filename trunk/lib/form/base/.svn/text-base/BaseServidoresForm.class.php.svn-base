<?php

/**
 * Servidores form base class.
 *
 * @method Servidores getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseServidoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'          => new sfWidgetFormInputHidden(),
      'dt_versao_orc'         => new sfWidgetFormInputHidden(),
      'cd_orgao'              => new sfWidgetFormInputHidden(),
      'cd_unid_orc'           => new sfWidgetFormInputHidden(),
      'cd_cpf_serv_muni'      => new sfWidgetFormInputHidden(),
      'st_desligamento_se'    => new sfWidgetFormInputCheckbox(),
      'agentes_publicos_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'TiposIngressos')),
    ));

    $this->setValidators(array(
      'cd_municipio'          => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'         => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'              => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'           => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_cpf_serv_muni'      => new sfValidatorPropelChoice(array('model' => 'Servidores', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'st_desligamento_se'    => new sfValidatorBoolean(),
      'agentes_publicos_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'TiposIngressos', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servidores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Servidores';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['agentes_publicos_list']))
    {
      $values = array();
      foreach ($this->object->getAgentesPublicoss() as $obj)
      {
        $values[] = $obj->getCdIngresso();
      }

      $this->setDefault('agentes_publicos_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveAgentesPublicosList($con);
  }

  public function saveAgentesPublicosList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['agentes_publicos_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(AgentesPublicosPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    AgentesPublicosPeer::doDelete($c, $con);

    $values = $this->getValue('agentes_publicos_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new AgentesPublicos();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdIngresso($value);
        $obj->save();
      }
    }
  }

}
