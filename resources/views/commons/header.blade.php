<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">Tasklist</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav">
                @if(Auth::check())
                    <ul class="navbar-nav mr-auto">
                        {{--新規タスク作成ページヘのリンク --}}
                        <li class="nav-item">{!! link_to_route('tasks.create', '新規タスクの作成', [], ['class' => 'nav-link']) !!}</li>
                    </ul>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-item">{{ Auth::user()->name }}</li>
                        {{-- ログアウトへのリンク --}}
                        <li class="dropdown-item"> {!! link_to_route('logout.get', 'ログアウト') !!} </li>
                    </ul>
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li>{!! link_to_route('signup.get', 'ユーザ登録はこちら！', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li>{!! link_to_route('login.get', 'ログインはこちら！', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>
