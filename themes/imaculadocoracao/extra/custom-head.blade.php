{{--


|--------------------------------------------------------------------------
| Custom assets
|--------------------------------------------------------------------------

Custom assets are stored in the 'custom-assets' directory found inside the 'extra' folder.
Custom assets can be any file you would like to use in your theme.
For example: JS, CSS or image files.

You can load these custom assets with a built-in function, 'themeAsset()'.
Add the file you want to add to your 'custom-assets' folder, and include the name with the file extension in the function.

Down below, you can find a few examples using this function:

<link rel="stylesheet" href="{{themeAsset('your.css')}}">
<script src="{{themeAsset('your.js')}}"></script>
<!-- <style>body{background-image: url({{themeAsset('your.png')}});}</style> -->

--}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{themeAsset('your.css')}}">

