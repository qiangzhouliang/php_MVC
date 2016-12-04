<?php
    /**
     * 从数据库存取数据
     * @author Qzl
     *
     */
	class newsModel{

		public $_table = 'news';

		/**
		 * 查找所有的文章，根据时间排序
		 */
		function findAll_orderby_dateline(){
			$sql = 'select * from '.$this->_table.' order by dateline desc';
			return DB::findAll($sql);
		}

		function findOne_by_id($id){
			$sql = 'select * from '.$this->_table.' where id='.$id;
			return DB::findOne($sql);
		}

		function del_by_id($id){
			return DB::del($this->_table, 'id='.$id);
		}

		/**
		 * 获取新闻的总数
		 */
		function count(){
			$sql = 'select count(*) from '.$this->_table;
			return DB::findResult($sql, 0, 0);
		}

		function insert($data){
			return DB::insert($this->_table, $data);
		}

		function update($data, $id){
			return DB::update($this->_table, $data, 'id='.$id);
		}
/**************************************************************/
		public function getnewsinfo($id){
		    if(!empty($id)){
		        //转换为数字
		        $id = intval($_GET['id']);
		        $newsobj = M('news');
		        return $newsobj->findOne_by_id($id);
		    }else{
		        return array();
		    }
		}

		function get_news_list(){
		    $data = $this->findAll_orderby_dateline();
		    foreach ($data as $k=>$news){
		        //strip_tags()：去除html标签
		        $data[$k]['content'] = mb_substr(strip_tags($data[$k]['content']),0,200);
		        $data[$k]['dateline'] = date('Y-m-d H:i:s',$data[$k]['dateline']);
		    }
		    return $data;
		}

	}
?>