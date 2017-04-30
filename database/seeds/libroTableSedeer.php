<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Librooo;
class libroTableSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
;
        $data = array(
            [
            'titulo'=>'El arte de la guerra',
            'autor'=>'Tzun tzu',
            'image'=>'arte.jpg',
            'genero'=>'Cultura',
            'precio'=>'102',
            'reseña'=>'Es un libro escrito por el mitico chino de las putas guerra tzun tzu'
            ],
            [

            'titulo'=>'48 leyes del poder',
            'autor'=>'Tse tse',
            'image'=>'http:localhost/Tienda/public/img/esco.jpeg',
            'genero'=>'Cultura',
            'precio'=>'102',
            'reseña'=>'Es un libro escrito por el mitico chino de las putas guerra tzun tzu'

            ],
                        [

            'titulo'=>'48 leyes del poder',
            'autor'=>'Tse tse',
            'image'=>'http:localhost/Tienda/public/img/poder.jpg',
            'genero'=>'Cultura',
            'precio'=>'102',
            'reseña'=>'Es un libro escrito por el mitico chino de las putas guerra tzun tzu'

            ],
                        [

            'titulo'=>'48 leyes del poder',
            'autor'=>'Tse tse',
            'image'=>'http:localhost/Tienda/public/img/arte.jpg',
            'genero'=>'Cultura',
            'precio'=>'102',
            'reseña'=>'Es un libro escrito por el mitico chino de las putas guerra tzun tzu'

            ],
                        [

            'titulo'=>'48 leyes del poder',
            'autor'=>'Tse tse',
            'image'=>'http:localhost/Tienda/public/img/esco.jpeg',
            'genero'=>'Cultura',
            'precio'=>'102',
            'reseña'=>'Es un libro escrito por el mitico chino de las putas guerra tzun tzu'

            ],
                        [

            'titulo'=>'48 leyes del poder',
            'autor'=>'Tse tse',
            'image'=>'http:localhost/Tienda/public/img/poder.jpg',
            'genero'=>'Cultura',
            'precio'=>'102',
            'reseña'=>'Es un libro escrito por el mitico chino de las putas guerra tzun tzu'

            ],
                        [

            'titulo'=>'48 leyes del poder',
            'autor'=>'Tse tse',
            'image'=>'http:localhost/Tienda/public/img/esco.jpeg',
            'genero'=>'Cultura',
            'precio'=>'102',
            'reseña'=>'Es un libro escrito por el mitico chino de las putas guerra tzun tzu'

            ],
                        [

            'titulo'=>'48 leyes del poder',
            'autor'=>'Tse tse',
            'image'=>'http:localhost/Tienda/public/img/poder.jpg',
            'genero'=>'Cultura',
            'precio'=>'102',
            'reseña'=>'Es un libro escrito por el mitico chino de las putas guerra tzun tzu'

            ],
            );
        Librooo::insert($data);
    }
}