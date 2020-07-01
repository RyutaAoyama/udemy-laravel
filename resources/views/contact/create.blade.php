@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    createです
                    <form action="{{route('contact.store')}}" method="POST">
                    @csrf
                    氏名
                    <input type="text" name="your_name">
                    <br>
                    件名
                    <input type="text" name="title">
                    <br>
                    メールアドレス
                    <input type="email" name="email">
                    <br>
                    ホームページ
                    <input type="url" name="url">
                    <br>
                    性別
                    <input type="radio" name="gender" value="0">男性 </input>
                    <input type="radio" name="gender" value="1">女性 </input>
                    <br>
                    年齢
                    <select name="age" id="">
                    <option value="">選択して下さい</option>
                    <option value="1">〜10歳</option>
                    <option value="2">11〜20歳</option>
                    <option value="3">21〜30歳</option>
                    <option value="4">31〜40歳</option>
                    <option value="5">41〜50歳</option>
                    <option value="6">60〜歳</option>
                    </select>
                    <br>
                    お問い合わせ<br>
                    <textarea name="contact"></textarea>
                    <br>
                    <input type="checkbox" name="caution" value="1">注意事項に同意する</input>
                    <br>
                    <input type="submit" class="btn btn-info" value="登録する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
