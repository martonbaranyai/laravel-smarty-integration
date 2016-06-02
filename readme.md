# Laravel 5.2 and Smarty integration

Easy and overviewable, these are the basic steps done:

- composer require smarty/smarty
- extend the original Smarty class to replace display() with fetch()*
- create SmartyIntegrationServiceProvider and define the extended Smarty as a singleton
- helper smarty() function included in a helpers.php
- SmartyTest and SmartyTestController both included

*We need to replace the display() function because that prints the contents and we just want to return it in Laravel


## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
