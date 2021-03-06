@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>メッセージ一覧</h1>
        <div class="pull-right">
            <a href="{{ URL::route('messages.create') }}" class="btn btn-primary">新規</a>
        </div>

        <!--
        @foreach ($messages as $message)
            <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->content }}</li>
        @endforeach
        -->
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>タイトル</th>
                        <th>メッセージ</th>
                        <th>作成日時</th>
                        <th>更新日時</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->id }}</td>
                            <td>{{ $message->title }}</td>
                            <td>{{ $message->content }}</td>
                            <td>{{ $message->created_at }}</td>
                            <td>{{ $message->updated_at }}</td>
                            <td>
                                <a href="{{ URL::route('messages.edit', $message->id) }}" class="btn btn-default">編集</a>
                                <a href="{{ URL::route('messages.destroy', $message->id) }}" class="btn btn-danger">削除</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
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