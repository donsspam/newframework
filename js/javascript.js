//========================================================================================
function ToggleApp(obj) {
    if (document.getElementById(obj+'-div')) {
        if (document.getElementById(obj+'-div').style.display == 'none'){
            document.getElementById(obj+'-div').style.display = 'block';
        } else {
            document.getElementById(obj+'-div').style.display = 'none';
        }
    }
    if (document.getElementById(obj+'-span')) {
        if (document.getElementById(obj+'-span').innerHTML == '+')
            document.getElementById(obj+'-span').innerHTML = '-';
        else
            document.getElementById(obj+'-span').innerHTML = '+';
    }
}

//========================================================================================
function DoMenu(the_msg) {
    if (typeof the_msg === 'undefined') { the_msg = 'Loading page...'; }
    if (document.getElementById('menu-frame')) { document.getElementById('menu-frame').style.backgroundImage = "url(./images/menu-green.png)"; }
    if (document.getElementById('menu-frame')) { document.getElementById('menu-frame').style.backgroundRepeat = 'repeat-x'; }
    if (document.getElementById('menu-frame')) { document.getElementById('menu-frame').style.backgroundPosition = '50% 0'; }
    if (document.getElementById('menu-page-load-time')) { document.getElementById('menu-page-load-time').style.display = 'none'; }
    if (document.getElementById('menu-status')) { document.getElementById('menu-status').innerHTML = '&nbsp;&nbsp;&nbsp;&nbsp;' + the_msg; }
}
