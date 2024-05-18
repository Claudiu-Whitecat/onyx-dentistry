@props([
    'active' => false,
    'type' => 'anchor',
    'hasSubmenu' => false,
    'submenuItems' => [],
    'href' => '',
])
@if($type === 'anchor')
    <a class="{{$active ? 'active' : ''}} header_link animated-underscore body-regular" href="{{$href}}" role="menuitem" aria-current="{{ $active ? 'page' : 'false' }}">
        {{$slot}}
    </a>
@else
    <button class="{{$active ? 'active' : ''}} has-submenu header_link animated-underscore body-regular" role="menuitem" aria-current="{{ $active ? 'page' : 'false' }}">
        {{$slot}}
    </button>
@endif
