@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>メッセージ新規作成ページ</h1>
        </div>

        <div class="row">
            {!! Form::model($message, ['route' => 'messages.store']) !!}

            <div class="form-group">
                {!! Form::label('title', 'タイトル:') !!}
                <div class="form-control" style="border: none">
                    {!! Form::text('title') !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('content', 'メッセージ:') !!}
                <div class="form-control" style="border: none">
                    {!! Form::text('content') !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('投稿') !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>

@endsection