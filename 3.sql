SET SQL_SAFE_UPDATES = 0;
-- 1 Actualiza las películas con duración 0 a 5 min
select * from peliculas ;

update peliculas 
set duracion = 5
where duracion = 0;

-- 2. Películas con calificación superior a 5, súmale 1 minuto

update peliculas 
set duracion =+ 1
where calificacion > 5;

-- 3. Películas de la década de los 80, pon su título en mayúscula

UPDATE peliculas 
SET titulo = UCASE(titulo)
WHERE produccion between 1980 and 1989;

-- 4. Muestra todos los datos de la película “El aventurero”

select * from peliculas where titulo = "El aventurero";

-- 5. Muestra el id_actor (relacionala con la tabla “películas actores” de la película “El aventurero”
select * from peliculas_actores;
select * from peliculas_actores where pelicula_id = 17;

-- 6. Muestra el nombre de los actores de “El aventurero” (a la select anterior, relaciónala con la tabla “actores”. 
-- Después, borra todos los actores que han participado. Vuelve  a ejecutar la select anterior para asegurarte que no están.

select * from actores;
select * from peliculas_actores;
select * from peliculas;

select * from actores a, peliculas_actores pa  where  a.id = pa.actor_id  and pelicula_id = 3;  
select actor, titulo 
from actores a, peliculas_actores pa, peliculas p
where a.id = pa.actor_id and pa.pelicula_id = p.id and titulo = "El aventurero";

DELETE id, nombre FROM actores a, peliculas_actores pa, peliculas p
where a.id = pa.actor_id and pa.pelicula_id = p.id and titulo = "El aventurero";
delete id from actores where id = 1;

-- 7. Muestra el nombre de los actores de “Los ojos de la momia”. Cámbialos a la película de Titanic.

-- 8. Muestra el nombre de los montadores que comience su nombre por “A”

select * from montadores;
select * from montadores where montador like 'a%';

-- 9. Obtén la media de duración de todas las películas, excluyendo las de duración 0

select * from peliculas;
select avg(duracion) from peliculas where duracion > 0;

-- 10. Titulo de la película con más antigua. Realizar con 2 selects (con el resultado de la primera select, realizar la segunda

-- 11. Titulo de la película con el título más largo. Realizar con 2 selects (con el resultado de la primera select, realizar la segunda)

-- 12. Número de películas que ha realizado cada director
select count(pelicula_id), director from directores d, peliculas_directores pd
where d.id=pd.pelicula_id;
-- 13. Número de películas que ha realizado cada actor

-- 14. Películas que han sido producidas por Kathleen Kennedy. Incluir el director y ordenar por año de producción.

-- 15. Películas de animación o dibujos animados ordenadas de más a menos reciente

-- 16. Director, nacionalidad y músico de las películas que empiezan por K

select director, nacionalidad, musico, titulo from 
nacionalidades n, peliculas_nacionalidades pn, directores d, peliculas_directores pd, musicos m, peliculas_musicos pm, peliculas p
where n.id=pn.pelicula_id and d.id=pd.pelicula_id and m.id=pm.pelicula_id and p.titulo like 'k%';
-- 17. Inserta una nueva película. Además inserta sus actores y sus productores.

-- 18. Muestra los actores y productores de la película insertada.
