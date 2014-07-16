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




public static $createFormRules = [
				
				'name' => 'required',
				
				'email' => 'required|email|unique:leads',
				
				'website' => 'url',
				
				'need' => 'required|in:leadGen,custAcq,prodDev,reDesign,teach,other',
				
				'extraInfo' => 'required_if:need,other',
				
				'mailList' => 'required|boolean'
				
				
	];
	
}