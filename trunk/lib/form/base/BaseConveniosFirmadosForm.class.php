<?php

/**
 * ConveniosFirmados form base class.
 *
 * @method ConveniosFirmados getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseConveniosFirmadosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'dt_celebracao_cf'       => new sfWidgetFormInputHidden(),
      'nu_seq_cf'              => new sfWidgetFormInputHidden(),
      'dt_ref_cf'              => new sfWidgetFormInputText(),
      'nm_orgao_cedente_cf'    => new sfWidgetFormInputText(),
      'de_numero_orig_cf'      => new sfWidgetFormInputText(),
      'de_objeto_cf'           => new sfWidgetFormInputText(),
      'dt_ini_vigenc_cf'       => new sfWidgetFormDateTime(),
      'dt_fim_vigenc_cf'       => new sfWidgetFormDateTime(),
      'vl_contrapart_muni_cf'  => new sfWidgetFormInputText(),
      'nu_banco_verba_cf'      => new sfWidgetFormInputText(),
      'nu_agencia_verba_cf'    => new sfWidgetFormInputText(),
      'nu_conta_verba_cf'      => new sfWidgetFormInputText(),
      'vl_total_cf'            => new sfWidgetFormInputText(),
      'recursos_empenhos_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'NotasEmpenhos')),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'ConveniosFirmados', 'column' => 'cd_municipio', 'required' => false)),
      'dt_celebracao_cf'       => new sfValidatorPropelChoice(array('model' => 'ConveniosFirmados', 'column' => 'dt_celebracao_cf', 'required' => false)),
      'nu_seq_cf'              => new sfValidatorPropelChoice(array('model' => 'ConveniosFirmados', 'column' => 'nu_seq_cf', 'required' => false)),
      'dt_ref_cf'              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'nm_orgao_cedente_cf'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'de_numero_orig_cf'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'de_objeto_cf'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'dt_ini_vigenc_cf'       => new sfValidatorDateTime(array('required' => false)),
      'dt_fim_vigenc_cf'       => new sfValidatorDateTime(array('required' => false)),
      'vl_contrapart_muni_cf'  => new sfValidatorNumber(array('required' => false)),
      'nu_banco_verba_cf'      => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'nu_agencia_verba_cf'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'nu_conta_verba_cf'      => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'vl_total_cf'            => new sfValidatorNumber(array('required' => false)),
      'recursos_empenhos_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'NotasEmpenhos', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('convenios_firmados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ConveniosFirmados';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['recursos_empenhos_list']))
    {
      $values = array();
      foreach ($this->object->getRecursosEmpenhoss() as $obj)
      {
        $values[] = $obj->getDtVersaoOrc();
      }

      $this->setDefault('recursos_empenhos_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveRecursosEmpenhosList($con);
  }

  public function saveRecursosEmpenhosList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['recursos_empenhos_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(RecursosEmpenhosPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    RecursosEmpenhosPeer::doDelete($c, $con);

    $values = $this->getValue('recursos_empenhos_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new RecursosEmpenhos();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setDtVersaoOrc($value);
        $obj->save();
      }
    }
  }

}
