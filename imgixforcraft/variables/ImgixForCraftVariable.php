<?php
namespace Craft;

use Imgix\UrlBuilder;

class ImgixForCraftVariable
{

  public function imgixify($image)
  {

    $imgixSourceDomain = 'testeroonie.imgix.net';

    $builder = new UrlBuilder($imgixSourceDomain);

    $params = array("w" => 50, "h" => 50);

    $imageUrl = $image->url;

    return $builder->createURL($imageUrl, $params);
  }

}

