<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $userID
 * @property string $Password
 * @property string $Name
 * @property string $Phone
 * @property string $Email
 * @property string $Address
 * @property string $role
 * @property int $authorID
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Password' => true,
        'Name' => true,
        'Phone' => true,
        'Email' => true,
        'Address' => true,
        'role' => true,
        'authorID' => true
    ];
}
