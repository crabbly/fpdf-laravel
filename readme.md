# FPDF - Laravel

A package for Laravel to implement the FPDF class.

FPDF Official Website: 
[www.fpdf.org](http://www.fpdf.org/)


## Installation

### Step 1: Composer

From the command line, run:

```php
composer require crabbly/fpdf-laravel
```

### Step 2: Service Provider

For your Laravel app, open `config/app.php` and, within the `providers` array, append:

```php
Crabbly\Fpdf\Providers\FpdfServiceProvider::class
```

This will bootstrap the package into Laravel.

## Usage

We can resolve the FPDF class instance out of the container:

```php
$pdf = app('Fpdf');

```

Or with dependency injection

```php

```

We can also instantiate it directly:

```php
$pdf = new Crabbly\Fpdf\Fpdf;
```

## FPDF Documentation

For documentation manual and tutorials, please visit [www.fpdf.org](http://www.fpdf.org/)

## Example

Create a 'Hello World' PDF document and save it to a file in the storage folder:

```php
use Illuminate\Support\Facades\Storage;

//create pdf document
$pdf = app('Fpdf');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');

//save file
Storage::put($pdf->Output('S'));
```

## Contribution

Pull requests are welcome.
Please report any issue you find in the issues page.

## License

The package is free software distributed under the terms of the MIT license.
FPDF is a free PHP class, you may use it for any kind of usage and modify it to suit your needs.