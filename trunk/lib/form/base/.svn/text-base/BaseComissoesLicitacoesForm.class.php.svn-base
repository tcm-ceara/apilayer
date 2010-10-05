<?php

/**
 * ComissoesLicitacoes form base class.
 *
 * @method ComissoesLicitacoes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseComissoesLicitacoesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_municipio'           => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor'          => new sfWidgetFormInputHidden(),
      'dt_criac_comissao_cl'   => new sfWidgetFormInputHidden(),
      'nu_comissao_licit_cl'   => new sfWidgetFormInputHidden(),
      'nu_portaria_criac_cl'   => new sfWidgetFormInputText(),
      'tp_comissao_licit_cl'   => new sfWidgetFormInputText(),
      'dt_extin_comissao_cl'   => new sfWidgetFormDateTime(),
      'nu_portaria_extint_cl'  => new sfWidgetFormInputText(),
      'membros_com_licit_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'DadosMembrosComLicit')),
    ));

    $this->setValidators(array(
      'cd_municipio'           => new sfValidatorPropelChoice(array('model' => 'ComissoesLicitacoes', 'column' => 'cd_municipio', 'required' => false)),
      'cd_cpf_gestor'          => new sfValidatorPropelChoice(array('model' => 'ComissoesLicitacoes', 'column' => 'cd_cpf_gestor', 'required' => false)),
      'dt_criac_comissao_cl'   => new sfValidatorPropelChoice(array('model' => 'ComissoesLicitacoes', 'column' => 'dt_criac_comissao_cl', 'required' => false)),
      'nu_comissao_licit_cl'   => new sfValidatorPropelChoice(array('model' => 'ComissoesLicitacoes', 'column' => 'nu_comissao_licit_cl', 'required' => false)),
      'nu_portaria_criac_cl'   => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'tp_comissao_licit_cl'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'dt_extin_comissao_cl'   => new sfValidatorDateTime(array('required' => false)),
      'nu_portaria_extint_cl'  => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'membros_com_licit_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'DadosMembrosComLicit', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comissoes_licitacoes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ComissoesLicitacoes';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['membros_com_licit_list']))
    {
      $values = array();
      foreach ($this->object->getMembrosComLicits() as $obj)
      {
        $values[] = $obj->getNuCpfMembroCl();
      }

      $this->setDefault('membros_com_licit_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveMembrosComLicitList($con);
  }

  public function saveMembrosComLicitList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['membros_com_licit_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(MembrosComLicitPeer::CD_MUNICIPIO, $this->object->getPrimaryKey());
    MembrosComLicitPeer::doDelete($c, $con);

    $values = $this->getValue('membros_com_licit_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new MembrosComLicit();
        $obj->setCdMunicipio($this->object->getPrimaryKey());
        $obj->setNuCpfMembroCl($value);
        $obj->save();
      }
    }
  }

}
