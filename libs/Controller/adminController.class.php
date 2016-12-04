<?php
	class adminController{

		public $auth;

		public function __construct(){
			//判断当前是否已经登录(两种处理模式:业务逻辑都在model里面处理)
// 			if(!(isset($_SESSION['auth']))&&(PC::$method!='login')){
// 				$this->showmessage('请登录后在操作！', 'admin.php?controller=admin&method=login');
// 			}else{
// 				$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:array();
// 			}
/********************************************************/
			$authobj = M('auth');
			$this->auth = $authobj->getauth();
			if(empty($this->auth) && (PC::$method != 'login')){
			    $this->showmessage('请登录后在操作！', 'admin.php?controller=admin&method=login');
			}
		}
        /**
         * 显示首页
         */
		public function index(){
			$newsobj = M('news');
			$newsnum = $newsobj->count();
			VIEW::assign(array('newsnum'=>$newsnum,'auth'=>$this->auth['username']));
			VIEW::display('admin/index.html');
		}
		public function login(){
			if(!isset($_POST['submit'])){
				VIEW::display('admin/login.html');
			}else{
				$this->checklogin();
			}
		}

		public function logout(){
			$authobj = M('auth');
			$authobj->logout1();
			$this->showmessage('退出成功！', 'admin.php?controller=admin&method=login');
		}

		public function newsadd(){
		    //判断是否有post数据
			if(!isset($_POST['submit'])){//没有post数据，就显示添加、修改的界面
			    //读取旧信息
				$data = $this->getnewsinfo();
				VIEW::assign(array('data'=>$data,'auth'=>$this->auth['username']));
				VIEW::display('admin/newsadd.html');
			}else{
				$this->newssubmit();
			}
		}

		/**
		 * 文章管理的功能
		 */
		public function newslist(){
			$data = $this->getnewslist();
			VIEW::assign(array('data'=>$data,'auth'=>$this->auth['username']));
			VIEW::display('admin/newslist.html');
		}

		public function newsdel(){
			if(intval($_GET['id'])){
				$this->delnews();
				$this->showmessage('删除新闻成功！', 'admin.php?controller=admin&method=newslist');
			}
		}

		private function checklogin(){
// 			if(empty($_POST['username'])||empty($_POST['password'])){
// 				$this->showmessage('登录失败！', 'admin.php?controller=admin&method=login');
// 			}
// 			$username = daddslashes($_POST['username']);
// 			$password = daddslashes($_POST['password']);
			$authobj = M('auth');
			if ($authobj->loginsubmit()){
				$this->showmessage('登录成功！', 'admin.php?controller=admin&method=index');
			}else{
				$this->showmessage('登录失败！', 'admin.php?controller=admin&method=login');
			}
		}

		private function getnewsinfo(){
			if(isset($_GET['id'])){
				$id = intval($_GET['id']);
				$newsobj = M('news');
				return $newsobj->findOne_by_id($id);
			}else{
				return array();
			}
		}

		private function getnewslist(){
			$newsobj = M('news');
			return $newsobj->findAll_orderby_dateline();
		}

		private function delnews(){
			$newsobj = M('news');
			return $newsobj->del_by_id(intval($_GET['id']));
		}

		/**
		 * 提交新闻
		 */
		private function newssubmit(){
			extract($_POST);//将数组转化为键名键值一一对应
			if(empty($title)||empty($content)){
				$this->showmessage('请把新闻标题、内容填写完整再提交！', 'admin.php?controller=admin&method=newsadd');
			}
			$title = daddslashes($title);
			$content = daddslashes($content);
			$author = daddslashes($author);
			$from = daddslashes($from);
			$newsobj = M('news');
			$data = array(
				'title'=>$title,
				'content'=>$content,
				'author'=>$author,
				'from'=>$from,
				'dateline'=>time()
			);
			if($_POST['id']!=''){//隐藏域里面的自增长id，如果为空就是添加，如果不为空就是修改
				$newsobj ->update($data, intval($_POST['id']));
				$this->showmessage('修改成功！', 'admin.php?controller=admin&method=newslist');
			}else{
				$newsobj ->insert($data);
				$this->showmessage('添加成功！', 'admin.php?controller=admin&method=newslist');
			}
		}

		private function showmessage($info, $url){
			echo "<script>alert('$info');window.location.href='$url'</script>";
			exit;
		}
	}

?>