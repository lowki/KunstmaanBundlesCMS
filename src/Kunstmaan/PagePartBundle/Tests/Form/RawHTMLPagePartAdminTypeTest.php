<?php
namespace Kunstmaan\PagePartBundle\Tests\Form;
use Kunstmaan\PagePartBundle\Form\RawHTMLPagePartAdminType;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-08-20 at 13:02:14.
 */
class RawHTMLPagePartAdminTypeTest extends PagePartAdminTypeTestCase
{
    /**
     * @var RawHTMLPagePartAdminType
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new RawHTMLPagePartAdminType();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert () == 'kunstmaan_pagepartbundle_rawhtmlpageparttype'.
     *
     * @covers Kunstmaan\PagePartBundle\Form\RawHTMLPagePartAdminType::getName
     */
    public function testGetName()
    {
        $this->assertEquals('kunstmaan_pagepartbundle_rawhtmlpageparttype', $this->object->getName());
    }

    /**
     * @covers Kunstmaan\PagePartBundle\Form\RawHTMLPagePartAdminType::buildForm
     */
    public function testBuildForm()
    {
        $this->object->buildForm($this->builder, array());
        $this->builder->get('content');
    }

    /**
     * @covers Kunstmaan\PagePartBundle\Form\RawHTMLPagePartAdminType::setDefaultOptions
     */
    public function testSetDefaultOptions()
    {
        $this->object->setDefaultOptions($this->resolver);
        $resolve = $this->resolver->resolve();
        $this->assertEquals($resolve["data_class"], 'Kunstmaan\PagePartBundle\Entity\RawHTMLPagePart');
    }
}
