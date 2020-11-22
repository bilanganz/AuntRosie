<!--================Main Header Area =================-->
<header class="main_header_area">
    <div class="top_header_area row m0">
      <div class="container">
        <div class="float-left">
          <a href="tell:+1(111) 111 1111"><i class="fa fa-phone" aria-hidden="true"></i> + 1 (647) 123 1234</a>
          <a href="mainto:auntrosie@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>
            auntrosie@gmail.com</a>
        </div>
        <div class="float-right">
          <ul class="h_social list_style">
            <!-- Authentication Links -->
                @guest
                      <li><a class="nav-link text-light font-weight-bold"  href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @if (Route::has('register'))
                       <li><a class="nav-link text-light font-weight-bold" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @endif
                @else
                        <div class="dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle text-light font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                          </div>
                        </div>
                @endguest
          </ul>
          <!-- COMMENTED AT THE MOMENT FOR FUTURE DEVELOPMENT -->
          <!-- <ul class="h_search list_style">
            <li><a class="popup-with-zoom-anim" href="search.html"><i class="fa fa-search"></i></a></li>
          </ul> -->
        </div>
      </div>
    </div>
    @auth
      <div class="main_menu_two">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/"><img src="img/logo.jpg" alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="my_toggle_menu">
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav justify-content-end">
                <li class="active"><a href="home">Home</a></li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="recipe.html" role="button" aria-haspopup="true"
                    aria-expanded="false">Recipe</a>
                  <ul class="dropdown-menu">
                    <li><a href="recipes">Recipe Record</a></li>
                    <li><a href="recipes/create">Add Recipe</a></li>
                  </ul>
                </li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="inventory.html" role="button"
                    aria-haspopup="true" aria-expanded="false">Inventory</a>
                  <ul class="dropdown-menu">
                    <li><a href="inventories">Inventory Record</a></li>
                    <li><a href="inventories/create">Add Inventory</a></li>
                  </ul>
                </li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="ingredients.html" role="button"
                    aria-haspopup="true" aria-expanded="false">Ingredients</a>
                  <ul class="dropdown-menu">
                    <li><a href="ingredients">Ingredients Record</a></li>
                    <li><a href="ingredients/create">Add Ingredients</a></li>
                  </ul>
                </li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="stock.html" role="button" aria-haspopup="true"
                    aria-expanded="false">Stock</a>
                  <ul class="dropdown-menu">
                    <li><a href="stocks">Stock Record</a></li>
                    <li><a href="stocks/create">Add Stock</a></li>
                  </ul>
                </li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="nutrition.html" role="button"
                  aria-haspopup="true" aria-expanded="false">Medical</a>
                  <ul class="dropdown-menu">
                    <li><a href="medicalConditions">Medical Condition</a></li>
                    <li><a href="medicalConditions/create">Add Medical Condition</a></li>
                  </ul>
                </li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="sales.html" role="button" aria-haspopup="true"
                    aria-expanded="false">Sales</a>
                  <ul class="dropdown-menu">
                    <li><a href="sales">Sales Record</a></li>
                    <li><a href="sales/create">Add Sales</a></li>
                  </ul>
                </li>
                <li><a href="membership.html">Membership</a></li>
                <li class="dropdown submenu">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="customer.html" role="button" aria-haspopup="true"
                    aria-expanded="false">Customer</a>
                  <ul class="dropdown-menu">
                    <li><a href="customers">Customer Record</a></li>
                    <li><a href="customers/create">Add Customer</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </div>
    </div>
  @endauth
</header>