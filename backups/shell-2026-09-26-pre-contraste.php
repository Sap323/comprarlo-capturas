/**
 * Shell global de Comprarlo España.
 * Sustituye la plantilla del tema por una propia para el contenido publico,
 * manteniendo wp_head() y wp_footer() intactos para que Rank Math,
 * PixelYourSite y GA4 sigan funcionando.
 */

if ( ! function_exists( 'cr_shell_css' ) ) {

function cr_shell_css() { ?>
<style id="cr-tokens">
:root{
  --tinta:#1A0B2E;--violeta:#4C1D95;--violeta-hondo:#331066;--vivo:#7C3AED;
  --nube:#EFE9FD;--nube-2:#E2D8FA;--papel:#FFFFFF;--papel-2:#FBF9FF;
  --precio:#F5B301;--precio-legible:#8A5D00;--precio-tinta:#4A3200;
  --si:#166534;--no:#9F1239;--sobre-semaforo:#FFFFFF;
  --linea:#DDD2F5;--gris:#6B5C86;
  --sobre-violeta:#F6F1FF;--sobre-violeta-tenue:#C9B6F0;--sobre-tinta:#FBF9FF;
  --display:"Bricolage Grotesque","Helvetica Neue",Arial,sans-serif;
  --texto:"Source Serif 4",Georgia,"Times New Roman",serif;
  --dato:"IBM Plex Mono",ui-monospace,"SFMono-Regular",Menlo,monospace;
}
@media (prefers-color-scheme: dark){
  :root:not([data-theme="light"]){
    --tinta:#F4EEFF;--violeta:#2A0F52;--violeta-hondo:#1C0838;--vivo:#A98BF5;
    --nube:#251044;--nube-2:#33195C;--papel:#150A26;--papel-2:#1B0D31;
    --precio:#FFC93C;--precio-legible:#FFC93C;--precio-tinta:#1B0D31;
    --si:#4ADE80;--no:#FF8FA3;--sobre-semaforo:#150A26;
    --linea:#3B1F66;--gris:#A995C4;
    --sobre-violeta:#F4EEFF;--sobre-violeta-tenue:#B49BE8;--sobre-tinta:#1C0838;
  }
}
:root[data-theme="dark"]{
  --tinta:#F4EEFF;--violeta:#2A0F52;--violeta-hondo:#1C0838;--vivo:#A98BF5;
  --nube:#251044;--nube-2:#33195C;--papel:#150A26;--papel-2:#1B0D31;
  --precio:#FFC93C;--precio-legible:#FFC93C;--precio-tinta:#1B0D31;
  --si:#4ADE80;--no:#FF8FA3;--sobre-semaforo:#150A26;
  --linea:#3B1F66;--gris:#A995C4;
  --sobre-violeta:#F4EEFF;--sobre-violeta-tenue:#B49BE8;--sobre-tinta:#1C0838;
}
*{box-sizing:border-box}
html{-webkit-text-size-adjust:100%}
body{margin:0;background:var(--papel);color:var(--tinta);font-family:var(--texto);
  font-size:17px;line-height:1.65;-webkit-font-smoothing:antialiased;overflow-x:hidden}
img,svg,video{max-width:100%;height:auto}
a{color:inherit}
h1,h2,h3{font-family:var(--display);font-weight:800;text-wrap:balance;margin:0;
  letter-spacing:-.025em;line-height:1.05}
.env{max-width:1180px;margin:0 auto;padding:0 24px}
:focus-visible{outline:3px solid var(--precio);outline-offset:2px}
.salta{position:absolute;left:-9999px;top:0;background:var(--tinta);color:var(--sobre-tinta);
  padding:12px 18px;font-family:var(--dato);font-size:13px;z-index:200}
.salta:focus{left:0}

.top{position:sticky;top:0;z-index:60;background:var(--papel);border-bottom:1px solid var(--linea)}
.top-in{display:flex;align-items:center;gap:28px;height:62px}
.marca{display:flex;align-items:baseline;gap:8px;text-decoration:none;margin-right:auto}
.marca b{font-family:var(--display);font-weight:800;font-size:22px;letter-spacing:-.04em}
.marca span{font-family:var(--dato);font-size:10.5px;font-weight:600;letter-spacing:.2em;
  text-transform:uppercase;color:var(--vivo)}
.top .nav-d{display:flex;gap:26px;font-family:var(--dato);font-size:12.5px}
.top .nav-d a{text-decoration:none;padding:4px 0;border-bottom:2px solid transparent;
  transition:border-color .18s,color .18s}
.top .nav-d a:hover,.top .nav-d a:focus-visible{border-color:var(--precio-legible);color:var(--vivo)}
.menu{display:none;flex-direction:column;justify-content:center;gap:5px;width:42px;height:42px;
  border:1px solid var(--linea);background:var(--papel);cursor:pointer;padding:0 10px;flex:none}
.menu span{display:block;height:2px;background:var(--tinta);transition:transform .22s,opacity .18s}
.menu[aria-expanded="true"] span:nth-child(1){transform:translateY(7px) rotate(45deg)}
.menu[aria-expanded="true"] span:nth-child(2){opacity:0}
.menu[aria-expanded="true"] span:nth-child(3){transform:translateY(-7px) rotate(-45deg)}
.nav-m{display:none;flex-direction:column;background:var(--papel);border-top:1px solid var(--linea)}
.nav-m a{font-family:var(--dato);font-size:14px;padding:16px 24px;text-decoration:none;
  border-bottom:1px solid var(--linea);display:flex;justify-content:space-between;align-items:center}
.nav-m a::after{content:"\2192";color:var(--vivo)}
@media(max-width:780px){.top .nav-d{display:none}.menu{display:flex}.nav-m:not([hidden]){display:flex}}

footer.cr{background:var(--tinta);color:var(--sobre-tinta);padding:54px 0 34px;margin-top:70px}
footer.cr .pie{display:flex;flex-wrap:wrap;gap:34px;justify-content:space-between;align-items:flex-start}
footer.cr .marca b{color:var(--sobre-tinta)}
footer.cr nav{display:flex;flex-wrap:wrap;gap:10px 26px;font-family:var(--dato);font-size:12.5px}
footer.cr nav a{text-decoration:none;opacity:.8}
footer.cr nav a:hover{opacity:1;color:var(--precio)}
footer.cr .legal{margin:34px 0 0;font-family:var(--dato);font-size:11.5px;opacity:.6;line-height:1.7}

@media(max-width:1024px){.env{padding:0 22px}}
@media(max-width:620px){
  body{font-size:16.5px}
  .env{padding:0 18px}
  .marca b{font-size:20px}
  .marca span{font-size:9.5px;letter-spacing:.16em}
  footer.cr{margin-top:52px;padding:42px 0 28px}
}
@media(max-width:430px){.env{padding:0 14px}}

/* color por categoria (lo pone el body como style="--cat:#hex") */
body{--cat:var(--violeta);--cat-banda:var(--cat);--cat-texto:var(--cat)}
@media (prefers-color-scheme: dark){
  :root:not([data-theme="light"]) body{
    --cat-banda:color-mix(in srgb, var(--cat) 44%, #150A26);
    --cat-texto:color-mix(in srgb, var(--cat) 46%, #FFFFFF)}
}
:root[data-theme="dark"] body{
  --cat-banda:color-mix(in srgb, var(--cat) 44%, #150A26);
  --cat-texto:color-mix(in srgb, var(--cat) 46%, #FFFFFF)}
.home .cat{--cat-texto:var(--cat)}
@media (prefers-color-scheme: dark){:root:not([data-theme="light"]) .home .cat{--cat-texto:color-mix(in srgb, var(--cat) 46%, #FFFFFF)}}
:root[data-theme="dark"] .home .cat{--cat-texto:color-mix(in srgb, var(--cat) 46%, #FFFFFF)}

/* 404 y listados genericos */
.cr-404{padding:90px 0;text-align:left}
.cr-404 h1{font-size:clamp(40px,7vw,84px);margin-bottom:16px}
.cr-404 p{max-width:52ch;color:var(--gris);font-size:18px}
.cr-lista-simple{padding:50px 0}
.cr-lista-simple h1{font-size:clamp(30px,5vw,48px);margin-bottom:26px}
.cr-lista-simple a{display:block;padding:16px 0;border-bottom:1px solid var(--linea);text-decoration:none;font-family:var(--display);font-weight:700;font-size:19px}
.cr-lista-simple a:hover{color:var(--vivo)}
.cr-lista-simple small{display:block;font-family:var(--dato);font-size:11px;color:var(--gris);font-weight:400;margin-top:3px}

/* ===== HOME ===== */
.home .hero{position:relative;background:var(--violeta);color:var(--sobre-violeta);overflow:hidden}
.home .hero-in{position:relative;z-index:2;padding:82px 0 74px}
.home .hero h1{font-size:clamp(46px,8.4vw,104px);color:var(--sobre-violeta);max-width:15ch;margin:0 0 22px}
.home .subraya{position:relative;display:inline-block;white-space:nowrap}
.home .subraya svg{position:absolute;left:-2%;bottom:-.16em;width:104%;height:.34em;overflow:visible}
.home .subraya path{fill:none;stroke:var(--precio);stroke-width:9;stroke-linecap:round}
.home .hero p.lede{font-size:clamp(17px,2vw,22px);max-width:46ch;margin:0 0 36px;color:var(--sobre-violeta);opacity:.93;line-height:1.5}
.home .buscador{max-width:660px}
.home .campo{position:relative;display:flex;align-items:center}
.home .campo>svg{position:absolute;left:20px;width:20px;height:20px;stroke:var(--violeta);fill:none;stroke-width:2.2;pointer-events:none}
.home #q{width:100%;font-family:var(--display);font-weight:600;font-size:19px;padding:19px 20px 19px 52px;border:0;border-radius:2px;background:var(--papel);color:var(--tinta);box-shadow:6px 6px 0 var(--violeta-hondo)}
.home #q::placeholder{color:var(--gris);font-weight:600}
.home #q:focus{outline:3px solid var(--precio);outline-offset:2px}
.home .pista{margin:16px 0 0;font-family:var(--dato);font-size:12.5px;color:var(--sobre-violeta-tenue)}
.home .pista button{font:inherit;background:none;border:0;border-bottom:1px dashed var(--sobre-violeta-tenue);color:var(--precio);cursor:pointer;padding:0 0 1px;margin:0 2px}
.home .pista button:hover{border-bottom-style:solid}
.home .resultados{margin-top:18px;background:var(--papel);color:var(--tinta);border-radius:2px;box-shadow:6px 6px 0 var(--violeta-hondo)}
.home .resultados[hidden]{display:none}
.home .res{display:flex;align-items:center;gap:14px;width:100%;text-align:left;padding:14px 20px;border:0;border-bottom:1px solid var(--linea);background:none;font:inherit;color:inherit;cursor:pointer}
.home .res:hover,.home .res:focus-visible{background:var(--nube);outline:none}
.home .res .nom{font-family:var(--display);font-weight:700;font-size:16.5px;flex:1;letter-spacing:-.01em}
.home .res .cat{font-family:var(--dato);font-size:11px;text-transform:uppercase;letter-spacing:.1em;color:var(--vivo);white-space:nowrap}
.home .res .ir{color:var(--gris);transition:transform .18s,color .18s}
.home .res:hover .ir{transform:translateX(4px);color:var(--vivo)}
.home .vacio{padding:22px 20px;color:var(--gris);border-bottom:1px solid var(--linea)}
.home .mas-res{display:block;width:100%;padding:15px 20px;border:0;background:var(--papel-2);cursor:pointer;
  font-family:var(--dato);font-size:12.5px;font-weight:500;letter-spacing:.06em;color:var(--vivo)}
.home .mas-res:hover{background:var(--nube)}
.home .mas-res[hidden]{display:none}
.home .flota{position:absolute;inset:0;z-index:1;pointer-events:none;overflow:hidden}
.home .flota i{position:absolute;font-family:var(--dato);font-size:13px;font-style:normal;white-space:nowrap;color:var(--sobre-violeta);opacity:.13;border:1px solid currentColor;padding:5px 11px;border-radius:100px;animation:deriva linear infinite}
@keyframes deriva{from{transform:translate3d(0,0,0)}to{transform:translate3d(0,-46px,0)}}
@media(prefers-reduced-motion:reduce){.home .flota i{animation:none}
}
.home .tira{background:var(--tinta);color:var(--sobre-tinta)}
.home .tira-in{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:rgba(255,255,255,.14)}
.home .tira b{display:block;background:var(--tinta);padding:22px 24px;font-family:var(--dato);font-weight:600;font-size:12px;letter-spacing:.06em;color:var(--sobre-tinta);line-height:1.45}
.home .tira b u{display:block;font-family:var(--display);font-weight:800;font-size:30px;letter-spacing:-.03em;text-decoration:none;color:var(--precio);margin-bottom:3px;line-height:1.15}
@media(max-width:760px){.home .tira-in{grid-template-columns:repeat(2,1fr)}
}
.home section{padding:78px 0}
.home .cab{display:flex;align-items:flex-end;justify-content:space-between;gap:32px;margin-bottom:38px}
.home .cab h2{font-size:clamp(30px,4.4vw,50px);max-width:17ch}
.home .cab p{margin:0;max-width:38ch;color:var(--gris);font-size:16px}
@media(max-width:800px){.home .cab{flex-direction:column;align-items:flex-start;gap:14px}
}
.home .filtros{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:26px}
.home .filtros button{font-family:var(--dato);font-size:12px;font-weight:500;letter-spacing:.04em;padding:7px 14px;border:1px solid var(--linea);background:var(--papel);color:var(--gris);border-radius:100px;cursor:pointer;transition:all .16s}
.home .filtros button:hover{border-color:var(--vivo);color:var(--vivo)}
.home .filtros button[aria-pressed="true"]{background:var(--cat,var(--violeta));border-color:var(--cat,var(--violeta));color:#FFFFFF}
.home .cat{--cat:var(--violeta);--cat-texto:var(--cat)}
@media (prefers-color-scheme: dark){:root:not([data-theme="light"]) .cat{--cat-texto:color-mix(in srgb, var(--cat) 46%, #FFFFFF)}
}
:root[data-theme="dark"] .cat{--cat-texto:color-mix(in srgb, var(--cat) 46%, #FFFFFF)}
.home .rejilla{display:grid;grid-template-columns:repeat(12,1fr);gap:14px}
.home .cat{grid-column:span 4;background:var(--papel-2);border:1px solid var(--linea);padding:24px 24px 20px;text-decoration:none;display:flex;flex-direction:column;transition:transform .2s cubic-bezier(.2,.8,.3,1),box-shadow .2s,border-color .2s,background .2s}
.home .cat:nth-child(1),.home .cat:nth-child(2){grid-column:span 6}
.home .cat:hover,.home .cat:focus-visible{transform:translateY(-5px);border-color:var(--cat-texto);
  box-shadow:8px 8px 0 color-mix(in srgb, var(--cat) 20%, transparent);outline:none;background:var(--papel)}
.home .icono{width:46px;height:46px;display:grid;place-items:center;margin-bottom:16px;
  background:color-mix(in srgb, var(--cat) 11%, transparent);
  border:1px solid color-mix(in srgb, var(--cat) 42%, transparent);
  transition:background .2s,border-color .2s}
.home .icono svg{width:24px;height:24px;fill:none;stroke:var(--cat-texto);stroke-width:1.7;stroke-linecap:round;stroke-linejoin:round;transition:stroke .2s}
.home .cat:hover .icono{background:var(--cat);border-color:var(--cat)}
.home .cat:hover .icono svg{stroke:#FFFFFF}
.home .cat h3{font-size:23px;margin-bottom:6px}
.home .cat:nth-child(1) h3,.home .cat:nth-child(2) h3{font-size:29px}
.home .cat .cifras{font-family:var(--dato);font-size:11.5px;letter-spacing:.05em;color:var(--cat-texto);margin:0 0 14px;font-weight:500}
.home .cat ul{list-style:none;margin:0;padding:0;display:flex;flex-wrap:wrap;gap:6px}
.home .cat li{font-family:var(--dato);font-size:11.5px;color:var(--gris);border:1px solid var(--linea);padding:3px 9px;border-radius:100px;transition:border-color .16s,color .16s}
.home .cat:hover li{border-color:color-mix(in srgb, var(--cat) 32%, transparent);color:var(--tinta)}
.home .cat .mas{margin-top:auto;padding-top:16px;font-family:var(--dato);font-size:12px;color:var(--cat-texto);display:flex;align-items:center;gap:7px}
.home .cat .mas span{transition:transform .2s}
.home .cat:hover .mas span{transform:translateX(5px)}
@media(max-width:900px){.home .cat,.home .cat:nth-child(1),.home .cat:nth-child(2){grid-column:span 6}
}
@media(max-width:620px){.home .cat,.home .cat:nth-child(1),.home .cat:nth-child(2){grid-column:span 12}
}
.home .metodo{background:var(--nube);border-top:1px solid var(--linea);border-bottom:1px solid var(--linea)}
.home .pasos{display:grid;grid-template-columns:repeat(4,1fr);border-top:2px solid var(--tinta)}
.home .paso{padding:26px 22px 30px;border-right:1px solid var(--linea)}
.home .paso:last-child{border-right:0}
.home .paso b{font-family:var(--dato);font-size:12px;font-weight:600;color:var(--vivo);letter-spacing:.1em;display:block;margin-bottom:12px}
.home .paso h3{font-size:20px;margin-bottom:8px}
.home .paso p{margin:0;font-size:15px;color:var(--gris)}
@media(max-width:840px){.home .pasos{grid-template-columns:repeat(2,1fr)}
.home .paso:nth-child(2n){border-right:0}
}
@media(max-width:520px){.home .pasos{grid-template-columns:1fr}
.home .paso{border-right:0;border-bottom:1px solid var(--linea)}
}
.home .temporada{background:var(--violeta-hondo);color:var(--sobre-violeta)}
.home .temporada .cab h2{color:var(--sobre-violeta)}
.home .temporada .cab p{color:var(--sobre-violeta-tenue)}
.home .agenda{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}
.home .hito{border:1px solid rgba(255,255,255,.22);padding:24px 22px;transition:background .2s,transform .2s,border-color .2s}
.home .hito:hover{background:rgba(255,255,255,.06);transform:translateY(-4px);border-color:var(--precio)}
.home .hito .cuando{font-family:var(--dato);font-size:11.5px;letter-spacing:.12em;text-transform:uppercase;color:var(--precio);display:block;margin-bottom:10px}
.home .hito h3{font-size:22px;color:var(--sobre-violeta);margin-bottom:8px}
.home .hito p{margin:0;font-size:15px;color:var(--sobre-violeta-tenue)}
.home .hito .pico{margin-top:14px;font-family:var(--dato);font-size:12px;color:var(--sobre-violeta)}
@media(max-width:860px){.home .agenda{grid-template-columns:1fr}
}

/* ===== CATEGORIA ===== */
.category .cabecera{background:var(--cat-banda);color:var(--sobre-violeta);padding:26px 0 54px}
.category .miga{font-family:var(--dato);font-size:12px;color:var(--sobre-violeta-tenue);margin:0 0 30px;display:flex;gap:8px;flex-wrap:wrap}
.category .miga a{text-decoration:none;border-bottom:1px solid transparent}
.category .miga a:hover{border-color:var(--precio)}
.category .cab-flex{display:flex;gap:40px;align-items:flex-start;justify-content:space-between;flex-wrap:wrap}
.category .cab-txt{flex:1 1 520px}
.category .cab-icono{width:74px;height:74px;display:grid;place-items:center;border:1.5px solid var(--sobre-violeta-tenue);margin-bottom:22px}
.category .cab-icono svg{width:38px;height:38px;fill:none;stroke:var(--precio);stroke-width:1.6;stroke-linecap:round;stroke-linejoin:round}
.category .cabecera h1{font-size:clamp(38px,6vw,64px);color:var(--sobre-violeta);margin-bottom:18px;max-width:16ch}
.category .cabecera p.intro{font-size:19px;max-width:56ch;margin:0;color:var(--sobre-violeta);opacity:.93}
.category .cab-datos{flex:0 0 250px;border-left:1px solid rgba(255,255,255,.25);padding-left:24px}
.category .cab-datos div{margin-bottom:20px}
.category .cab-datos b{display:block;font-family:var(--display);font-weight:800;font-size:34px;color:var(--precio);letter-spacing:-.03em;line-height:1}
.category .cab-datos span{font-family:var(--dato);font-size:11.5px;letter-spacing:.08em;text-transform:uppercase;color:var(--sobre-violeta-tenue)}
@media(max-width:820px){.category .cab-datos{flex-basis:100%;border-left:0;border-top:1px solid rgba(255,255,255,.25);padding:22px 0 0;display:flex;gap:34px}
.category .cab-datos div{margin:0}
}
.category .entra{background:var(--nube);border-bottom:1px solid var(--linea);padding:34px 0}
.category .entra-in{display:grid;grid-template-columns:1fr 1fr;gap:34px}
.category .entra h2{font-size:20px;margin-bottom:10px}
.category .entra p{margin:0;font-size:16px;color:var(--gris)}
.category .entra p b{color:var(--tinta);font-weight:600}
@media(max-width:760px){.category .entra-in{grid-template-columns:1fr;gap:22px}
}
.category main{padding:54px 0 20px}
.category .barra{display:flex;gap:16px;align-items:center;flex-wrap:wrap;margin-bottom:24px}
.category .barra input{flex:1 1 280px;font-family:var(--display);font-weight:600;font-size:16px;
  padding:13px 16px;border:2px solid var(--tinta);border-radius:2px;background:var(--papel);color:var(--tinta)}
.category .barra input:focus{outline:3px solid var(--precio);outline-offset:1px}
.category .barra .cuenta{font-family:var(--dato);font-size:12.5px;color:var(--gris)}
.category .orden{display:flex;gap:6px}
.category .orden button{font-family:var(--dato);font-size:12px;padding:8px 13px;border:1px solid var(--linea);background:var(--papel);color:var(--gris);cursor:pointer;border-radius:100px}
.category .orden button[aria-pressed="true"]{background:var(--cat-banda);border-color:var(--cat-banda);color:#FFFFFF}
.category .lista{display:grid;grid-template-columns:repeat(auto-fill,minmax(268px,1fr));gap:12px}
.category .item{display:flex;align-items:center;gap:14px;padding:16px 18px;text-decoration:none;
  border:1px solid var(--linea);background:var(--papel-2);
  transition:transform .18s cubic-bezier(.2,.8,.3,1),border-color .18s,box-shadow .18s,background .18s}
.category .item:hover,.category .item:focus-visible{transform:translateY(-3px);border-color:var(--cat-texto);
  box-shadow:6px 6px 0 color-mix(in srgb, var(--cat) 20%, transparent);background:var(--papel);outline:none}
.category .item .txt{flex:1;min-width:0}
.category .item .nom{display:block;font-family:var(--display);font-weight:700;font-size:16.5px;letter-spacing:-.01em}
.category .item .sub{display:block;font-family:var(--dato);font-size:11px;color:var(--gris);margin-top:3px}
.category .item .ir{color:var(--nube-2);font-size:18px;transition:transform .18s,color .18s}
.category .item:hover .ir{transform:translateX(4px);color:var(--cat-texto)}
.category .item.destacado{background:var(--cat-banda);border-color:var(--cat-banda)}
.category .item.destacado .nom{color:#FFFFFF}
.category .item.destacado .sub{color:#FFFFFF;opacity:.85}
.category .item.destacado .ir{color:var(--sobre-violeta-tenue)}
.category .item.destacado:hover{box-shadow:6px 6px 0 color-mix(in srgb, var(--cat) 45%, #000000)}
.category .sinres{padding:34px 0;color:var(--gris);font-size:16px}
.category .faq{margin-top:64px;border-top:2px solid var(--tinta);padding-top:38px}
.category .faq h2{font-size:clamp(26px,3.6vw,38px);margin-bottom:24px}
.category details{border-bottom:1px solid var(--linea);padding:0}
.category summary{cursor:pointer;list-style:none;padding:18px 0;font-family:var(--display);font-weight:700;
  font-size:18.5px;display:flex;justify-content:space-between;gap:20px;align-items:flex-start}
.category summary::-webkit-details-marker{display:none}
.category summary::after{content:"+";font-family:var(--dato);color:var(--cat-texto);font-size:22px;line-height:1;flex:none}
.category details[open] summary::after{content:"–"}
.category details p{margin:0 0 20px;max-width:70ch;color:var(--gris)}
.category details p b{color:var(--tinta);font-weight:600}
.category .cierre{margin:64px 0 0;background:var(--nube);border:1px solid var(--linea);padding:30px 32px;display:flex;gap:26px;align-items:center;flex-wrap:wrap}
.category .cierre h2{font-size:24px;margin-bottom:6px}
.category .cierre p{margin:0;color:var(--gris);font-size:16px;max-width:56ch}
.category .cierre a{font-family:var(--dato);font-size:13px;font-weight:500;letter-spacing:.06em;text-decoration:none;
  background:var(--tinta);color:var(--sobre-tinta);padding:14px 22px;white-space:nowrap;
  box-shadow:4px 4px 0 var(--cat-texto);transition:transform .16s,box-shadow .16s}
.category .cierre a:hover{transform:translate(-2px,-2px);box-shadow:6px 6px 0 var(--cat-texto)}

/* ===== ARTICULO ===== */
.single .maqueta-aviso{background:var(--precio);color:var(--precio-tinta);font-family:var(--dato);
  font-size:12.5px;line-height:1.5;padding:11px 0;font-weight:500}
.single .cabecera{background:var(--cat-banda);color:var(--sobre-violeta);padding:24px 0 46px}
.single .miga{font-family:var(--dato);font-size:12px;color:var(--sobre-violeta-tenue);margin:0 0 28px;display:flex;gap:8px;flex-wrap:wrap}
.single .miga a{text-decoration:none;border-bottom:1px solid transparent}
.single .miga a:hover{border-color:var(--precio)}
.single .cabecera h1{font-size:clamp(36px,5.6vw,62px);color:var(--sobre-violeta);max-width:19ch;margin-bottom:22px}
.single .firma{display:flex;gap:26px;flex-wrap:wrap;font-family:var(--dato);font-size:12px;color:var(--sobre-violeta-tenue);align-items:center}
.single .firma b{color:var(--sobre-violeta);font-weight:500}
.single .sello{display:inline-flex;align-items:center;gap:7px;background:var(--precio);color:var(--precio-tinta);padding:5px 11px;font-weight:600}
.single .sello svg{width:13px;height:13px;stroke:currentColor;fill:none;stroke-width:2.6}
.single .grid{display:grid;grid-template-columns:1fr 260px;gap:56px;align-items:start;padding:48px 0 0;
  grid-template-areas:"art idx"}
.single article{grid-area:art}
.single .indice{grid-area:idx}
.single article{min-width:0;max-width:72ch}
.single article h2{font-size:clamp(26px,3.4vw,36px);margin:52px 0 16px}
.single article h3{font-size:21px;margin:34px 0 10px}
.single article p{margin:0 0 18px}
.single article strong{font-weight:600}
.single article ul{margin:0 0 20px;padding-left:22px}
.single article li{margin-bottom:9px}
.single .tldr{background:var(--nube);border-left:5px solid var(--precio-legible);
  padding:22px 24px;margin:0 0 34px;font-size:19px;line-height:1.6}
.single .tldr b{font-weight:600}
.single .tldr .et{display:block;font-family:var(--dato);font-size:11px;letter-spacing:.14em;
  text-transform:uppercase;color:var(--gris);margin-bottom:9px;font-weight:600}
.single .indice{position:sticky;top:86px;font-family:var(--dato);font-size:13px}
.single .indice p{margin:0 0 12px;font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--gris);font-weight:600}
.single .indice ol{list-style:none;margin:0;padding:0;border-left:2px solid var(--linea)}
.single .indice li a{display:block;padding:7px 0 7px 14px;text-decoration:none;color:var(--gris);border-left:2px solid transparent;margin-left:-2px;transition:color .16s,border-color .16s}
.single .indice li a:hover{color:var(--cat-texto);border-color:var(--cat-texto)}
.single .indice li a[aria-current="true"]{color:var(--tinta);border-color:var(--precio-legible);font-weight:500}
@media(max-width:960px){.single .grid{grid-template-columns:1fr;gap:0;grid-template-areas:"idx" "art"}
.single .indice{position:sticky;top:62px;z-index:40;background:var(--papel);
    margin:0 0 30px;padding:12px 0;border-bottom:1px solid var(--linea)}
.single .indice p{margin-bottom:8px}
.single .indice ol{display:flex;gap:8px;border-left:0;overflow-x:auto;padding-bottom:4px;
    scrollbar-width:none}
.single .indice ol::-webkit-scrollbar{display:none}
.single .indice li{flex:none}
.single .indice li a{padding:7px 13px;border:1px solid var(--linea);border-radius:100px;margin:0;
    white-space:nowrap;font-size:12px}
.single .indice li a[aria-current="true"]{background:var(--cat-banda);border-color:var(--cat-banda);color:#FFFFFF}
}
.single .envoltura{overflow-x:auto;margin:0 0 12px}
.single table{width:100%;border-collapse:collapse;font-size:15.5px;min-width:560px}
.single th{font-family:var(--dato);font-size:10.5px;text-transform:uppercase;letter-spacing:.12em;
  text-align:left;padding:11px 12px;background:var(--cat-banda);color:#FFFFFF;font-weight:500}
.single td{padding:12px;border-bottom:1px solid var(--linea);vertical-align:top}
.single tr:nth-child(even) td{background:var(--papel-2)}
.single td.p{font-family:var(--dato);font-weight:600;white-space:nowrap;font-variant-numeric:tabular-nums}
.single td .fecha{display:block;font-family:var(--dato);font-size:10.5px;color:var(--gris);font-weight:400;margin-top:2px}
.single .tienda{font-weight:600}
.single .tienda small{display:block;font-family:var(--dato);font-size:10.5px;color:var(--gris);font-weight:400;letter-spacing:.03em;text-transform:uppercase;margin-top:2px}
.single .pie-tabla{font-family:var(--dato);font-size:11.5px;color:var(--gris);margin:0 0 34px;line-height:1.6}
.single .super{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;margin:0 0 14px}
.single .super div{border:1px solid var(--linea);background:var(--papel-2);padding:18px 18px 16px}
.single .super b{display:block;font-family:var(--display);font-weight:700;font-size:17px;margin-bottom:8px}
.single .super i{font-style:normal;font-family:var(--dato);font-size:12.5px;font-weight:600;
  display:inline-block;padding:3px 9px;margin-bottom:8px}
.single .super .n i{background:var(--no);color:var(--sobre-semaforo)}
.single .super .s i{background:var(--si);color:var(--sobre-semaforo)}
.single .super p{margin:0;font-size:14.5px;color:var(--gris);line-height:1.55}
@media(max-width:720px){.single .super{grid-template-columns:1fr}
}
.single .captura{border:2px dashed var(--nube-2);background:var(--papel-2);padding:26px 24px;margin:0 0 12px;text-align:center}
.single .captura svg{width:34px;height:34px;stroke:var(--cat-texto);fill:none;stroke-width:1.6;margin-bottom:10px}
.single .captura b{display:block;font-family:var(--display);font-weight:700;font-size:16px;margin-bottom:4px}
.single .captura span{font-family:var(--dato);font-size:11.5px;color:var(--gris);line-height:1.6;display:block}
.single figcaption{font-family:var(--dato);font-size:11.5px;color:var(--gris);margin:0 0 34px;line-height:1.6}
.single figure{margin:0}
.single .comercio{border:1px solid var(--linea);padding:20px 22px;margin:0 0 12px;display:flex;gap:20px;align-items:flex-start;background:var(--papel-2)}
.single .nota{flex:none;width:56px;height:56px;display:grid;place-items:center;background:var(--cat-banda);
  color:#FFFFFF;font-family:var(--display);font-weight:800;font-size:19px;letter-spacing:-.03em}
.single .comercio .info{flex:1;min-width:0}
.single .comercio h3{font-size:19px;margin:0 0 4px}
.single .comercio .meta{font-family:var(--dato);font-size:11.5px;color:var(--gris);margin:0 0 10px;line-height:1.7}
.single .comercio .meta span{display:inline-block;margin-right:14px}
.single .comercio p.dicen{margin:0;font-size:15.5px;line-height:1.6}
.single .comercio p.dicen b{font-weight:600}
@media(max-width:620px){.single .comercio{flex-direction:column;gap:12px}
}
.single .aviso-caja{border:1px solid var(--linea);border-left:5px solid var(--cat-texto);background:var(--papel-2);padding:18px 22px;margin:0 0 24px;font-size:16px}
.single .aviso-caja b{font-weight:600}
.single details{border-bottom:1px solid var(--linea)}
.single summary{cursor:pointer;list-style:none;padding:17px 0;font-family:var(--display);font-weight:700;font-size:18px;display:flex;justify-content:space-between;gap:18px}
.single summary::-webkit-details-marker{display:none}
.single summary::after{content:"+";font-family:var(--dato);color:var(--cat-texto);font-size:21px;line-height:1;flex:none}
.single details[open] summary::after{content:"–"}
.single details p{margin:0 0 18px;color:var(--gris);font-size:16.5px}
.single details p b{color:var(--tinta)}
.single .metodo-caja{background:var(--nube);border:1px solid var(--linea);padding:26px 28px;margin:44px 0 0}
.single .metodo-caja h2{font-size:22px;margin:0 0 14px}
.single .metodo-caja ul{margin:0 0 18px;padding-left:20px;font-family:var(--dato);font-size:13.5px;line-height:1.9}
.single .metodo-caja .log{border-top:1px solid var(--nube-2);padding-top:16px;font-family:var(--dato);font-size:12.5px;color:var(--gris);line-height:1.9;margin:0}
.single .metodo-caja .log b{color:var(--tinta);font-weight:600}
.single .autor{display:flex;gap:18px;align-items:center;border-top:2px solid var(--tinta);margin-top:44px;padding-top:24px}
.single .autor .ini{flex:none;width:54px;height:54px;display:grid;place-items:center;background:var(--cat-banda);color:var(--sobre-semaforo);font-family:var(--display);font-weight:800;font-size:21px}
.single .autor b{display:block;font-family:var(--display);font-weight:700;font-size:17px}
.single .autor span{font-family:var(--dato);font-size:12px;color:var(--gris);line-height:1.6;display:block;margin-top:3px}
.single .siguientes{margin:54px 0 0}
.single .siguientes h2{font-size:24px;margin-bottom:16px}
.single .enlaces{display:grid;grid-template-columns:repeat(3,1fr);gap:12px}
.single .enlaces a{display:block;padding:18px 20px;border:1px solid var(--linea);background:var(--papel-2);text-decoration:none;
  transition:transform .18s,box-shadow .18s,border-color .18s}
.single .enlaces a:hover{transform:translateY(-3px);border-color:var(--cat-texto);box-shadow:6px 6px 0 color-mix(in srgb, var(--cat) 20%, transparent)}
.single .enlaces b{display:block;font-family:var(--display);font-weight:700;font-size:16.5px;letter-spacing:-.01em}
.single .enlaces span{font-family:var(--dato);font-size:11px;color:var(--cat-texto);text-transform:uppercase;letter-spacing:.1em;display:block;margin-top:5px}
@media(max-width:760px){.single .enlaces{grid-template-columns:1fr}
}

</style>
<?php }

function cr_menu() {
	return array(
		'/#categorias'          => 'Categorías',
		'/como-verificamos/'    => 'Cómo verificamos',
		'/categoria/temporada/' => 'Temporada',
	);
}

function cr_cabecera() {
	$m = cr_menu(); ?>
<a class="salta" href="#contenido">Saltar al contenido</a>
<header class="top">
  <div class="env top-in">
    <a class="marca" href="<?php echo esc_url( home_url( '/' ) ); ?>"><b>Comprarlo</b><span>España</span></a>
    <nav class="nav-d">
      <?php foreach ( $m as $u => $t ) { printf( '<a href="%s">%s</a>', esc_url( home_url( $u ) ), esc_html( $t ) ); } ?>
    </nav>
    <button class="menu" id="menu" type="button" aria-expanded="false" aria-controls="nav-m" aria-label="Abrir menú"><span></span><span></span><span></span></button>
  </div>
  <nav class="nav-m" id="nav-m" hidden>
    <?php foreach ( $m as $u => $t ) { printf( '<a href="%s">%s</a>', esc_url( home_url( $u ) ), esc_html( $t ) ); } ?>
  </nav>
</header>
<?php }

function cr_pie() { ?>
<footer class="cr">
  <div class="env">
    <div class="pie">
      <a class="marca" href="<?php echo esc_url( home_url( '/' ) ); ?>"><b>Comprarlo</b><span>España</span></a>
      <nav>
        <a href="<?php echo esc_url( home_url( '/quienes-somos/' ) ); ?>">Quiénes somos</a>
        <a href="<?php echo esc_url( home_url( '/como-verificamos/' ) ); ?>">Cómo verificamos</a>
        <a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>">Contacto</a>
        <a href="<?php echo esc_url( home_url( '/aviso-legal/' ) ); ?>">Aviso legal</a>
        <a href="<?php echo esc_url( home_url( '/politica-de-privacidad/' ) ); ?>">Privacidad</a>
        <a href="<?php echo esc_url( home_url( '/politica-de-cookies/' ) ); ?>">Cookies</a>
      </nav>
    </div>
    <p class="legal">Comprarlo España no vende nada. Enlazamos a las tiendas donde hemos comprobado el producto y no cobramos por aparecer en las fichas. Los precios y las valoraciones llevan siempre la fecha en la que se consultaron y cambian.</p>
  </div>
</footer>
<script>
(function(){
  var b=document.getElementById("menu"), n=document.getElementById("nav-m");
  if(!b||!n) return;
  b.addEventListener("click",function(){
    var ab=b.getAttribute("aria-expanded")==="true";
    b.setAttribute("aria-expanded",String(!ab)); n.hidden=ab;
    b.setAttribute("aria-label",ab?"Abrir menú":"Cerrar menú");
  });
  n.addEventListener("click",function(e){
    if(e.target.closest("a")){b.setAttribute("aria-expanded","false");n.hidden=true;}
  });
})();
</script>
<?php }

/* ===== ajustes de una sola vez + rutas ===== */
add_action( 'init', function () {
	add_rewrite_rule( '^llms\.txt$', 'index.php?cr_llms=1', 'top' );
	if ( get_option( 'cr_shell_v' ) !== '2' ) {
		update_option( 'category_base', 'categoria' );
		flush_rewrite_rules();
		update_option( 'cr_shell_v', '2' );
	}
	foreach ( array( 'cr_color', 'cr_icono', 'cr_intro', 'cr_entra', 'cr_no', 'cr_faq' ) as $k ) {
		register_term_meta( 'category', $k, array( 'type' => 'string', 'single' => true, 'show_in_rest' => true,
			'auth_callback' => function () { return current_user_can( 'manage_categories' ); } ) );
	}
	register_post_meta( 'post', 'cr_vol', array( 'type' => 'integer', 'single' => true, 'show_in_rest' => true,
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); } ) );
	register_post_meta( 'post', 'cr_sub', array( 'type' => 'string', 'single' => true, 'show_in_rest' => true,
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); } ) );
} );
add_filter( 'query_vars', function ( $v ) { $v[] = 'cr_llms'; return $v; } );

/* ===== datos ===== */
function cr_cat_datos( $term ) {
	$m = function ( $k ) use ( $term ) { return (string) get_term_meta( $term->term_id, $k, true ); };
	return array(
		'id'     => $term->term_id,
		'nombre' => $term->name,
		'slug'   => $term->slug,
		'url'    => get_term_link( $term ),
		'color'  => $m( 'cr_color' ) ?: '#4C1D95',
		'icono'  => $m( 'cr_icono' ),
		'intro'  => $m( 'cr_intro' ),
		'entra'  => $m( 'cr_entra' ),
		'no'     => $m( 'cr_no' ),
		'faq'    => $m( 'cr_faq' ),
		'n'      => (int) $term->count,
	);
}
function cr_post_cat( $post_id ) {
	$cats = get_the_category( $post_id );
	if ( empty( $cats ) ) { return null; }
	foreach ( $cats as $c ) { if ( $c->slug !== 'uncategorized' ) { return $c; } }
	return $cats[0];
}
function cr_productos_publicados() {
	$q = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1,
		'orderby' => 'title', 'order' => 'ASC', 'no_found_rows' => true ) );
	$out = array();
	foreach ( $q->posts as $p ) {
		$c = cr_post_cat( $p->ID );
		$out[] = array( 'n' => html_entity_decode( get_the_title( $p ), ENT_QUOTES, 'UTF-8' ), 'c' => $c ? $c->name : '',
			'k' => $c ? $c->slug : '', 'u' => get_permalink( $p ), 'v' => (int) get_post_meta( $p->ID, 'cr_vol', true ) );
	}
	return $out;
}

/* ===== renderizadores ===== */
function cr_render_categoria( $term ) {
	$d = cr_cat_datos( $term );
	$posts = get_posts( array( 'category' => $term->term_id, 'posts_per_page' => -1, 'post_status' => 'publish',
		'meta_key' => 'cr_vol', 'orderby' => 'meta_value_num', 'order' => 'DESC' ) );
	$sin_vol = get_posts( array( 'category' => $term->term_id, 'posts_per_page' => -1, 'post_status' => 'publish',
		'meta_query' => array( array( 'key' => 'cr_vol', 'compare' => 'NOT EXISTS' ) ), 'orderby' => 'title', 'order' => 'ASC' ) );
	$posts = array_merge( $posts, $sin_vol );
	$n = count( $posts );
	?>
<div class="cabecera">
  <div class="env">
    <p class="miga"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Inicio</a> <span>/</span> <a href="<?php echo esc_url( home_url( '/#categorias' ) ); ?>">Categorías</a> <span>/</span> <span><?php echo esc_html( $d['nombre'] ); ?></span></p>
    <div class="cab-flex">
      <div class="cab-txt">
        <?php if ( $d['icono'] ) : ?><span class="cab-icono"><svg viewBox="0 0 24 24" aria-hidden="true"><?php echo $d['icono']; ?></svg></span><?php endif; ?>
        <h1><?php echo esc_html( $d['nombre'] ); ?></h1>
        <?php if ( $d['intro'] ) : ?><p class="intro"><?php echo $d['intro']; ?></p><?php endif; ?>
      </div>
      <div class="cab-datos">
        <div><b><?php echo $n; ?></b><span><?php echo $n === 1 ? 'producto con ficha' : 'productos con ficha'; ?></span></div>
        <div><b>&#9679;</b><span>Revisión manual constante</span></div>
      </div>
    </div>
  </div>
</div>
<?php if ( $d['entra'] || $d['no'] ) : ?>
<div class="entra">
  <div class="env entra-in">
    <?php if ( $d['entra'] ) : ?><div><h2>Qué entra en esta categoría</h2><p><?php echo $d['entra']; ?></p></div><?php endif; ?>
    <?php if ( $d['no'] ) : ?><div><h2>Qué no vas a encontrar</h2><p><?php echo $d['no']; ?></p></div><?php endif; ?>
  </div>
</div>
<?php endif; ?>
<main class="env">
  <?php if ( $n ) : ?>
  <div class="barra">
    <input id="f" type="search" autocomplete="off" placeholder="Filtrar dentro de <?php echo esc_attr( mb_strtolower( $d['nombre'] ) ); ?>..." aria-label="Filtrar productos de la categoría">
    <span class="cuenta" id="cuenta"></span>
    <div class="orden" role="group" aria-label="Ordenar">
      <button type="button" data-o="buscado" aria-pressed="true">Más buscado</button>
      <button type="button" data-o="az" aria-pressed="false">A-Z</button>
    </div>
  </div>
  <div class="lista" id="lista"></div>
  <script>
  const P = <?php echo wp_json_encode( array_map( function ( $p ) {
	return array( 'n' => html_entity_decode( get_the_title( $p ), ENT_QUOTES, 'UTF-8' ), 's' => (string) get_post_meta( $p->ID, 'cr_sub', true ), 'u' => get_permalink( $p ) );
  }, $posts ), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); ?>;
  const lista=document.getElementById("lista"),cuenta=document.getElementById("cuenta"),filtro=document.getElementById("f");
  let orden="buscado";
  const norm=s=>s.normalize("NFD").replace(/[\u0300-\u036f]/g,"").toLowerCase();
  function pinta(){
    const t=norm(filtro.value.trim());
    let l=t?P.filter(p=>norm(p.n).includes(t)||norm(p.s).includes(t)):P.slice();
    if(orden==="az") l.sort((a,b)=>a.n.localeCompare(b.n,"es"));
    cuenta.textContent=l.length+(l.length===1?" producto":" productos");
    if(!l.length){lista.innerHTML='<p class="sinres">No hay ninguna ficha que encaje con eso. Escríbenos y la preparamos.</p>';return;}
    lista.innerHTML=l.map((p,i)=>'<a class="item'+(i===0&&orden==="buscado"&&!t&&P.length>1?" destacado":"")+'" href="'+p.u+'">'+
      '<span class="txt"><span class="nom">'+p.n+'</span><span class="sub">'+((i===0&&orden==="buscado"&&!t&&P.length>1)?"LO MÁS BUSCADO DE LA CATEGORÍA":p.s)+'</span></span>'+
      '<span class="ir" aria-hidden="true">&rarr;</span></a>').join("");
  }
  filtro.addEventListener("input",pinta);
  document.querySelector(".orden").addEventListener("click",e=>{const b=e.target.closest("button");if(!b)return;orden=b.dataset.o;
    document.querySelectorAll(".orden button").forEach(x=>x.setAttribute("aria-pressed",x===b?"true":"false"));pinta();});
  pinta();
  </script>
  <?php else : ?>
  <p class="sinres">Las primeras fichas de esta categoría están en preparación. Si buscas algo concreto, escríbenos y la preparamos antes.</p>
  <?php endif; ?>
  <?php if ( $d['faq'] ) : ?>
  <section class="faq">
    <h2>Preguntas que nos llegan sobre <?php echo esc_html( mb_strtolower( $d['nombre'] ) ); ?></h2>
    <?php echo $d['faq']; ?>
  </section>
  <?php endif; ?>
  <div class="cierre">
    <div>
      <h2>¿Falta algo en esta categoría?</h2>
      <p>Si buscas algo de <?php echo esc_html( mb_strtolower( $d['nombre'] ) ); ?> y no tiene ficha, dínoslo. Los huecos que nos marcáis son los que preparamos antes.</p>
    </div>
    <a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>">Escríbenos &rarr;</a>
  </div>
</main>
	<?php
}

function cr_render_lista_simple( $titulo ) { ?>
<main class="env cr-lista-simple">
  <h1><?php echo esc_html( $titulo ); ?></h1>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?><small><?php $c = cr_post_cat( get_the_ID() ); echo $c ? esc_html( $c->name ) : ''; ?></small></a>
  <?php endwhile; else : ?>
    <p>No hay nada por aquí todavía.</p>
  <?php endif; ?>
</main>
<?php }

function cr_render_404() { ?>
<main class="env cr-404">
  <h1>Esto no lo tenemos</h1>
  <p>La página que buscas no existe o ya no está. Prueba con el buscador de la <a href="<?php echo esc_url( home_url( '/' ) ); ?>">portada</a> o entra en una categoría.</p>
</main>
<?php }

function cr_llms_txt() {
	header( 'Content-Type: text/plain; charset=utf-8' );
	echo "# Comprarlo España\n\n> Dónde comprar lo que necesitas en España, con tiendas y precios verificados. Cada precio lleva la fecha en la que se comprobó; cada tienda física, su nota y número de reseñas en Google Maps.\n\n";
	echo "## Categorías\n\n";
	foreach ( get_categories( array( 'hide_empty' => false ) ) as $t ) {
		if ( $t->slug === 'uncategorized' ) { continue; }
		echo "- [" . $t->name . "](" . get_term_link( $t ) . ")\n";
	}
	echo "\n## Fichas de producto\n\n";
	foreach ( cr_productos_publicados() as $p ) { echo "- [" . $p['n'] . "](" . $p['u'] . ")\n"; }
	foreach ( array( 'quienes-somos', 'como-verificamos', 'contacto' ) as $s ) {
		$pg = get_page_by_path( $s );
		if ( $pg && $pg->post_status === 'publish' ) { echo "\n- [" . $pg->post_title . "](" . get_permalink( $pg ) . ")"; }
	}
	echo "\n";
	exit;
}

/* ===== la pagina entera la pintamos nosotros ===== */
add_action( 'template_redirect', function () {

	if ( is_admin() || is_feed() || is_robots() || is_embed() ) { return; }
	if ( get_query_var( 'cr_llms' ) ) { cr_llms_txt(); }

	$estilo = '';
	if ( is_category() ) {
		$d = cr_cat_datos( get_queried_object() ); $estilo = ' style="--cat:' . esc_attr( $d['color'] ) . '"';
	} elseif ( is_singular( 'post' ) ) {
		$c = cr_post_cat( get_queried_object_id() );
		if ( $c ) { $d = cr_cat_datos( $c ); $estilo = ' style="--cat:' . esc_attr( $d['color'] ) . '"'; }
	}

	if ( is_404() ) { status_header( 404 ); } else { status_header( 200 ); }
	?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,700;12..96,800&family=IBM+Plex+Mono:wght@400;500;600&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600&display=swap">
<?php cr_shell_css(); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); echo $estilo; ?>>
<?php cr_cabecera(); ?>
<div id="contenido">
<?php
	if ( is_front_page() && is_page() ) {
		$cats = array();
		foreach ( get_categories( array( 'hide_empty' => false ) ) as $t ) {
			if ( $t->slug === 'uncategorized' ) { continue; }
			$d = cr_cat_datos( $t );
			$ej = get_posts( array( 'category' => $t->term_id, 'posts_per_page' => 8, 'post_status' => 'publish',
				'meta_key' => 'cr_vol', 'orderby' => 'meta_value_num', 'order' => 'DESC' ) );
			$d['e'] = array_map( function ( $p ) { return html_entity_decode( get_the_title( $p ), ENT_QUOTES, 'UTF-8' ); }, $ej );
			$cats[] = $d;
		}
		echo '<script>window.CR_DATOS=' . wp_json_encode( array( 'categorias' => $cats, 'productos' => cr_productos_publicados() ),
			JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . ';</script>';
	}
	if ( is_404() ) {
		cr_render_404();
	} elseif ( is_category() ) {
		cr_render_categoria( get_queried_object() );
	} elseif ( is_singular() ) {
		while ( have_posts() ) { the_post(); echo apply_filters( 'the_content', get_post_field( 'post_content', get_the_ID() ) ); }
	} elseif ( is_search() ) {
		cr_render_lista_simple( 'Resultados para "' . get_search_query() . '"' );
	} else {
		cr_render_lista_simple( 'Últimas fichas' );
	}
?>
</div>
<?php cr_pie(); ?>
<?php wp_footer(); ?>
</body>
</html>
	<?php
	exit;
}, 1 );

/* Fuera el CSS del tema: pintamos nosotros. */
add_action( 'wp_enqueue_scripts', function () {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'twentytwentyfive-style' );
	wp_dequeue_style( 'classic-theme-styles' );
}, 100 );

/* Sin parrafos automaticos: el HTML de las fichas se escribe a mano. */
remove_filter( 'the_content', 'wpautop' );

}
