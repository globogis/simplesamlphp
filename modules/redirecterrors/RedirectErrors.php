<?php

class sspmod_redirecterrors_RedirectErrors {

  static function baseUrl() {
      return sprintf(
        "%s://%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['HTTP_HOST']
      );
  }

  static function redirectError($config, array $data) {
    //put your custom url for error handling here
    $custom_url = '/stu_spid/error?error=';
    $location_url = self::baseUrl() . $custom_url . http_build_query($data);

    header("Location: $location_url", true, 302);
    die();
  }
}
