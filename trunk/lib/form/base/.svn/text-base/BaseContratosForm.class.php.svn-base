<?php

/**
 * Contratos form base class.
 *
 * @method Contratos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseContratosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor'          => new sfWidgetFormInputHidden(),
      'dt_contrato'            => new sfWidgetFormInputHidden(),
      'nu_contrato'            => new sfWidgetFormInputHidden(),
      'tp_contrato'            => new sfWidgetFormInputText(),
      'md_contrato'            => new sfWidgetFormInputText(),
      'nu_contrato_original'   => new sfWidgetFormInputText(),
      'dt_contrato_original'   => new sfWidgetFormDateTime(),
      'dt_ini_vigenc_contrato' => new sfWidgetFormDateTime(),
      'dt_fim_vigenc_contrato' => new sfWidgetFormDateTime(),
      'de_objeto_contrato'     => new sfWidgetFormInputText(),
      'vl_valor_tot_contrato'  => new sfWidgetFormInputText(),
      'contratos_obras_list'   => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ObrasServEng')),
      'contratados_list'       => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Negociantes')),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'cd_municipio', 'required' => false)),
      'cd_cpf_gestor'          => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'dt_contrato'            => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'dt_contrato', 'required' => false)),
      'nu_contrato'            => new sfValidatorPropelChoice(array('model' => 'Contratos', 'column' => 'nu_contrato', 'required' => false)),
      'tp_contrato'            => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'md_contrato'            => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'nu_contrato_original'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'dt_contrato_original'   => new sfValidatorDateTime(array('required' => false)),
      'dt_ini_vigenc_contrato' => new sfValidatorDateTime(array('required' => false)),
      'dt_fim_vigenc_contrato' => new sfValidatorDateTime(array('required' => false)),
      'de_objeto_contrato'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'vl_valor_tot_contrato'  => new sfValidatorNumber(array('required' => false)),
      'contratos_obras_list'   => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ObrasServEng', 'required' => false)),
      'contratados_list'       => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Negociantes', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contratos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Contratos';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['contratos_obras_list']))
    {
      $values = array();
      foreach ($this->object->getContratosObrass() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('contratos_obras_list', $values);
    }

    if (isset($this->widgetSchema['contratados_list']))
    {
      $values = array();
      foreach ($this->object->getContratadoss() as $obj)
      {
        $values[] = $obj->getNuDocNg();
      }

      $this->setDefault('contratados_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveContratosObrasList($con);
    $this->saveContratadosList($con);
  }

  public function saveContratosObrasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['contratos_obras_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(ContratosObrasPeer::DT_CONTRATO, $this->object->getPrimaryKey());
    ContratosObrasPeer::doDelete($c, $con);

    $values = $this->getValue('contratos_obras_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new ContratosObras();
        $obj->setDtContrato($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

  public function saveContratadosList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['contratados_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(ContratadosPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    ContratadosPeer::doDelete($c, $con);

    $values = $this->getValue('contratados_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new Contratados();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setNuDocNg($value);
        $obj->save();
      }
    }
  }

}
