<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $usuario
 * @property string $senha
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Pergunta[] $perguntas
 * @property \App\Model\Entity\Resposta[] $respostas
 */
class Usuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nome' => true,
        'usuario' => true,
        'senha' => true,
        'created' => true,
        'modified' => true,
        'perguntas' => true,
        'respostas' => true,
    ];

    // Função que trata da criptografia de senha
    protected function _setSenha(string $senha) {
        if (strlen($senha) > 0) {
            $senhaHasher = new DefaultPasswordHasher();
            return $senhaHasher->hash($senha);
        }
    }
}
