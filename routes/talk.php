<?php

Route::get('/', function () {
    return view('talk/intro', ['next' => route('about-me')]);
})->name('intro');

Route::get('/about-me', function () {
    return view('talk/about-me', [
        'next' => route('points-about-the-code'),
        'previous' => route('intro'),
    ]);
})->name('about-me');

Route::get('/points-about-the-code', function () {
    return view('talk/points-about-the-code', [
        'next' => route('trade-off'),
        'previous' => route('about-me'),
    ]);
})->name('points-about-the-code');

Route::get('/trade-off', function () {
    return view('talk/trade-off', [
        'next' => route('example-1.controller'),
        'previous' => route('points-about-the-code'),
    ]);
})->name('trade-off');

Route::prefix('example-1/')->name('example-1.')->group(function () {
    Route::get('/controller', function () {
        return view('talk/example-1/controller', [
            'next' => route('example-1.request'),
            'previous' => route('trade-off'),
        ]);
    })->name('controller');

    Route::get('/request', function () {
        return view('talk/example-1/request', [
            'next' => route('example-1.model'),
            'previous' => route('example-1.controller'),
        ]);
    })->name('request');

    Route::get('/model', function () {
        return view('talk/example-1/model', [
            'next' => route('example-1.final'),
            'previous' => route('example-1.request'),
        ]);
    })->name('model');

    Route::get('/final', function () {
        return view('talk/example-1/final', [
            'next' => route('example-2.theory'),
            'previous' => route('example-1.model'),
        ]);
    })->name('final');
});

Route::prefix('example-2/')->name('example-2.')->group(function () {
    Route::get('/theory', function () {
        return view('talk/example-2/theory', [
            'next' => route('example-2.controller'),
            'previous' => route('example-1.final'),
        ]);
    })->name('theory');

    Route::get('/controller', function () {
        return view('talk/example-2/controller', [
            'next' => route('example-2.weather-dto'),
            'previous' => route('example-2.theory'),
        ]);
    })->name('controller');

    Route::get('/weather-dto', function () {
        return view('talk/example-2/weather-dto', [
            'next' => route('example-2.coordinates'),
            'previous' => route('example-2.theory'),
        ]);
    })->name('weather-dto');

    Route::get('/coordinates', function () {
        return view('talk/example-2/coordinates', [
            'next' => route('example-2.final'),
            'previous' => route('example-2.weather-dto'),
        ]);
    })->name('coordinates');

    Route::get('/final', function () {
        return view('talk/example-2/final', [
            'next' => route('example-3.theory'),
            'previous' => route('example-2.coordinates'),
        ]);
    })->name('final');
});

Route::prefix('example-3/')->name('example-3.')->group(function () {
    Route::get('/theory', function () {
        return view('talk/example-3/theory', [
            'next' => route('example-3.controller'),
            'previous' => route('example-2.final'),
        ]);
    })->name('theory');

    Route::get('/controller', function () {
        return view('talk/example-3/controller', [
            'next' => route('example-3.dto'),
            'previous' => route('example-3.theory'),
        ]);
    })->name('controller');

    Route::get('/dto', function () {
        return view('talk/example-3/dto', [
            'next' => route('example-3.pipeline'),
            'previous' => route('example-3.controller'),
        ]);
    })->name('dto');

    Route::get('/pipeline', function () {
        return view('talk/example-3/pipeline', [
            'next' => route('example-3.final'),
            'previous' => route('example-3.dto'),
        ]);
    })->name('pipeline');

    Route::get('/final', function () {
        return view('talk/example-3/final', [
            'next' => route('example-4.theory'),
            'previous' => route('example-3.pipeline'),
        ]);
    })->name('final');
});

Route::prefix('example-4/')->name('example-4.')->group(function () {
    Route::get('/theory', function () {
        return view('talk/example-4/theory', [
            'next' => route('example-4.pizza-builder'),
            'previous' => route('example-3.final'),
        ]);
    })->name('theory');

    Route::get('/pizza-builder', function () {
        return view('talk/example-4/pizza-builder', [
            'next' => route('example-4.pdf-builder'),
            'previous' => route('example-4.theory'),
        ]);
    })->name('pizza-builder');

    Route::get('/pdf-builder', function () {
        return view('talk/example-4/pdf-builder', [
            'next' => route('example-5.theory'),
            'previous' => route('example-4.pizza-builder'),
        ]);
    })->name('pdf-builder');
});

Route::prefix('example-5/')->name('example-5.')->group(function () {
    Route::get('/theory', function () {
        return view('talk/example-5/theory', [
            'next' => route('example-5.cookbook.1-abstract-class'),
            'previous' => route('example-4.pdf-builder'),
        ]);
    })->name('theory');

    Route::get('/cookbook/1-abstract-class', function () {
        return view('talk/example-5/cookbook/1-abstract-class', [
            'next' => route('example-5.cookbook.2-state-classes'),
            'previous' => route('example-5.theory'),
        ]);
    })->name('cookbook.1-abstract-class');

    Route::get('/cookbook/2-state-classes', function () {
        return view('talk/example-5/cookbook/2-state-classes', [
            'next' => route('example-5.cookbook.3-post-model'),
            'previous' => route('example-5.cookbook.1-abstract-class'),
        ]);
    })->name('cookbook.2-state-classes');

    Route::get('/cookbook/3-post-model', function () {
        return view('talk/example-5/cookbook/3-post-model', [
            'next' => route('example-5.final'),
            'previous' => route('example-5.cookbook.2-state-classes'),
        ]);
    })->name('cookbook.3-post-model');

    Route::get('/final', function () {
        return view('talk/example-5/final', [
            'next' => route('environment-question'),
            'previous' => route('example-5.cookbook.3-post-model'),
        ]);
    })->name('final');
});

Route::get('/environment-question', function () {
    return view('talk/environment-question', [
        'previous' => route('example-5.final'),
        'next' => route('environment')
    ]);
})->name('environment-question');

Route::get('/environment', function () {
    return view('talk/environment', [
        'previous' => route('environment-question'),
        'next' => route('thank-you')
    ]);
})->name('environment');

Route::get('/thank-you', function () {
    return view('talk/thank-you', [
        'previous' => route('environment'),
        'next' => route('intro')
    ]);
})->name('thank-you');
