---
title: "Nginx Conf"
date: 2021-06-10T15:13:39+08:00
draft: true
tags: ["devops"]
series: ["Nginx"]
categories: ["deny"]
---

## setDeny

```
server {
    listen 443 ssl;
    server_name somewhere.com;
    if ($isDeny = 1) {
        return 403;
    }
}

```

## set isDeny

```
map $remote_addr $isApiDeny {
    1.1.1.1 0; # 模擬代理
    default 0;
}
```

感覺接近 arrayMapping
$remoteAddr === '1.1.1.1' 時 return 0

所以可以快速開關並且設定黑白名單

## area

由於有時候可能要關掉地區
所以要借助 geoip

[nginx http geoip2 module](https://github.com/leev/ngx_http_geoip2_module)

```
http {
    ...
    geoip2 /etc/maxmind-country.mmdb {
        auto_reload 5m;
        $geoip2_metadata_country_build metadata build_epoch;
        $geoip2_data_country_code default=US source=$variable_with_ip country iso_code;
        $geoip2_data_country_name country names en;
    }

    geoip2 /etc/maxmind-city.mmdb {
        $geoip2_data_city_name default=London city names en;
    }
    ....

    fastcgi_param COUNTRY_CODE $geoip2_data_country_code;
    fastcgi_param COUNTRY_NAME $geoip2_data_country_name;
    fastcgi_param CITY_NAME    $geoip2_data_city_name;
    ....
}

stream {
    ...
    geoip2 /etc/maxmind-country.mmdb {
        $geoip2_data_country_code default=US source=$remote_addr country iso_code;
    }
    ...
}
```

可以從 $geoip2_data_country_code 獲得 國家代碼

```
map $geoip2_data_country_code $allowed_country {
    default 0;
    FK 1;
    FM 1;
    EH 1;
}
```