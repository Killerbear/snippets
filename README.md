# snippets 

## Vorbereitung 
### Docker
```bash
docker-compose up
```

## lose Sammmlung von Beispielcode

Jedes Beispiel ist in einer eigenen Klasse definiert und kann zentral ausgeführt werden.

### run code:
```bash
 php app/src/index.php
```

Im Konstruktor der Main-Klasse kann jede Klasse ausgeführt werden.
z.B.:
```php
class Main
{
  public function __construct()
  {

    // Socken-Paare zählen 
    new sockMerchant();


  }
}
```