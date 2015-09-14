<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flyscreenopentype Entity.
 */
class Flyscreenopentype extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'opentype_id' => true,
        'flyscreentype_id' => true,
        'opentype' => true,
        'flyscreentype' => true,
        'flyscreenmeshes' => true,
    ];
}
