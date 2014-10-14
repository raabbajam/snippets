<?php

class Snippet extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		'body' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['body', 'syntax', 'theme'];

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function getNewPath()
	{
		$length = 5;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    $this->path = $randomString;
	    return $randomString;
	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	public function getDates()
	{
		return ['created_at', 'updated_at'];
	}

}