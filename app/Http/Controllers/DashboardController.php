<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return match (auth()->user()->role) {
            'instructor' => redirect()->route('instructor.dashboard'),
            'member' => redirect()->route('member.dashboard'),
            'admin' => redirect()->route('admin.dashboard'),
            default => redirect()->route('login'),
        };
    }
}
