@extends('layouts.app')
@section('content')

    <div class="container">
        <a href="{{ url('create') }}">Create  note</a>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">My notes</div>
                    <div class="panel-body">
                           
                        <ul class="list-group">
                            @foreach($notes as $note)
                                <li class="list-group-item">
                                    <a href="{{ url('edit', [$note->slug]) }}">
                                        {{ $note->title }}</a>
                                        <br>

                                        {{$note->body}}
                                   
                                    <br>
                                    <span class="pull-right">{{ $note->updated_at->diffForHumans() }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection