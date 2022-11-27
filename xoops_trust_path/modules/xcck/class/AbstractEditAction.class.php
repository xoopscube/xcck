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
 * Xcck_AbstractEditAction
**/
abstract class Xcck_AbstractEditAction extends Xcck_AbstractAction
{
	public /*** XoopsSimpleObject ***/ $mObject = null;

	public /*** XoopsObjectGenericHandler ***/ $mObjectHandler = null;

	public /*** XCube_ActionForm ***/ $mActionForm = null;

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
	 * @return	XoopsObjectGenericHandler
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
		return _EDIT;
	}

	/**
	 * _setupActionForm
	 * 
	 * @param	void
	 * 
	 * @return	void
	**/
	protected function _setupActionForm()
	{
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
	
		if($this->mObject == null && $this->_isEnableCreate())
		{
			$this->mObject =& $this->mObjectHandler->create();
		}
	}

	/**
	 * _isEnableCreate
	 * 
	 * @param	void
	 * 
	 * @return	bool
	**/
	protected function _isEnableCreate()
	{
		return true;
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
		$this->_setupActionForm();
	
		return true;
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
	
		$this->mActionForm->load($this->mObject);
	
		return XCCK_FRAME_VIEW_INPUT;
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
		if ($this->mObject == null)
		{
			return XCCK_FRAME_VIEW_ERROR;
		}
	
		if ($this->mRoot->mContext->mRequest->getRequest('_form_control_cancel') != null)
		{
			return XCCK_FRAME_VIEW_CANCEL;
		}
	
		$this->mActionForm->load($this->mObject);
	
		$this->mActionForm->fetch();
		$this->mActionForm->validate();

		// Preview Cancel. Redirect to Edit page
		if ($this->mRoot->mContext->mRequest->getRequest('_form_control_preview_cancel') != null)
		{
			return XCCK_FRAME_VIEW_INPUT;
		}

		if ($this->mActionForm->hasError())
		{
			return XCCK_FRAME_VIEW_INPUT;
		}
	
		$this->mActionForm->update($this->mObject);

		if($this->mRoot->mContext->mRequest->getRequest('_form_control_confirm')){
			return XCCK_FRAME_VIEW_PREVIEW;
		}

        return $this->_doExecute();
	}

	/**
	 * _doExecute
	 * 
	 * @param	void
	 * 
	 * @return	Enum
	**/
	protected function _doExecute()
	{
		if($this->mObjectHandler->insert($this->mObject))
		{
			return XCCK_FRAME_VIEW_SUCCESS;
		}
	
		return XCCK_FRAME_VIEW_ERROR;
	}
}
