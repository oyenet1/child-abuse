<?php

namespace App\Http\Livewire;

use App\Models\Area;
use App\Models\Data;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

final class Records extends PowerGridComponent
{
    use ActionButton;

    //Messages informing success/error data is updated.
    public bool $showUpdateMessages = true;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): void
    {
        $this->showCheckBox()
            ->showRecordCount('full')
            ->showPerPage()
            ->showSearchInput()
            ->showExportOption('cases', ['excel', 'csv', 'pdf']);
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Builder
    {
        return Data::query()->join('areas', 'data.area_id', '=', 'areas.id')->select('data.*', 'areas.state as state');
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            // ->addColumn('id')
            ->addColumn('name')
            ->addColumn('age')
            ->addColumn('sex')
            ->addColumn('state')
            ->addColumn('lga')
            ->addColumn('date_occurred_formatted', function (Data $model) {
                return Carbon::parse($model->date_occurred)->format('d M, Y');
            });
        // ->addColumn('created_at_formatted', function (Data $model) {
        //     return Carbon::parse($model->created_at)->format('d/m/Y H:i:s');
        // })
        // ->addColumn('updated_at_formatted', function (Data $model) {
        //     return Carbon::parse($model->updated_at)->format('d/m/Y H:i:s');
        // });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            // Column::add()
            //     ->title('ID')
            //     ->field('id')
            //     ->makeInputRange(),

            Column::add()
                ->title('NAME')
                ->field('name')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('AGE')
                ->field('age')
                ->sortable()
                ->makeInputRange(),

            Column::add()
                ->title('SEX')
                ->field('sex')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('STATE')
                ->field('state')
                ->field('state', 'areas.state')
                ->sortable()
                ->searchable()
                ->makeInputMultiSelect(Area::all(), 'state', 'area_id', ['live-search' => true]),

            Column::add()
                ->title('LGA')
                ->field('lga')
                ->sortable()
                ->searchable()
                ->makeInputText(),

            Column::add()
                ->title('DATE OCCURRED')
                ->field('date_occurred_formatted', 'date_occurred')
                ->searchable()
                ->sortable()
                ->makeInputDatePicker('date_occurred'),

            // Column::add()
            //     ->title('CREATED AT')
            //     ->field('created_at_formatted', 'created_at')
            //     ->searchable()
            //     ->sortable()
            //     ->makeInputDatePicker('created_at'),

            // Column::add()
            //     ->title('UPDATED AT')
            //     ->field('updated_at_formatted', 'updated_at')
            //     ->searchable()
            //     ->sortable()
            //     ->makeInputDatePicker('updated_at'),

        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable this section only when you have defined routes for these actions.
    |
    */

    /**
     * PowerGrid Data action buttons.
     *
     * @return array<int, \PowerComponents\LivewirePowerGrid\Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::add('edit')
               ->caption('Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('data.edit', ['data' => 'id']),

           Button::add('destroy')
               ->caption('Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('data.destroy', ['data' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable this section to use editOnClick() or toggleable() methods.
    | Data must be validated and treated (see "Update Data" in PowerGrid doc).
    |
    */

    /**
     * PowerGrid Data Update.
     *
     * @param array<string,string> $data
     */

    /*
    public function update(array $data ): bool
    {
       try {
           $updated = Data::query()->findOrFail($data['id'])
                ->update([
                    $data['field'] => $data['value'],
                ]);
       } catch (QueryException $exception) {
           $updated = false;
       }
       return $updated;
    }

    public function updateMessages(string $status = 'error', string $field = '_default_message'): string
    {
        $updateMessages = [
            'success'   => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field'   => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field'   => __('Error updating custom field.'),
            ]
        ];

        $message = ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);

        return (is_string($message)) ? $message : 'Error!';
    }
    */
}
