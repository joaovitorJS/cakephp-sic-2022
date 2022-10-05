<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Resposta Entity
 *
 * @property int $id
 * @property string $resposta
 * @property int $usuario_id
 * @property int $pergunta_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Pergunta $pergunta
 */
class Resposta extends Entity
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
        'resposta' => true,
        'usuario_id' => true,
        'pergunta_id' => true,
        'created' => true,
        'modified' => true,
        'usuario' => true,
        'pergunta' => true,
    ];
}
