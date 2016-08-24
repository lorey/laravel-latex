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

This package is not on packagist, so you have to install it manually

### Copy files
* Create a `packages` directory inside your laravel folder
* Copy the repository contents into a directory named `packages/lorey/laravel-latex`

### Extend your composer.json file
Find the `autoload` key and add the given key value pair inside `psr-4`: 

    "autoload": {
          ...
          "psr-4": {
              ...
              "Lorey\\Latex\\": "packages/lorey/laravel-latex/src"
          }
      },
### Register the ServiceProvider and the alias
Open up `config/app.php` and add `Lorey\Latex\LatexServiceProvider::class` as a provider. Then add `'Latex' => Lorey\Latex\Facades\Latex::class` as an alias inside `config/app.php`.

That's it. You should now the able to invoke laravel-latex like in the examples.