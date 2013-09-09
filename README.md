laravel-Fpdf
=====================

Fpdf allows to generate PDF files
=============
Install this package through Composer. To your `composer.json` file, add:

```js
"require-dev": {
	"anouar/fpdf": "dev-master"
}
```

Next, run `composer update` to download it.

Add the service provider to `app/config/app.php`, within the `providers` array.

```php
'providers' => array(
	// ...

	'Anouar\Fpdf\FpdfServiceProvider',
)
```

Finally, add the alias to `app/config/app.php`, within the `aliases` array.

```php
'aliases' => array(
	// ...

	'Fpdf'	  => 'Anouar\Fpdf\Facades\Fpdf',
)
```
That's it !!!!!
==============

Example Code
============

```php
Route::get('pdf', function(){

        Fpdf::AddPage();
        Fpdf::SetFont('Arial','B',16);
        Fpdf::Cell(40,10,'Hello World!');
        Fpdf::Output();

});
```