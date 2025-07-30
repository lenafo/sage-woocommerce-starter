@extends('layouts.app')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    <article class="prose max-w-none">
      {!! woocommerce_show_product_images() !!}
      <h1>{{ get_the_title() }}</h1>
      {!! woocommerce_template_single_price() !!}
      {!! woocommerce_template_single_add_to_cart() !!}
      {!! woocommerce_template_single_excerpt() !!}
      {!! woocommerce_template_single_meta() !!}
      {!! woocommerce_output_product_data_tabs() !!}
    </article>
  @endwhile
@endsection
