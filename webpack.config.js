var Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .disableSingleRuntimeChunk()
    //.enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    //.addStyleEntry('css/app', './assets/css/app.scss')
    .addEntry('js/app', './assets/js/app.js')
   // .addStyleEntry('css/app', './assets/css/vuestic-styles.scss')
    .enableSassLoader(function(options) {
        options: {
            data: '@import "./assets/css/resources/variables";';
        }
    })
    .enableVueLoader()

    .autoProvidejQuery()


    .configureBabel(function(babelConfig) {
        // add additional presets
        babelConfig.presets.push('@babel/preset-flow');

        // no plugins are added by default, but you can add some
        babelConfig.plugins.push('styled-jsx/babel');
    }, {
        // node_modules is not processed through Babel by default
        // but you can whitelist specific modules to process
        //includeNodeModules: ['foundation-sites'],

        // or completely control the exclude rule (note that you
        // can't use both "include_node_modules" and "exclude" at
        // the same time)
        exclude: /bower_components/
    })
;
//Encore.configureLoaderRule('sass', loaderRule => {
//    loaderRule.test = /\.(js?|vue)$/
//});

module.exports = Encore.getWebpackConfig();

