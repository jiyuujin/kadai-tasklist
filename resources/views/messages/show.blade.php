@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>
        </div>

        <div class="row">
            <p>タイトル: {{ $message->title }}</p>
            <p>メッセージ: {{ $message->content }}</p>

            {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}

            {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
            {!! Form::submit('削除') !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection