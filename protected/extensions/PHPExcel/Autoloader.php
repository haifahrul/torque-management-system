<?php

/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2010 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2010 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.7.4, 2010-08-26
 */
class PHPExcel_Autoloader {
    
    public static function Register(){
        $functions = spl_autoload_functions();
        foreach ($functions as $functions)
            spl_autoload_unregister ($functions);
        $functions=  array_merge(array(array('PHPExcel_Autoloader','Load')),$functions);
        foreach ($functions as $functions)
            $x = spl_autoload_register ($functions);
        return $x;
    } // functions register()

    /*
    public static function Register() {
        return spl_autoload_register(array('PHPExcel_Autoloader', 'Load'));
    }

//	function Register()

    public static function Load($pObjectName) {
        if ((class_exists($pObjectName)) || (strpos($pObjectName, 'PHPExcel') === False)) {
            return false;
        }

        $pObjectFilePath = PHPEXCEL_ROOT .
                str_replace('_', DIRECTORY_SEPARATOR, $pObjectName) .
                '.php';

        if ((file_exists($pObjectFilePath) === false) || (is_readable($pObjectFilePath) === false)) {
            return false;
        }

        require($pObjectFilePath);
    }
*/
//	function Load()
}