<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'usuario' => 'Lorem ipsum dolor ',
                'senha' => 'Lorem ipsum dolor sit amet',
                'created' => 1664905514,
                'modified' => 1664905514,
            ],
        ];
        parent::init();
    }
}
