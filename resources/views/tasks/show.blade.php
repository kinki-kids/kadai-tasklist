@extends('layouts.app')

@section('content')
    @if(Auth::id() == $task->user_id)
        <h1>id:{{ $task->id }}のタスク詳細ページ</h1>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
            </tbody>
        </table>
        {{-- タスク編集フォーム --}}
        {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-light']) !!}
        
        {{-- タスク削除フォーム --}}
        {!! Form::model($task, ['route' => ['tasks.destroy',$task->id], 'method' => 'delete']) !!}
            {!! Form::submit('このタスクを削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    @endif
@endsection('content')