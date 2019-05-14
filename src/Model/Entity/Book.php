<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $isbn
 * @property string|null $Title
 * @property string|null $Genre
 * @property \Cake\I18n\FrozenTime $PublishYear
 * @property float $Price
 * @property int $AuthorID
 */
class Book extends Entity
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
        'isbn' => true,
        'Title' => true,
        'Genre' => true,
        'PublishYear' => true,
        'Price' => true,
        'AuthorID' => true
    ];
}
