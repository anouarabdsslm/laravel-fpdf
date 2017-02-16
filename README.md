If you're going to use this package with L4, make sure you include the laravel 4 version: 
```js
"require": {
    "anouar/fpdf": "1.0.1"
}
```
##laravel-Fpdf

Fpdf lets you generate PDF files. This package is the laravel package version of http://www.fpdf.org , for more information check this link http://www.fpdf.org/?lang=en 

##Donation :
If you want to support us: <a href='https://pledgie.com/campaigns/27748'><img alt='Click here to lend your support to: github and make a donation at pledgie.com !' src='https://pledgie.com/campaigns/27748.png?skin_name=chrome' border='0' ></a>

###Installation
Add the following to your `composer.json` file:

```js
"require-dev": {
	"anouar/fpdf": "1.0.2"
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

##Example Code

```php
Route::get('pdf', function(){
	$fpdf = new Fpdf();
        $fpdf->AddPage();
        $fpdf->SetFont('Arial','B',16);
        $fpdf->Cell(40,10,'Hello World!');
        $fpdf->Output();
        exit;

});
```

##OR

```
Route::get('pdf', function(){

        Fpdf::AddPage();
        Fpdf::SetFont('Arial','B',16);
        Fpdf::Cell(40,10,'Hello World!');
        Fpdf::Output();
        exit;

});
```
