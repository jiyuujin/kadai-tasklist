@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>メッセージ新規作成ページ</h1>
        </div>

        <div class="row">
            {!! Form::model($message, ['route' => 'messages.store']) !!}

            {!! Form::label('content', 'メッセージ:') !!}
            {!! Form::text('content') !!}

            {!! Form::submit('投稿') !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection