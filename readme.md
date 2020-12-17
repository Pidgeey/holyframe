# Holyframe

Application de base pour tout nouveau projet. 

## Technos
- PHP 7.4
- MySQL 5.6
- Vue.js 2.6
- Webpack-mix 2.0
- Axios 0.19


## Documenation
### Déploiment 
Installation des dépendances PHP
```
composer install
```

Installation des dépendances Node
```
npm install
```
Configuration de l'environnement pour la base de données
```
path: config/environnement.php
```

Lancer l'application:
```
php -S localhost:8000 -t public/
```

### Vue.js et les assets
Ajouter des assets à la compilation
```
path: webpack.mix.js
mix.js('resources/assets/js/app.js', 'public/js/app.js');
```

Lancer l'auto compilation des templates Vue.js
```
npm run watch
```

### Routes
Créer une route
```
path: public/index.html
$r->addRoute("HTTP_METHOD", "/uri{param}", ["controller_path", "method"]);
```

### Request
Utiliser le contenu pour une requête ['POST', 'GET']:
```
public function login(Request $request)
{
    $data = $request->getRequest();
}
```

### Builder
Créer un builder afin d'utiliser la base de données:
```
$user = new User();
$builder = new Builder($user);
// Créer un builder afin de créer une requête SQL vers la table correspondant 
// au model de User
```
Méthodes disponibles
```
where(string $column, string operator, string $value): Builder
get(): Iterable
```

### Helpers
Liste des helpers
```
// Chemin vers la page à afficher
view(string $path);
```