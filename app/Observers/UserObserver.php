<?php

namespace App\Observers;

use App\Models\User;
use Laravel\Nova\Notifications\NovaNotification;

class UserObserver
{
    /**
     * Handle the User "created" event.
     */
    public function created(User $user): void
    {
        $this->UserNotification($user,'New User ', 'success');
    }

    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        $this->UserNotification($user,'Update User ', 'info');
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        $this->UserNotification($user,'Delete User ', 'error');
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        $this->UserNotification($user,'Restored User ', 'info');
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        $this->UserNotification($user,'Force Delete User ', 'error');
    }

    /**
     * @param User $user
     * @return void
     */
    public function UserNotification($user, $message, $type): void
    {
        foreach (User::all() as $u) {
            $u->notify(NovaNotification::make()
                ->message($message.' '.$user->name)
                ->icon('user')
                ->type($type));
        }
    }
}
