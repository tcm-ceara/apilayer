<?php

/**
 * DadosPessoaisServ form base class.
 *
 * @method DadosPessoaisServ getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosPessoaisServForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_cpf_serv_muni'           => new sfWidgetFormInputHidden(),
      'nu_identidade_ds'           => new sfWidgetFormInputText(),
      'de_exped_ident_ds'          => new sfWidgetFormInputText(),
      'nu_tit_eleitor_ds'          => new sfWidgetFormInputText(),
      'cd_est_civil'               => new sfWidgetFormInputText(),
      'cd_instrucao'               => new sfWidgetFormPropelChoice(array('model' => 'GrausInstrucao', 'add_empty' => true)),
      'cd_sexo_ds'                 => new sfWidgetFormInputText(),
      'nm_serv_muni_ds'            => new sfWidgetFormInputText(),
      'de_endereco_ds'             => new sfWidgetFormInputText(),
      'nu_fone_ds'                 => new sfWidgetFormInputText(),
      'dt_nascim_ds'               => new sfWidgetFormDateTime(),
      'servidores_municipais_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias')),
    ));

    $this->setValidators(array(
      'cd_cpf_serv_muni'           => new sfValidatorPropelChoice(array('model' => 'DadosPessoaisServ', 'column' => 'cd_cpf_serv_muni', 'required' => false)),
      'nu_identidade_ds'           => new sfValidatorString(array('max_length' => 13, 'required' => false)),
      'de_exped_ident_ds'          => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'nu_tit_eleitor_ds'          => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'cd_est_civil'               => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cd_instrucao'               => new sfValidatorPropelChoice(array('model' => 'GrausInstrucao', 'column' => 'cd_instrucao', 'required' => false)),
      'cd_sexo_ds'                 => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'nm_serv_muni_ds'            => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'de_endereco_ds'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_ds'                 => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'dt_nascim_ds'               => new sfValidatorDateTime(array('required' => false)),
      'servidores_municipais_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'UnidadesOrcamentarias', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dados_pessoais_serv[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosPessoaisServ';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['servidores_municipais_list']))
    {
      $values = array();
      foreach ($this->object->getServidoresMunicipaiss() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
      }

      $this->setDefault('servidores_municipais_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveServidoresMunicipaisList($con);
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
    $c->add(ServidoresMunicipaisPeer::CD_CPF_SERV_MUNI, $this->object->getPrimaryKey());
    ServidoresMunicipaisPeer::doDelete($c, $con);

    $values = $this->getValue('servidores_municipais_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new ServidoresMunicipais();
        $obj->setCdCpfServMuni($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
