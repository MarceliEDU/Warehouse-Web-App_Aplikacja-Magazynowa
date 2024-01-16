<nav class="navbar navbar-collapse navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand text-primary" href="/">Aplikacja Magazynowa</a>
    <div class="navbar-nav w-100">
      <a class="nav-item nav-link" href="/">Home</a>
      <a class="nav-item nav-link" href="/look">Przegląd</a>
      
      @auth
        @if(Auth::user()->rola=="admin")
        <a class="nav-item nav-link disabled text-white" href="">CRUD:</a>
        <a class="nav-item nav-link" href="/dzialy">Działy</a>
        <a class="nav-item nav-link" href="/produkty">Produkty</a>
        <a class="nav-item nav-link" href="/dostawcy">Dostawcy</a>
        @endif
        <a class="nav-item nav-link ml-auto" href="{{ url('/logout') }}">
          @if(Auth::user()->rola=="admin") 
          <span class="text-primary">{{ Auth::user()->name }}</span>
          @else
          <span class="text-white">{{ Auth::user()->name }}</span>
          @endif
          <i class="bi bi-person text-white"></i> 
        </a>
      @endauth
      @guest
        <a class="nav-item nav-link ml-auto" href="/login">Login</a>
      @endguest  
    </div>
    
</nav>