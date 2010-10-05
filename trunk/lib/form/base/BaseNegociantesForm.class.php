<?php

/**
 * Negociantes form base class.
 *
 * @method Negociantes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNegociantesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_doc_ng'        => new sfWidgetFormInputHidden(),
      'cd_tipo_ng'       => new sfWidgetFormInputText(),
      'nm_negociante_ng' => new sfWidgetFormInputText(),
      'de_endereco_ng'   => new sfWidgetFormInputText(),
      'nu_fone_ng'       => new sfWidgetFormInputText(),
      'nu_cep_ng'        => new sfWidgetFormInputText(),
      'nm_municipio_ng'  => new sfWidgetFormInputText(),
      'cd_uf_nf'         => new sfWidgetFormInputText(),
      'licitantes_list'  => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Licitacoes')),
      'contratados_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Contratos')),
    ));

    $this->setValidators(array(
      'nu_doc_ng'        => new sfValidatorPropelChoice(array('model' => 'Negociantes', 'column' => 'nu_doc_ng', 'required' => false)),
      'cd_tipo_ng'       => new sfValidatorString(array('max_length' => 1)),
      'nm_negociante_ng' => new sfValidatorString(array('max_length' => 80)),
      'de_endereco_ng'   => new sfValidatorString(array('max_length' => 255)),
      'nu_fone_ng'       => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nu_cep_ng'        => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'nm_municipio_ng'  => new sfValidatorString(array('max_length' => 40)),
      'cd_uf_nf'         => new sfValidatorString(array('max_length' => 2)),
      'licitantes_list'  => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Licitacoes', 'required' => false)),
      'contratados_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Contratos', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('negociantes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Negociantes';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['licitantes_list']))
    {
      $values = array();
      foreach ($this->object->getLicitantess() as $obj)
      {
        $values[] = $obj->getDtRealizacaoLicitLi();
      }

      $this->setDefault('licitantes_list', $values);
    }

    if (isset($this->widgetSchema['contratados_list']))
    {
      $values = array();
      foreach ($this->object->getContratadoss() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('contratados_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveLicitantesList($con);
    $this->saveContratadosList($con);
  }

  public function saveLicitantesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['licitantes_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(LicitantesPeer::NU_DOC_NG, $this->object->getPrimaryKey());
    LicitantesPeer::doDelete($c, $con);

    $values = $this->getValue('licitantes_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new Licitantes();
        $obj->setNuDocNg($this->object->getPrimaryKey());
        $obj->setDtRealizacaoLicitLi($value);
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
    $c->add(ContratadosPeer::NU_DOC_NG, $this->object->getPrimaryKey());
    ContratadosPeer::doDelete($c, $con);

    $values = $this->getValue('contratados_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new Contratados();
        $obj->setNuDocNg($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
