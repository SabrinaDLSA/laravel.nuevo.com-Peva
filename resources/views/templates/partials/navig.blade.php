@if (Auth::check())
    @include('templates.partials.log-nav')
@else
    @include('templates.partials.navigate')
@endif
