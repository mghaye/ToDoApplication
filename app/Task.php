<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

	protected $guarded = [];

	/**
	 * A task is owned by a user
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function user()
	{
		return $this->belongsTo('App\User');
	}


}
