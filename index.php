<!DOCTYPE html>
    <head>
    </head>
    <body>
        <img height="100" src="https://images.pexels.com/photos/1519753/pexels-photo-1519753.jpeg">
        <img height="100" src="https://images.pexels.com/photos/1519753/pexels-photo-1519753.jpeg">
        <img height="100" src="https://images.pexels.com/photos/1519753/pexels-photo-1519753.jpeg">

        <img loading="lazy"
        height="100" src="https://images.pexels.com/photos/1540258/pexels-photo-1540258.jpeg">
        <img loading="lazy"
        height="100" src="https://images.pexels.com/photos/1540258/pexels-photo-1540258.jpeg">


        <img 
            loading="lazy"
            class="lazy"
        height="100" src="https://images.pexels.com/photos/1540258/pexels-photo-1540258.jpeg">

        <script>
            window.addEventListener("load", event => {
                var image = document.querySelector('.lazy');
                var isLoaded = image.complete && image.naturalHeight !== 0;
                console.log('image lazy is loaded:' + isLoaded);
            });

            let lazy = document.querySelector('.lazy')
            lazy.addEventListener("load", event => {
                var image = document.querySelector('.lazy');
                var isLoaded = image.complete && image.naturalHeight !== 0;
                console.log('image lazy is loaded:' + isLoaded);
            });
        </script>
    </body>
</html>
