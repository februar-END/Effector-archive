@extends("layouts.layouts")

@section("content")

<h1>エフェクター詳細</h1>
<table class="table table-striped">
    <tr>
        <th>名前</th>
        <td>{{ $effector->name}}</td>
    </tr>
    <tr>
        <th>メーカー</th>
        <td>{{ $effector->maker}}</td>
    </tr>
    <tr>
        <th>カテゴリー</th>
        <td>{{ $effector->category}}</td>
    </tr>
    <tr>
        <th>発売年月日</th>
        <td>{{ $effector->year}}年{{$effector->month}}月{{$effector->date}}日</td>
    </tr>
    <tr>
        <th>金額</th>
        <td>{{ $effector->price}}円</td>
    </tr>
    <tr>
        <th>詳細</th>
        <td>{{ $effector->memo}}</td>
    </tr>

</table>
<td> <a href="{{route('effectors.index')}}" class="btn btn-secondary">一覧へ</a></td>
@endsection
