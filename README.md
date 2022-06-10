# Form Actions for YOOtheme Pro Essentials

Custom actions example for the Forms Addon part of [Essentials](https://www.zoolanders.com/essentials-for-yootheme-pro/forms) for [YOOtheme Pro](https://yootheme.com/page-builder).

## Getting Started

Actions are wrapped in a YOOtheme Pro module ready to be set in a [Child Theme](https://yootheme.com/support/yootheme-pro/joomla/developers-child-themes#advanced-customizations) or wrapped into a [Plugin](https://yootheme.com/support/yootheme-pro/joomla/developers-modules). Assuming the Child Theme is the prefered choice follow these steps for the initial setup:

1. Create a folder `yootheme_mytheme` or with a sufix of your choice.
1. Enable the new Child Theme in the YOOtheme Pro Customizer `Advanced Settings`.
1. Place the contents of this repository into `yootheme_mytheme/modules/mymodule`;
1. Create a `yootheme_mytheme/config.php` file with the following content:

```php
<?php

use function YOOtheme\app;

app()->load(__DIR__ . '/modules/*/bootstrap.php');

return [];
```

## Requirements

- YOOtheme Pro 2.7+
- Essentials 1.6.10+
