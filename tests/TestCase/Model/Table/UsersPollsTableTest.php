<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersPollsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersPollsTable Test Case
 */
class UsersPollsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersPollsTable
     */
    protected $UsersPolls;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.UsersPolls',
        'app.Polls',
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
        $config = TableRegistry::getTableLocator()->exists('UsersPolls') ? [] : ['className' => UsersPollsTable::class];
        $this->UsersPolls = TableRegistry::getTableLocator()->get('UsersPolls', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UsersPolls);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
