<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	function home()
	{
		return view('home');
	}

	function contact()
	{
		return view('contact');
	}

	function services()
	{
		return view('services');
	}

	function portfolio()
	{
		return view('portfolio');
	}

	function contactForm(Request $request) {
		return view('contact', ['data' => $request]);
	}
}
