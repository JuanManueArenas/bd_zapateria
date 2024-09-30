# bd_zapateria base de datos para una zapateria

## Modelo Entidad-Relacion

![Modelo Entidad-Relacion](img/draw.png "Modelo Entidad-Relacion")

## Modelo Fisico de la BD

![Modelo Fisico](img/XD.png "Modelo fisico")

## tabla fabricante

![tabla fabricante](img/pedro.png "tabla fabricante")

## tabla articulo

![tabla articulo](img/zap.png "tabla articulo")


## consultas a la bd

1. Mostrar la lista de todos datos de los fabricantes

`SELECT * FROM fabricante;`

![consulta](img/pedro.png "consulta1")

2. Mostrar la lista de nombres de los fabricantes 

`SELECT nombre_fabricante AS fabricante FROM fabricante;`

![consulta](img/zap.png "consulta2")

3. Mostrar los nombres de los productos.

`SELECT nombre_articulo FROM * articulo`

![consulta3](img/pedro.png "consulta3")

4. mostrar los precios de los nombres de los productos

`SELECT nombre_articulo AS Nombre, precio_articulo AS Precio FROM Articulo;`

![consulta4](img/zap.png "consulta4")

