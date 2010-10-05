<?php

/**
 * OrigensRecursos form base class.
 *
 * @method OrigensRecursos getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseOrigensRecursosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_tipo_rec_rc'         => new sfWidgetFormInputHidden(),
      'de_ori_rec_rc'          => new sfWidgetFormInputText(),
      'recursos_empenhos_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'ConveniosFirmados')),
    ));

    $this->setValidators(array(
      'cd_tipo_rec_rc'         => new sfValidatorPropelChoice(array('model' => 'OrigensRecursos', 'column' => 'cd_tipo_rec_rc', 'required' => false)),
      'de_ori_rec_rc'          => new sfValidatorString(array('max_length' => 80)),
      'recursos_empenhos_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'ConveniosFirmados', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('origens_recursos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrigensRecursos';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['recursos_empenhos_list']))
    {
      $values = array();
      foreach ($this->object->getRecursosEmpenhoss() as $obj)
      {
        $values[] = $obj->getCdMunicipio();
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
    $c->add(RecursosEmpenhosPeer::CD_TIPO_REC_RC, $this->object->getPrimaryKey());
    RecursosEmpenhosPeer::doDelete($c, $con);

    $values = $this->getValue('recursos_empenhos_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new RecursosEmpenhos();
        $obj->setCdTipoRecRc($this->object->getPrimaryKey());
        $obj->setCdMunicipio($value);
        $obj->save();
      }
    }
  }

}
