@extends('layouts.app')

@section('content')
  <h1 class="text-3xl font-bold mb-6">Tienda</h1>

  @if (woocommerce_product_loop())
    <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
      @while (have_posts()) @php the_post() @endphp
        <li class="border rounded p-4 shadow hover:shadow-lg transition">
          <a href="{{ get_permalink() }}">
            {!! woocommerce_get_product_thumbnail() !!}
            <h2 class="mt-4 text-xl font-semibold">{{ get_the_title() }}</h2>
            <span class="text-lg font-bold text-green-700">{{ wc_get_product()->get_price_html() }}</span>
          </a>
        </li>
      @endwhile
    </ul>
    {!! woocommerce_pagination() !!}
  @else
    <p>No hay productos.</p>
  @endif
@endsection
