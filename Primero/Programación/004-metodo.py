class Cliente:
    def __init__(self,nuevonombre,nuevosapellidos,nuevoemail,nuevotelefono):
        self.nombre = nuevonombre
        self.apellidos = nuevosapellidos
        self.email = nuevoemail
        self.telefono = nuevotelefono
    def dameDatos(self):
        print("Nombre:",self.nombre," - Apellidos:",self.apellidos," - Email:",self.email," - Telefono:",self.telefono)

cliente1 = Cliente("Jose Viecente","Carratalá","info@jocarsa.com",6535646)
cliente2 = Cliente("Juan","Martinez","juan@jocarsa.com",6535646)
cliente1.dameDatos()
cliente2.dameDatos()
