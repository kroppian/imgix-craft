<?php

namespace Craft;

use Imgix\UrlBuilder;

class ImgixForCraftVariable
{

  public function imgixify($image, $transform = null)
  {

    $imgixSourceDomain = 'testeroonie.imgix.net';

    $builder = new UrlBuilder($imgixSourceDomain);

    $imageUrl = $image->url;

    return $builder->createURL($imageUrl, $transform);
  }

}

