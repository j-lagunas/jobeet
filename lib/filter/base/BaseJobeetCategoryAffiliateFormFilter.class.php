<?php

/**
 * JobeetCategoryAffiliate filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 24051 2009-11-16 21:08:08Z Kris.Wallsmith $
 */
abstract class BaseJobeetCategoryAffiliateFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('jobeet_category_affiliate_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'JobeetCategoryAffiliate';
  }

  public function getFields()
  {
    return array(
      'category_id'  => 'ForeignKey',
      'affiliate_id' => 'ForeignKey',
    );
  }
}
