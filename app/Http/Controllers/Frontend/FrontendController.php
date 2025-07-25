<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $data['title'] = 'Welcome to BabyBloom';
        return view('frontend.home', compact('data'));
    }

    public function shop()
    {
        $data['title'] = 'Shop - BabyBloom';
        return view('frontend.shop', compact('data'));
    }

    public function contact()
    {
        $data['title'] = 'Contact Us - BabyBloom';
        return view('frontend.contact', compact('data'));
    }

    public function faq()
    {
        $data['title'] = 'Frequently Asked Questions - BabyBloom';
        return view('frontend.faq', compact('data'));
    }

    public function shippingInfo()
    {
        $data['title'] = 'Shipping Information - BabyBloom';
        return view('frontend.shipping_info', compact('data'));
    }

    public function returnPolicy()
    {
        $data['title'] = 'Return Policy - BabyBloom';
        return view('frontend.return_policy', compact('data'));
    }

    public function sizeGuide()
    {
        $data['title'] = 'Size Guide - BabyBloom';
        return view('frontend.size_guide', compact('data'));
    }

    public function login()
    {
        $data['title'] = 'Login - BabyBloom';
        return view('frontend.login', compact('data'));
    }

    public function register()
    {
        $data['title'] = 'Register - BabyBloom';
        return view('frontend.register', compact('data'));
    }
    public function dashboard()
    {
        $data['title'] = 'Dashboard - BabyBloom';
        return view('frontend.dashboard', compact('data'));
    }
    public function notFound()
    {
        return view('frontend.404');
    }
}
