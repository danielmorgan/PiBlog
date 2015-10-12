<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Carbon\Carbon;
use File;
use Image;
use Session;

/**
 * @todo Create a Form Request object to handle validation of photos.
 */
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
		$datetime = Carbon::now();
		$path = public_path('photo' . DIRECTORY_SEPARATOR . $datetime->year);
		$filename = $datetime->timestamp . '.' . $file->getClientOriginalExtension();

		if (!File::isDirectory($path)) {
			File::makeDirectory($path, 0777, true, true);
		}

		if (!Image::make($file)->save($path . DIRECTORY_SEPARATOR . $filename)) {
			Session::flash('error', 'There was a problem uploading the photo');
			return false;
		}

		Session::flash('notice', 'Photo uploaded successfully');
		return $datetime->year . '/' . $filename;
	}
}
