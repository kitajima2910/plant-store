<ul class="dropdown">
    @foreach($childs as $child)
        <li>
            <a href="{{ url($child->slug .'.html') }}">
                {{ $child->name }}
            </a>
            @if(count($child->childs))
                @include('includes.guest.manage-menu-child', ['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
