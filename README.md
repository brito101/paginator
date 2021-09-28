# Paginator @Brito101

###### Paginator is an extremely compact and easy to use component. You only have to configure its behavior once by the counter, and then use the render method to create a nav with all the navigation links. Easy with having a coffee to use and interacting with your database.

Paginator é um componente extremamente compacto e fácil de usar. Você só precisa configurar seu comportamento uma vez pelo contrutor, e depois usar o método render para criar uma nav com todos os links de navegação.

### Highlights

- Easy to configure and customize via **_constructor_** class (Fácil para configurar e personalizar via **_construtor_** da classe)
- Simple to generate paging with only five arguments (Simples de gerar paginação com apenas cinco argumentos)
- **_pager_** method to assemble results pagination (Método **_pager_** para montar a paginação de resultados)
- **_render_** method to mount html ready to navigate (Método **_render_** para montar o html pronto para navegar)
- Navigation structure with custom classes in elemenos **_nav_**, **_a_** and **_span_** (Estrutura de navegação com classes personalizadas em elemenos **_nav_**, **_a_** e **_span_**)
- Methods **_limit_** and **_offset_** to retrieve values ​​and integrate your **_SQL query_** (Método **_limit_** e **_offset_** para resgatar valores e integrar a sua **_consulta SQL_**)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Paginator is available via Composer:

```bash
"brito101/paginator": "1.0.*"
```

or run

```bash
composer require brito101/paginator
```

## Documentation

###### For details on how to use the paginator, see the sample folder with details in the component directory

Para mais detalhes sobre como usar o paginator, veja a pasta de exemplo com detalhes no diretório do componente

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$page = filter_input(INPUT_GET, "page", FILTER_VALIDATE_INT);
$pager = new \Brito101\Paginator\Paginator();
$pager->pager($page, 100, 10);

echo $pager->render();
```

##### Result

```html
<nav class="paginator">
  <a class="paginator_item" title="First page" href="?page=1"><<</a>
  <span class="paginator_item paginator_active">1</span>
  <a class="paginator_item" title="Page 2" href="?page=2">2</a>
  <a class="paginator_item" title="Page 3" href="?page=3">3</a>
  <a class="paginator_item" title="Page 4" href="?page=4">4</a>
  <a class="paginator_item" title="Last page" href="?page=10">>></a>
</nav>
```

##### Dynamic First And Last Page

```php
$pager->render(null, false);
```
