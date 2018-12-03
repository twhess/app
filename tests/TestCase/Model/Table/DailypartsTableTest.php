<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DailypartsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DailypartsTable Test Case
 */
class DailypartsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DailypartsTable
     */
    public $Dailyparts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dailyparts',
        'app.users',
        'app.vendors',
        'app.urgencies',
        'app.actions',
        'app.servcos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Dailyparts') ? [] : ['className' => DailypartsTable::class];
        $this->Dailyparts = TableRegistry::getTableLocator()->get('Dailyparts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dailyparts);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
