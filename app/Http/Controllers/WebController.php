<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        $title = "Business Setup in Dubai | Company Formation in UAE | Aurega";
        $description = "Your Gateway to Seamless Business Setup in UAE | Discover a seamless business setup experience in UAE with Aurega Group. Your trusted gateway to success.";
        $keywords = "business setup dubai, company formation in dubai, business set up in uae, company setup dubai, business setup uae, business setup services in dubai, business set up companies in uae, business setup in dubai uae";
        $canonical_url = "https://www.auregacs.com";
        return view('web.index', compact('title', 'description', 'keywords', 'canonical_url'));
    }

    function about()
    {
        $title = 'Aurega Corporate Services - About';
        $canonical_url = "https://www.auregacs.com/about";
        $description = "About Aurega Corporate Services in Dubai UAE";
        $keywords = "";
        return view('web.about', compact('title', 'canonical_url', 'description', 'keywords'));
    }
}
