<?php

/* * ******************************************
 * LiteSpeed Web Server Plugin for DirectAdmin
 *
 * @author LiteSpeed Technologies, Inc. (https://www.litespeedtech.com)
 * @copyright (c) 2019
 * @since 2.0
 * ******************************************* */

namespace LsPanel\View\Model;

/**
 * @since 2.0
 */
abstract class BaseViewModel
{

    /**
     * @since 2.0
     * @var mixed[]
     */
    protected $tplData = array();

    /**
     *
     * @since 2.0
     */
    public function __construct(){}

    /**
     *
     * @since 2.0
     *
     * @param string  $field
     * @return mixed
     */
    public function getTplData( $field )
    {
        if ( !isset($this->tplData[$field]) ) {
            return null;
        }

        return $this->tplData[$field];
    }

    /**
     *
     * @since 2.0
     *
     * @return string
     */
    abstract public function getTpl();

}
