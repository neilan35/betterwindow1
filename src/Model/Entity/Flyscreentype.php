<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flyscreentype Entity.
 */
class Flyscreentype extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'type' => true,
        'price' => true,
        'flyscreenmeshes' => true,
        'flyscreenopentypes' => true,
    ];
}
