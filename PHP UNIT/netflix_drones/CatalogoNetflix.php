<?php

/**
 * Nos han pedido reemplazar la herramienta para mantener
 * el catalogo de peliculas de Netflix porque el original
 * es muy malo. Pero como es un cambio muy grande en nuestra
 * primera entrega no hay que entregar todas las funcionalidades.
 * 
 * Las funcionalidades que nos piden son:
 *  - Agregar peliculas nuevas
 *  - Agregar series nuevas
 *  - Poder sacar peliculas
 *  - Poder sacar series
 *  - Listar por categoria
 *  - Una funcion que te dice si existe el id de pelicula/serie
 * 
 * Las categorias se van a ir creando a medida que se agregan
 * peliculas o series, entonces si se agrega una serie con la
 * categoria "ciencia misteriosa" esta categoría empieza a
 * existir en ese momento.
 * 
 * Tendremos que pasar todos los tests y tratemos de quedar
 * bien porque es nuestro primer cliente importante!
 */

class CatalogoNetflix {
  /**
   * Esta funcion solo nos dice si existe la pelicula o serie con
   * el id que nos pasan
   */
  private $catalogo = [];

  public function existeId($id) {
    if(isset($this->catalogo[$id])){
      return true;
    }
    return false;
  }

  public function agregarSerie($id, $nombre, $cantidadCapitulos, $categoria) {
    
    if(isset($this->catalogo[$id])){
      return false;
    }

    $this->catalogo[$id] = [
      'Id' => $id,
      'Nombre'=> $nombre,
      'Capitulos' => $cantidadCapitulos,
      'Tipo' => 'Serie',
      'Categoria' => $categoria
    ];

    return true;
    
  }

  public function agrearPelicula($id, $nombre, $tiempo, $categoria) {
    if(isset($this->catalogo[$id])){
      return false;
    }
    $this->catalogo[$id] = [
      'Id' => $id,
      'Nombre'=> $nombre,
      'Tiempo' => $tiempo,
      'Tipo' => 'Pelicula',
      'Categoria' => $categoria
    ];

    return true;
  }

  public function sacarSerie($id) {
    unset($this->catalogo[$id]);
    return true;
  }

  public function sacarPelicula($id) {
    unset($this->catalogo[$id]);
    return true;
  }

  /* public function listarContenidoDeLaCategoria($valor,$categoria) {
    $array = [];
    foreach ($this->catalogo as $key => $value) {
      // if(!isset($value[''. ucfirst(strtolower($valor)) .''])){
      //   echo $valor . " no existe";
      //   // return false;
      // }
      if($value[''. ucfirst(strtolower($valor)) .''] == $categoria){
        $array[] = $value;
      }
    }
    return $array;
  } */

  public function listarContenidoDeLaCategoria($categoria) {
    $array = [];
    foreach ($this->catalogo as $key => $value) {
      if($value['Capitulos'] == $categoria){
        $array[] = $value;
      }
    }
    return $array;
  }

}

$c = new CatalogoNetflix();

$c->agregarSerie(0, 'Friends', 10, 'Comedia');
$c->agregarSerie(1, 'Breaking Bad', 20, 'Ciencia Ficcion');
$c->agregarSerie(2, 'The Big Bang Theory', 10, 'Comedia');
$c->agrearPelicula(3, 'Mas Barato Por Docena', 240, 'Comedia');
$c->agrearPelicula(4, 'Glass', 140, 'Thriller');
$c->agregarSerie(5, 'Dexter', 15, 'Thriller');
$c->agrearPelicula(6, 'El papa de la novia', 260, 'Comedia');
$c->agrearPelicula(7, 'Harry Potter', 160, 'Ciencia Ficcion');

print_r($c->listarContenidoDeLaCategoria(10));
// print_r($c);

