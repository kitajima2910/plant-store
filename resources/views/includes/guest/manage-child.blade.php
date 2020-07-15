<ul>
    @foreach($childs as $child)
        <li>
            <a href="{{ $child->slug }}">
                {{ $child->name }}
            </a>
            @if(count($child->childs))
                @include('includes.guest.manage-child', ['childs' => $child->childs])
            @endif
        </li>
    @endforeach
</ul>
