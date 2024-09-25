SELECT * FROM empleados
RIGHT JOIN direcciones
ON empleados.Identificador = direcciones.empleados_nombre;