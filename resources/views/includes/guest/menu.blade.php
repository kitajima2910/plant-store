<div class="classynav">
    <ul>
        @foreach ($menusShare as $menu)
           <li>
               <a href="{{ $menu->slug .'.html'}}">
                   {{$menu->name}}
               </a>
               @if(count($menu->childs))
                   @include('includes.guest.manage-menuchild', ['childs' => $menu->childs])
               @endif
           </li>
        @endforeach
    </ul>
</div>
    