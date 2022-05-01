@extends('layouts.app')

@section('content')
    @foreach ($cvs as $cv)
        <?php print_r($cv); ?>
    @endforeach
@endsection
