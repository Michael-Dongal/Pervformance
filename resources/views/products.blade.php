@extends('layouts.app')

@section('title', $title . ' – Pervformance')

@section('content')
<section class="view" id="v-products">
  <div class="wrap">
    <div class="head"><h2>{{ $title }}</h2><p>{{ $description }}</p></div>

    <div class="grid" data-n="{{ $products->count() }}">
      @foreach ($products as $product)
        <article class="card">
          <div class="ph">
            @if ($product->image)
              <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" onerror="this.parentNode.textContent = 'PRODUCT PHOTO'">
            @else
              PRODUCT PHOTO
            @endif
          </div>
          <div class="b">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->description }}</p>
            <button class="btn" type="button"
              data-kind="{{ $product->kind }}"
              data-name="{{ $product->name }}"
              data-desc="{{ $product->description }}"
              data-req="{{ $product->requestable }}"
              @if ($product->kind === 'variants')
              data-variants="{{ $product->variants->toJson() }}"
              @endif
            >@if ($product->kind === 'proof')See the build @else Browse styles @endif</button>
          </div>
        </article>
      @endforeach
    </div>

    <div class="help"><button class="helplink" id="help-link" type="button" data-category="{{ $title }}">Can’t find what you’re looking for? Chat with us. We’d be happy to help. <span>→</span></button></div>
  </div>
</section>
@endsection