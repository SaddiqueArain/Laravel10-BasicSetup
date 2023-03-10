<?php

namespace App\Nova;


use App\Nova\Metrics\AveragePrice;
use App\Nova\Metrics\NewProducts;
use App\Nova\Metrics\ProductsPerDay;
use Faker\Core\Number;
use Faker\Provider\Text;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields;
use Laravel\Nova\Fields\Select;
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
        'id','name','sku'
    ];

//    public static $tableStyle='tight';
//    public static $showColumnBorders=true;
//    public static $clickAction='edit';
//    public static $perPageOptions=[50,100,150];
    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            Slug::make('Slug')->from('name')
                ->required()
                ->hideFromIndex()
                ->showOnPreview()
                ->withMeta(['extraAttributes'=>['readonly'=>true]]),

            Fields\Text::make('Name')
                ->required()
                ->showOnPreview()
                ->textAlign('left'),

            Fields\Markdown::make('Description')
                ->required()
                ->textAlign('left'),

            Currency::make('Price')
                ->required()
                ->showOnPreview()
                ->textAlign('left'),

            Fields\Text::make('Sku')
                ->required()
                ->showOnPreview()
                ->help('Number that retailer use to differentiate product and track inventory level')
                ->textAlign('left'),

            Fields\Number::make('Quantity')
                ->required()
                ->showOnPreview()
                ->textAlign('left'),

            Fields\Boolean::make('Status','is_published'),

            Fields\BelongsTo::make('Brand')->showOnPreview(),




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
        return [
            new NewProducts(),
            new AveragePrice(),
            new ProductsPerDay()
        ];
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
