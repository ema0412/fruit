@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
@endsection

<div class="search-form">
    <h2 class="search-form__heading content__heading">商品一覧</h2>
    <div class="search-form_inner">
        <form class="form" action="/products/search" method="post">
            @csrf
            <input class="search-form__keyword-input" type="text" name="keyword" placeholder="商品名で検索" value="{{request('keyword')}}">
            <select class="search-form__price-select" name="product_id">
                <option disabled selected>価格順で表示</option> 
                <option value="1">高い順に表示</option>
                <option value="2">低い順に表示</option>
            </select>
            <input class="search-form__search-btn btn" type="submit" value="検索">
        </form>
    </div>
</div>    