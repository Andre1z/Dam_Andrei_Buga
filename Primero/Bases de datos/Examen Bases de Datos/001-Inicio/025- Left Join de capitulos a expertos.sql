SELECT
capitulos.capitulos_experto
FROM
capitulos
LEFT JOIN expertos
ON expertos.Identificador = capitulos.capitulos_experto;