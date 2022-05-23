select * from categorias;
select * from clientes;
select * from detalles;
select * from empleados;
select * from envios;
select * from pedidos;
select * from productos;
select * from proveedores;

-- 1) Borrar la base de datos "bd_neptuno" y vuelve a cargar el script de la base de datos.

DROP DATABASE `bd_neptuno`;

CREATE DATABASE IF NOT EXISTS bd_neptuno;
USE bd_neptuno;

-- 2) ¿Cuántos proveedores hay en cada país? 

select count(id) proveedores, pais 
from proveedores group by pais;

-- 3) Para cada pedido, muestra su id pedido y su importe total. Calculalo a partir de la table detalles

select d.pedido_id, (d.precio_unidad * d.cantidad) as venta
from detalles d, pedidos p
where d.pedido_id = p.id;

-- 4) Mostrar el nombre del producto, el nombre de la categoría y su proveedor de todos los productos que contengan la letra "A" en el nombre.

select  producto, categoria, empresa 
from productos p, categorias c, proveedores e
where p.id = c.id and p.id=e.id and producto like '%A%';


-- 5) Los pedidos que hizo el empleado "Callahan" y fueron a Estados Unidos. Ayuda: Muestra todas las columnas de la tabla pedido

select p.*
from pedidos p, empleados e 
where p.empleado_id=e.id
and p.empleado_id in (select id from empleados where apellidos like'Callahan')
and pais_destinatario like 'Estados Unidos';


-- 6) ¿Qué categoria es las que más productos tiene?


select categoria, max(unidades_existencia) 
from productos, categorias
where categorias.id = productos.id; 

-- 7) ¿Cúal es la media de artículos comprados por pedido? Ayuda: sólo debe dar un resultado

select avg(cantidad)
from detalles, pedidos
where detalles.pedido_id = pedidos.id; 

-- 8) Lista el nombre de productos que hayan sido comprobados por clientes de Estados Unidos en más de una ocasión

select count(p.id), contacto
from productos p, clientes c
where p.id = c.id and pais='Estados Unidos'
group by contacto;  

  
-- 9) Muestra todas las columnas de la tabla detalles más una columna con el importe total de cada producto

select d.*, ((d.precio_unidad * d.cantidad) * (1 - d.descuento) ) as importe_total
from detalles d;

-- 10) Dime el nombre o el id del jefe que más ventas han tenido sus empleados.  
-- Para simplificarlo, no es necesario que compruebes cuantos hay que son los que más han vendido sus empleados. 
-- Con que me digas uno de los que mas es su    

select * from detalles;

select jefe_id, SUM(precio_unidad * cantidad - descuento) as venta
from empleados e, pedidos p, detalles d  
where e.id = p.empleado_id and p.id = d.pedido_id
group by e.nombre order by venta DESC LIMIT 1;

