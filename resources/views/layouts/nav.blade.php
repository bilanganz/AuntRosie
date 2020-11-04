<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">History</h4>
              <p class="text-muted">
                For the best in homemade meat pies and preserves the exacting and demanding
                foodie need look no further than Aunt Rosie. Since the early 80’s, Rosie has been
                making and selling her fare at a variety of farmers markets, home shows and bazaars
                throughout southern Ontario. Over the last five years she has started to realize a
                significant financial payoff for her years of perseverance and attention to quality in
                everything she produces thanks to the developing “foodie” movement.
              </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Comment on Instagram</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
              <h4 class="text-white"><a href="/credit" class="text-white">Credit</a></h4>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="/" class="navbar-brand d-flex align-items-center">
            <img src="/images/baker_icon.ico" alt="Aunt Rosie's Logo" width="45" height="45"/>
            <strong>Aunt Rosie's Homemade Pies and Preserves</strong>
          </a>
          <div class="d-flex flex-row-reverse">
                <!-- Authentication Links -->
                @guest
                       <div class="p-2">
                        <a class="nav-link text-light font-weight-bold"  href="{{ route('login') }}">{{ __('Login') }}</a>
                       </div>
                    @if (Route::has('register'))
                       <div class="p-2">
                        <a class="nav-link text-light font-weight-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                       </div> 
                    @endif
                @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                @endguest
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
</header>