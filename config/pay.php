<?php

return [
    'alipay' => [
        'app_id'         => '2016091900544748',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuH+LEt/TWj20fVvSYn86VMjHiZTxxl8LR7wUEti7LwHE/EK4K2OHJWLmAT2ZrpdKvb8EV7+YgLkToGK/Ei5KTFy2qUEn+fSdH8KyemSK4NxQzOFzR7guphfMDf4vuHRU0bPB1E5WnYgBextjUTuZnCnbLF151njCwNIxjUrMKkuL2kB040FCaotxyBIDre77owWRzwzkqe6t8FVxRuVzvptRNmZSR7390fsNv/hbY1SKKhMMKMGqxKm7MvjsvkPnwyQnYUSmnnbw+lJ6mRvuWLH2iSJYnD65sTWxsuaKWN6dC+MP3XKeGcDVLr5oVQFsGmaRvvwgZdb0kWCqlVF3cQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAvFhRkUWLsz06RA+GtZ3m3IEtpDMbYRkMqT6z8zTUWyuI1FqMmwzIhpJ+Ye5Snfb7r6A8/rfLmVrUXIgzaSWNIDph0xeV/pIMv2xdlXrgCxmHM7f9goRP17bMu9o6kRjNQ9T5wQm6uLw3M+T7SlfWF2Fv80HaAEwHgmNzQ+lgzHMDYk454hHVCMKNTXWhq8ADJRLkApOQGqqb9/379mlxGMSVEioWjX0S5wYd4nn31ks75Ae65Lekw/qk3uXh1zA8CVD6lPJzknoY9s2QQq1ntXlmdZlJqilyLplw78BWiRrd0FVCPplb1LMOMuvQGWvlk2iAHCFTiX3OFFcdnMBbFQIDAQABAoIBABLKFMkTUQ5+izODAQNZT1CsKmt5FcAoCZVQxg77NDwsKahVqDVHnzGdp7IJXoCXxSAOMkeO+mbAIvNgOxDASEXwzRWMAtC0rUTjgKqK6ZLx5wUH0+iTXou8lswexzz2ZnPf6VKSr+gCDtfEfjU6cgc/FzYDWcYxz4X4eeVKgPekTbspVHoNMw1/QrFnZiCCA5Xk7x8OEnElB0gBCKGT8CmSyLIlotD/3yphe2hvfi9G1Ssa0eXR+pyVktpnXB5FnXEUmiknVBFFVo9kDg+nyawyu5Cm5fCY7naGnKRqutJeHl77bq/aTJwK4NgFbKY1MnsoBHO0cnawgJAa/TKSu/kCgYEA7i/tnyuV6CBoIvsE5v7mxtV/gVNq9i0EqsxwBSrgPUBLhMDNo8KU7/8ZuuzA4YFu+esE5fydJdSfVjOW9mcaS8ChVDZwymQabPB4yLAunGVdkFBKDUETNjYiGJzdUmDTW0RxgGPC7fE3IbmW0DqUIrrMfesMkc/oVzyFLoD7YTcCgYEAym4qbVEBUyex4biOCTmln+0yPVSBbRYn7B4mpXve9rQZb1n2XvR2lA5ZU3UZswCiwnvyvRMt+n0DxvTVmEkY2Ot+a/VasTlIQ3NRCsZX5lS2ltDfJjCXF+PoEVVWylIPkRG7SIAJPDnNpWkIYnqcN6xEAHrQspD7EDs2+6fK/BMCgYBRR5Gy61Cwcb6XkUlO+lUOLPTh0PGDKEGbd0ASw1raDAK5PoHuDAx/CXJiU0BOs7iHGCgHw3hs3G2zIM+3Ld/PUeC7uAgtSJOr8TOGaHi/befLw1pBw58mtLpV49Gyts/pKSYCRgjS4amKnKZWUGcUouH9ZiRX7ba/biuUfvdJaQKBgQDAPMCD0cKdUnwF7LrOHfWgm6PzRDYo/zpoa/Wtf6YsyLnC2j8yy5t0XPANZo5CRJ9MbGMHlZg7Yc9deJMDLJ+xGGqVYYp/9PMgQvm6bsN41AgVz0OrQ8epA2EWXOGv/yATVzBw2E5s6EPYCpfQ1blW0Xw+rGNWwIH8Vw+PCzikCwKBgQDRprQII5Ndw67j+KAS46YupUjsHoEW9yGHF/xC+JF03beRB/YuKV0FSxAgFZ3ygzXOXFWzVjYTEkIfUqDUTFK3MLg7oT6vUuf+mrASxGkIFOhLCvhzt/IpUI6d7x/xJTEQ+NLQr3j9bQ7BJRfvtXn8xz04MU0SLAnlONKyHLmqUA==',
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
