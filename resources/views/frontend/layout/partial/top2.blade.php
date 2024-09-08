        <header class="fixed">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle mobile_menu_btn" data-toggle="collapse" data-target=".mobile_menu" aria-expanded="false">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    @php $setting=setting(); @endphp
                    <!-- <a class="navbar-brand" href="index.html">
                        <img src="{{asset('')}}frontend/images/logo.svg" height="32" alt="Logo">
                    </a> -->
                    <a class="navbar-brand light" href="{{route('home')}}"style="margin-top: -5px; !important">
                        <img src="{{$setting->logo_dark}}" width="150" height="62" alt="Logo">
                    </a>
                    <a class="navbar-brand dark nodisplay" href="{{route('home')}}" style="margin-top: -20px; !important">
                        <img src="{{$setting->logo_dark}}" width="150" height="62" alt="Logo">
                    </a>
                </div>
                @include('frontend.layout.partial.nav')
            </div>
        </header>