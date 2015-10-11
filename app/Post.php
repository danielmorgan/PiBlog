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
    protected $fillable = ['user_id', 'title', 'content'];

	/*
	|--------------------------------------------------------------------------
	| Relationships
	|--------------------------------------------------------------------------
	*/

	/**
	 * Posts belong to the User who authored them.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	/**
	 * Posts have one featured photo.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function featuredPhoto()
	{
		return $this->hasOne(Photo::class, 'id', 'featured_photo_id');
	}
}
