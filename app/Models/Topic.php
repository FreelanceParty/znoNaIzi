<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 *Class Topic
 * @property int      $id
 * @property string   $title
 * @property int      $chapter_id
 * @property string   $content
 * @property int|NULL $number_in_order
 * @property Carbon   $created_at
 * @property Carbon   $updated_at
 * @package App\Models
 * @method static where(string $column, string $operator, string $value)
 */
class Topic extends Model
{
	/*** @return BelongsTo */
	public function chapter(): BelongsTo
	{
		return $this->belongsTo(Chapter::class);
	}
    /*** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /*** @return string */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /*** @return int */
    public function getChapterId(): int
    {
        return $this->chapter_id;
    }

    /**
     * @param int $chapterId
     * @return void
     */
    public function setChapterId(int $chapterId): void
    {
        $this->chapter_id = $chapterId;
    }

    /*** @return string */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return void
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
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
