<?php

/**
 * ContasExtraOrc form base class.
 *
 * @method ContasExtraOrc getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseContasExtraOrcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'              => new sfWidgetFormInputHidden(),
      'dt_versao_orc'             => new sfWidgetFormInputHidden(),
      'cd_conta_ctx'              => new sfWidgetFormInputHidden(),
      'dt_ref_ctx'                => new sfWidgetFormInputText(),
      'de_conta_ctx'              => new sfWidgetFormInputText(),
      'vl_saldo_ini'              => new sfWidgetFormInputText(),
      'bal_desp_extra_orc_list'   => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias')),
      'deducoes_notas_pagas_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'NotasPagamentos')),
      'bal_rec_extra_orc_list'    => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias')),
      'despesas_extra_orc_list'   => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias')),
      'variacoes_extra_orc_list'  => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias')),
      'taloes_extras_list'        => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias')),
    ));

    $this->setValidators(array(
      'cd_municipio'              => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'             => new sfValidatorPropelChoice(array('model' => 'Orcamentos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_conta_ctx'              => new sfValidatorPropelChoice(array('model' => 'ContasExtraOrc', 'column' => 'cd_conta_ctx', 'required' => false)),
      'dt_ref_ctx'                => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'de_conta_ctx'              => new sfValidatorString(array('max_length' => 60)),
      'vl_saldo_ini'              => new sfValidatorNumber(),
      'bal_desp_extra_orc_list'   => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias', 'required' => false)),
      'deducoes_notas_pagas_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'NotasPagamentos', 'required' => false)),
      'bal_rec_extra_orc_list'    => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias', 'required' => false)),
      'despesas_extra_orc_list'   => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias', 'required' => false)),
      'variacoes_extra_orc_list'  => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias', 'required' => false)),
      'taloes_extras_list'        => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contas_extra_orc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContasExtraOrc';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['bal_desp_extra_orc_list']))
    {
      $values = array();
      foreach ($this->object->getBalDespExtraOrcs() as $obj)
      {
        $values[] = $obj->getCdOrgao();
      }

      $this->setDefault('bal_desp_extra_orc_list', $values);
    }

    if (isset($this->widgetSchema['deducoes_notas_pagas_list']))
    {
      $values = array();
      foreach ($this->object->getDeducoesNotasPagass() as $obj)
      {
        $values[] = $obj->getCdOrgao();
      }

      $this->setDefault('deducoes_notas_pagas_list', $values);
    }

    if (isset($this->widgetSchema['bal_rec_extra_orc_list']))
    {
      $values = array();
      foreach ($this->object->getBalRecExtraOrcs() as $obj)
      {
        $values[] = $obj->getCdOrgao();
      }

      $this->setDefault('bal_rec_extra_orc_list', $values);
    }

    if (isset($this->widgetSchema['despesas_extra_orc_list']))
    {
      $values = array();
      foreach ($this->object->getDespesasExtraOrcs() as $obj)
      {
        $values[] = $obj->getCdOrgao();
      }

      $this->setDefault('despesas_extra_orc_list', $values);
    }

    if (isset($this->widgetSchema['variacoes_extra_orc_list']))
    {
      $values = array();
      foreach ($this->object->getVariacoesExtraOrcs() as $obj)
      {
        $values[] = $obj->getCdOrgao();
      }

      $this->setDefault('variacoes_extra_orc_list', $values);
    }

    if (isset($this->widgetSchema['taloes_extras_list']))
    {
      $values = array();
      foreach ($this->object->getTaloesExtrass() as $obj)
      {
        $values[] = $obj->getCdOrgao();
      }

      $this->setDefault('taloes_extras_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveBalDespExtraOrcList($con);
    $this->saveDeducoesNotasPagasList($con);
    $this->saveBalRecExtraOrcList($con);
    $this->saveDespesasExtraOrcList($con);
    $this->saveVariacoesExtraOrcList($con);
    $this->saveTaloesExtrasList($con);
  }

  public function saveBalDespExtraOrcList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['bal_desp_extra_orc_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(BalDespExtraOrcPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    BalDespExtraOrcPeer::doDelete($c, $con);

    $values = $this->getValue('bal_desp_extra_orc_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new BalDespExtraOrc();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdOrgao($value);
        $obj->save();
      }
    }
  }

  public function saveDeducoesNotasPagasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['deducoes_notas_pagas_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(DeducoesNotasPagasPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    DeducoesNotasPagasPeer::doDelete($c, $con);

    $values = $this->getValue('deducoes_notas_pagas_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DeducoesNotasPagas();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdOrgao($value);
        $obj->save();
      }
    }
  }

  public function saveBalRecExtraOrcList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['bal_rec_extra_orc_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(BalRecExtraOrcPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    BalRecExtraOrcPeer::doDelete($c, $con);

    $values = $this->getValue('bal_rec_extra_orc_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new BalRecExtraOrc();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdOrgao($value);
        $obj->save();
      }
    }
  }

  public function saveDespesasExtraOrcList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['despesas_extra_orc_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(DespesasExtraOrcPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    DespesasExtraOrcPeer::doDelete($c, $con);

    $values = $this->getValue('despesas_extra_orc_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DespesasExtraOrc();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdOrgao($value);
        $obj->save();
      }
    }
  }

  public function saveVariacoesExtraOrcList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['variacoes_extra_orc_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(VariacoesExtraOrcPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    VariacoesExtraOrcPeer::doDelete($c, $con);

    $values = $this->getValue('variacoes_extra_orc_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new VariacoesExtraOrc();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdOrgao($value);
        $obj->save();
      }
    }
  }

  public function saveTaloesExtrasList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['taloes_extras_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(TaloesExtrasPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    TaloesExtrasPeer::doDelete($c, $con);

    $values = $this->getValue('taloes_extras_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new TaloesExtras();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdOrgao($value);
        $obj->save();
      }
    }
  }

}
