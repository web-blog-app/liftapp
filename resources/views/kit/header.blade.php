<header class="header">
  <div class="container">
    <div class="row">
      <div class="login-menu menu"> 

          <img class="logo" src="img/lift.png" alt="{{ setting('kit.header.title') }}">          
        
        <div class="user-container dropdown">
          <img class="user" src="img/default.png" alt="Foto {{ Auth::user()->name }}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->name }} 
            </a>
          <ul class="dropdown-menu" role="menu">
          @if(Auth::user()->role_id == '1')
            <li>
              <a href="/liftapp/public/admin">Administrator</a>
            </li>
        @endif 
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выйти</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </div>
        <div class="menu-items">
          <ul>
            <li>
              <a href="{{route('home')}}" class="fadeInUp animated">               
                   текущие заявки
                  <span></span>
              </a>
            </li>
            <li>
              <a href="{{route('requestBook')}}" class="fadeInUp animated">               
                   журнал заявок
                  <span></span>
              </a>
            </li>
            <li>
              <a href="{{route('detail')}}" class="fadeInUp animated">               
                  заказ запчастей
                  <span></span>
              </a>
            </li>
            <li>
              <a href="{{route('changeDetail')}}" class="fadeInUp animated">              
                  тех. обслуживание
                  <span></span>
              </a>
            </li>
            <li>
              <a href="{{route('info')}}" class="fadeInUp animated">                
                  информация
                  <span></span></a>
            </li>                        
          </ul>
        </div>
      </div>

      <button class="toggle-menu">
        <span class="sandwich">
          <span class="sw-topper"></span>
          <span class="sw-bottom"></span>
          <span class="sw-footer"></span>
        </span>
      </button>
      <div class="top-menu" style="display: none;">
        <ul>
          <li>
            <a href="{{route('home')}}" class="fadeInUp animated">              
                текущие заявки
                <span></span>
            </a>
          </li>
          <li>
            <a href="{{route('requestBook')}}" class="fadeInUp animated">              
                журнал заявок
                <span></span>
            </a>
          </li>
          <li>
            <a href="{{route('detail')}}" class="fadeInUp animated">              
                заказ запчастей
                <span></span>
            </a>
          </li>
          <li>
            <a href="{{route('changeDetail')}}" class="fadeInUp animated">              
                тех. обслуживание
                <span></span>
            </a>
          </li>
          <li>
            <a href="{{route('info')}}" class="fadeInUp animated">              
                информация
                <span></span>
            </a>
          </li>      
        </ul>
      </div>
    </div>
  </div>
</header>
