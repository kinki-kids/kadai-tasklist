@extends('layout.php')

@section('content')

    <h1>id:{{ $task->id }}のタスク詳細ページ</h1>
    
    @if (count($task) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
            </tbody>
        </table>
        {{-- タスク編集フォーム --}}
        {!! link_to_route('messages.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-primary']) !!}
        
        {{-- タスク削除フォーム --}}
        {!! Form::model($task, ['route' => ['tasks.destroy',$task->id], 'method' => 'delete']) !!}
            {!! Form::submit('このタスクを削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    @endif
@endsection('content')