class Empleados:
    def __init__(self,
                 nuevonombre,
                 nuevosapellidos,
                 nuevoemail,
                 nuevotelefono,
                 nuevaedad
                 ):
        self.nombre = nuevonombre
        self.apellidos = nuevosapellidos
        self.email = nuevoemail
        self.telefono = nuevotelefono
        self.edad = nuevaedad

class Cliente:
    def __init__(self,
                 nuevonombre,
                 nuevosapellidos,
                 nuevoemail,
                 nuevotelefono,
                 nuevaedad
                 ):
        self.nombre = nuevonombre
        self.apellidos = nuevosapellidos
        self.email = nuevoemail
        self.telefono = nuevotelefono
        self.edad = nuevaedad
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

    def getEdad(self):
        return self.edad
    def setEdad(self,nuevaedad):
        if nuevaedad == self.edad + 1:
            self.edad = nuevaedad
        else:
            print("Operación no permitida")

cliente1 = Cliente(
    "Andrei",
    "Buga",
    "bugaandrei1@gmail.com",
    12893123,
    18
    )

print(cliente1.edad)
cliente1.setEdad(21)
print(cliente1.edad)

      
        

