<?php

 class Dao_Sqlite_Factory extends Dao_Factory {
 	private $_conn;

 	/*
 	 * Actual connection object to be used in
 	 * data retrieval
 	 */
	public function setConnection($conn) {
		$this->_conn = $conn;
	} # setConnection

	/*
	 * Returns the currently passed connection object
	 */
	public function getConnection() {
		return $this->_conn;
	} # getConnection


	public function getSpotDao() {
		return new Dao_Sqlite_Spot($this->_conn);
	} # getSpotDao

	public function getUserDao() {
		return new Dao_Sqlite_User($this->_conn);
	} # getUserDao

	public function getCacheDao() {
		return new Dao_Sqlite_Cache($this->_conn);
	} # getCacheDao

	public function getAuditDao() {
		return new Dao_Sqlite_Audit($this->_conn);
	} # getAuditDao

	public function getUserFilterDao() {
		return new Dao_Sqlite_UserFilter($this->_conn);
	} # getUserFilterDao

	public function getSessionDao() {
		return new Dao_Sqlite_Session($this->_conn);
	} # getSessionDao

	public function getBlackWhiteListDao() {
		return new Dao_Sqlite_BlackWhiteList($this->_conn);
	} # getBlackWhiteListDao

	public function getNotificationDao() {
		return new Dao_Sqlite_Notification($this->_conn);
	} # getNotificationDao
		
	public function getCommentDao() {
		return new Dao_Sqlite_Comment($this->_conn);
	} # getCommentDao

	public function getSpotReportDao() {
		return new Dao_Sqlite_SpotReport($this->_conn);
	} # getSpotReportDao

	public function getSettingDao() {
		return new Dao_Sqlite_Setting($this->_conn);
	} # getSettingDao

	public function getUserFilterCountDao() {
		return new Dao_Sqlite_UserFilterCount($this->_conn);
	} # getSettingDao

	public function getSpotStateListDao() {
		return new Dao_Sqlite_SpotStateList($this->_conn);
	} # getSpotStateListDao

	public function getNntpDao() {
		return new Dao_Sqlite_Nntp($this->_conn);
	} # getNntpDao

} // Dao_Sqlite_Factory
