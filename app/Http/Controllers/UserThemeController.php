<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalDealerTheme;
use App\Models\UserThemePreference;

class UserThemeController extends Controller
{

    public function selectTheme()
{
    $themes = PersonalDealerTheme::all();
    $selectedTheme = UserThemePreference::where('user_id', auth()->id())->first()->theme_id ?? null;
    return view('theme::theme.select', compact('themes', 'selectedTheme'));
}

    public function storeTheme(Request $request)
    {
        $request->validate([
            'selected_theme' => 'required|exists:personal_dealer_themes,id',
        ]);

        UserThemePreference::updateOrCreate(
            ['user_id' => auth()->id()],
            ['theme_id' => $request->selected_theme]
        );

        return redirect()->back()->with('success', 'Theme selected successfully!');
    }
}
