<?php
require 'serverside.php';
//!CREAR UNA VISTA DE LA TABLA USUARIOS!!!!!!!!!!!!!!!! Con las columnas de la tabla original
/* CREATE VIEW vista_usuarios AS SELECT
  user_id,
  username ,
  first_name,
  last_name,
  gender,
  password,
  status FROM usuarios ; */
// Crea una instancia de la clase TableData
$tableSS_Usuarios = new TableData();
$tableSS_Usuarios->get('vista_usuarios', 'IDUsuario', ['IDUsuario', 'Nombre', 'Apellido', 'CorreoElectronico', 'Telefono', 'Departamento', 'Activo', 'FechaRegistro', 'FechaUltimoInicioSesion', 'Direccion', 'Avatar', 'Clave']);
/* 
$tableSS_Roles->get('vista_roles', 'IDRol', ['IDRol', 'NombreRol', 'DescripcionRol', 'Crear_Rol', 'Leer_Rol', 'Actualizar_Rol', 'Eliminar_Rol']);
$tableSS_Permisos->get('vista_permisos', 'IDPermiso', ['IDPermiso', 'NombrePermiso', 'DescripcionPermiso', 'ID_Padre', 'Crear_Permiso', 'Leer_Permiso', 'Actualizar_Permiso', 'Eliminar_Permiso']);
$tableSS_AsignacionRolesUsuarios->get('vista_asignacion_roles_usuarios', 'ID_Asignacion_Rol', ['ID_Asignacion_Rol', 'IDUsuario', 'IDRol', 'Asignar_Rol_a_Usuario', 'Desasignar_Rol_de_Usuario']);
$tableSS_AsignacionPermisosRoles->get('vista_asignacion_permisos_roles', 'ID_Asignacion_Permiso', ['ID_Asignacion_Permiso', 'IDRol', 'IDPermiso', 'Asignar_Permiso_a_Rol', 'Desasignar_Permiso_de_Rol']);
 */