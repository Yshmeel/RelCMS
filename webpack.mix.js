const { mix } = require('laravel-mix');

mix.js('engine/vue/init.js', 'web/vue_compile.js').disableNotifications();
mix.setPublicPath('web/');