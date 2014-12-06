var gulp            = require('gulp');
var autoprefixer    = require('gulp-autoprefixer');
var changed         = require('gulp-changed');
var concat          = require('gulp-concat');
var csslint         = require("gulp-csslint");
var jsmin           = require('gulp-jsmin');
var minifycss       = require('gulp-minify-css');
var plumber         = require('gulp-plumber');
var rename          = require('gulp-rename');
var spritesmith     = require('gulp.spritesmith');
var watch           = require('gulp-watch');


var basePaths = {
    src: 'app/assets/',
    dest: 'public/assets/',
    bower: 'bower_components/'
};

var paths = {
    images: {
        src: basePaths.src + 'images/',
        dest: basePaths.dest + 'images/min/'
    },
    scripts: {
        src: basePaths.src + 'javascripts/',
        dest: basePaths.dest + 'javascripts/min/'
    },
    styles: {
        src: basePaths.src + 'stylesheets/',
        dest: basePaths.dest + 'stylesheets/min/'
    },
    sprite: {
        src: basePaths.src + 'sprite/*'
    }
};


gulp.task('default', function() {
    gulp.run('copy', 'lint-styles', 'css', 'autoprefix', 'js', 'sprite', 'concat-css', 'concat-js');

// Watch files and run tasks if they change
    gulp.watch('app/assets/stylesheets/**', function(event) {
        gulp.run('lint-styles');
        gulp.run('css');
        gulp.run('autoprefix');
    });

    gulp.watch('app/assets/javascripts/**', function(event) {
        gulp.run('js');
    });

    gulp.watch([
        'app/assets/fonts/**',
        'app/assets/images/**',
        'app/assets/perl_scripts/**',
        'app/assets/php_scripts/**'
    ], function(event) {
        gulp.run('copy');
    });
});

gulp.task('copy', function() {
    gulp.src('app/assets/fonts/**')
        .pipe(changed('public/assets/fonts'))
        .pipe(gulp.dest('public/assets/fonts'));

    gulp.src('app/assets/images/**')
        .pipe(changed('public/assets/images'))
        .pipe(gulp.dest('public/assets/images'));

    gulp.src('app/assets/perl_scripts/**')
        .pipe(changed('public/assets/perl_scripts'))
        .pipe(gulp.dest('public/assets/perl_scripts'));

    gulp.src('app/assets/php_scripts/**')
        .pipe(changed('public/assets/php_scripts'))
        .pipe(gulp.dest('public/assets/php_scripts'));
});

gulp.task('css', function() {
    return   gulp.src('app/assets/stylesheets/**/*.css')
        .pipe(changed('public/assets/stylesheets/min'))
        .pipe(minifycss())
        .pipe(gulp.dest('public/assets/stylesheets/min'));
});

gulp.task("lint-styles", function() {
    gulp.src("app/assets/stylesheets/**/*.css")
        .pipe(plumber())
        .pipe(csslint(".csslintrc"))
        .pipe(csslint.reporter())
});

gulp.task('autoprefix', function () {
    return gulp.src('public/assets/stylesheets/**/*.css')
        .pipe(changed('public/assets/stylesheets/autoprefix'))
        .pipe(autoprefixer({
            browsers: ['last 5 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('public/assets/stylesheets/autoprefix'));
});

gulp.task('js', function() {
    return   gulp.src('app/assets/javascripts/**/*.js')
        .pipe(changed('public/assets/javascripts/min'))
        .pipe(jsmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('public/assets/javascripts/min'));
});

// Make Sprite
gulp.task('sprite', function() {
    var spriteData =
        gulp.src('app/assets/images/**/*.*') // source path of the sprite images
            .pipe(spritesmith({
                imgName: 'sprite.png',
                cssName: 'sprite.css'
            }));

    spriteData.img.pipe(gulp.dest('public/assets/images/')); // output path for the sprite
    spriteData.css.pipe(gulp.dest('public/assets/stylesheets/')); // output path for the CSS
});

// Concatenate all CSS files
gulp.task('concat-css', function() {
    gulp.src([  'public/assets/stylesheets/min/bootstrap.css', 'public/assets/stylesheets/min/bootstrap-responsive.css', 'public/assets/stylesheets/min/flexslider.css',
                'public/assets/stylesheets/min/font-awesome.css', 'public/assets/stylesheets/min/socialist.css', 'public/assets/stylesheets/min/piro-box.css', 'public/assets/stylesheets/min/style.css'])
        .pipe(concat('application.css'))
        .pipe(gulp.dest('public/assets/stylesheets/min/'))
});

// Concatenate all JS files
gulp.task('concat-js', function() {
    gulp.src([  'public/assets/javascripts/min/bootstrap.min.js','public/assets/javascripts/min/jquery.flexslider.min.js','public/assets/javascripts/min/waypoints.min.min.js',
                'public/assets/javascripts/min/modernizr.custom.min.js','public/assets/javascripts/min/jquery.stapel.min.js', 'public/assets/javascripts/min/jquery.socialist.min.js',
                'public/assets/javascripts/min/enscroll.min.min.js','public/assets/javascripts/min/jquery-ui-1.8.2.custom.min.min.js','public/assets/javascripts/min/pirobox_extended_min.min.js',
                'public/assets/javascripts/min/jquery.masonry.min.min.js', 'public/assets/javascripts/min/functions.min.js'])
        .pipe(concat('application.js'))
        .pipe(gulp.dest('public/assets/javascripts/min/'))
});


// Watch for gulpfile.js change and reload when changed.
var spawn = require('child_process').spawn;

gulp.task('watch-gruntfilejs', function() {
    var process;

    function restart() {
        if (process) {
            process.kill();
        }

        process = spawn('gulp', ['default'], {stdio: 'inherit'});
    }

    gulp.watch('gulpfile.js', restart);
    restart();
});