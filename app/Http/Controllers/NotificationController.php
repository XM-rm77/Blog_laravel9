<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function index()
    {
        $user_id = auth()->user()->id;
        $notifications = Notification::where('sent_to_user_id', $user_id)->get();
        return view(
            'notifications.index',
            compact('notifications')
        );
    }
}
