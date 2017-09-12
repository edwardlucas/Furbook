<?php
Route::get('/', function() {
    return 'All cats';
});

Route::get('cats/{id}', function($id) {
    return sprintf('Cat #%s', $id);
});