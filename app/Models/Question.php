<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/***
 *Class Question
 * @property int                 $id
 * @property string              $text
 * @property int                 $test_id
 * @property int|NULL            $number_in_order
 * @property Carbon              $created_at
 * @property Carbon              $updated_at
 * @package App\Models
 * @method static where(string $column, string $operator, string $value)
 */
// TODO add test: BelongsTo

class Question extends Model
{

    /*** @return HasMany */
    public function answers()
    {
        return $this->hasMany(Answer::class, 'question_id');
    }

    /**@return int */
    public function getId(): int
    {
        return $this->id;
    }

    /*** @return string */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return void
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /*** @return int|null */
    public function getNumberInOrder(): ?int
    {
        return $this->number_in_order;
    }

    /**
     * @param int|null $number_in_order
     * @return void
     */
    public function setNumberInOrder(?int $number_in_order): void
    {
        $this->number_in_order = $number_in_order;
    }
}
