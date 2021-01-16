# Trafegus 
Lib para Integração com API REST do sistema Trafegus a partir da versão 44.

<p align="center">
<img src="https://img.shields.io/packagist/dt/fabianoroo/trafegus?style=social">
<img src="https://img.shields.io/github/v/release/fabianoroo/trafegus?style=social">
</p>

Utilizando a biblioteca

```
composer require fabianoroo/trafegus:1.0.*
```
 
### Exemplos

#### Cadastro de Terminal

``` php
<?php
require_once( './../vendor/autoload.php');

$host = 'HOST_API_TRAFEGUS';
$auth = 'user:password';

$terminal = new \Trafegus44\Terminal($host, $auth);
$terminal->setIdentificador('A465DF897ADF6A5')
->setTecnologia('4574');

$retorno = $terminal->create();

print_r(json_encode($retorno->response));

```


 
