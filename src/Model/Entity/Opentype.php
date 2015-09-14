<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Opentype Entity.
 */
class Opentype extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'itemtype_id' => true,
        'name' => true,
        'itemtype' => true,
        'designs' => true,
        'flyscreenopentypes' => true,
    ];
}
