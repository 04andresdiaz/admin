create DATABASE inventario;
use inventario;
CREATE TABLE usuarios(
    idUusario int(10) not null AUTO_INCREMENT PRIMARY KEY,
    nombreUsuario varchar(45) not null,
    contrasena varchar(45) NOT null,
    idRol int(10) NOT null,
    idEmpleado int(10) NOT null);
    
CREATE TABLE empleados(
    idEmpleado int(10) not null AUTO_INCREMENT PRIMARY KEY,
    cedulaEmpleado varchar(10) not null,
    nombreEmpleado varchar(45) not null,
    telefonoEmpleado varchar(45) NOT null,
    direccionEmpleado varchar(45) NOT null,
    correoEmpleado varchar(100) NOT null,
    generoEmpleado varchar(45) not null);
    
CREATE TABLE roles(
    idRol int(10) not null AUTO_INCREMENT PRIMARY KEY,
    nombreRol varchar(45) not null);

CREATE TABLE categorias(
    idCategoria int(10) not null AUTO_INCREMENT PRIMARY KEY,
    nombreCategoria varchar(45) not null,
    detallesCategoria varchar(100) not null);

CREATE TABLE clientes(
    idCliente int(10) not null AUTO_INCREMENT PRIMARY KEY,
    cedulaCliente varchar(10) not null,
    nombreCliente varchar(45) not null,
    telefonoCliente varchar(45) NOT null,
    direccionCliente varchar(45) NOT null,
    ciudad varchar(45) NOT null,
    correoCliente varchar(100) NOT null,
    tipoCliente varchar(45) NOT null,
    generoCliente varchar(45) not null);

CREATE TABLE productos(
    idProducto int(10) not null AUTO_INCREMENT PRIMARY KEY,
    nombreProducto varchar(45) not null,
    cantidadProducto int(10) NOT null,
    detallesProducto varchar(100) NOT null,
    precioCompraProducto int(10) NOT null,
    precioVentaProducto int(10) NOT null,
    idCategoria int(10) not null);  

CREATE TABLE facturas(
    idFactura int(10) not null AUTO_INCREMENT PRIMARY KEY,
    fechaFactura varchar(45) not null,
    horaFactura varchar(45) NOT null,
    idCliente int(10) NOT null,
    idUsuario int(10) NOT null,
    concepto varchar(45) NOT null,
    subTotalFactura int(10) not null,  
    totalFactura int(10) not null);                    

CREATE TABLE cierresdiarios(
    idCierre int(10) not null AUTO_INCREMENT PRIMARY KEY,
    fechaCierre varchar(45) not null,
    horaCierre varchar(45) NOT null,
    totalFacturasDiarias int(10) not null,  
    totalValorFacturas int(10) not null);  
    
CREATE TABLE cierresmensuales(
    idCierreMensual int(10) not null AUTO_INCREMENT PRIMARY KEY,
    fechaCierreMensual varchar(45) not null,
    horaCierreMensual varchar(45) NOT null,
    totalCierresDiarios int(10) not null,  
    totalValorCierresDiarios int(10) not null
    );   

CREATE TABLE salidas(
    idSalida int(10) not null AUTO_INCREMENT PRIMARY KEY,
    idFactura varchar(45) not null,
    idProducto varchar(45) NOT null,
    );   


ALTER TABLE usuarios ADD FOREIGN KEY (idRol) REFERENCES roles(idRol);
ALTER TABLE usuarios ADD FOREIGN KEY (idEmpleado) REFERENCES empleados(idEmpleado);
ALTER TABLE productos ADD FOREIGN KEY (idCategoria) REFERENCES categorias(idCategoria);
ALTER TABLE facturas ADD FOREIGN KEY (idCliente) REFERENCES clientes(idCliente);
ALTER TABLE facturas ADD FOREIGN KEY (idUsuario) REFERENCES usuarios(idUsuario);
ALTER TABLE salidas ADD FOREIGN KEY (idFactura) REFERENCES usuarios(idFactura);
ALTER TABLE salidas ADD FOREIGN KEY (idProducto) REFERENCES usuarios(idProducto);
