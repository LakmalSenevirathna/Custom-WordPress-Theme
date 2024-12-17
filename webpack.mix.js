const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

// Set the public path for the output
mix.setPublicPath('dist');

// Compile your assets
mix.sass('src/app.scss', '.')
   .js('src/app.js', '.');

// Add BrowserSync
mix.webpackConfig({
    plugins: [
        new BrowserSyncPlugin(
            {
                proxy: 'http://localhost/wordpress/', // Replace with your local development URL
                files: [
                    'dist/app.css', // Watch CSS files in the dist folder
                    'dist/app.js',  // Watch JS files in the dist folder
                    '**/*.php'       // Watch PHP files in the project
                ],
                open: false, // Set to true if you want the browser to open automatically
                notify: false // Disable BrowserSync notifications in the browser
            },
            {
                reload: true
            }
        )
    ]
});
