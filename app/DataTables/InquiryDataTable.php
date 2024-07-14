<?php

namespace App\DataTables;

use App\Models\Inquiry;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class InquiryDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            // ->addColumn('action', 'inquiry.action')
            ->addColumn('action', function(Inquiry $inquiry) {
                return '<span style="display:flex">
                <a href="' . route('admin.inquiry.show', $inquiry->id) . '" class="flex items-center mr-3 text-theme-23 " style="padding-right:8px; color:#997a00;"><svg  class="h-4 w-4 " xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />  <circle cx="12" cy="12" r="3" /></svg> </a>
                 </span>';
            })
            ->editColumn('inquiry_solve' , function(Inquiry $inquiry){
           
                if ($inquiry->inquiry_solve == 'Complate') {
                    
                   $response = '<span class="badge  bg-label-success">Complated</span>';  
                }
                else if ($inquiry->inquiry_solve == 'Pending') {
                    $response = '<span class="badge  bg-label-warning">Pending</span>';
                }
                else {
                    $response = "";
                }

                return $response;
        })
        ->rawColumns(['action','inquiry_solve']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Inquiry $model): QueryBuilder
    {
        // dd($model->newQuery());
        return $model->newQuery()->orderBy('created_at','DESC');
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('inquiry-table')
                    ->columns($this->getColumns())
                    // ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle();
                    // ->buttons([
                    //     Button::make('excel'),
                    //     Button::make('csv'),
                    //     Button::make('pdf'),
                    //     Button::make('print'),
                    //     Button::make('reset'),
                    //     Button::make('reload')
                    // ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
      
            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            Column::make('phone'),
            Column::make('services'),
            Column::make('message'),
            // Column::make('created_at'),
            // Column::make('updated_at'),
            Column::make('inquiry_solve')->title('Inquiry Solve'),
            Column::make('created_at')->title('Create'),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Inquiry_' . date('YmdHis');
    }
}
