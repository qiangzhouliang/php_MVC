<?php
    /**
     * 从数据库存取数据
     * @author Qzl
     *
     */
	class adminModel{
        //定义表名
		public $_table = 'admin';

		//通过用户名取用户信息
		function findOne_by_username($username){
			$sql = 'select * from '.$this->_table.' where username="'.$username.'"';
			return DB::findOne($sql);
		}

		function count(){
			$sql = 'select count(*) from '.$this->_table;
			return DB::findResult($sql, 0, 0);
		}
	}
?>