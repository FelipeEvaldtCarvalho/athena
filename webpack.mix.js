const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .vue({
        options: {
            compilerOptions: {
                isCustomElement: (tag) => ["ion-icon"].includes(tag),
            },
        },
    })
    .vue(3)
    .postCss("resources/css/app.css", "public/css", [])
    .version();
