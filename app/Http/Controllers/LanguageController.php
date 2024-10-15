<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    //
    public function index()
    {
        return view('choose-language');
    }

    public function store(Request $request)
    {
        $language = $request->input('language');
        $rememberMe = $request->has('remember-me');

        // Store the language preference in the session
        session(['language' => $language]);

        if ($rememberMe) {
            // Store the language preference in a cookie
            $cookie = cookie('language', $language, 60*24*30); // 30 days
            return redirect('/show-saved- language')->with('success', 'تم حفظ اللغة بنجاح')->cookie($cookie);
        }

        return redirect()->back()->with('success', 'لم يتم تذكرني');

}
public function showSavedLanguage(Request $request)
{
    // Try to retrieve the language from the cookie
    $language = $request->cookie('language', 'لم يتم حفظ أي لغة'); // Default if no language cookie is found

    // Return the view and pass the language to it
    return view('show-saved- language', compact('language'));
}
}
