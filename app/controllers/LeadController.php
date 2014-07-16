<?php

class LeadController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$v = Validator::make(Input::all(), Lead::$createFormRules);
		
		if($v->fails()):
			$badMessage = $v->messages(). ' Please try again with suggested changes.';
			return Redirect::to('/#work')->with('badMessage', $badMessage);
		else:
		
			$name = Input::get('name');
			$email = Input::get('email');
			$website = Input::get('website');
			$need = Input::get('need');
			$extraInfo = Input::get('extraInfo');
			$mailList = Input::get('mailList');
			
			$newLead = Lead::create([
					
					'name' => $name,
					
					'email' => $email,
					
					'website' => $website,
					
					'need' => $need,
					
					'extraInfo' => $extraInfo,
					
					'mailList' => $mailList,
			
			]);
			
			$newLead->save();
			
			if(!isset($newLead->id)):
				$badMessage = "Couldn't save your info at this time. Care to try again?";
				return Redirect::to('/#work')->with('badMessage', $badMessage);
			else:
				$successMessage = "Hey $name, <br/>I should be receiving your info shortly and will respond when able. <br/>Thank you reaching out to me.<br/> -Kev";
				return Redirect::to('/#work')->with('successMessage', $successMessage);
			endif;
		endif;
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
