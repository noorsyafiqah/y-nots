<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bookstore Entity
 *
 * @property int $bookStoreID
 * @property string|null $branch
 * @property string|null $name
 * @property int $totalBranch
 */
class Bookstore extends Entity
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
        'branch' => true,
        'name' => true,
        'totalBranch' => true
    ];
}
