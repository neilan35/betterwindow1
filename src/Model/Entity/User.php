<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'email' => true,
        'password' => true,
        'customer_id' => true,
        'employee_id' => true,
        'customer' => true,
        'employee' => true,
    ];



    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
