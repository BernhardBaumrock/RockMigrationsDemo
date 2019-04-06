# RockMigrationsDemo

## 0.0.1

Create a new field: https://github.com/BernhardBaumrock/RockMigrationsDemo/blob/master/RockMigrations/0.0.1.php

Run it in Tracy:

```php
$rm = $modules->get('RockMigrations');
$rm->setModule('RockMigrationsDemo');
$rm->up('0.0.1');
```

And we have our new field in the list :)

![img](https://i.imgur.com/DP6rZta.png)

## 0.0.2

Use code intellisense for instant help:

![img](https://i.imgur.com/jotPeXW.png)

Run it in Tracy:

```php
$rm = $modules->get('RockMigrations');
$rm->setModule('RockMigrationsDemo');
$rm->up('0.0.2');
```

And see the result:

![img](https://i.imgur.com/7Nixpsv.png)

### 0.0.3

Ok, let's say we want to get rid of the `search` page and template, so we create a new migration for this purpose: https://github.com/BernhardBaumrock/RockMigrationsDemo/blob/master/RockMigrations/0.0.3.php

Please see the screencast that I created:

https://www.youtube.com/watch?v=_L8a1SdbuB8
