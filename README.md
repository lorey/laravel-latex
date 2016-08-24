# laravel-latex - Laravel Helper for LaTeX

This is a Laravel package to deal with LaTeX code inside Laravel. Currently, it's main feature is to escape LaTeX code.

## Usage

laravel-latex currently only supports escaping LaTeX. This feature is equivalent to `htmlentities` in PHP. Like for HTML with htmlentities you can be sure that after you've used the `Latex::escape` on any input the code doesn't contain special characters anymore.

### Escaping LaTeX

The typical use case is when you're generating LaTeX code and receive untrusted user input that could contain special characters.

    // $input is a string that you want to output inside LaTeX safely
    $output = LaTeX::escape($input) 
    // $ becomes \$
    // \ becomes \\
    // and so on.

## Installation

This package is not on packagist, so you have to install it manually:
* Create a `packages` diretory inside your laravel folder
* Copy the repository contents into a directory named `packages/lorey/laravel-latex`
* Register `Lorey\Latex\LatexServiceProvider::class` as a provider and `'Latex' => Lorey\Latex\Facades\Latex::class` as an alias inside `config/app.php`