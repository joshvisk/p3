<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > Users
Breadcrumbs::register('paragraphs', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Paragraphs', route('paragraphs'));
});

// Home > Paragraph
Breadcrumbs::register('users', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('users', route('users'));
});