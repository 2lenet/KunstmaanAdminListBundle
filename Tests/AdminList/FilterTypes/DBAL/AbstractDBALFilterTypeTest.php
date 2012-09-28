<?php

namespace Kunstmaan\AdminListBundle\Tests\AdminList\FilterTypes\DBAL;

use Kunstmaan\AdminListBundle\AdminList\FilterTypes\DBAL\AbstractDBALFilterType;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-26 at 13:21:33.
 */
class AbstractDBALFilterTypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\AdminListBundle\AdminList\FilterTypes\DBAL\AbstractDBALFilterType<extended>
     */
    public function testSetQueryBuilder()
    {
        /* @var AbstractDBALFilterType $object */
        $object = $this->getMockForAbstractClass('Kunstmaan\AdminListBundle\AdminList\FilterTypes\DBAL\AbstractDBALFilterType', array('column', 'alias'));

        $queryBuilder = $this->getMockBuilder('Doctrine\DBAL\Query\QueryBuilder')
            ->disableOriginalConstructor()
            ->getMock();

        $object->setQueryBuilder($queryBuilder);
    }
}