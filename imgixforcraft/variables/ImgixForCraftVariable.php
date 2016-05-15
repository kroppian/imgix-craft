<?php

namespace Craft;

use Imgix\UrlBuilder;

class ImgixForCraftVariable
{

  public function imgixify($image, $transform = null)
  {

    $imgixSourceDomain = craft()->plugins->getPlugin('imgixForCraft')->getSettings()['imgixSourceUrl'];

    $builder = new UrlBuilder($imgixSourceDomain);

    $imageUrl = $image->url;

    return $builder->createURL($imageUrl, $transform);
  }

}

