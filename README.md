# Installation
Use the standard way:

```
composer require todstoychev/bootstrap-alert-bundle
```

Then include in your AppKernel.php

```php
new Todstoychev\BootstrapAlertBundle\TodstoychevBootstrapAlertBundle()
```

Since this bundle uses Twitter Bootstrap 3 components, it comes with Bootstrap 3.3.7 and jQuery 3.1.1.
To install them simply run:
```
php bin/console asset:install
```
Symfony will install the assets for you

# Configuration

Those are the default values for your application config.yml:

```yaml
todstoychev_bootstrap_alert:
    use_close_button: true # Allows you to use close button in alert boxes
    use_icons: true # Show icons in alert boxes
    icons:
      error: 'glyphicon glyphicon-close-sign'
      warning: 'glyphicon glyphicon-exclamation-sign'
      info: 'glyphicon glyhicon-info-sign'
      success: 'glyphicon glyphicon-ok-sign'
```

Feel free to use any other icon sets

# Usage

Just include the template in your twig:
```twig
{% include 'TodstoychevBootstrapAlertBundle::alert.html.twig' %}
```