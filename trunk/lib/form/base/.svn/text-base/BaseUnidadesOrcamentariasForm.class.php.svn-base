<?php

/**
 * UnidadesOrcamentarias form base class.
 *
 * @method UnidadesOrcamentarias getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseUnidadesOrcamentariasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'               => new sfWidgetFormInputHidden(),
      'dt_versao_orc'              => new sfWidgetFormInputHidden(),
      'cd_orgao'                   => new sfWidgetFormInputHidden(),
      'cd_unid_orc'                => new sfWidgetFormInputHidden(),
      'cd_tipo_unid_adm'           => new sfWidgetFormInputText(),
      'nm_unid_orc'                => new sfWidgetFormInputText(),
      'tp_administracao_uo'        => new sfWidgetFormInputText(),
      'bal_desp_extra_orc_list'    => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc')),
      'servidores_municipais_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'DadosPessoaisServ')),
      'folhas_pagamentos_list'     => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'TiposFolhas')),
      'unid_orc_ug_list'           => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidGestoras')),
      'bal_rec_extra_orc_list'     => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc')),
      'despesas_extra_orc_list'    => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc')),
      'variacoes_extra_orc_list'   => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc')),
      'orc_desp_proj_ativ_list'    => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Programas')),
      'taloes_extras_list'         => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc')),
    ));

    $this->setValidators(array(
      'cd_municipio'               => new sfValidatorPropelChoice(array('model' => 'Orgaos', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'              => new sfValidatorPropelChoice(array('model' => 'Orgaos', 'column' => 'dt_versao_orc', 'required' => false)),
      'cd_orgao'                   => new sfValidatorPropelChoice(array('model' => 'Orgaos', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'                => new sfValidatorPropelChoice(array('model' => 'UnidadesOrcamentarias', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_tipo_unid_adm'           => new sfValidatorString(array('max_length' => 2)),
      'nm_unid_orc'                => new sfValidatorString(array('max_length' => 80)),
      'tp_administracao_uo'        => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'bal_desp_extra_orc_list'    => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc', 'required' => false)),
      'servidores_municipais_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'DadosPessoaisServ', 'required' => false)),
      'folhas_pagamentos_list'     => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'TiposFolhas', 'required' => false)),
      'unid_orc_ug_list'           => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidGestoras', 'required' => false)),
      'bal_rec_extra_orc_list'     => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc', 'required' => false)),
      'despesas_extra_orc_list'    => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc', 'required' => false)),
      'variacoes_extra_orc_list'   => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc', 'required' => false)),
      'orc_desp_proj_ativ_list'    => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Programas', 'required' => false)),
      'taloes_extras_list'         => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ContasExtraOrc', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('unidades_orcamentarias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UnidadesOrcamentarias';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['bal_desp_extra_orc_list']))
    {
      $values = array();
      foreach ($this->object->getBalDespExtraOrcs() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('bal_desp_extra_orc_list', $values);
    }

    if (isset($this->widgetSchema['servidores_municipais_list']))
    {
      $values = array();
      foreach ($this->object->getServidoresMunicipaiss() as $obj)
      {
        $values[] = $obj->getCdCpfServMuni();
      }

      $this->setDefault('servidores_municipais_list', $values);
    }

    if (isset($this->widgetSchema['folhas_pagamentos_list']))
    {
      $values = array();
      foreach ($this->object->getFolhasPagamentoss() as $obj)
      {
        $values[] = $obj->getTpFolha();
      }

      $this->setDefault('folhas_pagamentos_list', $values);
    }

    if (isset($this->widgetSchema['unid_orc_ug_list']))
    {
      $values = array();
      foreach ($this->object->getUnidOrcUgs() as $obj)
      {
        $values[] = $obj->getCdUnidGestUg();
      }

      $this->setDefault('unid_orc_ug_list', $values);
    }

    if (isset($this->widgetSchema['bal_rec_extra_orc_list']))
    {
      $values = array();
      foreach ($this->object->getBalRecExtraOrcs() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('bal_rec_extra_orc_list', $values);
    }

    if (isset($this->widgetSchema['despesas_extra_orc_list']))
    {
      $values = array();
      foreach ($this->object->getDespesasExtraOrcs() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('despesas_extra_orc_list', $values);
    }

    if (isset($this->widgetSchema['variacoes_extra_orc_list']))
    {
      $values = array();
      foreach ($this->object->getVariacoesExtraOrcs() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('variacoes_extra_orc_list', $values);
    }

    if (isset($this->widgetSchema['orc_desp_proj_ativ_list']))
    {
      $values = array();
      foreach ($this->object->getOrcDespProjAtivs() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('orc_desp_proj_ativ_list', $values);
    }

    if (isset($this->widgetSchema['taloes_extras_list']))
    {
      $values = array();
      foreach ($this->object->getTaloesExtrass() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('taloes_extras_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveBalDespExtraOrcList($con);
    $this->saveServidoresMunicipaisList($con);
    $this->saveFolhasPagamentosList($con);
    $this->saveUnidOrcUgList($con);
    $this->saveBalRecExtraOrcList($con);
    $this->saveDespesasExtraOrcList($con);
    $this->saveVariacoesExtraOrcList($con);
    $this->saveOrcDespProjAtivList($con);
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
    $c->add(BalDespExtraOrcPeer::CD_ORGAO, $this->object->getPrimaryKey());
    BalDespExtraOrcPeer::doDelete($c, $con);

    $values = $this->getValue('bal_desp_extra_orc_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new BalDespExtraOrc();
        $obj->setCdOrgao($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

  public function saveServidoresMunicipaisList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['servidores_municipais_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(ServidoresMunicipaisPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    ServidoresMunicipaisPeer::doDelete($c, $con);

    $values = $this->getValue('servidores_municipais_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new ServidoresMunicipais();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdCpfServMuni($value);
        $obj->save();
      }
    }
  }

  public function saveFolhasPagamentosList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['folhas_pagamentos_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(FolhasPagamentosPeer::DT_VERSAO_ORC, $this->object->getPrimaryKey());
    FolhasPagamentosPeer::doDelete($c, $con);

    $values = $this->getValue('folhas_pagamentos_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new FolhasPagamentos();
        $obj->setDtVersaoOrc($this->object->getPrimaryKey());
        $obj->setTpFolha($value);
        $obj->save();
      }
    }
  }

  public function saveUnidOrcUgList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['unid_orc_ug_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(UnidOrcUgPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    UnidOrcUgPeer::doDelete($c, $con);

    $values = $this->getValue('unid_orc_ug_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new UnidOrcUg();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setCdUnidGestUg($value);
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
    $c->add(BalRecExtraOrcPeer::CD_ORGAO, $this->object->getPrimaryKey());
    BalRecExtraOrcPeer::doDelete($c, $con);

    $values = $this->getValue('bal_rec_extra_orc_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new BalRecExtraOrc();
        $obj->setCdOrgao($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
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
    $c->add(DespesasExtraOrcPeer::CD_ORGAO, $this->object->getPrimaryKey());
    DespesasExtraOrcPeer::doDelete($c, $con);

    $values = $this->getValue('despesas_extra_orc_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DespesasExtraOrc();
        $obj->setCdOrgao($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
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
    $c->add(VariacoesExtraOrcPeer::CD_ORGAO, $this->object->getPrimaryKey());
    VariacoesExtraOrcPeer::doDelete($c, $con);

    $values = $this->getValue('variacoes_extra_orc_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new VariacoesExtraOrc();
        $obj->setCdOrgao($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

  public function saveOrcDespProjAtivList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['orc_desp_proj_ativ_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(OrcDespProjAtivPeer::CD_ORGAO, $this->object->getPrimaryKey());
    OrcDespProjAtivPeer::doDelete($c, $con);

    $values = $this->getValue('orc_desp_proj_ativ_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new OrcDespProjAtiv();
        $obj->setCdOrgao($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
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
    $c->add(TaloesExtrasPeer::CD_ORGAO, $this->object->getPrimaryKey());
    TaloesExtrasPeer::doDelete($c, $con);

    $values = $this->getValue('taloes_extras_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new TaloesExtras();
        $obj->setCdOrgao($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
