# A Laravel Mail Tracker wrapper for Nova 

Laravel Mail Tracker [docs](https://github.com/jdavidbakr/mail-tracker)

### Install

Run this command into your nova project:

`composer require stonkeep/nova-mail-tracker`

### Add it to your NovaServiceProvider:

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        Stonkeep\NovaMailTracker\NovaMailTracker::make(),
    ];
}
```