@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/products.css')}}">
@endsection

<a class="header__link" href="/products/register">+商品追加</a>

<div class="products">
  <h2 class="products__heading content__heading">商品一覧</h2>
  <div class="products__inner">
    <form class="search-form" action="/search" method="get">
      @csrf
      <input class="search-form__keyword-input" type="text" name="keyword" placeholder="商品名で検索" value="{{request('keyword')}}">
      <div class="search-form__price">
        <select class="search-form__price-select" name="product_id">
          <option disabled selected>価格で並べかえ</option>
          <option value="1">高い順に表示</option>
          <option value="2">低い順に表示</option>
          </option>
         
        </select>
      </div>
      <div class="search-form__actions">
            <a class="header__link" href="/products/search">検索</a>
      </div>
    </form>

    <div class="export-form">
      <form action="{{'/export?'.http_build_query(request()->query())}}" method="post">
        @csrf
    </div>
    
