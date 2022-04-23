-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 02:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbclinicaadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `id_rama_medica` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `sintomas` varchar(255) NOT NULL,
  `fecha_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `id_medicamento` int(11) NOT NULL,
  `id_compra_realizada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`id_compra`, `id_medicamento`, `id_compra_realizada`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detalle_citas`
--

CREATE TABLE `detalle_citas` (
  `id_detalle_cita` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_cita` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_puesto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `historial_medico`
--

CREATE TABLE `historial_medico` (
  `id_historial_medico` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_receta_medica` int(11) NOT NULL,
  `observaciones` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicamento`
--

CREATE TABLE `medicamento` (
  `id_medicamento` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio_costo` double(8,2) NOT NULL,
  `precio_venta` double(8,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicamento`
--

INSERT INTO `medicamento` (`id_medicamento`, `nombre`, `marca`, `descripcion`, `precio_costo`, `precio_venta`, `cantidad`) VALUES
(1, 'Paracetamol', 'FaverAll', 'Alivio de fiebre y dolores asociados', 52.00, 65.00, 10),
(2, 'Panadol antigripal', 'GLAXOS', 'Panadol antigripal - 12 tabletas', 12.50, 20.00, 50),
(3, 'Eucerin', 'B.D.F Dermatologia', 'Crema hidratante para piel seca o extraseca', 140.00, 180.00, 100),
(4, 'Marcarillas KN95', 'GENERAL', 'Mascarillas KN-95 - 20 U', 80.00, 100.00, 50),
(5, 'Mascarilla simple', 'VIAMED', 'Mascarilla simple de 4 pitas', 1.50, 3.00, 500),
(6, 'Crema Lubriderm', 'JOHNSON & JOHNSON', 'Crema humectante 200 ml', 40.00, 62.50, 20),
(7, 'Lubrederm UV', 'JOHNSON & JOHNSON', 'Crema humectante con proteccion UV 200 ml', 55.00, 95.00, 20),
(8, 'Lubrederm UV 120 ml', 'JOHNSON & JOHNSON', 'Crema humectante con proteccion UV 120 ml', 30.00, 55.00, 30);

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `puestos`
--

CREATE TABLE `puestos` (
  `id_puesto` int(11) NOT NULL,
  `puesto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rama_medica`
--

CREATE TABLE `rama_medica` (
  `id_rama_medica` int(11) NOT NULL,
  `rama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receta_medica`
--

CREATE TABLE `receta_medica` (
  `id_receta_medica` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `id_compra_realizada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receta_medica`
--

INSERT INTO `receta_medica` (`id_receta_medica`, `fecha`, `descripcion`, `id_compra_realizada`) VALUES
(1, '2022-04-21', 'Compra de medicamento', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'admin'),
(2, 'empleado'),
(3, 'cliente');

-- --------------------------------------------------------

--
-- Table structure for table `sucursales`
--

CREATE TABLE `sucursales` (
  `id_sucursal` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `dirección` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `nombres`, `apellidos`, `password`, `id_rol`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'admin123', 1),
(2, 'cliente@gmail.com', 'Cliente', 'Test', 'test123', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_rama_medica` (`id_rama_medica`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_compra_realizada` (`id_compra_realizada`),
  ADD KEY `id_medicamento` (`id_medicamento`);

--
-- Indexes for table `detalle_citas`
--
ALTER TABLE `detalle_citas`
  ADD PRIMARY KEY (`id_detalle_cita`),
  ADD KEY `id_sucursal` (`id_sucursal`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_cita` (`id_cita`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_puesto` (`id_puesto`);

--
-- Indexes for table `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD PRIMARY KEY (`id_historial_medico`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_empleado` (`id_empleado`),
  ADD KEY `id_receta_medica` (`id_receta_medica`);

--
-- Indexes for table `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`id_medicamento`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indexes for table `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id_puesto`);

--
-- Indexes for table `rama_medica`
--
ALTER TABLE `rama_medica`
  ADD PRIMARY KEY (`id_rama_medica`);

--
-- Indexes for table `receta_medica`
--
ALTER TABLE `receta_medica`
  ADD PRIMARY KEY (`id_receta_medica`),
  ADD KEY `id_compra_realizada` (`id_compra_realizada`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indexes for table `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_rol_2` (`id_rol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detalle_citas`
--
ALTER TABLE `detalle_citas`
  MODIFY `id_detalle_cita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `historial_medico`
--
ALTER TABLE `historial_medico`
  MODIFY `id_historial_medico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `id_medicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id_puesto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rama_medica`
--
ALTER TABLE `rama_medica`
  MODIFY `id_rama_medica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receta_medica`
--
ALTER TABLE `receta_medica`
  MODIFY `id_receta_medica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_rama_medica`) REFERENCES `rama_medica` (`id_rama_medica`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON UPDATE CASCADE;

--
-- Constraints for table `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_medicamento`) REFERENCES `medicamento` (`id_medicamento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_compra_realizada`) REFERENCES `receta_medica` (`id_compra_realizada`) ON UPDATE CASCADE;

--
-- Constraints for table `detalle_citas`
--
ALTER TABLE `detalle_citas`
  ADD CONSTRAINT `detalle_citas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_citas_ibfk_2` FOREIGN KEY (`id_cita`) REFERENCES `citas` (`id_cita`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_citas_ibfk_3` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursales` (`id_sucursal`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_citas_ibfk_4` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`) ON UPDATE CASCADE;

--
-- Constraints for table `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`id_puesto`) REFERENCES `puestos` (`id_puesto`) ON UPDATE CASCADE;

--
-- Constraints for table `historial_medico`
--
ALTER TABLE `historial_medico`
  ADD CONSTRAINT `historial_medico_ibfk_1` FOREIGN KEY (`id_receta_medica`) REFERENCES `receta_medica` (`id_receta_medica`) ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_medico_ibfk_2` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_medico_ibfk_3` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON UPDATE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
