@extends(env('THEME').'.layouts.site')

@section('menu')
    {!! $menu !!}
@endsection

@section('slider')
    {!! $sliders !!}
@endsection

@section('content')
    {!! $content !!}
@endsection



