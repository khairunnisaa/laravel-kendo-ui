@extends('layouts.app')

@section('content')
    <ul>
        <li>
            <a href="{{ route('kendo-ui.introduction') }}">Introduction</a>
        </li>
        <li>
            Widgets
            <ul>
                <li>
                    Data Management
                    <ul>
                        <li>
                            Grid
                            <ul>
                                <li>
                                    Overview
                                    <ul>
                                        <li>
                                            Getting Started
                                            <ul>
                                                <li>
                                                    Initialized The Grid
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('kendo-ui.widgets.data-management.grid.overview.getting-started.initialized-the-grid.from-an-empty-div.index') }}">From an Empty div</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('kendo-ui.widgets.data-management.grid.overview.getting-started.initialized-the-grid.from-an-html-table.index') }}">From an HTML Table</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
@endsection
