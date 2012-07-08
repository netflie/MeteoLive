<?php

/*
 * Copyright (C) 2011 Alejandro Albarca Martínez <albarcam [arroba] gmail.com> and NETFLIE. (http://www.netflie.es)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program, in the file called "COPYING".  If not, see <http://www.gnu.org/licenses/>.
 */

class myException extends Exception {
  function __toString(){
    return '<br />ERROR: ' . $this->getMessage() . '<br />';
  }
  
}
