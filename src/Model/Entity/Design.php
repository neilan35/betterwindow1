<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Design Entity.
 */
class Design extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'opentype_id' => true,
        'picture_id' => true,
        'opentype' => true,
        'picture' => true,
        'quoteproducts' => true,
        'formula' => true,
    ];
}
