@extends('layouts.app')

@section('content')

    <div class="container pt-5 mt-5">

        <div class="col-12" style="text-align:center;color:darkred">

            <div class="icon"><i class="fa fa-praying-hands fa-5x"></i></div>
            <h4 class="title">Prayer Team</h4>

        </div>

        <div class="row">
            <div class="col-sm">

                <img class="col-12" src="/img/prayer-team.jpg">

            </div>

            <div class="col-sm">
                <p class="description">
                    Our Prayer Team meets weekly before Sunday morning service to gather and pray for our
                    church, our community and our country. If you would like to join these prayer warriors, please sign up
                    below.
                </p>

                <form>

                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                        <div class="col">
                            <input type="submit" class="form-control">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
