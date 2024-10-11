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
    def getNombre(self):
        return self.nombre
    def setNombre(self,nuevonombre):
        self.nombre = nuevonombre

empleado1 = Empleados(
    "Andrei",
    "Buga",
    "bugaandrei1@gmail.com",
    6535646
    )

print(empleado1.getNombre())
empleado1.setNombre("Manolo")
print(empleado1.getNombre())


      
        

