<?php

/**
 * ItensRemuneratorios form base class.
 *
 * @method ItensRemuneratorios getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseItensRemuneratoriosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'          => new sfWidgetFormInputHidden(),
      'cd_item_ir'            => new sfWidgetFormInputHidden(),
      'tp_item_ir'            => new sfWidgetFormInputText(),
      'de_item_ir'            => new sfWidgetFormInputText(),
      'cd_amparo_legal'       => new sfWidgetFormPropelChoice(array('model' => 'TiposAmparosLegais', 'add_empty' => false)),
      'nu_amparo_legal_ir'    => new sfWidgetFormInputText(),
      'dt_amparo_legal_ir'    => new sfWidgetFormDateTime(),
      'dt_public_ir'          => new sfWidgetFormDateTime(),
      'nu_decreto_ir'         => new sfWidgetFormInputText(),
      'dt_decreto_ir'         => new sfWidgetFormDateTime(),
      'dt_public_decreto_ir'  => new sfWidgetFormDateTime(),
      'tp_classificacao_ir'   => new sfWidgetFormInputText(),
      'st_extinto_ir'         => new sfWidgetFormInputCheckbox(),
      'dt_ref_ir'             => new sfWidgetFormInputText(),
      'concessoes_itens_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'AgentesPublicos')),
    ));

    $this->setValidators(array(
      'cd_municipio'          => new sfValidatorPropelChoice(array('model' => 'ItensRemuneratorios', 'column' => 'cd_municipio', 'required' => false)),
      'cd_item_ir'            => new sfValidatorPropelChoice(array('model' => 'ItensRemuneratorios', 'column' => 'cd_item_ir', 'required' => false)),
      'tp_item_ir'            => new sfValidatorString(array('max_length' => 1)),
      'de_item_ir'            => new sfValidatorString(array('max_length' => 150)),
      'cd_amparo_legal'       => new sfValidatorPropelChoice(array('model' => 'TiposAmparosLegais', 'column' => 'cd_amparo_legal')),
      'nu_amparo_legal_ir'    => new sfValidatorString(array('max_length' => 10)),
      'dt_amparo_legal_ir'    => new sfValidatorDateTime(),
      'dt_public_ir'          => new sfValidatorDateTime(),
      'nu_decreto_ir'         => new sfValidatorString(array('max_length' => 10)),
      'dt_decreto_ir'         => new sfValidatorDateTime(),
      'dt_public_decreto_ir'  => new sfValidatorDateTime(),
      'tp_classificacao_ir'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'st_extinto_ir'         => new sfValidatorBoolean(),
      'dt_ref_ir'             => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'concessoes_itens_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'AgentesPublicos', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('itens_remuneratorios[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ItensRemuneratorios';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['concessoes_itens_list']))
    {
      $values = array();
      foreach ($this->object->getConcessoesItenss() as $obj)
      {
        $values[] = $obj->getDtVersaoOrc();
      }

      $this->setDefault('concessoes_itens_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveConcessoesItensList($con);
  }

  public function saveConcessoesItensList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['concessoes_itens_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(ConcessoesItensPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    ConcessoesItensPeer::doDelete($c, $con);

    $values = $this->getValue('concessoes_itens_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new ConcessoesItens();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setDtVersaoOrc($value);
        $obj->save();
      }
    }
  }

}
