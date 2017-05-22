<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersRolesSettingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersRolesSettingsTable Test Case
 */
class UsersRolesSettingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersRolesSettingsTable
     */
    public $UsersRolesSettings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_roles_settings',
        'app.users_roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersRolesSettings') ? [] : ['className' => 'App\Model\Table\UsersRolesSettingsTable'];
        $this->UsersRolesSettings = TableRegistry::get('UsersRolesSettings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersRolesSettings);

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
