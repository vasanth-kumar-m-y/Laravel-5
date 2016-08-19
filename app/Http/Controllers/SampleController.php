<?php

namespace App\Http\Controllers;

class SampleController extends Controller{

	public function getIndex()
	{
		return view('pages.home');
	}

	public function getAbout()
	{
		return view('pages.about');
	}

	public function getProjects()
	{
		return view('pages.projects');
	}

	public function getContact()
	{
		return view('pages.contact');
	}
}