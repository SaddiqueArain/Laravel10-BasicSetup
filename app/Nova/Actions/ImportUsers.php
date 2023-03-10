<?php

namespace App\Nova\Actions;

use App\Imports\UsersImport;
use Carbon\Traits\Serialization;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;
use Maatwebsite\Excel\Facades\Excel;
use Stripe\File;


class ImportUsers extends Action
{
    use InteractsWithQueue, Queueable;


    public $onlyOnIndex=true;

    public function name()
    {
        return __('Import Users');
    }

    public function uriKey()
    {
        return 'import-users';
    }

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        Excel::import(new UsersImport(), $fields->file);
        return Action::message('its worked');

    }

    /**
     * Get the fields available on the action.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            \Laravel\Nova\Fields\File::make('file')
        ];
    }
}
