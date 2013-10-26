##laravel-Fpdf

Fpdf allows to generate PDF files . This package is the laravel package version of http://www.fpdf.org , for more information check this link http://www.fpdf.org/?lang=en 

###Installation
To your `composer.json` file, add:

```js
"require-dev": {
	"anouar/fpdf": "dev-master"
}
```

Next, run `composer install` to download it.

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


###Example Code

```php
Route::get('pdf', function(){

        Fpdf::AddPage();
        Fpdf::SetFont('Arial','B',16);
        Fpdf::Cell(40,10,'Hello World!');
        Fpdf::Output();
        exit;

});
```
