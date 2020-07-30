<ul class="dropdown">
    @foreach ($childs as $child)
        <li>
            <a href="{{ $child->slug .'.html'}}">
                {{ $child->name }}
            </a>
            @if(count($child->childs))
                @include('includes.guest.manage-menuchild', ['childs' => $child->childs])
            @endif
        </li>
     @endforeach
</ul>
