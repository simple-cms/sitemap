<?php

Route::get('sitemap', ['uses' => 'SimpleCms\Sitemap\PublicController@sitemap', 'as' => 'sitemap']);
Route::get('xmlsitemap', ['uses' => 'SimpleCms\Sitemap\PublicController@xmlsitemap', 'as' => 'xmlsitemap']);