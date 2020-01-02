@extends(backpack_view('layouts.top_left'))

@section('header')
  <div class="container-fluid">
    <h2>
      <span class="text-capitalize">LetStuffGo</span>
      <small id="datatable_info_stack">A Buy and Sell Application for Hochschule Fulda by G6 Group of GDSD course 2019/20</small>
    </h2>
  </div>
@endsection

@section('content')
    <div class="jumbotron mb-2">

        <h1 class="display-3">Welcome to LetStuffGo!</h1>

    </div>

@endsection

@section('header')
  <div class="container-fluid">
    <h2>
      <span class="text-capitalize">Products</span>
      <small id="datatable_info_stack"><div class="dataTables_info" id="crudTable_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></small>
    </h2>
  </div>
@endsection

@section('content')
<!-- Default box -->
  <div class="row">

    <!-- THE ACTUAL CONTENT -->
    <div class="col-md-12">
      <div class="">

        <div class="row mb-0">
          <div class="col-6">
            <div class="hidden-print with-border">
              <a href="{{ backpack_url() }}/product/create" class="btn btn-primary" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-plus"></i> Add product</span></a>

            </div>
            
          </div>
          <div class="col-6">
              <div id="datatable_search_stack" class="float-right"></div>
          </div>
        </div>

        {{-- Backpack List Filters --}}
        @if ($crud->filtersEnabled())
          @include('crud::inc.filters_navbar')
        @endif

        <div class="overflow-hidden mt-2">

        <table id="crudTable" class="bg-white table table-striped table-hover nowrap rounded shadow-xs border-xs" cellspacing="0">
            <thead>
              <tr>
                {{-- Table columns --}}
                @foreach ($crud->columns() as $column)
                  <th
                    data-orderable="{{ var_export($column['orderable'], true) }}"
                    data-priority="{{ $column['priority'] }}"
                     {{--

                        data-visible-in-table => if developer forced field in table with 'visibleInTable => true'
                        data-visible => regular visibility of the field
                        data-can-be-visible-in-table => prevents the column to be loaded into the table (export-only)
                        data-visible-in-modal => if column apears on responsive modal
                        data-visible-in-export => if this field is exportable
                        data-force-export => force export even if field are hidden

                    --}}

                    {{-- If it is an export field only, we are done. --}}
                    @if(isset($column['exportOnlyField']) && $column['exportOnlyField'] === true)
                        data-visible="false"
                        data-visible-in-table="false"
                        data-can-be-visible-in-table="false"
                        data-visible-in-modal="false"
                        data-visible-in-export="true"
                        data-force-export="true"

                    @else

                        data-visible-in-table="{{var_export($column['visibleInTable'] ?? false)}}"
                        data-visible="{{var_export($column['visibleInTable'] ?? true)}}"
                        data-can-be-visible-in-table="true"
                        data-visible-in-modal="{{var_export($column['visibleInModal'] ?? true)}}"
                        @if(isset($column['visibleInExport']))
                            @if($column['visibleInExport'] === false)
                            data-visible-in-export="false"
                            data-force-export="false"
                            @else
                            data-visible-in-export="true"
                            data-force-export="true"
                            @endif
                        @else
                            data-visible-in-export="true"
                            data-force-export="false"
                        @endif
                    @endif
                    >
                    {!! $column['label'] !!}
                  </th>
                @endforeach

                @if ( $crud->buttons()->where('stack', 'line')->count() )
                  <th data-orderable="false" data-priority="{{ $crud->getActionsColumnPriority() }}" data-visible-in-export="false">{{ trans('backpack::crud.actions') }}</th>
                @endif
              </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
              <tr>
                {{-- Table columns --}}
                @foreach ($crud->columns() as $column)
                  <th>{!! $column['label'] !!}</th>
                @endforeach

                @if ( $crud->buttons()->where('stack', 'line')->count() )
                  <th>{{ trans('backpack::crud.actions') }}</th>
                @endif
              </tr>
            </tfoot>
          </table>

          @if ( $crud->buttons()->where('stack', 'bottom')->count() )
          <div id="bottom_buttons" class="hidden-print">
            @include('crud::inc.button_stack', ['stack' => 'bottom'])

            <div id="datatable_button_stack" class="float-right text-right hidden-xs"></div>
          </div>
          @endif

        </div><!-- /.box-body -->

      </div><!-- /.box -->
    </div>

  </div>

@endsection

@section('after_styles')
  <!-- DATA TABLES -->
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('packages/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css') }}">
  <link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/form.css') }}">
  <link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/list.css') }}">

  <!-- CRUD LIST CONTENT - crud_list_styles stack -->
  @stack('crud_list_styles')
@endsection

@section('after_scripts')
	@include('crud::inc.datatables_logic')

  <script src="{{ asset('packages/backpack/crud/js/crud.js') }}"></script>
  <script src="{{ asset('packages/backpack/crud/js/form.js') }}"></script>
  <script src="{{ asset('packages/backpack/crud/js/list.js') }}"></script>

  <!-- CRUD LIST CONTENT - crud_list_scripts stack -->
  @stack('crud_list_scripts')
@endsection
