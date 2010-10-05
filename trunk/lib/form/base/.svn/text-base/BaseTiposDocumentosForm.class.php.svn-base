<?php

/**
 * TiposDocumentos form base class.
 *
 * @method TiposDocumentos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposDocumentosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_tipo_doc'         => new sfWidgetFormInputHidden(),
      'nm_tipo_doc'         => new sfWidgetFormInputText(),
      'de_grupo_tipo_doc'   => new sfWidgetFormInputText(),
      'nu_totcamp_tipo_doc' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cd_tipo_doc'         => new sfValidatorPropelChoice(array('model' => 'TiposDocumentos', 'column' => 'cd_tipo_doc', 'required' => false)),
      'nm_tipo_doc'         => new sfValidatorString(array('max_length' => 80)),
      'de_grupo_tipo_doc'   => new sfValidatorString(array('max_length' => 6)),
      'nu_totcamp_tipo_doc' => new sfValidatorInteger(array('min' => -128, 'max' => 127)),
    ));

    $this->widgetSchema->setNameFormat('tipos_documentos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposDocumentos';
  }


}
