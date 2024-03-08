<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\LogTrait;
use App\Events\TestEvent;
use App\Events\registerUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    use LogTrait;
    public function register()
    {
        $user = new User();
        $user->name = 'Mayur thakur';
        $user->email = 'mayurthakur2010@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
        // Trigger the event
        event(new registerUser($user));
        return "User Register successfully!";
    }
    public function testEvent()
    {
        // Trigger the event
        event(new TestEvent('Mayur Thakur'));
        return "Event Triggered successfully!";
    }

    public function logTrait(){

        $this->log('LogTrait is Working !!');
        $slug =$this->slug(' new max will');

        return 'log save successfully! '.$slug;

    }
}
