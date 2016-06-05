<?php
class Casts extends Functions
{
    const VERSION = '1.0';
    const RELEASE_DATE = '2012-06-01';
    
    /** Error flags
    *    E_LOW allow compiler to continue even though an erro occured
    *    E_HIGH terminates the compilation on error occurance
    */
    const E_LOW = 'Warning';
    const E_HIGH = 'Error';
    
    public $error = false;
    public $er_flag = null;
    
    protected $attributes = array();
    protected $template = null;
	protected $template_dir = TMPLT_DIR;
    
}