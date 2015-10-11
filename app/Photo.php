<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Photo extends Model
{
	/**
	 * Fields available for mass assignment.
	 *
	 * @var array
	 */
	protected $fillable = ['filename'];

	public function upload(UploadedFile $file)
	{

	}
}
