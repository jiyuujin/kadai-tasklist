@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>id: {{ $message->id }} のメッセージ編集ページ</h1>
        </div>

        <div class="row">
            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}

            {!! Form::label('title', 'タイトル:') !!}
            {!! Form::text('title') !!}

            {!! Form::label('content', 'メッセージ:') !!}
            {!! Form::text('content') !!}

            {!! Form::submit('更新') !!}

            {!! Form::close() !!}
        </div>
    </div>
    
@endsection