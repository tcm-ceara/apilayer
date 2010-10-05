<?php

/**
 * DadosMembrosComLicit form base class.
 *
 * @method DadosMembrosComLicit getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseDadosMembrosComLicitForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_cpf_membro_cl'       => new sfWidgetFormInputHidden(),
      'nm_membro_cl'           => new sfWidgetFormInputText(),
      'de_endereco_membro_cl'  => new sfWidgetFormInputText(),
      'nu_fone_membro_cl'      => new sfWidgetFormInputText(),
      'membros_com_licit_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ComissoesLicitacoes')),
    ));

    $this->setValidators(array(
      'nu_cpf_membro_cl'       => new sfValidatorPropelChoice(array('model' => 'DadosMembrosComLicit', 'column' => 'nu_cpf_membro_cl', 'required' => false)),
      'nm_membro_cl'           => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'de_endereco_membro_cl'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nu_fone_membro_cl'      => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'membros_com_licit_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ComissoesLicitacoes', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dados_membros_com_licit[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DadosMembrosComLicit';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['membros_com_licit_list']))
    {
      $values = array();
      foreach ($this->object->getMembrosComLicits() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
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
    $c->add(MembrosComLicitPeer::NU_CPF_MEMBRO_CL, $this->object->getPrimaryKey());
    MembrosComLicitPeer::doDelete($c, $con);

    $values = $this->getValue('membros_com_licit_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new MembrosComLicit();
        $obj->setNuCpfMembroCl($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
