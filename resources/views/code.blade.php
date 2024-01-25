<script>

// obsługa ciasteczek
function setCookie(cname,cvalue) {
    let exdays=1; //czas trwania ciasteczka
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

//setup
function startSetup(){
    if(getCookie('lang')=='') setCookie('lang','pl');
    navLang();
    siteLang();
}

//accesability
function toggleHighContrast() {
  document.body.classList.toggle("high-contrast");
}

function changeFontSize(direction) {
  const root = document.documentElement;
  const currentSize = parseFloat(getComputedStyle(root).fontSize);
  const newSize = direction === "increase" ? currentSize * 1.1 : currentSize / 1.1;
  root.style.fontSize = newSize + "px";
}

function toggleGreyscale() {
  document.body.classList.toggle("greyscale");
}



</script>
