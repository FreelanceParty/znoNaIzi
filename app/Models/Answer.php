<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Answer
 * @property int      $id
 * @property string   $text
 * @property int      $question_id
 * @property bool     $is_correct
 * @property int|NULL $number_in_order
 * @property Carbon   $created_at
 * @property Carbon   $updated_at
 * @package App\Models
 * @method static where(string $column, string $operator, string $value)
 */
class Answer extends Model
{
    /*** @return BelongsTo */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    /*** @return int */
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

    /*** @return int */
    public function getQuestionId(): int
    {
        return $this->question_id;
    }

    /**
     * @param int $questionId
     * @return void
     */
    public function setQuestionId(int $questionId): void
    {
        $this->question_id = $questionId;
    }

    /*** @return bool */
    public function isCorrect(): bool
    {
        return $this->is_correct;
    }

    /**
     * @param bool $isCorrect
     * @return void
     */
    public function setIsCorrect(bool $isCorrect): void
    {
        $this->is_correct = $isCorrect;
    }

    /*** @return int|NULL */
    public function getNumberInOrder(): ?int
    {
        return $this->number_in_order;
    }

    /**
     * @param int|NULL $numberInOrder
     * @return void
     */
    public function setNumberInOrder(?int $numberInOrder): void
    {
        $this->number_in_order = $numberInOrder;
    }

}
