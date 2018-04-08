<nav class="navbar navbar-expand-lg" style="background-color: #34495E;" >
  <a class="navbar-brand"  href="#">Админ панель</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ '/' }}">Главная<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ '/adminpanel/dashboard/albums' }}">Альбом<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ '/adminpanel/dashboard/posts' }}">Новости<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="{{ '/adminpanel/dashboard/services' }}">Услуги<span class="sr-only">(current)</span></a>
      </li>
    </ul>
    @guest
      @else
      <li class="nav-itemform-inline my-2 my-lg-0"s>
      
            <a style="" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Выход') }}
              </a>
            <form id="logout-form" 
              action="{{  route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
      </li>
    @endguest
  </div>
</nav>

 
      
