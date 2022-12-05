<?php

namespace App\Http\Controllers;

use App\Enums\LetterType;
use App\Models\Disposition;
use App\Models\Letter;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request): View
    {
        $todayIncomingLetter = Letter::incoming()->today()->count();
        $todayOutgoingLetter = Letter::outgoing()->today()->count();
        $todayDispositionLetter = Disposition::today()->count();
        $todayLetterTransaction = $todayIncomingLetter + $todayOutgoingLetter + $todayDispositionLetter;

        $yesterdayIncomingLetter = Letter::incoming()->yesterday()->count();
        $yesterdayOutgoingLetter = Letter::outgoing()->yesterday()->count();
        $yesterdayDispositionLetter = Disposition::yesterday()->count();
        $yesterdayLetterTransaction = $yesterdayIncomingLetter + $yesterdayOutgoingLetter + $yesterdayDispositionLetter;

        $greeting = 'evening';
        $currentHour = now()->hour;
        if ($currentHour < 4) {
            $greeting = 'night';
        } elseif ($currentHour < 11) {
            $greeting = 'morning';
        } elseif ($currentHour < 15) {
            $greeting = 'afternoon';
        } elseif ($currentHour > 20) {
            $greeting = 'night';
        }

        return view('pages.dashboard', [
            'greeting' => __('dashboard.greeting.' . $greeting, ['name' => auth()->user()->name]),
            'currentDate' => Carbon::now()->isoFormat('dddd, D MMMM YYYY'),
            'todayIncomingLetter' => $todayIncomingLetter,
            'todayOutgoingLetter' => $todayOutgoingLetter,
            'todayDispositionLetter' => $todayDispositionLetter,
            'todayLetterTransaction' => $todayLetterTransaction,
            'activeUser' => User::active()->count(),
            'percentageIncomingLetter' => $this->calculatePercentage($todayIncomingLetter, $yesterdayIncomingLetter),
            'percentageOutgoingLetter' => $this->calculatePercentage($todayOutgoingLetter, $yesterdayOutgoingLetter),
            'percentageDispositionLetter' => $this->calculatePercentage($todayDispositionLetter, $yesterdayDispositionLetter),
            'percentageLetterTransaction' => $this->calculatePercentage($todayLetterTransaction, $yesterdayLetterTransaction),
        ]);
    }

    private function calculatePercentage($today, $yesterday): float
    {
        if ($today < $yesterday) {
            $total = ($yesterday - $today) / $yesterday * -100;
        } elseif ($today > $yesterday) {
            $total = ($today - $yesterday) / $today * 100;
        } else {
            $total = 0;
        }
        return round($total, 2);
    }

    public function profile(Request $request): View
    {
        return view('pages.profile');
    }

    public function settings(Request $request): View
    {
        return view('pages.setting');
    }
}
