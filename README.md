# imgix-craft

A plugin providing the power of Imgix to your CraftCMS project!

### Installation

1. Set up a fully functional [CraftCMS project](https://craftcms.com/docs/installing) on your host. 
2. Clone the imgix-craft project and run `cp ${clonedPlugin}/imgix-craft/imgixforcraft/ ${craftInstall}/craft/plugins`
3. Download composer: `curl -sS https://getcomposer.org/installer | php`
4. `cd` into `${craftInstall}/craft/plugins` and install dependencies: `php composer.phar install`
5. Start httpd, and visit `localhost/admin`, or whatever URL your craft project is rooted. 
6. Navigate to the plug in menu and install imgix-craft
7. Create a new Imgix source that points to the public URL of your craft install. 
8. In the settings menu, enter the name of you imgix source root URL, and optionally a secure URL token if needed. Save. 

### Usage

imgix-craft provides a template variable that intercepts the URL of an image asset and points it instead to its counterpart on an Imgix source. This is to be used as the value of the `src` attribute of an `<img>` tag. It takes in an image asset as a parameter. For example: 
```php
{% set locationEntry = craft.entries.section('locations').first %}
{% set image = locationEntry.featuredImage.first() %}
<img src="{{ craft.imgixForCraft.imgixify(image) }}"/>
```

You can also specify any transformations available on [Imgix's URL API](https://docs.imgix.com/apis/url) as an optional second parameter. The second parameter accepts an associative array of parameters from the API: 
```php
{% set locationEntry = craft.entries.section('locations').first %}
{% set image = locationEntry.featuredImage.first() %}
<img src="{{ craft.imgixForCraft.imgixify(image,{h:500, w: 500, rot: 30 }) }}"/>
```

Happy Imgixification!
