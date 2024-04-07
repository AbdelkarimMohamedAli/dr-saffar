<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">

        @foreach($menus as $menu)
         @if($menu->parent == 0)
            <li class='nav-item'> 
                <a class='nav-link' href="">{{ $menu->label }}</a>
                @foreach($menus as $menu2)
                    @if($menu2->parent == $menu->id)
                    <ul class="dropdown-menu">
                        <li class='nav-item'>
                        <a class='nav-link' href="">{{ $menu2->label }}</a> 
                        </li> 
                    </ul>
                    @endif
                @endforeach
            
            </li>
        @else         @continue   @endif
             
        @endforeach

            <li class="nav-item">
                <a href="{{ route('setlocale', 'en') }} {{ session('locale') == 'en' ? 'selected' : '' }}" class="nav-link active">English</a>
                <a href="{{ route('setlocale', 'ar') }} {{ session('locale') == 'ar' ? 'selected' : '' }}" class="nav-link active">عربي</a>

            </li>
 

        <li class='nav-item'> 
                <a class='nav-link' href=""> 
                    <i class='ri-arrow-right-s-line'></i> 
                </a>
                <ul class="dropdown-menu">';
                </ul>
        </li>
        
     
            
            
        </ul>

        <div class="others-options d-flex align-items-center">
            <div class="option-item" style="padding-bottom: 24px;">
                @include('front.social_icon')

            </div>

       

        </div>
    </div>