<?php
	class authModel{
/****************************************/
	    private $auth ='';//当前管理员信息
	    public function __construct(){
	        if (isset($_SESSION['auth']) && (!empty($_SESSION['auth']))){
                $this->auth = $_SESSION['auth'];
	        }
	    }

	    public function loginsubmit(){//进行登录验证的一系列业务逻辑
            if (empty($_POST['username']) || empty($_POST['password'])){
                return false;
            }
            $username = addslashes($_POST['username']);
            $password = addslashes($_POST['password']);
            //用户验证操作
            if ($this->auth = $this->checkauth($username, $password)){
                $_SESSION['auth'] = $this->auth;
                return true;
            }else {
                return false;
            }
	    }

	    public function getauth(){
	        return $this->auth;
	    }
	    /**
	     * 退出登录
	     */
	    public function logout1(){
	        unset($_SESSION['auth']);
	        $this->auth='';
	    }
/*********************************************/
	    /**
	     * 用户验证
	     * @param string $username
	     * @param string $password
	     * @return string|boolean
	     */
		function checkauth($username, $password){
			$adminobj = M('admin');
			$auth = $adminobj -> findOne_by_username($username);
			if((!empty($auth))&&$auth['password']==$password){
				return $auth;
			}else{
				return false;
			}
		}

	}
?>