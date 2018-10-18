<?php

return [
    'alipay' => [
        'app_id'         => '2016092100562578',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvv/FrvH/BWkzJJl8QNeHR00zXaQzJ5KJWGNI7xif8VwjBzVitBEdQ5hKdw/2aQrtkwvn3V6hCWkGASSN/xBb+CqMjdQZ3leraAPe/x4p3qtEOyvEabvZWMf4/GR3VSLr/AsAjLoC8ESpm43VVhpt0QhosbCUTrmSxNm26H4G4ss2v60yb8nZZlTCV6CMMSauDOtMOvZw+7yOo0F6A1NUQFMrPPKo/So9/7ifnJBVhUo6pKvN3M0H22lh/9tjaMhLFUsB1cc79Ic5GLxF+qqbwjqtj3uOJSCEBREq68/Pe7SR0yMbgsDaHQcjQl84NnN/itC/dd7x1tT9BOdjcKHmQQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAkUZQXfawwd8A12NaZKEMK6LUiIMD7Vnewd53jVWy0+6PE8EOUSisZU//nxoVrK3vH4fqXr7PhMHkLBVYLCDZi2eN9IumLJqu/DK+3iryvSOMCJq4BA6FuhsjxxxF3TIjF0h7b5Zg7CHY7Il5x3C59YD32vpNVY5j9ysarIHVewIcCuRSQcwk0QukYSAc62hrI+Pog5E+31xLEKHhjuYt5QN51mJL0UhaMOZSN9+yPfxbIs3+f1fjMlTyz+EynBiRDySW2iq5yQskOoBhf6tkJHB2QSyMrbV6CkujNBI4IQY+u83sTn6j35jLZMUYK5pEzxE7mXlrPKnN0MqzoRVTsQIDAQABAoIBAF/6Vmpd6xWK4aFrkHLfO40wvL2b4WJUd6kZ8146+jSubXSdnXndJ1if68APmbZGC6+HOj5yTePlvXuqdmBhK5jAR7cC9DyPzX/tftCFC24OKBwfK+fyOENmXtLTSQ0EbM6bIoHslggrrIdJpF0xioo6NIZFzAX0VvMbVToXZRUoptBmBBrMgjoa+n78K/IfHnvOD0IhW1bUeiuUYxaZL8+tCHeV+03NBgU7A79VN+UKfHGjSDk4SRgwvdfb25DPcxwkJzBNMZPHaMJ2pYgjMaRh2F0n+Ny9uzJC7fCsF634XviELz9Um4lqFihWQJn+7sN96LmjgKwUpyZ1oVRk8AECgYEAwRT5YSliKAhraTELlvKMrW3DACVE+oP7xJpEagd5kmhepYKKqnmrbWVPgOLguowEhZ/B81fLyJ4/g7Pi08DK2u2bVE9267/061WkbD3o7w1Gr1beaGc/9lxj4Ck7oqGrwgjUocTupp1ZLZhjwoQSrIwPGdDqW8ypCfbvpH3eGoECgYEAwJ05omUejK3Gpawh8HFicrw9JsGNtbjtCT8vrSxest8nNhfZ7k0BBl8NjAkJwa1Lgs6TOmR6h6xfkJ4wXsITJH8TlMtDxnYzyx99v4Hq+6lrC/etZ2zjCcNqD4dqKIF+VcQQ4iwrVFye25HeGEr6Wid5xrvAQCWy0ar6B7YXwTECgYAXT1jsCfr3qkyNXoZvqsihB2dLVTSGqfhzO8yWoGBk9IS4ppHnEtlHU7vNa5aF7vF80FSx9B9+ENzKIaV4uwXCeH0QKKfKvlnrL2OyTacZdRjbgjlHkW9/ZpgIL/IrKCl8O2SwQv4sz0I85vDkQt2eRypri3U/r+2Ybl9wFGIEAQKBgQC2Ux2/TyC/4a7sHCh0RZ//I5hvG0BdCBO4cQtcTWfGwd2IIsO0A0g5E7jrGZMWtkeIJqrO11X1H4HGjzcSO3uLTI7ohhA9yJ32ZHTP1tbsKc6eoXCPOk8fas72rCQc+5bu8I1aypypWpM1HLqzHCYnOL7ZE9hD4GuIdOQAcKnDwQKBgA6+eUeJD0BnO+dzav60v2p14reJnLjdGPWru4yFrGgjRFkHPVp/dRTBjCJvG+XfqW0HzViKM2H4cBikgbu7ZcsvVjKuQgBUY98WDMxk7B1Kk4O5nPc0waiTgypV6+1SLoiXGik2Dm+xnsCmDLXbh+r9Bv/ySUziP4GG3w/rbcXy',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
