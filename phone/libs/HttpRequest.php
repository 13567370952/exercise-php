<?php namespace libs;
/**
 * @description HTTP请求模块
 *
 */

class HttpRequest
{
    public static function request($url, $params = [], $method = 'GET')
    {
        $ret = null;
        if (preg_match("/^(http|https)\:\/\/(\w+\.\w+\.\w+)/", $url)) {
            $method = strtoupper($method);
            if ($method == 'POST') {
                exit('nothing to do.');
            } elseif ($method == 'PUT') {
                exit('nothing to do.');
            } elseif ($method == 'DELETE') {
                exit('nothing to do.');
            } else {
                if ($params) {
                    if (strripos('?', $url)) {
                        $url = $url . '&' . http_build_query($params);
                    } else {
                        $url = $url . '?' . http_build_query($params);
                    }
                }

                $context = stream_context_create(array(
                    'http' => array(
                      'method'  => 'POST',
                      'header'  => "Content-type: application/x-www-form-urlencoded",
                      // 'content' => http_build_query($POSTFIELDS),
                      'timeout' => 20,
                    )
                  ));
                $ret = file_get_contents($url,false,$context);
                // $ret = iconv("GB2312", "UTF-8",$ret);

            }
        }
        return $ret;
    }
}
