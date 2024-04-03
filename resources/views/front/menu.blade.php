<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            
            <li class="nav-item">
                <a href="{{ route('setlocale', 'en') }} {{ session('locale') == 'en' ? 'selected' : '' }}" class="nav-link active">English</a>
                <a href="{{ route('setlocale', 'ar') }} {{ session('locale') == 'ar' ? 'selected' : '' }}" class="nav-link active">عربي</a>

            </li>
 

          <?php echo createMenu(0, $menus); ?>
            
            
        </ul>

        <div class="others-options d-flex align-items-center">
            <div class="option-item" style="padding-bottom: 24px;">
                @include('front.social_icon')

            </div>

       

        </div>
    </div>