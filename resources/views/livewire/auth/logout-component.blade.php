<div>
    <ul>
        @guest
            <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">{{ __('Log In') }} </a>
                /  <a href="{{ route('register') }}">{{ __('Sign Up') }}</a></li>
        @else
        <li>

            <i class="fi fi-rs-user"></i>
            <a class="text-primary">
                {{ Str::ucfirst(Auth::user()->name) }}
            </a> /
            {{-- <a href="{{ route('logout') }}" class="text-danger"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a> --}}
            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form> --}}

            <a href="/logout" wire:click.prevent="logout">{{ __('Logout') }} <i class="fi fi-rs-sign-out"></i></a>
        </li>

            {{-- <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                </div>
            </li> --}}
        @endguest
    </ul>
</div>
