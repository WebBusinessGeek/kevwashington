<?php


class Lead extends Eloquent {

/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'leads';

	protected $fillable = array('name', 'email', 'website', 'need', 'extraInfo', 'mailList');
	
	public $timestamps = true;

}
