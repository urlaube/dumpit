# Dumpit theme
The Dumpit theme is a debugging theme for [Urlaube](https://github.com/urlaube/urlaube). It just dumps relevant information via `var_dump()` to the output.

## Installation
Place the folder containing the theme into your themes directory located at `./user/themes/`.
Finally, add the following line to your configuration file located at `./user/config/config.php` to select the theme:
```
Main::set(THEMENAME, Dumpit::class);
```

## Configuration
At the moment this theme has no configuration.
