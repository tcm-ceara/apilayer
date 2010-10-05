<?php

/**
 * RespContasMensais form base class.
 *
 * @method RespContasMensais getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRespContasMensaisForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nu_ano_ocorre'             => new sfWidgetFormInputHidden(),
      'nu_cont_ocorre'            => new sfWidgetFormInputHidden(),
      'cd_cpf_gestor_remessa_rcm' => new sfWidgetFormInputText(),
      'nm_gestor_remessa_rcm'     => new sfWidgetFormInputText(),
      'cd_tipo_cargo'             => new sfWidgetFormInputText(),
      'cd_cpf_resp_contabil_rcm'  => new sfWidgetFormInputText(),
      'nu_crc_resp_contabil_rcm'  => new sfWidgetFormInputText(),
      'nm_resp_contabil_rcm'      => new sfWidgetFormInputText(),
      'nu_cnpj_empresa_cont_rcm'  => new sfWidgetFormInputText(),
      'nm_empresa_contabil_rcm'   => new sfWidgetFormInputText(),
      'cd_cpf_resp_info_rcm'      => new sfWidgetFormInputText(),
      'nm_resp_info_rcm'          => new sfWidgetFormInputText(),
      'nu_cnpj_empresa_info_rcm'  => new sfWidgetFormInputText(),
      'nm_empresa_info_rcm'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'nu_ano_ocorre'             => new sfValidatorPropelChoice(array('model' => 'RespContasMensais', 'column' => 'nu_ano_ocorre', 'required' => false)),
      'nu_cont_ocorre'            => new sfValidatorPropelChoice(array('model' => 'RespContasMensais', 'column' => 'nu_cont_ocorre', 'required' => false)),
      'cd_cpf_gestor_remessa_rcm' => new sfValidatorString(array('max_length' => 11)),
      'nm_gestor_remessa_rcm'     => new sfValidatorString(array('max_length' => 40)),
      'cd_tipo_cargo'             => new sfValidatorString(array('max_length' => 2)),
      'cd_cpf_resp_contabil_rcm'  => new sfValidatorString(array('max_length' => 11)),
      'nu_crc_resp_contabil_rcm'  => new sfValidatorString(array('max_length' => 11)),
      'nm_resp_contabil_rcm'      => new sfValidatorString(array('max_length' => 40)),
      'nu_cnpj_empresa_cont_rcm'  => new sfValidatorString(array('max_length' => 25)),
      'nm_empresa_contabil_rcm'   => new sfValidatorString(array('max_length' => 60)),
      'cd_cpf_resp_info_rcm'      => new sfValidatorString(array('max_length' => 11)),
      'nm_resp_info_rcm'          => new sfValidatorString(array('max_length' => 40)),
      'nu_cnpj_empresa_info_rcm'  => new sfValidatorString(array('max_length' => 25)),
      'nm_empresa_info_rcm'       => new sfValidatorString(array('max_length' => 60)),
    ));

    $this->widgetSchema->setNameFormat('resp_contas_mensais[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RespContasMensais';
  }


}
