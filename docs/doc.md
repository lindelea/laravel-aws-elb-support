## AWS Elastic Load Balancing Support For Laravel

[![Latest Stable Version](https://poser.pugx.org/lindelea/laravel-aws-elb-support/v/stable)](https://packagist.org/packages/lindelea/laravel-aws-elb-support)
[![Total Downloads](https://poser.pugx.org/lindelea/laravel-aws-elb-support/downloads)](https://packagist.org/packages/lindelea/laravel-aws-elb-support)
[![Latest Unstable Version](https://poser.pugx.org/lindelea/laravel-aws-elb-support/v/unstable)](https://packagist.org/packages/lindelea/laravel-aws-elb-support)
[![License](https://poser.pugx.org/lindelea/laravel-aws-elb-support/license)](https://packagist.org/packages/lindelea/laravel-aws-elb-support)
[![composer.lock](https://poser.pugx.org/lindelea/laravel-aws-elb-support/composerlock)](https://packagist.org/packages/lindelea/laravel-aws-elb-support)

This package ensures that your laravel project correctly recognizes secure connections (HTTPS) when using Amazon ELB.

此包可确保您的Laravel项目在使用Amazon ELB时正确识别安全连接（HTTPS）。

このパッケージを使用すると、Amazon ELBを使用している際、laravelプロジェクトがセキュア接続（HTTPS）を正しく認識することができます。

### Install&Usage

Require this package with composer using the following command:

```bash
composer require lindelea/laravel-aws-elb-support
```

After updating composer, add the service provider to the `providers` array in `config/app.php`

```php
Lindelea\Support\Aws\Elb\ServiceProvider::class,
```

### License

The Laravel AWS ELB Support is open-sourced software licensed under the [MIT license](https://github.com/lindelea/laravel-aws-elb-support/blob/master/LICENSE)