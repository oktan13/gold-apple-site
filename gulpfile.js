import gulp from 'gulp';
import gulpSass  from 'gulp-sass';
import dartSass from 'sass';
import nunjucksRender from 'gulp-nunjucks-render';
import rename from 'gulp-rename';
import { rollup } from 'rollup';
import rollupNodeResolve from '@rollup/plugin-node-resolve';
import { terser as rollupTerser } from 'rollup-plugin-terser';
import postcss from 'gulp-postcss';
import gulpSassGlob from 'gulp-sass-glob';
import cssnano from 'cssnano';
import postcssPresetEnv from 'postcss-preset-env';
import browserSync from 'browser-sync';

// Константа для определения режима (true для production, false для development)
const isProd = true;

// Переменная для определения, запущен ли watch
let isWatching = false;

// Настройка Sass для использования Dart Sass
const sass = gulpSass(dartSass);
sass.compiler = dartSass;

// Создание BrowserSync
const bs = browserSync.create();

// Пути к файлам и папкам
const srcFolder = 'src';
const distFolder = 'dist';

const paths = {
    styles: {
        src: srcFolder + '/scss/index.scss',
        dest: distFolder + '/css',
        watchFolder: srcFolder + '/**/*.scss'
    },
    scripts: {
        src: srcFolder + '/**/*.js',
        dest: distFolder + '/js',
        inputFile: srcFolder + '/js/main.js',
        outputFile: distFolder + '/js/main.js',
    },
    templates: {
        src: [srcFolder + '/*.njk','!' + srcFolder + '/base.njk'],
        dest: distFolder + '',
        watchFolder: srcFolder + '/**/*.njk'
    },
    images: {
        src: srcFolder + '/img/**/*.{gif,jpg,png,svg}',
        dest: distFolder + '/img'
    },
    videos: {
        src: srcFolder + '/videos/**/*',
        dest: distFolder + '/videos'
    },
    fonts: {
        src: srcFolder + '/fonts/**/*',
        dest: distFolder + '/fonts'
    },
    favicon: {
        src: srcFolder + '/favicon/*',
        dest: distFolder + ''
    }
};

// Очистка папки dist
async function clean() {
    const del = (await import('del')).deleteAsync;
    return del([distFolder + '/**', '!' + distFolder]);
}

// Компиляция SCSS в CSS, добавление префиксов и минификация
function styles() {
    let stream = gulp.src(paths.styles.src)
        .pipe(gulpSassGlob())
        .pipe(sass().on('error', sass.logError));

    if(isProd){
        stream = stream.pipe(postcss([
            postcssPresetEnv({
                stage: 2,
            }),
            cssnano()
        ]))
    }

    stream = stream.pipe(rename('index.css'))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(bs.stream());

    if (isWatching){
        stream = stream.pipe(bs.stream());
    }

    return stream;
}

// Обработка JavaScript с помощью Rollup
async function scripts() {
    const plugins = [rollupNodeResolve()]

    if(isProd){
        plugins.push(rollupTerser());
    }

    const bundle = await rollup({
        input: paths.scripts.inputFile,
        plugins: plugins
    });
    await bundle.write({
        file: paths.scripts.outputFile,  // Выходной файл
        format: 'iife',
        name: 'main',
        sourcemap: false
    });

    if (isWatching){
        bs.reload();
    }
}

// Компиляция Nunjucks шаблонов в HTML
function templates() {
    let stream = gulp.src(paths.templates.src)
        .pipe(nunjucksRender({
            path: [srcFolder + '/']
        }))
        .pipe(rename({ extname: '.html' }))
        .pipe(gulp.dest(paths.templates.dest));

    if (isWatching){
        stream = stream.pipe(bs.stream());
    }

    return stream;
}

// Копирование изображений
function images() {
    let stream = gulp.src(paths.images.src, { encoding: false })
        .pipe(gulp.dest(paths.images.dest));

    if (isWatching){
        stream = stream.pipe(bs.stream());
    }

    return stream;
}

// Копирование видео
function videos() {
    let stream = gulp.src(paths.videos.src, { encoding: false })
        .pipe(gulp.dest(paths.videos.dest));

    return stream;
}

// Копирование шрифтов
function fonts() {
    return gulp.src(paths.fonts.src, { encoding: false })
        .pipe(gulp.dest(paths.fonts.dest));
}

// Копирование фавикона
function favicon() {
    return gulp.src(paths.favicon.src, { encoding: false })
        .pipe(gulp.dest(paths.favicon.dest));
}

// Запуск BrowserSync сервера и отслеживание изменений
function browserSyncServe(done) {
    bs.init({
        server: {
            baseDir: distFolder
        },
        open: false
    });
    done();
}

// Отслеживание изменений
function watchFiles() {
    isWatching = true;
    gulp.watch(paths.styles.watchFolder, styles);
    gulp.watch(paths.scripts.src, scripts);
    gulp.watch(paths.templates.watchFolder, templates);
    gulp.watch(paths.images.src, images);
    gulp.watch(paths.fonts.src, fonts);
}

// Определение задач
const build = gulp.series(clean, gulp.parallel(styles, scripts, templates, images, videos, fonts, favicon));
const watch = gulp.series(build, gulp.parallel(watchFiles, browserSyncServe));

// Экспорт задач
export { build, watch };
export default build;
