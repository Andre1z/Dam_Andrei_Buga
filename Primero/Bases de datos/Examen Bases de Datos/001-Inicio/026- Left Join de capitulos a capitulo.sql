SELECT
capitulos.capitulos_capitulo
FROM
capitulos
LEFT JOIN capitulo
ON capitulo.Identificador = capitulos.capitulos_capitulo;