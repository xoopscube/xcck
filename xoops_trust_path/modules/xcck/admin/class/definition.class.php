<?php
if (!defined('XOOPS_ROOT_PATH')) exit();

class Xcck_Definition
{
    protected $_mDef = array();
    protected $_mDirname = null;

    public function __construct($dirname)
    {
        $this->_mDirname = $dirname;
    }

    public function import()
    {
        if($this->_checkTable()===false){
            return false;
        }
        $handler = $this->_getHandler();
        foreach($this->_mDef as $def){
            $obj = $handler->create();
            $obj->set('field_name', $def['field_name']);
            $obj->set('label', $def['label']);
            $obj->set('field_type', $def['field_type']);
            $obj->set('validation', $def['validation']);
            $obj->set('required', $def['required']);
            $obj->set('weight', $def['weight']);
            $obj->set('show_flag', $def['show_flag']);
            $obj->set('search_flag', $def['search_flag']);
            $obj->set('desctiption', $def['desctiption']);
            $obj->set('options', $def['options']);
            $handler->insert($obj);
        }
    
    }

    public function export()
    {
        if($this->_checkTable()===false){
            return false;
        }
        $objs = $this->_getHandler()->getObjects();
        $code = "<?php if (!defined('XOOPS_ROOT_PATH')) exit(); %s ?>";
    
        $arrayString = null;
        foreach($objs as $key => $obj){ // Corrected line
            $arrayString .= sprintf($this->_getArrayString(), 
                $key,
                $obj->get('field_name'), // Corrected line
                $obj->get('label'), // Corrected line
                $obj->get('field_type'), // Corrected line
                $obj->get('validation'), // Corrected line
                $obj->get('required'), // Corrected line
                $obj->get('weight'), // Corrected line
                $obj->get('show_flag'), // Corrected line
                $obj->get('search_flag'), // Corrected line
                $obj->get('desctiption'), // Corrected line
                $obj->get('options') // Corrected line
            );
        }
        return sprintf($code, $arrayString);
    }

    protected function _checkTable()
    {
        return ($this->_getHandler()->count()>0) ? true : false;
    }

    protected function _getHandler($table='definition')
    {
        return Legacy_Utils::getModuleHandler($table, $this->_mDirname);
    }

    public function getDefinition()
    {
        require_once XOOPS_MODULE_PATH.'/'.$this->_mDirname.'/admin/DefArray.php';
    
        return $def;
    }

    protected function _getArrayString()
    {
        return '
$def[%d] = array(
    \'definition_id\' => 0,
    \'field_name\' => \'%s\',
    \'label\' => $lang[\'label\'][%d],
    \'field_type\' => \'%s\',
    \'validation\' => \'%s\',
    \'required\' => %d,
    \'weight\' => %d,
    \'show_list\' => %d,
    \'search_flag\' => %d,
    \'description\' => $lang[\'description\'][%d],
    \'options\' => \'%s\'
);
';
    }
}
