This theme is a custom theme developed of IdahoMilkProducts.com utilizing the <a href="http://foundation.zurb.com/sites.html">Foundation 6</a> (Currently using Foundation 6.2.1) framework, and based on a theme called <a href="www.jointswp.com">JointsWP</a>.

This theme is developed using GULP and SASS, and to a lesser extent Bower. Heres how to get up and running with Gulp:
- Install [node.js](https://nodejs.org).
- Using the command line, navigate to your theme directory
- Run npm install
- Run gulp to confirm everything is working
<a href="http://jointswp.com/docs/gulp/">Read More about Gulp and JointsWP</a>
- Then when coding use the command "gulp watch" to refresh the files.
- For more information on different functionalities found for <a href="http://jointswp.com/docs">the theme JointsWP</a> that this theme is based on.
- For more documentation on <a href="http://foundation.zurb.com/sites/docs/">Foundation</a> in order to understand the functionalities used or that are available.

Working with the theme:
- All of the javascript plugins that are available can be included via the gulp.js file. Unused plugins will be commented out here and in the /assets/scss/style.scss file in order to cut down on extraneous code.
- All of the foundation styles can be overwritten using the /assets/scss/_settings.scss file.
- Any custom scss code should be placed in the /assets/scss/_main.scss file.