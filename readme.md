Problema: create un file index.php in cui:

 è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà. Non potete utilizzare il var_dump per stampare le proprietà dell'oggetto ma le dovete richiamare.



1- Definisco una classe movie in questo modo
    class Movie {}
2- al suo interno definisco delle variabili scritte in questo modo:
    public $nomevariabile
3- creo un metodo all'interno delle variabili scritto
    public function nome metodo($valore){ 
        logica da stabile
    }
4- creo due istanze diverse per due film diversi scritte come:
    $TitoloFilm = new Movie (),
    Per ogni istanza accedo ai vari attributi dei metodi con $TitoloFIlm -> nomevariabile ='dato'
5- stampo a schermo usando echo.