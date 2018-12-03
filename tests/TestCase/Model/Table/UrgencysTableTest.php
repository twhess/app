<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UrgencysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UrgencysTable Test Case
 */
class UrgencysTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UrgencysTable
     */
    public $Urgencys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.urgencys',
        'app.dailyparts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Urgencys') ? [] : ['className' => UrgencysTable::class];
        $this->Urgencys = TableRegistry::getTableLocator()->get('Urgencys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Urgencys);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
