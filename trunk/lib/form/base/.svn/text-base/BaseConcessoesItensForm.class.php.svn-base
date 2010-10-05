<?php

/**
 * ConcessoesItens form base class.
 *
 * @method ConcessoesItens getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseConcessoesItensForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'        => new sfWidgetFormInputHidden(),
      'dt_versao_orc'       => new sfWidgetFormInputHidden(),
      'cd_orgao'            => new sfWidgetFormInputHidden(),
      'cd_unid_orc'         => new sfWidgetFormInputHidden(),
      'cd_cpf_serv_muni'    => new sfWidgetFormInputHidden(),
      'cd_ingresso'         => new sfWidgetFormInputHidden(),
      'cd_vinculo'          => new sfWidgetFormInputHidden(),
      'nu_expediente_no'    => new sfWidgetFormInputHidden(),
      'cd_item_ir'          => new sfWidgetFormInputHidden(),
      'nu_expediente_cr'    => new sfWidgetFormInputText(),
      'cd_expediente'       => new sfWidgetFormPropelChoice(array('model' => 'TiposExpedientes', 'add_empty' => false)),
      'dt_expediente_cr'    => new sfWidgetFormDateTime(),
      'dt_public_cr'        => new sfWidgetFormDateTime(),
      'st_suspenso_cr'      => new sfWidgetFormInputCheckbox(),
      'st_extinto_cr'       => new sfWidgetFormInputCheckbox(),
      'dt_ref_cr'           => new sfWidgetFormInputText(),
      'agentes_folhas_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'FolhasPagamentos')),
    ));

    $this->setValidators(array(
      'cd_municipio'        => new sfValidatorPropelChoice(array('model' => 'ItensRemuneratorios', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'       => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'            => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'         => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_cpf_serv_muni'    => new sfValidatorPropelChoice(array('model' => 'ConcessoesItens', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'cd_ingresso'         => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_ingresso', 'required' => false)),
      'cd_vinculo'          => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'cd_vinculo', 'required' => false)),
      'nu_expediente_no'    => new sfValidatorPropelChoice(array('model' => 'AgentesPublicos', 'column' => 'nu_expediente_no', 'required' => false)),
      'cd_item_ir'          => new sfValidatorPropelChoice(array('model' => 'ItensRemuneratorios', 'column' => 'cd_item_ir', 'required' => false)),
      'nu_expediente_cr'    => new sfValidatorString(array('max_length' => 10)),
      'cd_expediente'       => new sfValidatorPropelChoice(array('model' => 'TiposExpedientes', 'column' => 'cd_expediente')),
      'dt_expediente_cr'    => new sfValidatorDateTime(),
      'dt_public_cr'        => new sfValidatorDateTime(),
      'st_suspenso_cr'      => new sfValidatorBoolean(),
      'st_extinto_cr'       => new sfValidatorBoolean(),
      'dt_ref_cr'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'agentes_folhas_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'FolhasPagamentos', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('concessoes_itens[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ConcessoesItens';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['agentes_folhas_list']))
    {
      $values = array();
      foreach ($this->object->getAgentesFolhass() as $obj)
      {
        $values[] = $obj->getDtCompetFl();
      }

      $this->setDefault('agentes_folhas_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveAgentesFolhasList($con);
  }

  public function saveAgentesFolhasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['agentes_folhas_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(AgentesFolhasPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    AgentesFolhasPeer::doDelete($c, $con);

    $values = $this->getValue('agentes_folhas_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new AgentesFolhas();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setDtCompetFl($value);
        $obj->save();
      }
    }
  }

}
