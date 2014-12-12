var gulp            = require('gulp');
var autoprefixer    = require('gulp-autoprefixer');
var changed         = require('gulp-changed');
var coffee          = require('gulp-coffee');
var concat          = require('gulp-concat');
var csslint         = require("gulp-csslint");
var flatten         = require("gulp-flatten");
var jsmin           = require('gulp-jsmin');
var minifycss       = require('gulp-minify-css');
var plumber         = require('gulp-plumber');
var rename          = require('gulp-rename');
var rev             = require('gulp-rev');
var rimraf          = require('gulp-rimraf');
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
    gulp.run('copy', 'fonts-flatten', 'images-flatten', 'css', 'sprite', 'coffee', 'js');

// Watch files and run tasks if they change
    gulp.watch('app/assets/stylesheets/**', function(event) {
        gulp.run('css');
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

// Fonts flatten
gulp.task('fonts-flatten', function(){
    gulp.src('app/assets/fonts/*.{ttf,woff,eof,svg}')
        .pipe(flatten())
        .pipe(gulp.dest('public/assets/fonts/'));
});

// Images flatten
gulp.task('images-flatten', function(){
    gulp.src('app/assets/images/**/ *.{png,jpeg,gif,jpg}')
        .pipe(flatten())
        .pipe(gulp.dest('public/assets/images/'));
});

gulp.task('css', function()
{
    gulp.src('app/assets/stylesheets/**/*.css')
        .pipe(plumber())
        .pipe(csslint(".csslintrc"))
        .pipe(csslint.reporter())
        .pipe(changed('app/assets/stylesheets/**/*.css'))
        .pipe(autoprefixer({
            browsers: ['last 5 versions'],
            cascade: false
        }))
        .pipe(minifycss())                                  // Minify CSS
        .pipe(rev())                                        // Put version number on file
        .pipe(gulp.dest('public/assets/stylesheets/'))      // Move CSS into the public folder
        .pipe(rev.manifest())                               // Create a manifest of CSS files
        .pipe(rename('css.manifest.json'))                 // Save the name of the manifest file as "css.manifest.json"
        .pipe(gulp.dest('app/assets/stylesheets/'));       // And save my manifest file inside my assets folder (which I .gitnore the .json in that folder.

    gulp.src([  'public/assets/stylesheets/bootstrap-*.css', 'public/assets/stylesheets/bootstrap-responsive-*.css', 'public/assets/stylesheets/flexslider-*.css',
            'public/assets/stylesheets/font-awesome-*.css', 'public/assets/stylesheets/min/socialist-*.css', 'public/assets/stylesheets/min/piro-box-*.css', 'public/assets/stylesheets/min/style-*.css'])
        .pipe(concat('application-d41d8cd9.css'))
        .pipe(gulp.dest('public/assets/stylesheets/'));
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


gulp.task('js', function() {
    gulp.src('app/assets/javascripts/*.js')
//    gulp.src('app/assets/javascripts/**/*.js')
        .pipe(changed('public/assets/javascripts/min'))
        .pipe(jsmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('public/assets/javascripts/min'));

    gulp.src([  'public/assets/javascripts/min/bootstrap.min.js','public/assets/javascripts/min/jquery.flexslider.min.js','public/assets/javascripts/min/waypoints.min.min.js',
            'public/assets/javascripts/min/modernizr.custom.min.js','public/assets/javascripts/min/jquery.stapel.min.js', 'public/assets/javascripts/min/jquery.socialist.min.js',
            'public/assets/javascripts/min/enscroll.min.min.js','public/assets/javascripts/min/jquery-ui-1.8.2.custom.min.min.js','public/assets/javascripts/min/pirobox_extended_min.min.js',
            'public/assets/javascripts/min/jquery.masonry.min.min.js', 'public/assets/javascripts/min/functions.min.js'])
        .pipe(concat('application.js'))
        .pipe(gulp.dest('public/assets/javascripts/min/'));
});

gulp.task('coffee', function() {
    gulp.src('app/assets/coffee/*.coffee')
        .pipe(coffee({bare: true}).on('error', gutil.log))
        .pipe(gulp.dest('app/assets/javascripts/'))
});

// Watch for gulpfile.js change and reload when changed.
var spawn =
    require('child_process').spawn;

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


// Start Laravel server
gulp.task('serve', function() {
    var 	spawn = require('child_process').spawn,
        child = spawn('php', [ 'artisan', 'serve'], { cwd: process.cwd() }),
        log = function(data) { console.log(data.toString()) };
    child.stdout.on('data', log);
    child.stderr.on('data', log);
});

// Clean built files
gulp.task('clean', function() {
    gulp.src([
            'public/assets/javascripts/min/',
            'public/assets/stylesheets/autoprefix/',
            'public/assets/stylesheets/min/',
            'public/assets/stylesheets/sprite.css'
        ])
        .pipe(rimraf());
});
