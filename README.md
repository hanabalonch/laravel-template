# laravel-template
My preconfigured laravel installation with all goodies i normally include in every single project

(**Documentation is still in progress**)

# What´s included

## Classes
Well.. There some people who are asking me about "How do you handle your classes?"..

I basically can just say that i have folders within the `app` directory for all purposes of classes.
For example:

`app/User.php` => `app/Models/User.php`

## Views
All views  are extending the `layouts/default.blade.php` file.
This allows me to go with my normal *bladepage* (Live-Template for PHPStorm).

I has stacks for additional styles and scripts you may include.

```
@extends('layouts.default')

@section('page_title')
    PAGE TITLE
@endsection

@push('header_styles')
    Import CDN´s or write custom `<style>` stuff 
@endpush

@push('header_scripts')
    Import CDN´s or write custom `<script>` stuff for the head-section
@endpush

@section('content')
    Content-Area
@endsection

@push('footer_scripts')
    Import CDN´s or write custom `<script>` stuff for the bottom-section
@endpush
```

### Navigation
The navigation is now separated from the base-layout file.
This allows you to keep your layouts cleaner and will reduce the time you´re looking specific files or changes within your views.
