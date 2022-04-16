@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>投稿日時</th>
                    <th>更新日時</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->created_at }}</td>
                    @if($task->updated_at > $task->created_at)
                        <td>{{ $task->updated_at }}</td>
                    @else
                        <td>---</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{-- メッセージ作成フォーム --}}
    {!! link_to_route('tasks.create', '今から何する？', [], ['class' => 'btn btn-primary']) !!}
@endsection
