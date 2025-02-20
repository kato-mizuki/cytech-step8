@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">商品情報詳細画面</h1>

    

    <dl class="row mt-3">
        <dt class="col-sm-3">商品情報ID</dt>
        <dd class="col-sm-9">{{ $product->id }}</dd>

        <dt class="col-sm-3">商品名</dt>
        <dd class="col-sm-9">{{ $product->product_name }}</dd>

        <dt class="col-sm-3">メーカー名</dt>
        <dd class="col-sm-9">
        @foreach ($companies as $company)
            @if($product->company_id === $company->id)
                 {{ $company->name }}
            @endif
        @endforeach
        </dd>
        
        <dt class="col-sm-3">価格</dt>
        <dd class="col-sm-9">{{ $product->price }}</dd>

        <dt class="col-sm-3">在庫数</dt>
        <dd class="col-sm-9">{{ $product->stock }}</dd>

        <dt class="col-sm-3">コメント</dt>
        <dd class="col-sm-9">{{ $product->comment }}</dd>

        <dt class="col-sm-3">商品画像</dt>
        <dd class="col-sm-9"><img src="{{ asset($product->img_path) }}" width="300"></dd>
    </dl>
    
    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning mt-3">編集</a>
    <a href="{{ route('products.index') }}" class="btn btn-info mt-3">戻る</a>
</div>
@endsection