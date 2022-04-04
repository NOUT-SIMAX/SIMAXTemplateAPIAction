<?php
/**
 * Created by PhpStorm.
 * User: Ninon
 * Date: 11/08/2016
 * Time: 09:46
 */

namespace NOUT\Soap;


class TypeMap 
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            array(
                'type_ns' => 'http://www.w3.org/2003/05/soap-envelope',
                'type_name' => 'Action',
                'from_xml' => ['\\NOUT\\Soap\\StructType\\Action::from_xml']
            ),


        );
    }
}