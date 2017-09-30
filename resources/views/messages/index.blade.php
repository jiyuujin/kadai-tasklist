@extends('layouts.app')

@section('content')

    <div class="content">
        <h1>メッセージ一覧</h1>
        <div class="pull-right">
            <a href="{{ URL::route('messages.create') }}" class="btn btn-primary">新規</a>
        </div>

        @foreach ($messages as $message)
            <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->content }}</li>
        @endforeach
    
        <!--
        @if (count($messages) > 0)
            <ul>
                @foreach ($messages as $message)
                    <li>{{ $message->content }}</li>
                @endforeach
            </ul>
        @endif
        -->
    </div>

@endsection