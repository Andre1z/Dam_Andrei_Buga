class Empleados:
    def __init__(self,
                 nuevonombre,
                 nuevosapellidos,
                 nuevoemail,
                 nuevotelefono
                 ):
        self.nombre = nuevonombre
        self.apellidos = nuevosapellidos
        self.email = nuevoemail
        self.telefono = nuevotelefono
    def dameDatos(self):
        print(
            "Nombre:",
            self.nombre,
            " - Apellidos:",
            self.apellidos,
            " - Email:",
            self.email,
            " - Teléfono:",
            self.telefono)

empleado1 = Empleados(
    "Andrei",
    "Buga",
    "bugaandrei1@gmail.com",
    6535646
    )
empleado2 = Empleados(
    "Manolo",
    "Martinez",
    "mmartinez@ilerna.es",
    6436546
    )
empleado1.dameDatos()
empleado2.dameDatos()

print(empleado1)
empleado1 = None
print(empleado1)        
        

