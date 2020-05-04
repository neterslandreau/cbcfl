@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-5 pt-5">
        <div class="col-xs-12 col-md-12">
            <button type="button" class="btn btn-primary" id="toggle-panels">User Admininistration</button>
            <button type="button" class="btn btn-primary" id="toggle-panels">Ministry Administration</button>
            <button type="button" class="btn btn-primary" id="toggle-panels">Blog Administration</button>
        </div>

        <div id="site-configuration" style="display:none;">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu Types</div>
                    <div class="panel-body" style="overflow: scroll;">
{{--                        @include('partials.admin-types')--}}
                    </div>
                </div>
            </div>
        </div>

        <div id="site-projects" style="display:block;">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu Items</div>

                    <div class="panel-body" style="overflow: scroll;">
{{--                        @include('partials.admin-items')--}}
                    </div>
                </div>
            </div>
        </div>

        <div id="site-projects" style="display:block;">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu Items</div>
                    <div class="panel-body" style="overflow: scroll;">
{{--                        @include('partials.admin-config')--}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
