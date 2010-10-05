<?php

/**
 * CreditosAdicionais form base class.
 *
 * @method CreditosAdicionais getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCreditosAdicionaisForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_versao_orc'          => new sfWidgetFormInputHidden(),
      'dt_abert_cred_ca'       => new sfWidgetFormInputHidden(),
      'nu_seq_no_dia_ca'       => new sfWidgetFormInputHidden(),
      'cd_orgao'               => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => true)),
      'cd_unid_orc'            => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => true)),
      'cd_funcao'              => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => true)),
      'cd_subfuncao'           => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => true)),
      'cd_programa'            => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => true)),
      'cd_proj_ativ'           => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => true)),
      'nu_proj_ativ'           => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => true)),
      'nu_sub_proj_ativ'       => new sfWidgetFormPropelChoice(array('model' => 'CatEcoProjAtiv', 'add_empty' => true)),
      'cd_elemento_od'         => new sfWidgetFormInputText(),
      'dt_ref_ca'              => new sfWidgetFormInputText(),
      'nu_lei_ca'              => new sfWidgetFormInputText(),
      'nu_decreto_ca'          => new sfWidgetFormInputText(),
      'tp_abertura_credito_ca' => new sfWidgetFormInputText(),
      'cd_fonte_recursos_ca'   => new sfWidgetFormInputText(),
      'vl_cred_super_ca'       => new sfWidgetFormInputText(),
      'vl_cred_exces_ca'       => new sfWidgetFormInputText(),
      'vl_cred_oper_ca'        => new sfWidgetFormInputText(),
      'vl_cred_anul_ca'        => new sfWidgetFormInputText(),
      'fontes_anulacao_list'   => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'CatEcoProjAtiv')),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_municipio', 'required' => false)),
      'dt_versao_orc'          => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'dt_versao_orc', 'required' => false)),
      'dt_abert_cred_ca'       => new sfValidatorPropelChoice(array('model' => 'CreditosAdicionais', 'column' => 'dt_abert_cred_ca', 'required' => false)),
      'nu_seq_no_dia_ca'       => new sfValidatorPropelChoice(array('model' => 'CreditosAdicionais', 'column' => 'nu_seq_no_dia_ca', 'required' => false)),
      'cd_orgao'               => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_orgao', 'required' => false)),
      'cd_unid_orc'            => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_unid_orc', 'required' => false)),
      'cd_funcao'              => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_funcao', 'required' => false)),
      'cd_subfuncao'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_subfuncao', 'required' => false)),
      'cd_programa'            => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_programa', 'required' => false)),
      'cd_proj_ativ'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'cd_proj_ativ', 'required' => false)),
      'nu_proj_ativ'           => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_proj_ativ', 'required' => false)),
      'nu_sub_proj_ativ'       => new sfValidatorPropelChoice(array('model' => 'CatEcoProjAtiv', 'column' => 'nu_sub_proj_ativ', 'required' => false)),
      'cd_elemento_od'         => new sfValidatorString(array('max_length' => 8, 'required' => false)),
      'dt_ref_ca'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'nu_lei_ca'              => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_decreto_ca'          => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'tp_abertura_credito_ca' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cd_fonte_recursos_ca'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'vl_cred_super_ca'       => new sfValidatorNumber(array('required' => false)),
      'vl_cred_exces_ca'       => new sfValidatorNumber(array('required' => false)),
      'vl_cred_oper_ca'        => new sfValidatorNumber(array('required' => false)),
      'vl_cred_anul_ca'        => new sfValidatorNumber(array('required' => false)),
      'fontes_anulacao_list'   => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'CatEcoProjAtiv', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('creditos_adicionais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CreditosAdicionais';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['fontes_anulacao_list']))
    {
      $values = array();
      foreach ($this->object->getFontesAnulacaos() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('fontes_anulacao_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveFontesAnulacaoList($con);
  }

  public function saveFontesAnulacaoList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['fontes_anulacao_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(FontesAnulacaoPeer::DT_ABERT_CRED_CA, $this->object->getPrimaryKey());
    FontesAnulacaoPeer::doDelete($c, $con);

    $values = $this->getValue('fontes_anulacao_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new FontesAnulacao();
        $obj->setDtAbertCredCa($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
