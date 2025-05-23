<?php
/**
 * @file
 * @package xcck
 * @version $Id$
**/

if(!defined('XOOPS_ROOT_PATH'))
{
	exit;
}

/**
 * Xcck_AbstractViewAction
**/
abstract class Xcck_AbstractViewAction extends Xcck_AbstractAction
{
	public /*** XoopsSimpleObject ***/ $mObject = null;

	public /*** XoopsObjectGenericHandler ***/ $mObjectHandler = null;

	/**
	 * _getId
	 * 
	 * @param	void
	 * 
	 * @return	int
	**/
	protected function _getId()
	{
		$req = $this->mRoot->mContext->mRequest;
		$dataId = $req->getRequest(_REQUESTED_DATA_ID);
		return isset($dataId) ? intval($dataId) : intval($req->getRequest($this->_getHandler()->mPrimary));
	}

	/**
	 * &_getHandler
	 * 
	 * @param	void
	 * 
	 * @return	&XoopsObjectGenericHandler
	**/
	protected function &_getHandler()
	{
	}

	/**
	 * _getActionName
	 * 
	 * @param	void
	 * 
	 * @return	string
	**/
	protected function _getActionName()
	{
		return _VIEW;
	}

	/**
	 * _setupObject
	 * 
	 * @param	void
	 * 
	 * @return	void
	**/
	protected function _setupObject()
	{
		$id = $this->_getId();
	
		$this->mObjectHandler =& $this->_getHandler();
	
		$this->mObject =& $this->mObjectHandler->get($id);
	}

	/**
	 * prepare
	 * 
	 * @param	void
	 * 
	 * @return	bool
	**/
	public function prepare()
	{
		$this->_setupObject();
		return is_object($this->mObject);
	}

	/**
	 * getDefaultView
	 * 
	 * @param	void
	 * 
	 * @return	Enum
	**/
	public function getDefaultView()
	{
		if($this->mObject == null)
		{
			return XCCK_FRAME_VIEW_ERROR;
		}
	
		return XCCK_FRAME_VIEW_SUCCESS;
	}

	/**
	 * execute
	 * 
	 * @param	void
	 * 
	 * @return	Enum
	**/
	public function execute()
	{
		return $this->getDefaultView();
	}
}
