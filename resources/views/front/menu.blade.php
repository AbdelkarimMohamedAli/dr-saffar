<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">

        @foreach($menus as $menu)
        
         @if($menu->parent == 0)
            <li class='nav-item'> 
                <a class='nav-link' href="#">{{ $menu->label }}</a>
                
                    <ul class="dropdown-menu"> 
                    @foreach($menus as $menu2)
                        @if($menu2->parent == $menu->id)
                            <li class='nav-item'>
                            <a class='nav-link' href="#">{{ $menu2->label }}</a>
                            <ul class="dropdown-menu"> 
                                @foreach($menus as $menu3)
                                    @if($menu3->parent == $menu2->id)
                                        <li class='nav-item'>
                                        <a class='nav-link' href="#">{{ $menu3->label }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                            </li>
                        @endif
                    @endforeach
                    </ul>
            </li>
     
            @endif
             
        @endforeach
            <li class="nav-item">
            @if (Cookie::get('locale') === 'ar')

                <a href="{{ route('setlocale', 'en') }}" class="nav-link active">English</a>
            @else
                <a href="{{ route('setlocale', 'ar') }}" class="nav-link active">عربي</a>
            @endif
            </li>
 

        <!-- <li class='nav-item'> 
                <a class='nav-link' href=""> 
                    <i class='ri-arrow-right-s-line'></i> 
                </a>
                <ul class="dropdown-menu">
                </ul>
        </li>
        
      -->
            
            
        </ul>

        <div class="others-options d-flex align-items-center">
            <div class="option-item" style="padding-bottom: 24px;">
                @include('front.social_icon')

            </div>

       

        </div>
    </div>