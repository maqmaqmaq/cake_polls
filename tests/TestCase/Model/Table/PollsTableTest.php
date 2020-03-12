<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PollsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PollsTable Test Case
 */
class PollsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PollsTable
     */
    protected $Polls;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Polls',
        'app.Questions',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Polls') ? [] : ['className' => PollsTable::class];
        $this->Polls = TableRegistry::getTableLocator()->get('Polls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Polls);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
