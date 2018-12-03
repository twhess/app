<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UrgenciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UrgenciesTable Test Case
 */
class UrgenciesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UrgenciesTable
     */
    public $Urgencies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.urgencies',
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
        $config = TableRegistry::getTableLocator()->exists('Urgencies') ? [] : ['className' => UrgenciesTable::class];
        $this->Urgencies = TableRegistry::getTableLocator()->get('Urgencies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Urgencies);

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
