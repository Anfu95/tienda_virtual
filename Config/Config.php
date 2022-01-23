<?php

const BASE_URL = "http://localhost:8080/tienda_virtual";

//Zona horaria
date_default_timezone_set("America/Guatemala");

//Datos de conexion
const DB_HOST = "localhost";
const DB_NAME = "tienda1";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "charset=utf8";

//Deliminadores decimal y millar Ej. 24,1989.00
const SPD = ",";
const SPM = ".";

//Simbolo de moneda
const SMONEY = "$";

//Datos envio de correo
const NOMBRE_REMITENTE = "Tienda Virtual";
const EMAIL_REMITENTE = "no-reply@abelosh.com";
const NOMBRE_EMPESA = "Tienda Virtual";
const WEB_EMPRESA = "www.anfu.com";