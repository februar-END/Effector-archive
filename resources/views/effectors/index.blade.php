@extends('layouts.layouts')

@section('content')
<h1>エフェクター</h1>
<a href="{{route('effectors.create')}}" class="btn btn-success">登録</a>
<table class="table">
    <tr>
        <th>発売日</th>
        <th>名前</th>
        <th>メーカー</th>
        <th>カテゴリー</th>
        <th>金額</th>
        <th>リンク</th>
    </tr>
    @foreach($effectors as $effector)
    <tr>
        <td> {{$effector->year}}年{{$effector->month}}月{{$effector->date}}日</td>
        <td> {{$effector->name}}</td>
        <td> {{$effector->maker}}</td>
        <td> {{$effector->category}}</td>
        <td> {{$effector->price}}</td>
        <td> 
            <a href="{{route('effectors.edit',$effector)}}" class="btn btn-warning">編集</a>
            <a href="{{route('effectors.show',$effector)}}" class="btn btn-info">詳細</a>
            <form action="/effectors/{{$effector->id}}" method="POST" style="display:inline">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>削除</button>
            </form>
        </td>
        </tr>
    @endforeach
</table>


@endsection