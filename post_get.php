<!DOCTYPE html>
<html lang="en"><head>
<script src="formularios-php_files/libs/clipboard/clipboard.min.js"></script>
<script src="formularios-php_files/libs/quarto-html/tabby.min.js"></script>
<script src="formularios-php_files/libs/quarto-html/popper.min.js"></script>
<script src="formularios-php_files/libs/quarto-html/tippy.umd.min.js"></script>
<link href="formularios-php_files/libs/quarto-html/tippy.css" rel="stylesheet">
<link href="formularios-php_files/libs/quarto-html/light-border.css" rel="stylesheet">
<link href="formularios-php_files/libs/quarto-html/quarto-syntax-highlighting-2f5df379a58b258e96c21c0638c20c03.css" rel="stylesheet" id="quarto-text-highlighting-styles"><meta charset="utf-8">
  <meta name="generator" content="quarto-1.6.42">

  <meta name="author" content="Joaquín">
  <title>Formularios en PHP: Métodos POST y GET</title>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
  <link rel="stylesheet" href="formularios-php_files/libs/revealjs/dist/reset.css">
  <link rel="stylesheet" href="formularios-php_files/libs/revealjs/dist/reveal.css">
  <style>
    code{white-space: pre-wrap;}
    span.smallcaps{font-variant: small-caps;}
    div.columns{display: flex; gap: min(4vw, 1.5em);}
    div.column{flex: auto; overflow-x: auto;}
    div.hanging-indent{margin-left: 1.5em; text-indent: -1.5em;}
    ul.task-list{list-style: none;}
    ul.task-list li input[type="checkbox"] {
      width: 0.8em;
      margin: 0 0.8em 0.2em -1em; /* quarto-specific, see https://github.com/quarto-dev/quarto-cli/issues/4556 */ 
      vertical-align: middle;
    }
    /* CSS for syntax highlighting */
    pre > code.sourceCode { white-space: pre; position: relative; }
    pre > code.sourceCode > span { line-height: 1.25; }
    pre > code.sourceCode > span:empty { height: 1.2em; }
    .sourceCode { overflow: visible; }
    code.sourceCode > span { color: inherit; text-decoration: inherit; }
    div.sourceCode { margin: 1em 0; }
    pre.sourceCode { margin: 0; }
    @media screen {
    div.sourceCode { overflow: auto; }
    }
    @media print {
    pre > code.sourceCode { white-space: pre-wrap; }
    pre > code.sourceCode > span { display: inline-block; text-indent: -5em; padding-left: 5em; }
    }
    pre.numberSource code
      { counter-reset: source-line 0; }
    pre.numberSource code > span
      { position: relative; left: -4em; counter-increment: source-line; }
    pre.numberSource code > span > a:first-child::before
      { content: counter(source-line);
        position: relative; left: -1em; text-align: right; vertical-align: baseline;
        border: none; display: inline-block;
        -webkit-touch-callout: none; -webkit-user-select: none;
        -khtml-user-select: none; -moz-user-select: none;
        -ms-user-select: none; user-select: none;
        padding: 0 4px; width: 4em;
        color: #aaaaaa;
      }
    pre.numberSource { margin-left: 3em; border-left: 1px solid #aaaaaa;  padding-left: 4px; }
    div.sourceCode
      { color: #003b4f; background-color: #f1f3f5; }
    @media screen {
    pre > code.sourceCode > span > a:first-child::before { text-decoration: underline; }
    }
    code span { color: #003b4f; } /* Normal */
    code span.al { color: #ad0000; } /* Alert */
    code span.an { color: #5e5e5e; } /* Annotation */
    code span.at { color: #657422; } /* Attribute */
    code span.bn { color: #ad0000; } /* BaseN */
    code span.bu { } /* BuiltIn */
    code span.cf { color: #003b4f; font-weight: bold; } /* ControlFlow */
    code span.ch { color: #20794d; } /* Char */
    code span.cn { color: #8f5902; } /* Constant */
    code span.co { color: #5e5e5e; } /* Comment */
    code span.cv { color: #5e5e5e; font-style: italic; } /* CommentVar */
    code span.do { color: #5e5e5e; font-style: italic; } /* Documentation */
    code span.dt { color: #ad0000; } /* DataType */
    code span.dv { color: #ad0000; } /* DecVal */
    code span.er { color: #ad0000; } /* Error */
    code span.ex { } /* Extension */
    code span.fl { color: #ad0000; } /* Float */
    code span.fu { color: #4758ab; } /* Function */
    code span.im { color: #00769e; } /* Import */
    code span.in { color: #5e5e5e; } /* Information */
    code span.kw { color: #003b4f; font-weight: bold; } /* Keyword */
    code span.op { color: #5e5e5e; } /* Operator */
    code span.ot { color: #003b4f; } /* Other */
    code span.pp { color: #ad0000; } /* Preprocessor */
    code span.sc { color: #5e5e5e; } /* SpecialChar */
    code span.ss { color: #20794d; } /* SpecialString */
    code span.st { color: #20794d; } /* String */
    code span.va { color: #111111; } /* Variable */
    code span.vs { color: #20794d; } /* VerbatimString */
    code span.wa { color: #5e5e5e; font-style: italic; } /* Warning */
  </style>
  <link rel="stylesheet" href="formularios-php_files/libs/revealjs/dist/theme/quarto-2f366650f320edcfcf53d73c80250a32.css">
  <link href="formularios-php_files/libs/revealjs/plugin/quarto-line-highlight/line-highlight.css" rel="stylesheet">
  <link href="formularios-php_files/libs/revealjs/plugin/reveal-menu/menu.css" rel="stylesheet">
  <link href="formularios-php_files/libs/revealjs/plugin/reveal-menu/quarto-menu.css" rel="stylesheet">
  <link href="formularios-php_files/libs/revealjs/plugin/quarto-support/footer.css" rel="stylesheet">
  <style type="text/css">
    .reveal div.sourceCode {
      margin: 0;
      overflow: auto;
    }
    .reveal div.hanging-indent {
      margin-left: 1em;
      text-indent: -1em;
    }
    .reveal .slide:not(.center) {
      height: 100%;
    }
    .reveal .slide.scrollable {
      overflow-y: auto;
    }
    .reveal .footnotes {
      height: 100%;
      overflow-y: auto;
    }
    .reveal .slide .absolute {
      position: absolute;
      display: block;
    }
    .reveal .footnotes ol {
      counter-reset: ol;
      list-style-type: none; 
      margin-left: 0;
    }
    .reveal .footnotes ol li:before {
      counter-increment: ol;
      content: counter(ol) ". "; 
    }
    .reveal .footnotes ol li > p:first-child {
      display: inline-block;
    }
    .reveal .slide ul,
    .reveal .slide ol {
      margin-bottom: 0.5em;
    }
    .reveal .slide ul li,
    .reveal .slide ol li {
      margin-top: 0.4em;
      margin-bottom: 0.2em;
    }
    .reveal .slide ul[role="tablist"] li {
      margin-bottom: 0;
    }
    .reveal .slide ul li > *:first-child,
    .reveal .slide ol li > *:first-child {
      margin-block-start: 0;
    }
    .reveal .slide ul li > *:last-child,
    .reveal .slide ol li > *:last-child {
      margin-block-end: 0;
    }
    .reveal .slide .columns:nth-child(3) {
      margin-block-start: 0.8em;
    }
    .reveal blockquote {
      box-shadow: none;
    }
    .reveal .tippy-content>* {
      margin-top: 0.2em;
      margin-bottom: 0.7em;
    }
    .reveal .tippy-content>*:last-child {
      margin-bottom: 0.2em;
    }
    .reveal .slide > img.stretch.quarto-figure-center,
    .reveal .slide > img.r-stretch.quarto-figure-center {
      display: block;
      margin-left: auto;
      margin-right: auto; 
    }
    .reveal .slide > img.stretch.quarto-figure-left,
    .reveal .slide > img.r-stretch.quarto-figure-left  {
      display: block;
      margin-left: 0;
      margin-right: auto; 
    }
    .reveal .slide > img.stretch.quarto-figure-right,
    .reveal .slide > img.r-stretch.quarto-figure-right  {
      display: block;
      margin-left: auto;
      margin-right: 0; 
    }
  </style>
</head>
<body class="quarto-light">
  <div class="reveal">
    <div class="slides">

<section id="title-slide" class="quarto-title-block center">
  <h1 class="title">Formularios en PHP: Métodos POST y GET</h1>

<div class="quarto-title-authors">
<div class="quarto-title-author">
<div class="quarto-title-author-name">
Joaquín 
</div>
</div>
</div>

  <p class="date">Invalid Date</p>
</section>
<section>
<section id="introducción" class="title-slide slide level1 center">
<h1>Introducción</h1>
<p>En esta presentación explicaremos cómo crear un formulario en PHP que recopile datos personales y los envíe a otra página utilizando los métodos <strong>POST</strong> y <strong>GET</strong>.</p>
</section>
<section class="slide level2">

</section></section>
<section>
<section id="métodos-post-y-get" class="title-slide slide level1 center">
<h1>Métodos POST y GET</h1>
<ul>
<li><strong>POST:</strong> Envía los datos en el cuerpo de la solicitud, no visibles en la URL.</li>
<li><strong>GET:</strong> Envía los datos como parámetros en la URL.</li>
<li>POST es más seguro para datos sensibles.</li>
<li>GET es útil cuando se quiere compartir o guardar la consulta en un enlace.</li>
</ul>
</section>
<section class="slide level2">

</section></section>
<section>
<section id="formulario-en-php" class="title-slide slide level1 center">
<h1>Formulario en PHP</h1>
<p>Aquí está el código de un formulario en HTML que envía los datos por POST:</p>
<div class="sourceCode" id="cb1"><pre class="sourceCode numberSource php number-lines code-with-copy"><code class="sourceCode php"><span id="cb1-1"><a href=""></a><span class="op">&lt;</span>form action<span class="op">=</span><span class="st">"procesar.php"</span> method<span class="op">=</span><span class="st">"post"</span><span class="op">&gt;</span></span>
<span id="cb1-2"><a href=""></a>    <span class="op">&lt;</span>label <span class="cf">for</span><span class="op">=</span><span class="st">"nombre"</span><span class="op">&gt;</span>Nombre<span class="ot">:</span><span class="op">&lt;/</span>label<span class="op">&gt;</span></span>
<span id="cb1-3"><a href=""></a>    <span class="op">&lt;</span>input type<span class="op">=</span><span class="st">"text"</span> id<span class="op">=</span><span class="st">"nombre"</span> name<span class="op">=</span><span class="st">"nombre"</span> required<span class="op">&gt;</span></span>
<span id="cb1-4"><a href=""></a>    <span class="op">&lt;</span>br<span class="op">&gt;</span></span>
<span id="cb1-5"><a href=""></a>    <span class="op">&lt;</span>label <span class="cf">for</span><span class="op">=</span><span class="st">"apellidos"</span><span class="op">&gt;</span>Apellidos<span class="ot">:</span><span class="op">&lt;/</span>label<span class="op">&gt;</span></span>
<span id="cb1-6"><a href=""></a>    <span class="op">&lt;</span>input type<span class="op">=</span><span class="st">"text"</span> id<span class="op">=</span><span class="st">"apellidos"</span> name<span class="op">=</span><span class="st">"apellidos"</span> required<span class="op">&gt;</span></span>
<span id="cb1-7"><a href=""></a>    <span class="op">&lt;</span>br<span class="op">&gt;</span></span>
<span id="cb1-8"><a href=""></a>    <span class="op">&lt;</span>label <span class="cf">for</span><span class="op">=</span><span class="st">"email"</span><span class="op">&gt;</span>Correo Electrónico<span class="ot">:</span><span class="op">&lt;/</span>label<span class="op">&gt;</span></span>
<span id="cb1-9"><a href=""></a>    <span class="op">&lt;</span>input type<span class="op">=</span><span class="st">"email"</span> id<span class="op">=</span><span class="st">"email"</span> name<span class="op">=</span><span class="st">"email"</span> required<span class="op">&gt;</span></span>
<span id="cb1-10"><a href=""></a>    <span class="op">&lt;</span>br<span class="op">&gt;</span></span>
<span id="cb1-11"><a href=""></a>    <span class="op">&lt;</span>button type<span class="op">=</span><span class="st">"submit"</span><span class="op">&gt;</span>Enviar con <span class="cn">POST</span><span class="op">&lt;/</span>button<span class="op">&gt;</span></span>
<span id="cb1-12"><a href=""></a><span class="op">&lt;/</span>form<span class="op">&gt;</span></span></code><button title="Copy to Clipboard" class="code-copy-button"><i class="bi"></i></button></pre></div>
</section>
<section class="slide level2">

</section></section>
<section>
<section id="explicación-del-formulario-post" class="title-slide slide level1 center">
<h1>Explicación del formulario POST</h1>
<ul>
<li>Se usa <code>method="post"</code> para enviar los datos con POST.</li>
<li>Los campos <code>input</code> permiten la introducción de datos.</li>
<li>El botón <code>submit</code> envía la información al archivo <code>procesar.php</code>.</li>
</ul>
</section>
<section class="slide level2">

</section></section>
<section>
<section id="formulario-con-get" class="title-slide slide level1 center">
<h1>Formulario con GET</h1>
<div class="sourceCode" id="cb2"><pre class="sourceCode numberSource php number-lines code-with-copy"><code class="sourceCode php"><span id="cb2-1"><a href=""></a><span class="op">&lt;</span>form action<span class="op">=</span><span class="st">"procesar.php"</span> method<span class="op">=</span><span class="st">"get"</span><span class="op">&gt;</span></span>
<span id="cb2-2"><a href=""></a>    <span class="op">&lt;</span>label <span class="cf">for</span><span class="op">=</span><span class="st">"nombre_get"</span><span class="op">&gt;</span>Nombre<span class="ot">:</span><span class="op">&lt;/</span>label<span class="op">&gt;</span></span>
<span id="cb2-3"><a href=""></a>    <span class="op">&lt;</span>input type<span class="op">=</span><span class="st">"text"</span> id<span class="op">=</span><span class="st">"nombre_get"</span> name<span class="op">=</span><span class="st">"nombre"</span> required<span class="op">&gt;</span></span>
<span id="cb2-4"><a href=""></a>    <span class="op">&lt;</span>br<span class="op">&gt;</span></span>
<span id="cb2-5"><a href=""></a>    <span class="op">&lt;</span>label <span class="cf">for</span><span class="op">=</span><span class="st">"apellidos_get"</span><span class="op">&gt;</span>Apellidos<span class="ot">:</span><span class="op">&lt;/</span>label<span class="op">&gt;</span></span>
<span id="cb2-6"><a href=""></a>    <span class="op">&lt;</span>input type<span class="op">=</span><span class="st">"text"</span> id<span class="op">=</span><span class="st">"apellidos_get"</span> name<span class="op">=</span><span class="st">"apellidos"</span> required<span class="op">&gt;</span></span>
<span id="cb2-7"><a href=""></a>    <span class="op">&lt;</span>br<span class="op">&gt;</span></span>
<span id="cb2-8"><a href=""></a>    <span class="op">&lt;</span>label <span class="cf">for</span><span class="op">=</span><span class="st">"email_get"</span><span class="op">&gt;</span>Correo Electrónico<span class="ot">:</span><span class="op">&lt;/</span>label<span class="op">&gt;</span></span>
<span id="cb2-9"><a href=""></a>    <span class="op">&lt;</span>input type<span class="op">=</span><span class="st">"email"</span> id<span class="op">=</span><span class="st">"email_get"</span> name<span class="op">=</span><span class="st">"email"</span> required<span class="op">&gt;</span></span>
<span id="cb2-10"><a href=""></a>    <span class="op">&lt;</span>br<span class="op">&gt;</span></span>
<span id="cb2-11"><a href=""></a>    <span class="op">&lt;</span>button type<span class="op">=</span><span class="st">"submit"</span><span class="op">&gt;</span>Enviar con <span class="cn">GET</span><span class="op">&lt;/</span>button<span class="op">&gt;</span></span>
<span id="cb2-12"><a href=""></a><span class="op">&lt;/</span>form<span class="op">&gt;</span></span></code><button title="Copy to Clipboard" class="code-copy-button"><i class="bi"></i></button></pre></div>
</section>
<section class="slide level2">

</section></section>
<section>
<section id="explicación-del-formulario-get" class="title-slide slide level1 center">
<h1>Explicación del formulario GET</h1>
<ul>
<li>La única diferencia es <code>method="get"</code>.</li>
<li>Los datos enviados aparecerán en la URL después de <code>?</code>.</li>
</ul>
</section>
<section class="slide level2">

</section></section>
<section>
<section id="procesando-los-datos-en-php" class="title-slide slide level1 center">
<h1>Procesando los datos en PHP</h1>
<div class="sourceCode" id="cb3"><pre class="sourceCode numberSource php number-lines code-with-copy"><code class="sourceCode php"><span id="cb3-1"><a href=""></a><span class="kw">&lt;?php</span></span>
<span id="cb3-2"><a href=""></a><span class="cf">if</span> (<span class="va">$_SERVER</span>[<span class="st">"REQUEST_METHOD"</span>] <span class="op">==</span> <span class="st">"POST"</span>) {</span>
<span id="cb3-3"><a href=""></a>    <span class="va">$nombre</span> <span class="op">=</span> <span class="fu">htmlspecialchars</span>(<span class="va">$_POST</span>[<span class="st">'nombre'</span>])<span class="ot">;</span></span>
<span id="cb3-4"><a href=""></a>    <span class="va">$apellidos</span> <span class="op">=</span> <span class="fu">htmlspecialchars</span>(<span class="va">$_POST</span>[<span class="st">'apellidos'</span>])<span class="ot">;</span></span>
<span id="cb3-5"><a href=""></a>    <span class="va">$email</span> <span class="op">=</span> <span class="fu">htmlspecialchars</span>(<span class="va">$_POST</span>[<span class="st">'email'</span>])<span class="ot">;</span></span>
<span id="cb3-6"><a href=""></a>    <span class="kw">echo</span> <span class="st">"&lt;h2&gt;Datos recibidos por POST:&lt;/h2&gt;"</span><span class="ot">;</span></span>
<span id="cb3-7"><a href=""></a>    <span class="kw">echo</span> <span class="st">"Nombre: "</span> <span class="op">.</span> <span class="va">$nombre</span> <span class="op">.</span> <span class="st">"&lt;br&gt;"</span><span class="ot">;</span></span>
<span id="cb3-8"><a href=""></a>    <span class="kw">echo</span> <span class="st">"Apellidos: "</span> <span class="op">.</span> <span class="va">$apellidos</span> <span class="op">.</span> <span class="st">"&lt;br&gt;"</span><span class="ot">;</span></span>
<span id="cb3-9"><a href=""></a>    <span class="kw">echo</span> <span class="st">"Correo Electrónico: "</span> <span class="op">.</span> <span class="va">$email</span> <span class="op">.</span> <span class="st">"&lt;br&gt;"</span><span class="ot">;</span></span>
<span id="cb3-10"><a href=""></a>}</span></code><button title="Copy to Clipboard" class="code-copy-button"><i class="bi"></i></button></pre></div>
</section>
<section class="slide level2">

</section></section>
<section>
<section id="procesando-datos-con-get" class="title-slide slide level1 center">
<h1>Procesando datos con GET</h1>
<div class="sourceCode" id="cb4"><pre class="sourceCode numberSource php number-lines code-with-copy"><code class="sourceCode php"><span id="cb4-1"><a href=""></a><span class="cf">if</span> (<span class="va">$_SERVER</span>[<span class="st">"REQUEST_METHOD"</span>] <span class="op">==</span> <span class="st">"GET"</span>) {</span>
<span id="cb4-2"><a href=""></a>    <span class="va">$nombre</span> <span class="op">=</span> <span class="fu">htmlspecialchars</span>(<span class="va">$_GET</span>[<span class="st">'nombre'</span>])<span class="ot">;</span></span>
<span id="cb4-3"><a href=""></a>    <span class="va">$apellidos</span> <span class="op">=</span> <span class="fu">htmlspecialchars</span>(<span class="va">$_GET</span>[<span class="st">'apellidos'</span>])<span class="ot">;</span></span>
<span id="cb4-4"><a href=""></a>    <span class="va">$email</span> <span class="op">=</span> <span class="fu">htmlspecialchars</span>(<span class="va">$_GET</span>[<span class="st">'email'</span>])<span class="ot">;</span></span>
<span id="cb4-5"><a href=""></a>    <span class="kw">echo</span> <span class="st">"&lt;h2&gt;Datos recibidos por GET:&lt;/h2&gt;"</span><span class="ot">;</span></span>
<span id="cb4-6"><a href=""></a>    <span class="kw">echo</span> <span class="st">"Nombre: "</span> <span class="op">.</span> <span class="va">$nombre</span> <span class="op">.</span> <span class="st">"&lt;br&gt;"</span><span class="ot">;</span></span>
<span id="cb4-7"><a href=""></a>    <span class="kw">echo</span> <span class="st">"Apellidos: "</span> <span class="op">.</span> <span class="va">$apellidos</span> <span class="op">.</span> <span class="st">"&lt;br&gt;"</span><span class="ot">;</span></span>
<span id="cb4-8"><a href=""></a>    <span class="kw">echo</span> <span class="st">"Correo Electrónico: "</span> <span class="op">.</span> <span class="va">$email</span> <span class="op">.</span> <span class="st">"&lt;br&gt;"</span><span class="ot">;</span></span>
<span id="cb4-9"><a href=""></a>}</span>
<span id="cb4-10"><a href=""></a><span class="kw">?&gt;</span></span></code><button title="Copy to Clipboard" class="code-copy-button"><i class="bi"></i></button></pre></div>
</section>
<section class="slide level2">

</section></section>
<section>
<section id="comparación-entre-post-y-get" class="title-slide slide level1 center">
<h1>Comparación entre POST y GET</h1>
<table class="caption-top">
<colgroup>
<col style="width: 56%">
<col style="width: 24%">
<col style="width: 20%">
</colgroup>
<thead>
<tr class="header">
<th>Característica</th>
<th>POST</th>
<th>GET</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td>Datos en la URL</td>
<td>❌ No</td>
<td>✅ Sí</td>
</tr>
<tr class="even">
<td>Seguridad</td>
<td>✅ Más seguro</td>
<td>❌ Menos seguro</td>
</tr>
<tr class="odd">
<td>Almacenamiento en caché</td>
<td>❌ No</td>
<td>✅ Sí</td>
</tr>
<tr class="even">
<td>Envío de grandes volúmenes de datos</td>
<td>✅ Sí</td>
<td>❌ No</td>
</tr>
<tr class="odd">
<td>Uso en formularios sensibles (ej. login)</td>
<td>✅ Recomendado</td>
<td>❌ No recomendado</td>
</tr>
</tbody>
</table>
</section>
<section class="slide level2">

</section></section>
<section id="conclusión" class="title-slide slide level1 center">
<h1>Conclusión</h1>
<ul>
<li>POST es más seguro y recomendable para datos sensibles.</li>
<li>GET es útil para consultas rápidas y compartibles.</li>
<li>Es importante validar los datos en PHP para evitar problemas de seguridad.</li>
</ul>
<p>¡Ahora puedes probar ambos formularios y ver cómo funcionan! 🚀</p>

</section>
    </div>
  <div class="quarto-auto-generated-content" style="display: none;">
<div class="footer footer-default">

</div>
</div></div>

  <script>window.backupDefine = window.define; window.define = undefined;</script>
  <script src="formularios-php_files/libs/revealjs/dist/reveal.js"></script>
  <!-- reveal.js plugins -->
  <script src="formularios-php_files/libs/revealjs/plugin/quarto-line-highlight/line-highlight.js"></script>
  <script src="formularios-php_files/libs/revealjs/plugin/pdf-export/pdfexport.js"></script>
  <script src="formularios-php_files/libs/revealjs/plugin/reveal-menu/menu.js"></script>
  <script src="formularios-php_files/libs/revealjs/plugin/reveal-menu/quarto-menu.js"></script>
  <script src="formularios-php_files/libs/revealjs/plugin/quarto-support/support.js"></script>
  

  <script src="formularios-php_files/libs/revealjs/plugin/notes/notes.js"></script>
  <script src="formularios-php_files/libs/revealjs/plugin/search/search.js"></script>
  <script src="formularios-php_files/libs/revealjs/plugin/zoom/zoom.js"></script>
  <script src="formularios-php_files/libs/revealjs/plugin/math/math.js"></script>
  <script>window.define = window.backupDefine; window.backupDefine = undefined;</script>

  <script>

      // Full list of configuration options available at:
      // https://revealjs.com/config/
      Reveal.initialize({
'controlsAuto': true,
'previewLinksAuto': false,
'pdfSeparateFragments': false,
'autoAnimateEasing': "ease",
'autoAnimateDuration': 1,
'autoAnimateUnmatched': true,
'jumpToSlide': true,
'menu': {"side":"left","useTextContentForMissingTitles":true,"markers":false,"loadIcons":false,"custom":[{"title":"Tools","icon":"<i class=\"fas fa-gear\"></i>","content":"<ul class=\"slide-menu-items\">\n<li class=\"slide-tool-item active\" data-item=\"0\"><a href=\"#\" onclick=\"RevealMenuToolHandlers.fullscreen(event)\"><kbd>f</kbd> Fullscreen</a></li>\n<li class=\"slide-tool-item\" data-item=\"1\"><a href=\"#\" onclick=\"RevealMenuToolHandlers.speakerMode(event)\"><kbd>s</kbd> Speaker View</a></li>\n<li class=\"slide-tool-item\" data-item=\"2\"><a href=\"#\" onclick=\"RevealMenuToolHandlers.overview(event)\"><kbd>o</kbd> Slide Overview</a></li>\n<li class=\"slide-tool-item\" data-item=\"3\"><a href=\"#\" onclick=\"RevealMenuToolHandlers.togglePdfExport(event)\"><kbd>e</kbd> PDF Export Mode</a></li>\n<li class=\"slide-tool-item\" data-item=\"4\"><a href=\"#\" onclick=\"RevealMenuToolHandlers.toggleScrollView(event)\"><kbd>r</kbd> Scroll View Mode</a></li>\n<li class=\"slide-tool-item\" data-item=\"5\"><a href=\"#\" onclick=\"RevealMenuToolHandlers.keyboardHelp(event)\"><kbd>?</kbd> Keyboard Help</a></li>\n</ul>"}],"openButton":true},
'smaller': false,
 
        // Display controls in the bottom right corner
        controls: false,

        // Help the user learn the controls by providing hints, for example by
        // bouncing the down arrow when they first encounter a vertical slide
        controlsTutorial: false,

        // Determines where controls appear, "edges" or "bottom-right"
        controlsLayout: 'edges',

        // Visibility rule for backwards navigation arrows; "faded", "hidden"
        // or "visible"
        controlsBackArrows: 'faded',

        // Display a presentation progress bar
        progress: true,

        // Display the page number of the current slide
        slideNumber: false,

        // 'all', 'print', or 'speaker'
        showSlideNumber: 'all',

        // Add the current slide number to the URL hash so that reloading the
        // page/copying the URL will return you to the same slide
        hash: true,

        // Start with 1 for the hash rather than 0
        hashOneBasedIndex: false,

        // Flags if we should monitor the hash and change slides accordingly
        respondToHashChanges: true,

        // Push each slide change to the browser history
        history: true,

        // Enable keyboard shortcuts for navigation
        keyboard: true,

        // Enable the slide overview mode
        overview: true,

        // Disables the default reveal.js slide layout (scaling and centering)
        // so that you can use custom CSS layout
        disableLayout: false,

        // Vertical centering of slides
        center: false,

        // Enables touch navigation on devices with touch input
        touch: true,

        // Loop the presentation
        loop: false,

        // Change the presentation direction to be RTL
        rtl: false,

        // see https://revealjs.com/vertical-slides/#navigation-mode
        navigationMode: 'linear',

        // Randomizes the order of slides each time the presentation loads
        shuffle: false,

        // Turns fragments on and off globally
        fragments: true,

        // Flags whether to include the current fragment in the URL,
        // so that reloading brings you to the same fragment position
        fragmentInURL: false,

        // Flags if the presentation is running in an embedded mode,
        // i.e. contained within a limited portion of the screen
        embedded: false,

        // Flags if we should show a help overlay when the questionmark
        // key is pressed
        help: true,

        // Flags if it should be possible to pause the presentation (blackout)
        pause: true,

        // Flags if speaker notes should be visible to all viewers
        showNotes: false,

        // Global override for autoplaying embedded media (null/true/false)
        autoPlayMedia: null,

        // Global override for preloading lazy-loaded iframes (null/true/false)
        preloadIframes: null,

        // Number of milliseconds between automatically proceeding to the
        // next slide, disabled when set to 0, this value can be overwritten
        // by using a data-autoslide attribute on your slides
        autoSlide: 0,

        // Stop auto-sliding after user input
        autoSlideStoppable: true,

        // Use this method for navigation when auto-sliding
        autoSlideMethod: null,

        // Specify the average time in seconds that you think you will spend
        // presenting each slide. This is used to show a pacing timer in the
        // speaker view
        defaultTiming: null,

        // Enable slide navigation via mouse wheel
        mouseWheel: false,

        // The display mode that will be used to show slides
        display: 'block',

        // Hide cursor if inactive
        hideInactiveCursor: true,

        // Time before the cursor is hidden (in ms)
        hideCursorTime: 5000,

        // Opens links in an iframe preview overlay
        previewLinks: false,

        // Transition style (none/fade/slide/convex/concave/zoom)
        transition: 'none',

        // Transition speed (default/fast/slow)
        transitionSpeed: 'default',

        // Transition style for full page slide backgrounds
        // (none/fade/slide/convex/concave/zoom)
        backgroundTransition: 'none',

        // Number of slides away from the current that are visible
        viewDistance: 3,

        // Number of slides away from the current that are visible on mobile
        // devices. It is advisable to set this to a lower number than
        // viewDistance in order to save resources.
        mobileViewDistance: 2,

        // The "normal" size of the presentation, aspect ratio will be preserved
        // when the presentation is scaled to fit different resolutions. Can be
        // specified using percentage units.
        width: 1050,

        height: 700,

        // Factor of the display size that should remain empty around the content
        margin: 0.1,

        math: {
          mathjax: 'https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.9/MathJax.js',
          config: 'TeX-AMS_HTML-full',
          tex2jax: {
            inlineMath: [['\\(','\\)']],
            displayMath: [['\\[','\\]']],
            balanceBraces: true,
            processEscapes: false,
            processRefs: true,
            processEnvironments: true,
            preview: 'TeX',
            skipTags: ['script','noscript','style','textarea','pre','code'],
            ignoreClass: 'tex2jax_ignore',
            processClass: 'tex2jax_process'
          },
        },

        // reveal.js plugins
        plugins: [QuartoLineHighlight, PdfExport, RevealMenu, QuartoSupport,

          RevealMath,
          RevealNotes,
          RevealSearch,
          RevealZoom
        ]
      });
    </script>
    <script id="quarto-html-after-body" type="application/javascript">
    window.document.addEventListener("DOMContentLoaded", function (event) {
      const toggleBodyColorMode = (bsSheetEl) => {
        const mode = bsSheetEl.getAttribute("data-mode");
        const bodyEl = window.document.querySelector("body");
        if (mode === "dark") {
          bodyEl.classList.add("quarto-dark");
          bodyEl.classList.remove("quarto-light");
        } else {
          bodyEl.classList.add("quarto-light");
          bodyEl.classList.remove("quarto-dark");
        }
      }
      const toggleBodyColorPrimary = () => {
        const bsSheetEl = window.document.querySelector("link#quarto-bootstrap");
        if (bsSheetEl) {
          toggleBodyColorMode(bsSheetEl);
        }
      }
      toggleBodyColorPrimary();  
      const tabsets =  window.document.querySelectorAll(".panel-tabset-tabby")
      tabsets.forEach(function(tabset) {
        const tabby = new Tabby('#' + tabset.id);
      });
      const isCodeAnnotation = (el) => {
        for (const clz of el.classList) {
          if (clz.startsWith('code-annotation-')) {                     
            return true;
          }
        }
        return false;
      }
      const onCopySuccess = function(e) {
        // button target
        const button = e.trigger;
        // don't keep focus
        button.blur();
        // flash "checked"
        button.classList.add('code-copy-button-checked');
        var currentTitle = button.getAttribute("title");
        button.setAttribute("title", "Copied!");
        let tooltip;
        if (window.bootstrap) {
          button.setAttribute("data-bs-toggle", "tooltip");
          button.setAttribute("data-bs-placement", "left");
          button.setAttribute("data-bs-title", "Copied!");
          tooltip = new bootstrap.Tooltip(button, 
            { trigger: "manual", 
              customClass: "code-copy-button-tooltip",
              offset: [0, -8]});
          tooltip.show();    
        }
        setTimeout(function() {
          if (tooltip) {
            tooltip.hide();
            button.removeAttribute("data-bs-title");
            button.removeAttribute("data-bs-toggle");
            button.removeAttribute("data-bs-placement");
          }
          button.setAttribute("title", currentTitle);
          button.classList.remove('code-copy-button-checked');
        }, 1000);
        // clear code selection
        e.clearSelection();
      }
      const getTextToCopy = function(trigger) {
          const codeEl = trigger.previousElementSibling.cloneNode(true);
          for (const childEl of codeEl.children) {
            if (isCodeAnnotation(childEl)) {
              childEl.remove();
            }
          }
          return codeEl.innerText;
      }
      const clipboard = new window.ClipboardJS('.code-copy-button:not([data-in-quarto-modal])', {
        text: getTextToCopy
      });
      clipboard.on('success', onCopySuccess);
      if (window.document.getElementById('quarto-embedded-source-code-modal')) {
        const clipboardModal = new window.ClipboardJS('.code-copy-button[data-in-quarto-modal]', {
          text: getTextToCopy,
          container: window.document.getElementById('quarto-embedded-source-code-modal')
        });
        clipboardModal.on('success', onCopySuccess);
      }
        var localhostRegex = new RegExp(/^(?:http|https):\/\/localhost\:?[0-9]*\//);
        var mailtoRegex = new RegExp(/^mailto:/);
          var filterRegex = new RegExp('/' + window.location.host + '/');
        var isInternal = (href) => {
            return filterRegex.test(href) || localhostRegex.test(href) || mailtoRegex.test(href);
        }
        // Inspect non-navigation links and adorn them if external
     	var links = window.document.querySelectorAll('a[href]:not(.nav-link):not(.navbar-brand):not(.toc-action):not(.sidebar-link):not(.sidebar-item-toggle):not(.pagination-link):not(.no-external):not([aria-hidden]):not(.dropdown-item):not(.quarto-navigation-tool):not(.about-link)');
        for (var i=0; i<links.length; i++) {
          const link = links[i];
          if (!isInternal(link.href)) {
            // undo the damage that might have been done by quarto-nav.js in the case of
            // links that we want to consider external
            if (link.dataset.originalHref !== undefined) {
              link.href = link.dataset.originalHref;
            }
          }
        }
      function tippyHover(el, contentFn, onTriggerFn, onUntriggerFn) {
        const config = {
          allowHTML: true,
          maxWidth: 500,
          delay: 100,
          arrow: false,
          appendTo: function(el) {
              return el.closest('section.slide') || el.parentElement;
          },
          interactive: true,
          interactiveBorder: 10,
          theme: 'light-border',
          placement: 'bottom-start',
        };
        if (contentFn) {
          config.content = contentFn;
        }
        if (onTriggerFn) {
          config.onTrigger = onTriggerFn;
        }
        if (onUntriggerFn) {
          config.onUntrigger = onUntriggerFn;
        }
          config['offset'] = [0,0];
          config['maxWidth'] = 700;
        window.tippy(el, config); 
      }
      const noterefs = window.document.querySelectorAll('a[role="doc-noteref"]');
      for (var i=0; i<noterefs.length; i++) {
        const ref = noterefs[i];
        tippyHover(ref, function() {
          // use id or data attribute instead here
          let href = ref.getAttribute('data-footnote-href') || ref.getAttribute('href');
          try { href = new URL(href).hash; } catch {}
          const id = href.replace(/^#\/?/, "");
          const note = window.document.getElementById(id);
          if (note) {
            return note.innerHTML;
          } else {
            return "";
          }
        });
      }
      const findCites = (el) => {
        const parentEl = el.parentElement;
        if (parentEl) {
          const cites = parentEl.dataset.cites;
          if (cites) {
            return {
              el,
              cites: cites.split(' ')
            };
          } else {
            return findCites(el.parentElement)
          }
        } else {
          return undefined;
        }
      };
      var bibliorefs = window.document.querySelectorAll('a[role="doc-biblioref"]');
      for (var i=0; i<bibliorefs.length; i++) {
        const ref = bibliorefs[i];
        const citeInfo = findCites(ref);
        if (citeInfo) {
          tippyHover(citeInfo.el, function() {
            var popup = window.document.createElement('div');
            citeInfo.cites.forEach(function(cite) {
              var citeDiv = window.document.createElement('div');
              citeDiv.classList.add('hanging-indent');
              citeDiv.classList.add('csl-entry');
              var biblioDiv = window.document.getElementById('ref-' + cite);
              if (biblioDiv) {
                citeDiv.innerHTML = biblioDiv.innerHTML;
              }
              popup.appendChild(citeDiv);
            });
            return popup.innerHTML;
          });
        }
      }
    });
    </script>
    

</body>
</html>