{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <h2 class="mb-4">出勤管理</h2>

    <!-- 出勤記録フォーム -->
    <form action="{{route('attendance.confirm')}}" method="post">
        @csrf

        <!-- 日付選択 -->
        <div class="mb-3">
            <label for="date" class="form-label">日付</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date', date('Y-m-d')) }}" >
        </div>

        <!-- 午前の現場 -->
        <div class="mb-3">
            <label for="morning_site" class="form-label">午前の現場</label>
            <select class="form-control" id="morning_site" name="morning_site" >
                <option value="">選択してください</option>
                <option value="小倉北区">小倉北区</option>

            </select>
        </div>

        <!-- 午後の現場 -->
        <div class="mb-3">
            <label for="afternoon_site" class="form-label">午後の現場</label>
            <select class="form-control" id="afternoon_site" name="afternoon_site" >
                <option value="">選択してください</option>
                <option value="小倉北区">小倉北区</option>
            </select>
        </div>

        <!-- 残業時間（任意） -->
        <div class="mb-3">
            <label for="overtime" class="form-label">残業時間（任意）</label>
            <input type="time" class="form-control" id="overtime" name="overtime" value="{{ old('overtime') }}">
        </div>

        <!-- 送信ボタン -->
        <button type="submit" class="btn btn-primary">記録する</button>
    </form>
</div>
{{-- @endsection --}}
