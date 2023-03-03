<?php

namespace App\Nova;

use App\Models\ProductUser;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Product>
     */
    public static $model = \App\Models\Product::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id','name', 'description','sku'
    ];

    public static $tableStyle = 'tight';
    public static $showColumnBorders = true;
    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
           Slug::make('Slug')
               ->from('name')
               ->required()
               ->hideFromIndex()
               ->textAlign('left')
               ->withMeta(['extraAttributes' => [
                   'readonly' => true
               ]]),
           Text::make('Name')
               ->required()
               ->showOnPreview()
               ->placeholder('Product Name')
               ->textAlign('left')
               ->sortable(),
            Markdown::make('Description')
                ->required()
                ->showOnPreview(),
            Currency::make('Price')
                ->required()
                ->showOnPreview()
                ->textAlign('left'),
            Text::make('Sku')
                ->required()
                ->textAlign('left')
            ->help('number that retailer use to check inventory'),
            Number::make('Quantity')
                ->required()
                ->showOnPreview()
                ->textAlign('left'),
              Boolean::make('Status','is_published')
                  ->required()
                  ->showOnPreview()
                  ->textAlign('left'),

            BelongsTo::make('brand')
                ->sortable()
                ->showOnPreview(),

            BelongsToMany::make('Users')
//            Select::make('User')->options(\App\Models\User::pluck('name')),

        ];
    }



    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
