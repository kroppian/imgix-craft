<?php

namespace Craft;

use Imgix\UrlBuilder;

class ImgixForCraftVariable
{

  public function imgixify($image, $transform = null)
  {

    $settings = craft()->plugins->getPlugin('imgixForCraft')->getSettings();

    $imgixSourceDomain = trim($settings['imgixSourceUrl']);

    $securtUrlToken = trim($settings['secureUrlToken']);

    $builder = new UrlBuilder($imgixSourceDomain);

    if (strlen($securtUrlToken) > 0) 
    {
      $builder->setSignKey($securtUrlToken); 
    }

    $imageUrl = $image->url;

    return $builder->createURL($imageUrl, $transform);
  }

}

