<nav class="navbar navbar-collapse navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand text-primary" href="/">Magazyn</a>
    <div class="navbar-nav w-100">
      <a class="nav-item nav-link" href="/" id="nav1">Główna</a>
      <a class="nav-item nav-link" href="/look" id="nav2">Przegląd</a>

      @auth
        
        @if(Auth::user()->rola=="admin")
        <a class="nav-item nav-link disabled text-white" href="">CRUD:</a>
        <a class="nav-item nav-link" href="/dzialy" id="nav3">Działy</a>
        <a class="nav-item nav-link" href="/produkty" id="nav4">Produkty</a>
        <a class="nav-item nav-link" href="/dostawcy" id="nav5">Dostawcy</a>
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
        <a class="nav-item nav-link ml-auto" href="/login" id="nav6">Login</a>
      @endguest  
    </div>
    
</nav>

<script>

  function navLang(){
    switch(getCookie('lang')){
      case 'pl':
        document.getElementById("lngbtn").innerHTML = "Change language to English";
        document.getElementById("nav1").innerHTML = "Główna";
        document.getElementById("nav2").innerHTML = "Przegląd";
        try{
        document.getElementById("nav3").innerHTML = "Działy";
        document.getElementById("nav4").innerHTML = "Produkty";
        document.getElementById("nav5").innerHTML = "Dostawcy";
        } catch {}
      break;
      case 'eng':
        document.getElementById("lngbtn").innerHTML = "Zmień język na polski";
        document.getElementById("nav1").innerHTML = "Home";
        document.getElementById("nav2").innerHTML = "Look";
        try{
        document.getElementById("nav3").innerHTML = "Sections";
        document.getElementById("nav4").innerHTML = "Products";
        document.getElementById("nav5").innerHTML = "Suppliers";
        } catch {}
      break;
    }
  }
  
  function LangSwap(){
    if(getCookie('lang')==='pl'){
      setCookie('lang','eng');
    } else if(getCookie("lang")==="eng"){
      setCookie("lang","pl");
    }
    navLang();
    siteLang();
  }

</script>