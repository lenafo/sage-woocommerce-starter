<header class="bg-gray-800 text-white p-4">
  <nav>
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-4']) !!}
    @endif
  </nav>
</header>
