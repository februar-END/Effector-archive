@extends("layouts.app")

@section("content")
    <h1>エフェクターデータの修正</h1>
    
    <form method="POST" action="/effectors/{{$effector->id}}">
        @csrf
        @method("PATCH")
        <div class="form-group">
            <label>名前</label>
                <input type="text" name="name" class="form-control" value="{{$effector->name}}">
        </div>
        
        <div class="form-group">
            <label>メーカー</label>
                <input type="text" name="maker" class="form-control" value="{{$effector->maker}}">
        </div>
        
        <div class="form-group">
            <label for="product-name">カテゴリ</label>
            <select class="custom-select" name="category" value="{{$effector->category}}">
                @foreach(App\Models\Effector::$categories as $category)
                    <option value="{{$category}}">{{$category}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label>発売年</label>
                <input type="number" name="year" class="form-control" value="{{$effector->year}}">
        </div>
        
        <div class="form-group">
            <label>発売月</label>
                <input type="number" name="month" class="form-control" value="{{$effector->month}}">
        </div>

        <div class="form-group">
            <label>発売日</label>
                <input type="number" name="date" class="form-control" value="{{$effector->date}}">
        </div>

        <div class="form-group">
            <label for="product-name">金額</label>
            <input type="number" name="price" id="product-name" class="form-control" value="{{$effector->price}}">
        </div>
         
        <div class="form-grouup">
            <label for="product-name">メモ</label>
            <input type="text" name="memo" class="form-control" value="{{$effector->memo}}">
        </div>
        
        <button type="submit" class="btn btn-primary">送信</button>
        <a href="{{route('effectors.index')}}" class="btn btn-secondary">戻る</a>
    </form>
    @endsection