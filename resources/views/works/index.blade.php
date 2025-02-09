{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <h2 class="mb-4">現場名登録画面</h2>

    <!-- 現場登録フォーム -->
    <form action="{{route('works.confirm')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="site_name" class="form-label">現場名を記入してください<br></label>
            <input type="text" class="form-control" id="site_name" name="site_name" value="{{ old('site_name') }}">
        </div>

        <!-- 確認ボタン -->
        <button type="submit" class="btn btn-primary">確認画面へ</button>
    </form>

    <h2 class="mb-4">登録現場リスト</h2>
    @foreach($works as $work)
       <tr>
        <td>{{$work->name}}</td>
        <td>
            <form action="{{route('works.toggleStatus',$work->id)}}" method="POST">
                @csrf
                <button type="submit" class="btn {{ $work->status === 'active' ? 'btn-success' : 'btn-secondary'}}">
                    {{ $work->status === 'active' ? 'アクティブ' : '非アクティブ'}}
                </button>

            </form>
        </td>
       </tr>
    @endforeach

</div>
{{-- @endsection --}}
