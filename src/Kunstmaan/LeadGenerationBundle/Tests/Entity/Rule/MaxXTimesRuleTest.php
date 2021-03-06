<?php

namespace Kunstmaan\LeadGenerationBundle\Tests\Entity\Rule;

use Kunstmaan\LeadGenerationBundle\Entity\Rule\MaxXTimesRule;
use Kunstmaan\LeadGenerationBundle\Form\Rule\MaxXTimeAdminType;
use PHPUnit_Framework_TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-04 at 16:54:04.
 */
class MaxXTimesRuleTest extends PHPUnit_Framework_TestCase
{
    public function testGettersAndSetters()
    {
        $rule = new MaxXTimesRule();
        $rule->setTimes(13);

        $this->assertEquals(13, $rule->getTimes());
        $this->assertEquals('MaxXTimesRule', $rule->getJsObjectClass());
        $this->assertEquals('/bundles/kunstmaanleadgeneration/js/rule/MaxXTimesRule.js', $rule->getJsFilePath());
        $this->assertEquals(MaxXTimeAdminType::class, $rule->getAdminType());
        $this->assertTrue(is_array($rule->getJsProperties()));
    }
}
