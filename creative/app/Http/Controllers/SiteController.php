<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	//return home view
	function home()
	{
		return view('home');
	}

	//return contact view
	function contact()
	{
		return view('contact');
	}

	//return service view
	function services()
	{
		return view('services');
	}

	//return portfolio view
	function portfolio()
	{
		return view('portfolio');
	}

	//display submitted contact form values
	function contactForm(Request $request) {
		return view('contact', ['data' => $request]);
	}
}
