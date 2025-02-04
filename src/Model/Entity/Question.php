<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property string $question_text
 * @property string $answer_a
 * @property string $answer_b
 * @property string $role
 *
 * @property \App\Model\Entity\Response[] $responses
 */
class Question extends Entity
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
    protected array $_accessible = [
        'question_text' => true,
        'answer_a' => true,
        'answer_b' => true,
        'role' => true,
        'responses' => true,
    ];
}
