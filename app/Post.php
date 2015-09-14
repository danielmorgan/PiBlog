<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
	 * Fields available for mass assignment.
	 *
	 * @var array
	 */
    protected $fillable = ['title', 'content'];

	/**
	 * Posts belong to the User who authored them.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function users()
	{
		return $this->belongsTo(User::class);
	}
}
