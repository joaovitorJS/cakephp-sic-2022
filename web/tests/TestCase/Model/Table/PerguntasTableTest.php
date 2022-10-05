<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PerguntasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PerguntasTable Test Case
 */
class PerguntasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PerguntasTable
     */
    protected $Perguntas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Perguntas',
        'app.Usuarios',
        'app.Respostas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Perguntas') ? [] : ['className' => PerguntasTable::class];
        $this->Perguntas = $this->getTableLocator()->get('Perguntas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Perguntas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PerguntasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PerguntasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
