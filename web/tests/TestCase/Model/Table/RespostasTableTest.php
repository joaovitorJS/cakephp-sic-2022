<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RespostasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RespostasTable Test Case
 */
class RespostasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RespostasTable
     */
    protected $Respostas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Respostas',
        'app.Usuarios',
        'app.Perguntas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Respostas') ? [] : ['className' => RespostasTable::class];
        $this->Respostas = $this->getTableLocator()->get('Respostas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Respostas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RespostasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RespostasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
