<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use nuevo\Series_info;

class series_infos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Series_info::create([
        'Genre' => 'Horror',
        'Start' => '20-10-25',
        'Finish' => '30-24-12',
        'Description' => 'Pretty Little Liars (Lindas mentirosas en Latinoamérica y Pequeñas mentirosasen España) es una serie de televisión estadounidense destinada al público adolescente, basada en la saga de libros del mismo nombre, escrita por Sara Shepard. Fue estrenada el 8 de junio de 2010 en el canal ABC Family.1 El 17 de enero de 2011, MTV España empezó a emitir la serie y Boomerang Latinoaméricadio inicio a la serie el 30 de marzo de 2011. La segunda temporada se emitió el 28 de marzo del 2012 por Boomerang Latinoamérica, así como en España tuvo lugar su estreno el 29 de septiembre del 2012 por AXN White. La tercera temporada tuvo su fecha de estreno en Estados Unidos el 5 de junio del 2012 por ABC Family.2 En Latinoamérica, la tercera temporada se estrenó el 27 de marzo del 2013 porBoomerang Latinoamérica, y en España el 20 de enero de 2014 por AXN White.3
El 4 de octubre de 2012, ABC Family anunció que la serie sería renovada para una cuarta temporada,4 la cual comenzó a filmarse el 15 de marzo de 20135 y se estrenó en Estados Unidos el 11 de junio de 2013 por ABC Family. Debido a queBoomerang Latinoamérica eliminó casi por completo la programación juvenil para ser de nuevo un canal infantil animado, algunas series se mudaron al canal Glitz* en el cual la 4 temporada se estrenó el 23 de abril del 2014.
El 26 de marzo de 2013, ABC Family anunció que renovaría la serie para una quinta temporada. El día 7 de mayo de 2015 el canal TNT Series empezó a emitir la serie para Latinoamérica desde la cuarta temporada.
El 10 de junio de 2014, Pretty Little Liars fue renovada para una sexta y séptima temporada. En noviembre de 2014, Lucy Hale confirmó que la séptima temporada será la última de la serie. Sin embargo en Agosto de 2015, la productora ejecutiva de la serie I. Marlene King y la actriz Shay Mitchell dijerón que la séptima temporada no será la última de la serie e incluso dijerón que es muy posible que haya una octava temporada y tambien una pelicula.
',
        'serie_id' => '1',
        'Seasons' => '5'
          ]);
        Series_info::create([
          'Genre' => 'Horror',
          'Start' => '20-10-25',
          'Finish' => '30-24-12',
          'Description' => 'Xena: la princesa guerrera (en inglés, Xena: Warrior Princess) es una serie de televisión de culto6 7 originalmente emitida entre el 15 de septiembre de 1995 y el18 de junio de 2001. La serie fue creada en 1995 por los directores y productoresRobert Tapert y John Schulian, con la ayuda de los productores Sam Raimi y R.J. Stewart. 8 Rodada en Nueva Zelanda,5 9 se trata de una co-producción entre este país y Estados Unidos. La serie fue producida por la Pacific Renaissance Pictures Ltd, cuyos dueños son Robert Tapert y Sam Raimi, productores de la serie y distribuida por Universal Studios.10 La serie, ambientada en la Antigua Grecia, narra las aventuras de Xena (Lucy Lawless) y Gabrielle (Renée OConnor), dos grandes guerreras,que se profesaban mucho amor pero no atracción sexual como se ha especulado, además son inseparables amigas que luchan contra las injusticias de la época.
La serie se mantuvo en el aire durante seis temporadas en EE.UU., entre 1995 y2001,11 convirtiéndose en la más exitosa de las series sindicadas del momento y llegando a ser un auténtico fenómeno social a lo largo de todo el mundo.12 De hecho, es considerada una de las mejores series de la historia por la revista TV Guide7 y, hoy en día, el fanatismo por la serie, o fandom, continúa activo en Internet. Esta serie de aventuras, transmitida en más de ochenta y seis países de los cinco continentes,5 13 ha recibido varios premios, incluyendo un Emmy.14 Además, aprovechando el éxito de la misma, se han comercializado numerosos productos sobre ella, tales como episodios en DVD, una película, libros, cómics o videojuegos. La influencia de la serie fuera de la pantalla llega a sectores como la comunidadlésbica o la astronómica, así como a otras series de televisión y películas.
',
          'serie_id' => '2',
          'Seasons' => '6'
            ]);
        Series_info::create([
          'Genre' => 'Horror',
          'Start' => '20-10-25',
          'Finish' => '30-24-12',
          'Description' => 'Orphan Black es una serie de televisión canadiense de ciencia ficción creada porGraeme Manson y John Fawcett, protagonizada por Tatiana Maslany en el rol de varias mujeres idénticas que se revelan como clones.
Sarah Manning (Tatiana Maslany) es una mujer que asume la identidad de su clon, Elizabeth Childs, después de presenciar el suicidio de la propia Elizabeth en las vías del tren. La serie plantea cuestiones sobre las implicaciones morales y éticas de la clonación humana y lo que esto supone en cuanto a la identidad.1 Se estrenó en el WonderCon en Anaheim, California el 29 de marzo de 2013.2
La primera temporada de la serie se estrenó el 30 de marzo de 2013 con un total de diez episodios por el canal Space en Canadá y por BBC America en los Estados Unidos.3 El 2 de mayo de 2013, la serie renovó para una segunda temporada de diez episodios, cuyo estreno tuvo lugar el 19 de abril de 2014.4 El 9 de julio de 2014 fue anunciada una tercera temporada de diez episodios que se estrenó el 18 de abril de 2015.5
El papel de las mujeres en la serie es pleno, dándole el máximo protagonismo y rompiendo con la normatividad de hombre heroico y valiente.
',
  'serie_id' => '3',
  'Seasons' => '3'
        ]);
    }
}
