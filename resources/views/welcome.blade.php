<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">



        <!-- Styles -->
       <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
                <div class="top-right links">

                        
                            <a href="/login/discord">Get Started</a>
                        
                    
                </div>
            

            <div class="content">
                <div class="title m-b-md">
                    sharing discord tags is a pain. <br>
                    addup makes it easy.
                    
</div> 
<a href="/login/discord">
<button class="btn" data-clipboard-target="#myInput">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="text" id="button1">Get started</span>
</button>
</a>
 

                
<!--
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
-->
            </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
    <script>
var clipboard = new ClipboardJS('.btn', {
    text: function() {
        return document.querySelector('input').value;
    }
});

clipboard.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);
    document.getElementById("button1").innerHTML = "Copied!";

    e.clearSelection();
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
    document.getElementById("button1").innerHTML = "Failed. Try Ctrl-C.";
});
</script>
    </body>
</html>