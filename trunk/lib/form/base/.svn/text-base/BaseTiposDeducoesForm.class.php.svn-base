<?php

/**
 * TiposDeducoes form base class.
 *
 * @method TiposDeducoes getObject() Returns the current form's model object
 *
 * @package    sim
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTiposDeducoesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cd_deducao_td'           => new sfWidgetFormInputHidden(),
      'de_tipodeduc_td'         => new sfWidgetFormInputText(),
      'deducoes_notas_pag_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'NotasPagamentos')),
    ));

    $this->setValidators(array(
      'cd_deducao_td'           => new sfValidatorPropelChoice(array('model' => 'TiposDeducoes', 'column' => 'cd_deducao_td', 'required' => false)),
      'de_tipodeduc_td'         => new sfValidatorString(array('max_length' => 25)),
      'deducoes_notas_pag_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'NotasPagamentos', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipos_deducoes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TiposDeducoes';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['deducoes_notas_pag_list']))
    {
      $values = array();
      foreach ($this->object->getDeducoesNotasPags() as $obj)
      {
        $values[] = $obj->getDtVersaoOrc();
      }

      $this->setDefault('deducoes_notas_pag_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveDeducoesNotasPagList($con);
  }

  public function saveDeducoesNotasPagList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['deducoes_notas_pag_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(DeducoesNotasPagPeer::CD_DEDUCAO_TD, $this->object->getPrimaryKey());
    DeducoesNotasPagPeer::doDelete($c, $con);

    $values = $this->getValue('deducoes_notas_pag_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new DeducoesNotasPag();
        $obj->setCdDeducaoTd($this->object->getPrimaryKey());
        $obj->setDtVersaoOrc($value);
        $obj->save();
      }
    }
  }

}
