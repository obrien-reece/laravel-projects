@extends('layouts.app')

@section('title', 'Push & Stack')

{{--Page specific styles--}}
@push('styles')

@endpush

@section('content')
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="jumbotron">
                <h3 class="display-6"><small>The Push and Stack</small></h3>
                <p class="lead">
                    Blade allows you to push to named stacks which can be
                    rendered somewhere else in another view or layout.
                    This can be particularly useful for specifying any
                    JavaScript libraries required by your child views
                </p>

                <div>
                    <span class="quote">
                        <i>
                            <a href="https://laravel.com/docs/9.x/blade#stacks" target="_blank" class="quote_link">
                                Laravel 9.x Documentation
                                <i class="fa fa-chevron-right"></i>
                            </a>
                        </i>
                    </span>
                </div>

                <br>
                <hr class="my-4">
                <p>You may push to a stack as many times as needed. </p>
            </div>
        </div>
    </div>
@endsection

{{--Page specific scripts--}}
@push('scripts')
    <script src="https://kit.fontawesome.com/5a3d549b53.js" crossorigin="anonymous"></script>
@endpush
